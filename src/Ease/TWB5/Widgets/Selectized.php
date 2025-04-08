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

/**
 * Description of Selectized.
 *
 * @author Vitex <info@vitexsoftware.cz>
 */
class Selectized extends \Ease\Html\SelectTag
{
    use \Ease\TWB5\Widgets\Selectizer;

    public function finalize(): void
    {
        $this->selectize();
        parent::finalize();
    }
}
