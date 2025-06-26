<?php

declare(strict_types=1);

/**
 * This file is part of the TWB5Widgets package
 *
 * https://github.com/VitexSoftware/php-ease-twbootstrap5-widgets
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ease\TWB5\Widgets;

class Toggle extends \Ease\Html\CheckboxTag
{
    /**
     * Properties holder.
     *
     * @var array<string, bool|string>
     */
    public array $properties = [];

    /**
     * StyleSheet location.
     */
    public string $css = 'https://cdn.jsdelivr.net/npm/bootstrap5-toggle@5.1.2/css/bootstrap5-toggle.min.css';

    /**
     * JavaScript location.
     */
    public string $js = 'https://cdn.jsdelivr.net/npm/bootstrap5-toggle@5.1.2/js/bootstrap5-toggle.jquery.min.js';

    /**
     * Twitter Bootstrap switch.
     *
     * @param string $name       tag name
     * @param bool   $checked    checkbox state
     * @param string $value      returned value
     * @param array  $properties tag parameters
     */
    public function __construct(
        $name,
        $checked = false,
        $value = null,
        $properties = null,
    ) {
        if (!isset($properties['data-toggle'])) {
            $properties['data-toggle'] = 'toggle';
        }

        if (!isset($properties['data-on'])) {
            $properties['data-on'] = _('Yes');
        }

        if (!isset($properties['data-off'])) {
            $properties['data-off'] = _('No');
        }

        parent::__construct($name, $checked, $value, $properties);
    }

    /**
     * Properties setter.
     *
     * @param array $properties values to change
     */
    public function setProperties($properties): void
    {
        $this->properties = array_merge($this->properties, $properties);
    }

    /**
     * Include required assets in page.
     */
    public function finalize(): void
    {
        \Ease\Part::jQueryze();
        \Ease\TWB5\Part::twBootstrapize();
        $this->includeCss($this->css);
        $this->includeJavascript($this->js);
    }
}
