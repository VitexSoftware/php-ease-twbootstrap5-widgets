<?php

/**
 * EasePHP TWBootstrap5 Widgets - Language Selector Examples
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  2024 Vitex Software
 */

require_once '../vendor/autoload.php';

// Initialize locale with available languages
$locale = \Ease\Locale::singleton('cs_CZ', '../i18n/', 'ease-twbootstrap5-widgets');

// Create page
$oPage = new \Ease\TWB5\WebPage('Language Selector Widgets - Bootstrap 5');

// Add Bootstrap container
$container = $oPage->addItem(new \Ease\Html\DivTag(null, ['class' => 'container mt-5']));

// Page title
$container->addItem(new \Ease\Html\H1Tag('Language Selector Examples for Bootstrap 5'));
$container->addItem(new \Ease\Html\PTag('This page demonstrates different language selector widgets for Bootstrap 5.'));

// Divider
$container->addItem(new \Ease\Html\HrTag());

// LangLinks Example
$container->addItem(new \Ease\Html\H2Tag('LangLinks Widget'));
$container->addItem(new \Ease\Html\PTag('Navigation pills style language selector:'));
$container->addItem(new \Ease\Html\DivTag(
    new \Ease\TWB5\Widgets\LangLinks(),
    ['class' => 'mb-4']
));

// Divider
$container->addItem(new \Ease\Html\HrTag());

// LangSelect Example
$container->addItem(new \Ease\Html\H2Tag('LangSelect Widget'));
$container->addItem(new \Ease\Html\PTag('Dropdown style language selector:'));
$container->addItem(new \Ease\Html\DivTag(
    new \Ease\TWB5\Widgets\LangSelect(),
    ['class' => 'mb-4']
));

// Divider
$container->addItem(new \Ease\Html\HrTag());

// Custom styles example
$container->addItem(new \Ease\Html\H2Tag('Customization Examples'));

// LangLinks with tabs style
$container->addItem(new \Ease\Html\H3Tag('LangLinks as Tabs'));
$container->addItem(new \Ease\Html\DivTag(
    new \Ease\TWB5\Widgets\LangLinks(['class' => 'nav nav-tabs']),
    ['class' => 'mb-4']
));

// LangLinks as underline style (new in Bootstrap 5)
$container->addItem(new \Ease\Html\H3Tag('LangLinks with Underline Style'));
$container->addItem(new \Ease\Html\DivTag(
    new \Ease\TWB5\Widgets\LangLinks(['class' => 'nav nav-underline']),
    ['class' => 'mb-4']
));

// Multiple instances
$container->addItem(new \Ease\Html\H3Tag('Multiple Instances'));
$row = $container->addItem(new \Ease\Html\DivTag(null, ['class' => 'row mb-4']));
$row->addItem(new \Ease\Html\DivTag(
    [
        new \Ease\Html\PTag('Primary style:'),
        new \Ease\Html\DivTag(
            new \Ease\TWB5\Widgets\LangSelect('lang'),
            ['class' => 'dropdown']
        )
    ],
    ['class' => 'col-md-4']
));
$row->addItem(new \Ease\Html\DivTag(
    [
        new \Ease\Html\PTag('Success style:'),
        new \Ease\Html\DivTag(
            new \Ease\TWB5\Widgets\LangSelect('locale'),
            ['class' => 'dropdown']
        )
    ],
    ['class' => 'col-md-4']
));
$row->addItem(new \Ease\Html\DivTag(
    [
        new \Ease\Html\PTag('Small size:'),
        new \Ease\Html\DivTag(
            new \Ease\TWB5\Widgets\LangSelect('language'),
            ['class' => 'dropdown']
        )
    ],
    ['class' => 'col-md-4']
));

// Information about current locale
$container->addItem(new \Ease\Html\HrTag());
$container->addItem(new \Ease\Html\H2Tag('Current Locale Information'));
$info = $container->addItem(new \Ease\Html\DivTag(null, ['class' => 'alert alert-info']));
$info->addItem(new \Ease\Html\StrongTag('Current locale: '));
$info->addItem(\Ease\Locale::$localeUsed ?? 'Not set');
$info->addItem(new \Ease\Html\BrTag());
$info->addItem(new \Ease\Html\StrongTag('Available languages: '));
$info->addItem(implode(', ', array_keys($locale->availble())));

// Add some JavaScript for button style customization
$oPage->addJavaScript("
// Customize button styles after page load
document.addEventListener('DOMContentLoaded', function() {
    // Find dropdown buttons and customize them
    var dropdowns = document.querySelectorAll('.dropdown');
    if (dropdowns.length >= 3) {
        // Primary style
        var btn1 = dropdowns[dropdowns.length - 3].querySelector('button');
        if (btn1) {
            btn1.classList.remove('btn-secondary');
            btn1.classList.add('btn-primary');
        }
        // Success style
        var btn2 = dropdowns[dropdowns.length - 2].querySelector('button');
        if (btn2) {
            btn2.classList.remove('btn-secondary');
            btn2.classList.add('btn-success');
        }
        // Small size
        var btn3 = dropdowns[dropdowns.length - 1].querySelector('button');
        if (btn3) {
            btn3.classList.add('btn-sm');
        }
    }
});
");

$oPage->draw();