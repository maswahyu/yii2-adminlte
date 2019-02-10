<?php
use yii\helpers\Html;
use yii\helpers\Url;
use maswahyu\adminlte\widgets\Menu;
?>
<aside class="main-sidebar <?= $assetBundle->sidebarVariant ?>">

    <a href="/" class="brand-link <?= $assetBundle->brandVariant ?>">
        <img src="<?= empty($assetBundle->logo) ? $directoryAsset . '/img/AdminLTELogo.png' : Url::home() . $assetBundle->logo ?>" alt="<?= Yii::$app->name ?> Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= Yii::$app->name ?></span>
    </a>

    <div class="sidebar">

        <?php if ($assetBundle->showUserOnSidebar): ?>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= Yii::$app->user->isGuest ? 'John Doe <span class="badge badge-danger">guest</span>' : Yii::$app->user->identity->username ?></a>
            </div>
        </div>
        <?php endif ?>

        <nav class="mt-2">
            <?= Menu::widget(['items' => $assetBundle->sidebarMenu]) ?>
        </nav>

    </div>

</aside>
