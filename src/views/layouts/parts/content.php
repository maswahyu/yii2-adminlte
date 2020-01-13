<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
?>
<div class="content-wrapper">
    <?php if (!$assetBundle->disableContentHeader): ?>
    <section class="<?= $assetBundle->contentHeaderCssClass ?>">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= Html::encode($this->title) ?></h1>
                </div>
                <div class="col-sm-6">
                    <?= Breadcrumbs::widget([
                        'tag' => 'ol',
                        'options' => ['class' => 'breadcrumb float-sm-right'],
                        'itemTemplate' => "<li class=\"breadcrumb-item\">{link}</li>\n",
                        'activeItemTemplate' => "<li class=\"breadcrumb-item active\">{link}</li>\n",
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif ?>

    <!-- Main content -->
    <section class="<?= $assetBundle->contentCssClass ?>" id="<?= $assetBundle->contentCssId ?>">
        <?= $content ?>
    </section>
</div>
