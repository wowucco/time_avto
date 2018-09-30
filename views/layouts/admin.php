<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
        <div class="col-md-2">
            <?php echo \app\modules\admin\widgets\LeftTabs::widget();?>
        </div>
    <div class="col-md-10">
        <?= Breadcrumbs::widget([
            'homeLink' => ['label' => 'Админка', 'url' => Yii::$app->urlManager->createUrl('admin/admin/index')],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []
        ]);?>
        <?= $content; ?>
    </div>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<style>
    .wrap {
        margin-top: 15px;
    }
</style>