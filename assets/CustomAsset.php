<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CustomAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/material-dashboard-bkp-custom.css',
        'css/material-components-web.min.css',
        'css/dataTables.material.min.css',
    ];
    public $js = [
        'js/jquery-3.5.1.js',
        'js/jquery.dataTables.min.js',
        'js/dataTables.material.min.js'
    ];
    public $depends = [
    ];
}
