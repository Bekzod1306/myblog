<?php

/* @var $this \yii\web\View */
/* @var $content string */
/*
 * @var
 */

use app\assets\PublicAsset;
use app\assets\BootAsset;
use app\widgets\Alert;
use yii\helpers\Html;

use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

//BootAsset::register($this);
PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="page">
    <!-- Header -->
    <header class="header">
        <ul class="header__space-h">
            <li class="header__list-item">
                <a href="/" class="header__list-logo">
                    <img src="/images/" alt="" />
                </a>
                <button class="header__list-item-h toogle">
                    <label for="check" class="toogle__label">
                        <input
                                type="checkbox"
                                id="check"
                                class="toogle__input"
                        />
                        <span class="toogle__span"></span>
                        <span class="toogle__span"></span>
                        <span class="toogle__span"></span>
                    </label>
                </button>
            </li>
        </ul>

        <nav class="header__list header__list-h">
            <ul class="header__space-sh">
                <li class="header__list-item">
                    <a href="/" class="header__list-logo">
                        <img
                                src="/images/bekkk.png"
                                alt=""
                        />
                    </a>
                    <button class="header__list-item-h">
                        Toggle
                    </button>
                </li>
                <li class="header__list-item header__list-item-sh">
                    <a href="/" class="header__list-link"
                    >Главное</a
                    >
                </li>
            </ul>
            <ul class="header__space">
                <li class="header__list-item-h">
                    <a href="/" class="header__list-link"
                    >Главное</a
                    >
                </li>
                <li
                        class="
                                                                header__list-item header__list-link
                                                                message__me message__me-r
                                                        "
                        data-modal="contact-modal"
                >
                    Написать мне
                </li>
                <li
                        class="
                                                                header__list-item header__list-link
                                                                message__me
                                                        "
                        data-modal="contact-modal"
                >
                    <a class="header__list-link" href="/site/work"
                    >Мои работы</a
                    >
                </li>


                <div class="i_con">
                    <ul class="header__space">
                        <?php if(Yii::$app->user->isGuest):?>
                            <li class="header__list-item"><a class="header__list-link" href="<?= Url::toRoute(['auth/login'])?>">Вход</a></li>
                            <li class="header__list-item"><a class="header__list-link" href="<?= Url::toRoute(['auth/signup'])?>">Регистрация
                                </a></li>
                        <?php else: ?>
                            <li
                                    class="header__list-item"

                            >
                                <a class="header__list-link" href="/site/profile"
                                >Профиль</a
                                >
                            </li>
                        <?php if(\app\models\User::findIdentity([Yii::$app->user->id])['isAdmin']===1):?>
                                <li
                                        class="header__list-item"

                                >
                                    <a class="header__list-link" href="/admin"
                                    >Admin</a
                                    >
                                </li>
                        <?php endif;?>
                            <li class="header__list-item" style=" margin-top:5px; "><?= Html::beginForm(['/auth/logout'], 'post')
                                . Html::tag('button',
                                    'Выйте (' . Yii::$app->user->identity->name . ')',
                                    ['class' => 'logout header__list-link ', 'style'=>"font-weight:500; background-color:transparent; border:none;"]
                                )
                                . Html::endForm() ?></li>


                        <?php endif;?>
                    </ul>
                </div>
            </ul>
        </nav>
    </header>
 
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar__img">
            <img src="/images/sidebar__img.jpg" alt="" />
        </div>
        <div class="sidebar__content">
            <div class="profile">
                <div class="profile__avatar">
                    <img src="/images/My_img1.png" alt="" />
                </div>
                <div class="profile__name">Bekzod Hayitboyev</div>
                <div class="profile__info">
                    блог full-stack разработчика
                </div>
                <ul class="social">
                    <li class="social__item">
                        <a
                                href="https://www.instagram.com/bekk_0511/"
                                class="social__link"
                                target="_blank"
                        >
                            <img
                                    src="/images/instagram.svg"
                                    alt="toinstagram"
                            />
                        </a>
                    </li>
                    <li class="social__item">
                        <a
                                href="https://www.instagram.com/bekk_0511/"
                                class="social__link"
                                target="_blank"
                        >
                            <img
                                    src="/images/vk.svg"
                                    alt="tovk"
                            />
                        </a>
                    </li>
                    <li class="social__item">
                        <a
                                href="https://xn--80affa3aj0al.xn--80asehdb/#/im"
                                class="social__link"
                                target="_blank"
                        >
                            <img
                                    class="social__tg"
                                    src="/images/tg.png"
                                    alt="totelegram"
                            />
                        </a>
                    </li>
                </ul>
                <div class="profile__line"></div>
                <div class="profile__text">
                    Full-stack разработчик. Практик верстки сайтов.
                    Созданием сайтов занимаюсь с 2020 года.Работал в
                    Фрилансе и делал разнийе задачи и наработал
                    более 1000 часов в создании сайтов различной
                    сложности.
                </div>
                <div class="profile__line"></div>
                <div>
                    <button class="btn btn--red">
                        <a href="/site/work">Мои работы</a>
                    </button>
                    <button
                            class="btn btn--blue"
                            data-modal="contact-modal"
                    >
                        Написать мне
                    </button>
                </div>
            </div>
        </div>
        <div class="sidebar__btn">
            <i class="far fa-xing"><img width="40px" src="/images/user.png" alt=""></i>
        </div>
    </aside>
    <div class="contentt">
        <!-- Main -->
        <main class="main">
            <?= $content ?>
        </main>

        <?php //$resents = \app\models\Article::find()->orderBy('date DESC')->all();
        $popular = \app\models\Article::getPopular();
        ?>
        <div class="sidebar-r">
            <div class="sidebar-r__content">
                <div class="sidebar-r__popular">
                    <h1>Popular posts</h1>
                    <?php foreach ($popular as $article): ?>

                    <div class="sidebar-r__popular-items">
                        <img
                                class="sidebar-r__popular-items-img"
                                src="/images/uploads/<?= $article['image']?>"
                                alt=""
                        />
                        <h2 class="sidebar-r__popular-items-h2">
                            <?= $article['title']?>
                        </h2>
                        <p class="sidebar-r__popular-items-p">
                            <?= $article['date']?>
                        </p>
                        <div class="sidebar-r__line"></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php
                $resents = \app\models\Article::getRecent();
                ?>
                <div class="sidebar-r__resent">
                    <h1>Resent posts</h1>
                    <?php foreach ($resents as $resent):?>
                    <div class="sidebar-r__resent-items">
                        <img
                                class="sidebar-r__resent-items-img"
                                src="/images/uploads/<?= $resent['image']?>"
                                alt=""
                        />
                        <div>
                            <h2 class="sidebar-r__resent-items-h2">
                                <?=$resent['title'] ?>
                            </h2>
                            <p class="sidebar-r__resent-items-p">
                                <?=$resent['date'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="sidebar-r__line"></div>
                    <?php endforeach;?>
                </div>
                <?php $items = \app\models\Category::getAll();

                ?>
                <div class="sidebar-r__category">
                    <h1>Categories</h1>
                    <?php foreach ($items as $item){
                        $count = \app\models\Article::find()->where(['id'=>$item['id']])->count();
                        ?>
                    <div class="sidebar-r__category-items">
                        <h2 class="sidebar-r__category-items-h2">
                            <a href="<?= Url::toRoute(['site/view', 'id'=>$item['id']]);?>"><?php echo $item['title'] ?></a>
                        </h2>

                        <p class="sidebar-r__category-items-p"><?= $count?></p>
                    </div>
                    <div class="sidebar-r__line"></div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>

    <div class="modal__blok" id="contact-modal">
        <div class="modal">
            <div class="cannel">
                <img src="/images/cannel.png" alt="" />
            </div>
            <div class="sign">
                <div class="sign__bloks">
                    <form class="form" action="/" method="post">
                        <div class="form__group">
                            <input
                                    class="
                                                                form__control
                                                                form__control_resize
                                                        "
                                    type="text"
                                    id="sign-in__login"
                                    placeholder="Ваше имя"
                            />
                            <span class="form__line"></span>
                        </div>
                        <div class="form__group">
                            <input
                                    class="
                                                                form__control
                                                                form__control_resize
                                                        "
                                    type="password"


                                    placeholder="Ваше е-mail"
                            />
                            <span class="form__line"></span>
                        </div>
                        <div class="form__group">
                            <input
                                    class="
                                                                form__control
                                                                form__control_resize
                                                        "
                                    type="text"
                                    name=""
                                    id="sign-in__pass"
                                    placeholder="Ваш текст"
                            />
                            <span class="form__line"></span>
                        </div>

                        <button
                                type="submit"
                                class="btn btn--blue btn--sm"
                        >
                            Отправить
                        </button>
                    </form>
                </div>
                <div class="sign__footer">
                    <a class="sign__link" href="#"
                    >e-mail: 1999bekzod3772@gmail.com
                    </a>
                    <a class="sign__link" href="#"
                    >тел: +998999111306</a
                    >
                </div>
            </div>
        </div>
    </div>
    <div class="modal__blok" id="share-modal">
        <div class="modal__share">
            <div class="cannel">
                <img src="/images/cannel.png" alt="" />
            </div>

            <ul class="social social__share">
                <li class="social__item">
                    <a
                            href="https://www.instagram.com/bekk_0511/"
                            class="social__link"
                            target="_blank"
                    >
                        <img
                                src="/images/instagram.svg"
                                alt="toinstagram"
                        />
                    </a>
                </li>
                <li class="social__item">
                    <a
                            href="https://www.instagram.com/bekk_0511/"
                            class="social__link"
                            target="_blank"
                    >
                        <img
                                src="/images/vk.svg"
                                alt="toinstagram"
                        />
                    </a>
                </li>
                <li class="social__item">
                    <a
                            href="https://xn--80affa3aj0al.xn--80asehdb/#/im"
                            class="social__link"
                            target="_blank"
                    >
                        <img
                                class="social__tg"
                                src="/images/tg.png"
                                alt="toinstagram"
                        />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal__blok" id="story-modal">
        <div class="modal__story">
            <div class="cannel">
                <img src="/images/cannel.png" alt="" />
            </div>
            <img src="/images/Story1.jpg" alt="" />
        </div>
    </div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
