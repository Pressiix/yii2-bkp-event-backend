<?php 

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\LoginAsset;

LoginAsset::register($this);

?>
<style>
    .loginbttm {
    /* padding: 0px; */
    padding-right: 100px;
}
</style>
<h1><?= Html::encode($this->title) ?></h1>
<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    <?= Yii::$app->params['AppName'] ?>
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                            <div class="form-group">
                                <?= $form->field($model, 'username')->textInput() ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'password')->passwordInput() ?>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                    <?php ActiveForm::end(); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>




