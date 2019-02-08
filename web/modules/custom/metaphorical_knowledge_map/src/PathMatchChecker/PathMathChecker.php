<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 24.01.19
 * Time: 15:15
 */

namespace Drupal\metaphorical_knowledge_map\PathMatchChecker;


class PathMathChecker
{
    public function checkPathMatch($path, $patterns){
        return $path_matches = \Drupal::service('path.matcher')->matchPath($path, $patterns);
    }
}