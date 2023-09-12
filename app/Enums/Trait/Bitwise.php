<?php

namespace App\Enums\Trait;

trait Bitwise
{

    /**
     * Retrieves an array based on the given type.
     *
     * @param int $type The type used to filter the array.
     * @return array The filtered array.
     */
    public static function getArray(int $type): array
    {
        $array = [];
        foreach (self::cases() as $case) {
            if ($type & $case->value) {
                $array[] = $case;
            }
        }
        return $array;
    }

    public static function getMask(array $value): int
    {
        $mask = 0;
        foreach ($value as $item) {
            $mask |= $item instanceof self ? $item->value : (int)$item;
        }
        return $mask;
    }
}
