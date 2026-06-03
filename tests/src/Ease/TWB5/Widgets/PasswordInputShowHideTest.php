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

use Ease\TWB5\Widgets\PasswordInputShowHide;

class PasswordInputShowHideTest extends \PHPUnit\Framework\TestCase
{
    protected ?PasswordInputShowHide $object = null;

    protected function setUp(): void
    {
        $this->object = new PasswordInputShowHide('password', 'Password');
    }

    protected function tearDown(): void
    {
        $this->object = null;
    }

    /**
     * @covers \Ease\TWB5\Widgets\PasswordInputShowHide::__construct
     */
    public function testConstructor(): void
    {
        $this->assertInstanceOf(PasswordInputShowHide::class, $this->object);
    }

    /**
     * @covers \Ease\TWB5\Widgets\PasswordInputShowHide::__construct
     */
    public function testRendersPasswordInput(): void
    {
        $html = (string) $this->object;
        $this->assertStringContainsString('type="password"', $html);
        $this->assertStringContainsString('name="password"', $html);
    }

    /**
     * @covers \Ease\TWB5\Widgets\PasswordInputShowHide::__construct
     */
    public function testRendersToggleButton(): void
    {
        $html = (string) $this->object;
        $this->assertStringContainsString('bi-eye-slash', $html);
        $this->assertStringContainsString('<button', $html);
    }

    /**
     * @covers \Ease\TWB5\Widgets\PasswordInputShowHide::__construct
     */
    public function testRendersInputGroup(): void
    {
        $html = (string) $this->object;
        $this->assertStringContainsString('input-group', $html);
    }
}
