<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">

    <div class="login-logo">
        <a href="#"><?= Html::encode(Yii::$app->name) ?></a>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <p class="login-box-msg">Sign in to start your session</p>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="<?= $model->formName() . '[username]' ?>" class="form-control" value="<?= $model->username ?>" placeholder="username">
                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                        <?php if ($model->hasErrors('username')): ?>
                            <div class="invalid-feedback d-block ml-2 pl-1"><?= $model->getFirstError('username') ?></div>
                        <?php endif ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="password" name="<?= $model->formName() . '[username]' ?>" class="form-control" value="<?= $model->password ?>" placeholder="password">
                        <div class="input-group-append">
                            <span class="fas fa-user input-group-text"></span>
                        </div>
                        <?php if ($model->hasErrors('password')): ?>
                            <div class="invalid-feedback d-block ml-2 pl-1"><?= $model->getFirstError('password') ?></div>
                        <?php endif ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label><input type="checkbox" name="<?= $model->formName() . '[rememberMe]' ?>"> Remember Me</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>

            <?php ActiveForm::end(); ?>

            <?php if (isset($socialLoginEnabled) && $socialLoginEnabled): ?>
            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus-g mr-2"></i> Sign in using Google+
                </a>
            </div>
            <?php endif ?>

            <?php if (isset($forgotPasswordEnabled) && $forgotPasswordEnabled): ?>
            <p class="mb-1"><a href="#">I forgot my password</a></p>
            <?php endif ?>

            <?php if (isset($registrationEnabled) && $registrationEnabled): ?>
            <p class="mb-0"><a href="#" class="text-center">Register a new membership</a></p>
            <?php endif ?>

        </div>
    </div>

</div>
<?php $this->registerJs('$(function () {
    $("input").iCheck({
        checkboxClass: "icheckbox_square-blue",
        radioClass   : "iradio_square-blue",
        increaseArea : "20%" // optional
    })
})');
