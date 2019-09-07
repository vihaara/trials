<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="<?= Yii::$app->homeUrl; ?>">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href="http://localhost:8080/flights-api-project-master_new/assets/1.fcd3e59f2154d2516505.styles.css" rel="stylesheet">
       
    </head>
    <body class="loaded">
        <?php $this->beginBody() ?>
        <?= $content ?>
        <div class="preloader"></div>
        <script src="http://localhost:8080/flights-api-project-master_new/web/assets/runtime.bundle.js"></script>
      
        <script src="http://localhost:8080/flights-api-project-master_new/web/assets/chunk.1cb3c2170f3d7682900b.js"></script>
        <script src="http://localhost:8080/flights-api-project-master_new/web/assets/chunk.d3cfad62751f921bcf54.js"></script>
    </body>
    </html>
<?php $this->endPage() ?>