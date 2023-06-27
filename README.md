# User Initials

[![Tests](https://github.com/felixdorn/user-initials/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/felixdorn/user-initials/actions/workflows/tests.yml)
[![Formats](https://github.com/felixdorn/user-initials/actions/workflows/formats.yml/badge.svg?branch=main)](https://github.com/felixdorn/user-initials/actions/workflows/formats.yml)
[![Version](https://poser.pugx.org/felixdorn/user-initials/version)](//packagist.org/packages/felixdorn/user-initials)
[![Total Downloads](https://poser.pugx.org/felixdorn/user-initials/downloads)](//packagist.org/packages/felixdorn/user-initials)
[![License](https://poser.pugx.org/felixdorn/user-initials/license)](//packagist.org/packages/felixdorn/user-initials)

## Disclaimer

**Initials are a western-centric concept**. It's terrible if your software is used worldwide. You should never have
a good reason to need the initials of a user. If you're trying to make little avatars with the initials of your users,
use a svg of a person's silhouette instead, for example.

Nevertheless, this package tries to account for all the edge cases and weird names, though it's a work in progress.

**If the package returns the wrong initials for a name, please open an issue with the lang, what you input, get and would
expect.**

## Installation

> Requires [PHP 8.2+](https://php.net/releases)

You can install the package via composer:

```bash
composer require felixdorn/user-initials
```

## Usage

For chinese name, the first character of the last name is used:

```php
\Felix\UserInitials\Initials::from('Anne Thiollier'); // AT
\Felix\UserInitials\Initials::from('Édouard Dorn'); // ÉD
\Felix\UserInitials\Initials::from('Charles-Henri de Felce') // CF
```

## Testing

```bash
composer test
```

**user-initials** was created by **[Félix Dorn](https://felixdorn.fr)** under the *
*[MIT license](https://opensource.org/licenses/MIT)**.
