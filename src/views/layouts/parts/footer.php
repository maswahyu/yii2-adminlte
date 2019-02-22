<?php
use yii\helpers\Html;
?>
<footer class="main-footer" id="<?= $assetBundle->footerId ?>">

    <?php if (!empty($assetBundle->version)): ?>
        <div class="float-right d-none d-sm-block"><b>Version</b> <?= $assetBundle->version ?></div>
    <?php endif ?>

    <strong><?= (!empty($assetBundle->copyright)) ? $assetBundle->copyright : null ?> <a href="<?= Html::encode($this->title) ?>"><?= Html::encode($this->title) ?></a>.</strong> All rights reserved.
</footer>
