<?php

declare(strict_types=1);

namespace GildedRose;

class Conjured extends Item implements SpecificItemInterface
{
    public function __construct(
        public string $name,
        public int $sellIn,
        public int $quality
    ) {
        parent::__construct($name, $sellIn, $quality);
    }

    public function updateQuality(): void
    {
        if ($this->sellIn > 0) {
            $this->quality = max(0, $this->quality - 2);
        } else {
            $this->quality = max(0, $this->quality - 4);
        }

        $this->sellIn--;
    }
}
