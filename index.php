<?php
include 'class/core.php';
$core = new core;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Epoch Price List</title>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="<?= BASE ?>css/style.css"/>
</head>
<body>
<div id="wrapper">
    <div id="sidebar">
        <div id="sideHead">
            <h1 id="logo">Epoch Price List</h1>
            <button id="show">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
        </div>
        <nav>
            <ul>
                <li class="s">
                    <label for="search"></label><input type="search" id="search" placeholder="Search" autocomplete="off"/>
                </li>
                <?php foreach ($core->getItems() as $seller): ?>
                    <li>
                        <a href="#"><?= $seller['name'] . ' <span class="amount">(' . count($seller['sellers']) . ')</span>' ?></a>
                        <ul class="subMenu">
                            <?php foreach ($seller['sellers'] as $k => $v) : ?>
                                <?php foreach ($v as $item) : ?>
                                    <li>
                                        <a href="#" class="item">
                                            <div class="image"><span class="sprite-<?= $item['img'] ?>"></span>
                                            </div><?= $item['item']; ?>
                                        </a>

                                        <div class="content"><?= rtrim(implode("|", $item) . '~', "~"); ?></div>
                                    </li>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
                <li>
                    <a href="#" id="author">By Flawwan</a>
                    <ul class="subMenu">
                        <li class="info">Version: <?= VERSION; ?></li>
                        <li class="info">Database: <?= $core->dbname ?></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div id="right">
        <h1>Epoch Tradelist</h1>
    </div>
</div>
<script src="<?= BASE ?>js/jquery-1.11.1.min.js"></script>
<script src="<?= BASE ?>js/script.js"></script>
</body>
</html>