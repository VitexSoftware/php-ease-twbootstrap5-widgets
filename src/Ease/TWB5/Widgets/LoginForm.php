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
 * Login form widget.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class LoginForm extends \Ease\TWB5\Form
{
    public string $loginInputName = 'login';
    public string $passwordInputName = 'password';
    public string $formMethod = 'POST';
    public ?string $formAction = null;

    /**
     * Login Form.
     *
     * @param null|string           $username
     * @param null|string           $password
     * @param array<string, string> $tagProperties
     */
    public function __construct(?string $username = null, ?string $password = null, array $tagProperties = [])
    {
        parent::__construct(
            array_merge(['action' => $this->formAction, 'method' => $this->formMethod], $tagProperties),
        );
        $this->addInput(new \Ease\Html\InputTextTag($this->loginInputName, $username), _('Username'));
        $this->addItem(new PasswordInputShowHide($this->passwordInputName, _('Password'), $password));
    }

    public function finalize(): void
    {
        \Ease\TWB5\Part::twBootstrapize();
        $this->addItem(new \Ease\TWB5\SubmitButton(_('Submit')));
        parent::finalize();
    }
}
