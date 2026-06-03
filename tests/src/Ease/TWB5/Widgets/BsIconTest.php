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

use Ease\TWB5\Widgets\BsIcon;

class BsIconTest extends \PHPUnit\Framework\TestCase
{
    protected ?BsIcon $object = null;

    protected function setUp(): void
    {
        $this->object = new BsIcon('house');
    }

    protected function tearDown(): void
    {
        $this->object = null;
    }

    /**
     * @covers \Ease\TWB5\Widgets\BsIcon::__construct
     */
    public function testConstructor(): void
    {
        $this->assertInstanceOf(BsIcon::class, $this->object);
    }

    /**
     * @covers \Ease\TWB5\Widgets\BsIcon::__construct
     */
    public function testRendersCorrectClass(): void
    {
        $html = (string) $this->object;
        $this->assertStringContainsString('bi bi-house', $html);
        $this->assertStringContainsString('<i', $html);
    }

    /**
     * @covers \Ease\TWB5\Widgets\BsIcon::__construct
     */
    public function testStripsBiPrefix(): void
    {
        $icon = new BsIcon('bi-gear');
        $html = (string) $icon;
        $this->assertStringContainsString('bi bi-gear', $html);
        $this->assertStringNotContainsString('bi-bi-gear', $html);
    }

    /**
     * @covers \Ease\TWB5\Widgets\BsIcon::__construct
     */
    public function testExtraProperties(): void
    {
        $icon = new BsIcon('person', ['aria-hidden' => 'true']);
        $html = (string) $icon;
        $this->assertStringContainsString('aria-hidden', $html);
        $this->assertStringContainsString('bi bi-person', $html);
    }
}
