<?php

namespace Felix\UserInitials;

class Initials
{
    public static function from(string $name): string
    {
        $names = explode(' ', $name);
        $first = $names[array_key_first($names)];
        $last = $names[array_key_last($names)];

        // We handle unicode characters nicely.
        $firstName = preg_split('//u', $first, -1, PREG_SPLIT_NO_EMPTY) ?: [];
        $lastName = preg_split('//u', $last, -1, PREG_SPLIT_NO_EMPTY) ?: [];

        if (count($names) === 1) {
            return mb_strtoupper($firstName[0]);
        }

        if (preg_match('/\p{Han}+/u', $first)) {
            return mb_strtoupper($lastName[0]);
        }

        return mb_strtoupper($firstName[0].($lastName[0] ?? ''));
    }
}
