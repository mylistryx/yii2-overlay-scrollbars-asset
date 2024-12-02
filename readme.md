# OverlayScrollbars asset bundle for Yii 2.0 Framework #

<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
</p>

### Based on https://github.com/KingSora/OverlayScrollbars Version of this package is same as plugin version! #

---

## Installation #
___

The preferred way to install this extension is through [composer ](http://getcomposer.org/download/)

Either run: `composer require mylistryx/yii2-overlay-scrollbars-asset`  or add `"mylistryx/yii2-overlay-scrollbars-asset": "~2.0.0"` into your `composer.json` file. 

Then register assets in your view file: `OverlayScrollbarsAsset::register($this)` or `OverlayScrollbarsCdnAsset::register($this)` to use CDN version.

Add same code in your template:

    $JS = <<<JS
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
        scrollbarTheme: "os-theme-light",
        scrollbarAutoHide: "leave",
        scrollbarClickScroll: true
    };
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined") {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll
                },
            });
        }
    });
    JS;

    $this->registerJs($JS, View::POS_END);

See package documentation https://github.com/KingSora/OverlayScrollbars for more options.

## Dependencies ##

---
This package depends on:
- `"php": ">=8.2"`
- `"yiisoft/yii2": "~2.0.0"` base framework files
