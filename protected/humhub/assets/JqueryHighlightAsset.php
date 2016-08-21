<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\assets;

use yii\web\AssetBundle;

/**
 * jquery-highlight
 * 
 * @author buddha
 */
class JqueryHighlightAsset extends AssetBundle
{

    /**
     * @inheritdoc
     */
    public $basePath = '@webroot';
    
    /**
     * @inheritdoc
     */
    public $baseUrl = '@web';

    /**
     * @inheritdoc
     */
    public $js = ['js/jquery.highlight.min.js'];
}
