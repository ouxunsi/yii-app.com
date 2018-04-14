<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use common\assets\Html5shiv;
use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Frontend application asset
 */
class HejiahuanFrontendAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@frontend/web/hejiahuan';

    /**
     * @var array
     */
    public $css = [
        'css/common-combin.css',
        'css/common.css',
        'css/main.css',
        'css/style.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'js/jquery.js',
        'js/common.js',
        'js/sdw_hwOld.js',
        'js/main.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        Html5shiv::class,
    ];
}
