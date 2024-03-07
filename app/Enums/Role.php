<?php

namespace App\Enums;

enum Role: string
{
    case Admin = 'admin';
    case Redacteur = 'redacteur';
    case Entraineur = 'entraineur';
    case Archer = 'archer';

    public function displayName(): string
    {
        return self::getDisplayName($this);
    }

    public static function getDisplayName(self $value): string
    {
        return match($value) {
            self::Admin => 'administrateur',
            self::Redacteur => 'redacteur',
            self::Entraineur => 'entraineur',
            self::Archer => 'archer',
        };
    }
}
