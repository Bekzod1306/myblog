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
    <div class="sign">
        <h1 class="page__title">Вход</h1>


    <?php $form = ActiveForm::begin([
        'id' => 'login-form',

        'fieldConfig' => [
            'template' => "<div class=\"form__group\">{input}<span class=\"form__line\"></span></div><div class=\"col-lg-8\">{error}</div>",

        ],

    ]); ?>

    <?= $form->field($model, 'email')->textInput(["placeholder"=>"E-mail",'class'=>'form__control form__control_resize']) ?>
        <?= Html::tag('span', Html::encode(''), ['class' => 'form__line']) ?>

    <?= $form->field($model, 'password')->passwordInput(["placeholder"=>"Пароль",'class'=>'form__control form__control_resize']) ?>

        <?= Html::tag('span', Html::encode(''), ['class' => 'form__line']) ?>


        <?php echo "<br>"?>


            <?= Html::submitButton('Войти', ['class' => 'btn btn--blue btn--sm', 'name' => 'login-button']) ?>


    <?php ActiveForm::end(); ?>

<!--        <div class="sign__footer">-->
<!--            <a class="sign__link" href="/auth/signup">регистрация</a>-->
<!--            <a class="sign__link" href="/site/reset">восстановить</a>-->
<!--        </div>-->
</div>

</div>
