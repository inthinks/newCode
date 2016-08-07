<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="container">

      <!-- <form class="login-form" action="index.html"> -->
      <?php $form = ActiveForm::begin(['action' => ['site/login'],
      'fieldConfig' => ['template' => "{label}\n{input}\n{hint}"],
            // ['class' => "login-form"],
      'options' => ['method' => 'post', 'class' => "login-form"]]) ?>

        <div class="login-wrap">
        <?= $form->errorSummary($model) ?>
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              
              
              <?= $form->field($model, 'username')->textInput(['autofocus', 'class'=>'form-control', 'placeholder'=>'username'])->label(false)?>
            </div>
            <div class="input-group">
                
              
                <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control', 'placeholder'=>'Password'])->label(false)?>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me" name="rememberMe"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
        </div>
        <?php ActiveForm::end(); ?>
      <!-- </form> -->

    </div>

