<?php

/**
 * EasePHPbricks - Bootstrap5 Switch example
 *
 * 
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2016-2024 VitexSoftware
 */
include '../vendor/autoload.php';

new \Ease\Locale();

\Ease\WebPage::singleton( new \Ease\TWB5\WebPage('TWB5 Selectize - EasePHP Framework Widget '));

\Ease\TWB5\Part::jQueryze();


\Ease\WebPage::singleton()->addItem(new \Ease\TWB5\Widgets\Selectized('selectize', ['Option 1', 'Option 2', 'Option 3'], 'Option 2',
                ['placeholder' => 'Select options...']));

\Ease\WebPage::singleton()->addItem(new \Ease\TWB5\Widgets\Selectized('selectize', ['Option 1', 'Option 2', 'Option 3'], 'Option 2',
                ['multiple' => true, 'placeholder' => 'Select options...']));

\Ease\WebPage::singleton()->addItem(new \Ease\TWB5\Widgets\Selectized('selectize2', ['Option 1', 'Option 2', 'Option 3'], 'Option 2',
                ['multiple' => true, 'placeholder' => 'Select options...', 'disabled' => true]));

\Ease\WebPage::singleton()->addItem(new \Ease\TWB5\Widgets\Selectized('selectize3', ['Option 1', 'Option 2', 'Option 3'], 'Option 2',
                ['multiple' => true, 'placeholder' => 'Select options...', 'disabled' => true, 'readonly' => true]));

\Ease\WebPage::singleton()->draw();
