
<?php use yii\helpers\Html;

if(!Yii::$app->user->isGuest):?>
    <div class="form"><!--leave comment-->
        <div class="form__title">Обсуждение</div>
        <?php if(Yii::$app->session->getFlash('comment')):?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('comment'); ?>
            </div>
        <?php endif;?>
        <?php $form = \yii\widgets\ActiveForm::begin([
            'action'=>['site/comment', 'id'=>$article->id],
            'options'=>['class'=>'form', 'role'=>'form'],
            'fieldConfig' => [
            'template' => "<div class=\"form__group\">{input}<span class=\"form__line\"></span></div><div class=\"col-lg-8\">{error}</div>",

        ],
        ])?>
        <div class="form__group">
            <?= $form->field($commentForm, 'comment')->textarea(['class'=>'form__control
                                                        form__control_resize','placeholder'=>'Текст комментария'])->label(false)?>
                <?= Html::tag('span', Html::encode(''), ['class' => 'form__line']) ?>

        </div>
        <?= '</br>'?>
        <button type="submit" class="btn btn--blue form__btn">Отправить</button>
        <?php \yii\widgets\ActiveForm::end();?>
    </div><!--end leave comment-->
<?php endif;?>




<?php if(!empty($comments)):?>

    <?php foreach($comments as $comment):?>
        <div class="commnets__item"><!--bottom comment-->
            <div class="comments__header">
                <img width="50" class="comments__header_img" src="<?php if(!$comment->user->image){
                    echo '/images/My_img1.png';

                } else { echo $comment->user->image;} ?>" alt="">
                <div class="comments__name">
                    <p><?= $comment->user->name;?></p>
                    <p class="comments__pubdate">
                        <?= $comment->getDate();?>
                    </p>
                </div>
            </div>

            <div class="comments__text">





                <p class="para"><?= $comment->text; ?></p>
            </div>
            <a
                    href="#"
                    class="comments__btn"
            >ответить</a
            >
        </div>
    <?php endforeach;?>

<?php endif;?>
<!-- end bottom comment-->

