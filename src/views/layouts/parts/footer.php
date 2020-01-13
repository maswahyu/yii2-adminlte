<?php
use yii\helpers\Html;
?>
<footer class="main-footer" id="<?= $assetBundle->footerId ?>">

    <?php if (!empty($assetBundle->version)): ?>
        <div class="float-right d-none d-sm-block"><b>Version</b> <?= $assetBundle->version ?></div>
    <?php endif ?>

    <strong><?= (!empty($assetBundle->copyright)) ? $assetBundle->copyright : null ?> <a href="<?= $assetBundle->brandUrl ?>"><?= Yii::$app->name ?></a>.</strong> All rights reserved.
</footer>
<?php
$this->registerCss('.has-error .help-block {
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545;
}');