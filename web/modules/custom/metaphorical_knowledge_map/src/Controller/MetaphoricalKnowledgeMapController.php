<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 24.01.19
 * Time: 15:26
 */

namespace Drupal\metaphorical_knowledge_map\Controller;


use Drupal\Core\Controller\ControllerBase;
use Drupal\image\Entity\ImageStyle;

class MetaphoricalKnowledgeMapController extends ControllerBase
{
    public function content() {


        //Build image style
        $style = ImageStyle::create(array('name' => 'wissenskarte', 'label' => 'KM Image Style'));
        $style->save();
    }

}