<?php

namespace speixoto\polymer;

use yii\web\AssetBundle;
use yii\helpers\Url;

/**
 * Asset bundle for the Polymer files.
 *
 * @author Sérgio Peixoto <matematico2002@hotmail.com>
 *
 * @link http://www.polymer-project.org
 */
class PolymerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/speixoto/polymer/assets';
    public $js = ['bower_components/plataform/platform.js'];
    public $link = [];

    public function registerAssetFiles($view)
    {
        foreach ($this->link as $link) {
            $options = [];
            $options['rel'] = 'import';
            $options['href'] = Url::to($link);
            $view->registerLinkTag($options);
        }
        parent::registerAssetFiles($view);
    }
}