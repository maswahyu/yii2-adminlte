<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
?>
<div class="content-wrapper">
    <section class="content-header">
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

    <!-- Main content -->
    <section class="content" id="<?= $assetBundle->contentId ?>">
        <?= $content ?>
    </section>
</div>
