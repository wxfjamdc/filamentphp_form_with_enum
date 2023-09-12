<?php

namespace App\Enums;

use App\Enums\Trait\Bitwise;
use Filament\Support\Contracts\HasLabel;

enum UserTypeEnum: int implements hasLabel
{
    use Bitwise;
    case ADMIN = 1;
    case USER  = 2;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::USER  => 'User',
        };
    }
}
