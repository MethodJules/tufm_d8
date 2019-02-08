<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 23.01.19
 * Time: 13:03
 */

namespace Drupal\tufm\Plugin\Block;


use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
use Drupal\Core\Block\Annotation\Block;
use Drupal\Core\Annotation\Translation;

/**
 * Class TuFMBlock
 * @package Drupal\tufm\Plugin\Block
 *
 * Provides a TuFM Block
 *
 * @Block(
 *     id="tufm_block",
 *     admin_label=@Translation("TuFM Block")
 * )
 */
class TuFMBlock extends BlockBase
{
    public function build()
    {
        // TODO: Implement build() method.
        $items = [

            [
                '#type' => 'link',
                '#title' => $this->t('Theorie anlegen'),
                '#url' => Url::fromRoute('node.add')->setRouteParameter('node_type', 'theorie'),

            ],
            [
                '#type' => 'link',
                '#title' => $this->t('Literatur anlegen'),
                '#url' => Url::fromRoute('entity.bibcite_reference.add_page'),

            ],


        ];

        $block = [
            '#theme' => 'item_list',
            '#list_type' => 'ul',
            //'#title' => 'Navigation',
            '#items' => $items,

        ];

        return $block;
    }
}