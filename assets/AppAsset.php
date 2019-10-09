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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/admin.css',
        'css/main.css',
        'https://use.fontawesome.com/releases/v5.8.1/css/all.css'
    ];
    public $js = [
        'js/common.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',

    ];
}