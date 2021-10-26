<?php

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
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <?= $this->render('top_navbar') ?>

    <div class="container-fluid sidebar">
        <div class="col-sm-2 side">
            <?= $this->render('left_menu') ?>
        </div>
        <div class="col-sm-10 col-sm-offset-2 main">
            <?= $content ?>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

<style>
    body {
        padding-top: 50px;
    }

    .side {
        position: fixed;
        top: 51px;
        bottom: 0;
        left: 0;
        display: block;
        padding: 20px;
        overflow-x: hidden;
        overflow-y: auto;
        background-color: #f5f5f5;
        border-right: 1px solid #eee;
    }

    .main {
        padding: 20px;
        padding-right: 40px;
        padding-left: 40px;
    }
</style>