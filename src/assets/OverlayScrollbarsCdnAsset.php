<?php

namespace yii\OverlayScrollbars\assets;

use yii\web\AssetBundle;

class OverlayScrollbarsCdnAsset extends AssetBundle
{
    public $css = [
        'https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css',
    ];
	
    public $js = [
        'https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js',
    ];
}