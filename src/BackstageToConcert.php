<?php

declare(strict_types=1);

namespace GildedRose;

class BackstageToConcert extends Item implements SpecificItemInterface
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
            if ($this->sellIn < 6) {
                $this->quality = min(50, $this->quality + 3);
            } elseif ($this->sellIn < 11) {
                $this->quality = min(50, $this->quality + 2);
            } else {
                $this->quality = min(50, $this->quality + 1);
            }
        } else {
            $this->quality = 0;
        }

        $this->sellIn--;
    }
}
