<?php

declare(strict_types=1);

namespace GildedRose;

class SulfurasHandRagnaros extends Item implements SpecificItemInterface
{
    private const SULFURAS_QUALITY = 80;
    public function __construct(
        public string $name,
        public int $sellIn,
        public int $quality
    ) {
        parent::__construct($name, $sellIn, $quality);
        $this->quality = self::SULFURAS_QUALITY;
    }

    public function updateQuality(): void
    {
        // Sulfuras hand ragnaros is a legendary item, so its quality never changes
    }
}
