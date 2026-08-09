<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use GildedRose\CommonItem;
use GildedRose\AgedRose;
use GildedRose\BackstageToConcert;
use GildedRose\Conjured;
use GildedRose\SulfurasHandRagnaros;
use GildedRose\GildedRose;

echo 'OMGHAI!' . PHP_EOL;

$items = [
    new CommonItem('+5 Dexterity Vest', 10, 20),
    new AgedRose('Aged Brie', 2, 0),
    new Conjured('Conjured Mana Cake', 3, 6),
    new SulfurasHandRagnaros('Sulfuras, Hand of Ragnaros', 0, 80),
    new SulfurasHandRagnaros('Sulfuras, Hand of Ragnaros', -1, 80),
    new CommonItem('Elixir of the Mongoose', 5, 7),
    new BackstageToConcert('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    new BackstageToConcert('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    new BackstageToConcert('Backstage passes to a TAFKAL80ETC concert', 10, 49),
    new BackstageToConcert('Backstage passes to a TAFKAL80ETC concert', 5, 49),
    new Conjured('Conjured Mana Cake', 3, 6),
];

$app = new GildedRose($items);

$days = 2;
if ((is_countable($argv) ? count($argv) : 0) > 1) {
    $days = (int) $argv[1];
}

for ($i = 0; $i < $days; $i++) {
    echo "-------- day {$i} --------" . PHP_EOL;
    echo 'name, sellIn, quality' . PHP_EOL;
    foreach ($items as $item) {
        echo $item . PHP_EOL;
    }
    echo PHP_EOL;
    $app->updateQuality();
}
