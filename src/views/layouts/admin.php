<?php
use yii\helpers\Html;
use maswahyu\adminlte\assets\AdminLteAsset;

$assetBundle = AdminLteAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini" id="<?= $assetBundle->bodyId ?>">
<?php $this->beginBody() ?>

    <div class="wrapper">

        <?= $this->render('parts/header', [
            'assetBundle' => $assetBundle,
            'directoryAsset' => $directoryAsset,
        ]) ?>

        <?= $this->render('parts/sidebar', [
            'assetBundle' => $assetBundle,
            'directoryAsset' => $directoryAsset,
        ]) ?>

        <?= $this->render('parts/content', [
            'assetBundle' => $assetBundle,
            'content' => $content,
            'directoryAsset' => $directoryAsset,
        ]) ?>

        <?= $this->render('parts/footer', [
            'assetBundle' => $assetBundle,
            'directoryAsset' => $directoryAsset,
        ]) ?>

    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
