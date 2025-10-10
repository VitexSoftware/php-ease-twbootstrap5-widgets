![EasePHP TWB5 Widgets Logo](project-logo.png?raw=true "Project Logo")

EasePHP Twitter bootstrap5 Widgets
==================================

Object oriented PHP Framework for easy&fast writing small/middle sized apps.

[![Latest Stable Version](https://poser.pugx.org/vitexsoftware/ease-twbootstrap5-widgets/v)](//packagist.org/packages/vitexsoftware/ease-twbootstrap5-widgets) 
[![Total Downloads](https://poser.pugx.org/vitexsoftware/ease-twbootstrap5-widgets/downloads)](//packagist.org/packages/vitexsoftware/ease-twbootstrap5-widgets) 
[![Latest Unstable Version](https://poser.pugx.org/vitexsoftware/ease-twbootstrap5-widgets/v/unstable)](//packagist.org/packages/vitexsoftware/ease-twbootstrap5-widgets) 
[![License](https://poser.pugx.org/vitexsoftware/ease-twbootstrap5-widgets/license)](//packagist.org/packages/vitexsoftware/ease-twbootstrap5-widgets)

[![Monthly Downloads](https://poser.pugx.org/vitexsoftware/ease-twbootstrap5-widgets/d/monthly)](//packagist.org/packages/vitexsoftware/ease-twbootstrap5-widgets)
[![Dependents](https://poser.pugx.org/vitexsoftware/ease-twbootstrap5-widgets/dependents)](//packagist.org/packages/vitexsoftware/ease-twbootstrap5-widgets)
[![Daily Downloads](https://poser.pugx.org/vitexsoftware/ease-twbootstrap5-widgets/d/daily)](//packagist.org/packages/vitexsoftware/ease-twbootstrap5-widgets)
[![Total Downloads](https://poser.pugx.org/vitexsoftware/ease-twbootstrap5-widgets/downloads)](//packagist.org/packages/vitexsoftware/ease-twbootstrap5-widgets)

---

Bricks Included
===============

* Toggle - Bootstrap 5 switch/toggle component
* Selectizer - Select with search functionality
* MainPageMenu - Large icon navigation menu
* LangSelect - Language selector dropdown
* LangLinks - Language selector navigation links

Bootstrap5 Toggle
-----------------

Ease support for https://github.com/palcarazm/bootstrap5-toggle

![Toggle](Toggle.png?raw=true)

```php
new Ease\TWB5\Widgets\Toggle('swname', true, 1,['onText' => 'YES', 'offText' => 'NO']);
```

Language Selector Dropdown (LangSelect)
---------------------------------------

Bootstrap 5 dropdown-based language selector that integrates with `Ease\Locale` for internationalization.

```php
// Basic usage
$langSelector = new \Ease\TWB5\Widgets\LangSelect();

// With custom URL parameter name (default is 'locale')
$langSelector = new \Ease\TWB5\Widgets\LangSelect('lang');

// With additional properties
$langSelector = new \Ease\TWB5\Widgets\LangSelect('locale', ['class' => 'dropdown my-custom-class']);
```

Features:
- Automatically detects available languages from `Ease\Locale`
- Shows current language with a globe icon (Bootstrap Icons)
- Preserves existing URL parameters when switching languages
- Fully styled with Bootstrap 5 dropdown component
- Active language is highlighted in the dropdown menu
- Uses Bootstrap 5's `data-bs-toggle` attributes

Language Navigation Links (LangLinks)
--------------------------------------

Bootstrap 5 navigation-style language selector that displays languages as pills or tabs.

```php
// Basic usage (nav pills style)
$langLinks = new \Ease\TWB5\Widgets\LangLinks();

// As navigation tabs
$langLinks = new \Ease\TWB5\Widgets\LangLinks(['class' => 'nav nav-tabs']);

// New Bootstrap 5 underline style
$langLinks = new \Ease\TWB5\Widgets\LangLinks(['class' => 'nav nav-underline']);

// Inline style
$langLinks = new \Ease\TWB5\Widgets\LangLinks(['class' => 'nav nav-pills d-inline-flex']);

// Vertical layout
$langLinks = new \Ease\TWB5\Widgets\LangLinks(['class' => 'nav flex-column']);
```

Features:
- Displays all available languages as navigation links
- Supports all Bootstrap 5 nav styles (pills, tabs, underline)
- Current language is marked as active
- Can be used inline or as block element
- Preserves URL parameters when switching languages

Installation
------------


Composer:
---------

```shell
composer require vitexsoftware/ease-twbootstrap5-widgets
```


Older versions and its requirements https://packagist.org/packages/vitexsoftware/


For Debian, Ubuntu & friends please use repo:

```shell

sudo apt install php-vitexsoftware-ease-bootstrap5-widgets
```

In this case please add this to your app composer.json:

    "require": {
        "ease-bricks": "*"
    },
    "repositories": [
        {
            "type": "path",
            "url": "/usr/share/php/EaseCore",
            "options": {
                "symlink": true
            }
        },
        {
            "type": "path",
            "url": "/usr/share/php/EaseTWB5",
            "options": {
                "symlink": true
            }
        },
        {
            "type": "path",
            "url": "/usr/share/php/EaseTWB5Widgets",
            "options": {
                "symlink": true
            }
        }
    ]

Links
=====

Homepage: https://www.vitexsoftware.cz/ease.php

GitHub: https://github.com/VitexSoftware/php-ease-bootstrap5-widgets

PhpDocumentor: https://www.vitexsoftware.cz/php-ease-bootstrap5-widgets/
