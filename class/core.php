<?php
include 'config/config.php';
class core extends PDO {

    public $dbname = null;

    /**
     * Initialize DB & Parse URL ($_GET['u'])
     */
    function __construct() {
        $this->parseUrl();
        try {
            parent::__construct('mysql:host=' . HOST . ';dbname=' . $this->dbname, USER, PASS);
        } catch (PDOException $Exception) {
            die("Connection to the database could not be established!");
        }
    }

    /**
     * Parse URL from htaccess
     */
    private function parseUrl() {
        $dbname = (isset($_GET['u']) ? rtrim($_GET['u'], "/") : '');
        if (in_array($dbname, config::$ALLOWED_DATABASES)) {
            $this->dbname = $dbname;
        } else {
            $this->dbname = config::$ALLOWED_DATABASES[0];
        }
    }

    /**
     * Organize and return all the items
     * @return array
     */
    function getItems() {

        $sth = $this->prepare("
        SELECT *
          FROM `traders_data`
        LEFT JOIN (`trader_tids`, `server_traders`)
        ON (
            `traders_data`.`tid` =`trader_tids`.`id`
            AND `trader_tids`.`trader` = `server_traders`.`id`)
        WHERE `traders_data`.`tid` =`trader_tids`.`id`
            AND `trader_tids`.`trader` = `server_traders`.`id`
        ORDER BY traders_data.`item` ASC");
        $sth->execute();
        $items = (array) $sth->fetchAll(PDO::FETCH_ASSOC);
        $total = count($items);

        $itemArray = array();
        $locations = '';


        for ($i = 0; $i < $total - 1; $i++) {
            $locations .= $items[$i]['desc'] . ', ';

            if (!array_key_exists($items[$i]['name'], $itemArray)) {
                $itemArray[$items[$i]['name']] = array(
                    'name' => $items[$i]['name'],
                    'sellers' => [],
                );
            }
            //If next item has same price as current, don't add new entry.
            if ($i + 1 <= $total && $items[$i]['sell'] == $items[$i + 1]['sell'] && $items[$i]['buy'] == $items[$i + 1]['buy'] && $items[$i]['item'] == $items[$i + 1]['item']) {
                continue;
            }
            //add item to entry
            $item = json_decode($items[$i]['item'])[0];

            $itemArray[$items[$i]['name']]['sellers'][$items[$i]['item']] [] = array(
                'item' => $item,
                'buy' => $this->getPrice($items[$i]['buy']),
                'sell' => $this->getPrice($items[$i]['sell']),
                'img' => strtolower((in_array($item . '.png', config::$ALLOWED_IMAGES) ? $item : 'noimg')),
                'location' => rtrim($locations, ', '),
                'qty' => $items[$i]['id'],
            );
            $locations = "";
        }

        sort($itemArray);
        return $itemArray;
    }

    /**
     * @param $item - [6,"ItemSilverBar10oz",1]
     * @return string - 6 x 10oz Silver
     */
    private function getPrice($item) {
        return json_decode($item)[0] . " x " . config::$CURRENCIES[json_decode($item)[1]];
    }
}