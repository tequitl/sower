<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
<div class="login-box">
        <div class="login-content">
            <div class="row">
                <div class="col-md-4">
                            <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'fieldConfig' => [
                                'template' => "{label}\n{input}\n{error}",
                                'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                                'inputOptions' => ['class' => 'col-lg-3 form-control'],
                                'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                            ],
                        ]); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        ]) ?>

                        <div class="form-group">
                            <div>
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>
                        </div>

                        <?php ActiveForm::end(); ?>
                </div>
                <div class="col-md-8">
                    <h4 class="mb-3">[ Welcome to Sower ]</h4>
                    <p>Sower is an online directory that connects people through decentralized social networks.</p>
                    <div class="school-list mb-3">
                        <strong>We have planted seeds for popular consumption at:</strong><br>
                        <span class="text-secondary">CDMX-México &middot; Ecatepec-México </span>
                    </div>
                    <p>Your decide if your profile is public as normal Worpress page or  is limited to your owGeormmunity or network.</p>
                    <ul>
                        <li>Search for people in your network</li>
                        <li>Find out who is in your groups</li>
                        <li>Look up your friends' friends</li>
                        <li>See a visualization of your social network</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
