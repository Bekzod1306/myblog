
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="sign">
        <h1 class="page__title">Регистрация</h1>


        <?php $form = ActiveForm::begin([
            'id' => 'reg-form',

            'fieldConfig' => [
                'template' => "<div class=\"form__group\">{input}<span class=\"form__line\"></span></div><div class=\"col-lg-8\">{error}</div>",

            ],

        ]); ?>

        <?= $form->field($model, 'name')->textInput(["placeholder"=>"Логин",'class'=>'form__control form__control_resize']) ?>
        <?= Html::tag('span', Html::encode(''), ['class' => 'form__line']) ?>

        <?= $form->field($model, 'email')->textInput(["placeholder"=>"Е-mail",'class'=>'form__control form__control_resize']) ?>
        <?= Html::tag('span', Html::encode(''), ['class' => 'form__line']) ?>

        <?= $form->field($model, 'password')->passwordInput(["placeholder"=>"Пароль",'class'=>'form__control form__control_resize']) ?>
        <?= Html::tag('span', Html::encode(''), ['class' => 'form__line']) ?>

<!--        --><?//= $form->field($model, 'repassword')->passwordInput(["placeholder"=>"Подтвердите пароль",'class'=>'form__control form__control_resize']) ?>
<!--        --><?//= Html::tag('span', Html::encode(''), ['class' => 'form__line']) ?>


        <?php echo "<br>"?>


        <?= Html::submitButton('Регистрация', ['class' => 'btn btn--blue btn--sm', 'name' => 'login-button']) ?>


        <?php ActiveForm::end(); ?>

<!--        <div class="sign__footer">-->
<!--            <a class="sign__link" href="/auth/login">войти</a>-->
<!--            <a class="sign__link" href="/site/reset">восстановить</a>-->
<!--        </div>-->
    </div>

</div>

