<?php

namespace bigpaulie\foundation;

use \yii\web\AssetBundle;
use \yii\web\View;

class ModernizrAsset extends AssetBundle {

    public $sourcePath = '@bower/modernizr';
    public $js = [
        'modernizr.js'
    ];
    public $jsOptions = ['position' => View::POS_HEAD];

}
