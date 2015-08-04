<?php
use yii\helpers\Html;
//use app\assets\AppAsset; 
/* @var $this \yii\web\View */
/* @var $content string */

//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<style type="text/css">
*{margin:0;padding:0;}
body{font:14px "微软雅黑",Arial;color:#000;line-height:28px; background-image:url(images/pic_02.jpg); background-position:top center; background-size:100% auto; background-image:url(images/bg.jpg); background-repeat:no-repeat; background-color:#181818}
</style>
<link href="css/framework.css" 	rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/framework.launcher.js"></script>
    
</head>
<body>

<?php $this->beginBody() ?>
      <?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
