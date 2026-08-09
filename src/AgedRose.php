<?php

declare(strict_types=1);

namespace GildedRose;

class AgedRose extends Item implements SpecificItemInterface
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
        $this->quality = min(50, $this->quality + 1);
        $this->sellIn--;
    }
}
