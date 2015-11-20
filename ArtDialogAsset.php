<?php
/**
 * Created by PhpStorm.
 * User: hoter.zhang
 * Date: 2015/11/20
 * Time: 16:30
 */

namespace hoter\artdialog;


use yii\web\AssetBundle;

class ArtDialogAsset extends AssetBundle
{

    public $js = [
        'artDialog.js?skin=default',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
    }
}