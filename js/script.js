var epoch = {
    search: $("#search"),
    show: $("#show"),
    item: $(".item"),
    right: $("#right"),
    subMenu: $(".subMenu"),
    nav: $("nav"),
    amount: $(".amount"),
    modifyJQ: function () {
        // :contains is not case insensitive
        $.expr[':'].contains = function (a, i, m) {
            return $(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
        };
    },
    getVisibleItems: function (me) {
        return $(".subMenu li a:contains('" + $(me).val() + "')");
    },
    /**
     *
     * @param text - text to be parsed
     * @param append - Append or replace current
     */
    createTable: function (text, append) {
        var table = '<table><col style="width: 30%;"><col style="width: 70%;">';
        var items = text.split('~');

        for (var i = 0; i < items.length; i++) {
            var data = items[i].split("|");
            var item = data[0];
            var sell = data[1];
            var buy = data[2];
            var img = data[3];
            var location = data[4];
            var qty = data[5];

            table += '<tr><td><b>' + item + '</b></td><td><span class="sprite-' + img + '"></span></td></tr>';
            table += "<tr><td>Vendor:</td><td>" + location + "</td></tr><tr><td>Buy:</td><td>" + buy + "</td></tr><tr><td>Sell:</td><td>" + sell + "</td></tr>";
        }
        if (append) {
            this.right.append(table + "</table>");
        } else {
            this.right.html(table + "</table>");
            $("html, body").animate({
                scrollTop: this.right.offset().top
            }, 750);
            if (window.innerWidth < 600) {
                this.nav.hide();
            }
        }
    },

    doSearch: function (elm) {
        this.right.html("");
        if (window.innerWidth < 650) {
            this.nav.hide();
            this.subMenu.hide();
            this.item.parent().show();
            this.amount.show();
        }

        elm.parent().parent().show();
        elm.parent().show();

        for (var i = 0; i < elm.length; i++) {
            var text = $(elm[i]).parent().find(".content").text();
            this.createTable(text, true);
        }

        if (this.right.text() == "") {
            this.right.html("<h1>No results found</h1>");
        }
        this.search.val("");
        this.search.blur();
        this.amount.show();
        this.nav.find("ul li:not(.s)").show();
        this.subMenu.find("li").show();
        this.subMenu.hide();
    },

    restoreSearch: function (me, elm) {
        this.right.html("");
        if ($(me).val().length < 1) {//Search empty
            this.subMenu.hide();
            this.amount.show();
            this.subMenu.find("li").show();
            this.nav.find("ul li:not(.s)").show();
            return;
        }
        this.nav.find("ul li:not(.s)").hide();
        this.amount.hide();
        this.subMenu.hide();
        this.subMenu.hide();
        this.item.parent().hide();
        elm.parent().parent().show();
        elm.parent().parent().parent().show(); // nav ul li
        elm.parent().show();
    }

};

epoch.modifyJQ();

//Nav toggle for tablets/mobiles
epoch.show.click(function () {
    epoch.nav.toggle();
});

//Category clicked, show items
$('nav ul li a:not(.item)').click(function (e) {
    e.preventDefault();
    $(this).parent().find('ul').toggle();
});

/**
 * Create table for item
 */
epoch.item.click(function (e) {
    e.preventDefault();
    epoch.createTable($(this).parent().find(".content").text(), e.ctrlKey);
});


//Clear button clicked on search
epoch.search.on('search', function (e) {
    e.preventDefault();
    epoch.restoreSearch(this, epoch.getVisibleItems(this));
});
/**
 * Search functionality
 */
epoch.search.keyup(function (e) {
    (e.which == 13 ? epoch.doSearch(epoch.getVisibleItems(this)) : epoch.restoreSearch(this, epoch.getVisibleItems(this)));
});