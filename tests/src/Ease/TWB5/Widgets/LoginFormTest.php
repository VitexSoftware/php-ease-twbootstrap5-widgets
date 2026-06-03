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

namespace Test\Ease\TWB5\Widgets;

use Ease\TWB5\Widgets\LoginForm;

class LoginFormTest extends \PHPUnit\Framework\TestCase
{
    protected ?LoginForm $object = null;

    protected function setUp(): void
    {
        $this->object = new LoginForm();
    }

    protected function tearDown(): void
    {
        $this->object = null;
    }

    /**
     * @covers \Ease\TWB5\Widgets\LoginForm::__construct
     */
    public function testConstructor(): void
    {
        $this->assertInstanceOf(LoginForm::class, $this->object);
    }

    /**
     * @covers \Ease\TWB5\Widgets\LoginForm::__construct
     */
    public function testHasLoginAndPasswordInputs(): void
    {
        $html = (string) $this->object;
        $this->assertStringContainsString('name="login"', $html);
        $this->assertStringContainsString('name="password"', $html);
    }

    /**
     * @covers \Ease\TWB5\Widgets\LoginForm::__construct
     */
    public function testWithCredentials(): void
    {
        $form = new LoginForm('admin', null);
        $html = (string) $form;
        $this->assertStringContainsString('value="admin"', $html);
    }

    /**
     * @covers \Ease\TWB5\Widgets\LoginForm::__construct
     */
    public function testIsPostForm(): void
    {
        $html = (string) $this->object;
        $this->assertStringContainsString('method="POST"', $html);
    }
}
