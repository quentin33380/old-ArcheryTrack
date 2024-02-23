<?php

namespace App\Enums;

enum TypeArc: string {
    case poulie = 'poulie';
    case classique = 'classique';
    case longbow = 'longbow';
    case barbow = 'barbow';
    case poulie_nu = 'poulie-nu';

    public function displayName(): string
    {
        return self::getDisplayName($this);
    }

    public static function getDisplayName(self $value): string
    {
        return match($value) {
            self::poulie => 'Poulie',
            self::classique => 'Classique',
            self::longbow => 'Longbow',
            self::barbow => 'Barbow',
            self::poulie_nu => 'Poulie nu',
        };
    }
}
