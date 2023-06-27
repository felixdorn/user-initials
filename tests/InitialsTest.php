<?php

use Felix\UserInitials\Initials;

it('returns the initials of a name', function (string $name, string $expected) {
    expect(Initials::from($name))->toBe($expected);
})->with([
    ['Anne Thiollier', 'AT'],
    ['Édouard Dorn', 'ÉD'],
    ['Charles-Henri de Felce', 'CF'],
]);
