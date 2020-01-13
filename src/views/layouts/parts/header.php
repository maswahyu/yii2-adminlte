<?php
use yii\helpers\Html;
use maswahyu\adminlte\widgets\NavbarMenu;
?>
<nav class="main-header navbar navbar-expand <?= $assetBundle->navbarVariant ?>" id="<?= $assetBundle->navbarId ?>">
    <!-- Left navbar links -->
    <?= NavbarMenu::widget([
        'items' => $assetBundle->navbarMenuLeft,
    ]) ?>

    <!-- Right navbar links -->
    <?= NavbarMenu::widget([
        'options' => [
            'class' => 'navbar-nav ml-auto',
        ],
        'items' => $assetBundle->navbarMenuRight,
    ]) ?>
</nav>
