<?php

namespace yii\OverlayScrollbars\assets;

use yii\web\AssetBundle;

class OverlayScrollbarsAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    public $css = [
        'css/overlayscrollbars.min.css',
    ];
    public $js = [
        'js/overlayscrollbars.browser.es6.min.js',
    ];
}