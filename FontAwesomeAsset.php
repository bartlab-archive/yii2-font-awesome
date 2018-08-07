<?php
namespace maybeworks\fontawesome;

use \yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle {
	public $sourcePath = '@bower/font-awesome';
	public $css = [
		'web-fonts-with-css/css/fontawesome-all.min.css',
		'web-fonts-with-css/css/v4-shims.min.css',
	];
}
