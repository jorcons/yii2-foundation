<?php
/**
 * @link http://www.linchpinstudios.com/
 * @copyright Copyright (c) 2014 Linchpin Studios LLC
 * @license http://opensource.org/licenses/MIT
 */

namespace linchpinstudios\foundation;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FoundationAssets extends AssetBundle
{
    public $sourcePath = '@vendor/linchpinstudios/yii2-foundation/dist';
    public $css = [
        'css/normalize.css',
        'css/foundation.min.css',
        'font/foundation-icons/foundation-icons.css',
    ];
    public $js = [
        'js/vendor/modernizr.js',
        'js/foundation.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
