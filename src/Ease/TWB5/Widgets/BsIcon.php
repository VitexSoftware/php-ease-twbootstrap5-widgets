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

use Ease\Html\PairTag;

/**
 * Bootstrap Icons icon tag.
 *
 * Renders <i class="bi bi-{icon}"> — the Bootstrap Icons equivalent of FaIcon.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class BsIcon extends PairTag
{
    /**
     * Bootstrap Icon tag.
     *
     * @param string                $icon          Bootstrap Icons name (with or without bi- prefix)
     * @param array<string, string> $tagProperties eg. ['aria-hidden' => 'true']
     */
    public function __construct(string $icon, array $tagProperties = [])
    {
        $tagProperties['class'] = 'bi bi-'.preg_replace('/^bi\-/i', '', $icon).(isset($tagProperties['class']) ? ' '.$tagProperties['class'] : '');
        parent::__construct('i', $tagProperties);
    }
}
