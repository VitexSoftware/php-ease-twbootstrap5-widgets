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
 * Description of GroupChooser.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait Selectizer
{
    /**
     * Selectize.js for Ease Input/Select widgets.
     *
     * @param array<string,string> $settings see https://github.com/selectize/selectize.js/blob/master/docs/api.md
     * @param array<string,string> $values   [value=>label,value=>label,...]
     */
    public function selectize(array $settings = [], array $values = []): self
    {
        if (empty($this->getTagID())) {
            $this->setTagID();
        }

        if ($values) {
            $settings['options'] = $values;
        }

        $this->addJavaScript(<<<'EOD'

$('#
EOD.$this->getTagID().<<<'EOD'
').selectize({

EOD.\Ease\Part::partPropertiesToString($settings).<<<'EOD'

});

EOD);

        $this->includeJavaScript('https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js');
        $this->includeCss('https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.bootstrap5.css');

        return $this;
    }
}
