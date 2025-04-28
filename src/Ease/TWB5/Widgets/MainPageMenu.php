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

use Ease\Html\ATag;
use Ease\Html\DivTag;
use Ease\Html\H5Tag;
use Ease\Html\ImgTag;
use Ease\Html\PTag;
use Ease\TWB5\Card;
use Ease\TWB5\Col;
use Ease\TWB5\LinkButton;
use Ease\TWB5\Row;

class MainPageMenu extends Row
{
    /**
     * Sem se přidávají položky.
     */
    public DivTag $row;

    /**
     * MainPage Menu.
     */
    public function __construct()
    {
        parent::__construct(
            null,
            [],
            [
                'class' => 'container',
                'style' => 'margin: auto;',
            ],
        );
    }

    /**
     * Add Item to mainpage Menu.
     *
     * @param string     $title       caption
     * @param string     $url         image link href url
     * @param string     $image       url
     * @param mixed      $description
     * @param null|mixed $buttonText
     * @param array      $properties  for Card
     *
     * @return ATag
     */
    public function addMenuItem($title, $url, $image, $description, $buttonText = null, $properties = []): Col
    {
        $icon = new ImgTag($image, $title, ['alt' => $title, 'class' => 'card-img-top']);
        // $cardHeader = new \Ease\Html\DivTag($title, ['class' => 'card-header']);
        $cardBody = new DivTag(new H5Tag($title), ['class' => 'card-body']);
        $cardBody->addItem(new PTag($description, ['class' => 'card-text']));
        $cardBody->addItem(new LinkButton($url, empty($buttonText) ? _('Visit') : $buttonText, 'primary btn-block'));
        $menuCard = new Card([$icon, $cardBody], $properties);

        return $this->addItem(new Col(3, $menuCard));
    }
}
