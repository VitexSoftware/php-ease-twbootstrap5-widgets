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

use Ease\Functions;
use Ease\Html\ButtonTag;
use Ease\Html\DivTag;
use Ease\Html\InputPasswordTag;
use Ease\Html\LabelTag;

/**
 * Password input with show/hide toggle button using Bootstrap Icons.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PasswordInputShowHide extends DivTag
{
    public string $key = '';

    /**
     * Password Input with Eye toggle.
     *
     * @param string      $inputName
     * @param string      $label
     * @param null|string $plaintext
     */
    public function __construct(string $inputName, string $label, ?string $plaintext = null)
    {
        $this->key = Functions::randomString();
        parent::__construct(new LabelTag($this->key, $label), ['class' => 'mb-3']);

        $eyeIcon = new BsIcon('eye-slash', ['aria-hidden' => 'true']);
        $toggleButton = new ButtonTag($eyeIcon, [
            'class' => 'btn btn-outline-secondary',
            'type' => 'button',
            'id' => $this->key.'-toggle',
        ]);

        $inputGroup = new DivTag(
            new InputPasswordTag($inputName, $plaintext, ['class' => 'form-control', 'id' => $this->key.'-input']),
            ['class' => 'input-group', 'id' => $this->key],
        );
        $inputGroup->addItem(new DivTag($toggleButton, ['class' => 'input-group-text p-0']));

        $this->addItem($inputGroup);
    }

    public function finalize(): void
    {
        \Ease\TWB5\Part::twBootstrapize();
        $this->addJavascript(<<<EOD

\$('#{$this->key}-toggle').on('click', function (event) {
    event.preventDefault();
    var input = \$('#{$this->key}-input');
    var icon = \$(this).find('i');
    if (input.attr('type') === 'password') {
        input.attr('type', 'text');
        icon.removeClass('bi-eye-slash').addClass('bi-eye');
    } else {
        input.attr('type', 'password');
        icon.removeClass('bi-eye').addClass('bi-eye-slash');
    }
});

EOD);
    }
}
