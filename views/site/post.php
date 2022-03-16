<?php
/**
 * @var \yii\data\Pagination $pages;
 * @var \app\models\Article $articles;
 * @var \app\models\Article $article;
 * @var \app\models\Article $comments;
 * @var \app\models\Article $commentForm;
 *
 */
use yii\widgets\LinkPager;
use app\widgets\DivPager;
use yii\helpers\Url;
?>

<div class="container">
    <article class="post">
        <div class="post__action">
            <a href="/">вернуться назад</a>
            <a data-modal="share-modal"
            >поделиться
                <img src="/images/share .svg" alt="" />
            </a>
        </div>

        <div class="post__header">
            <h2 class="post__title">
                <?= $article->title ?>
            </h2>
            <ul class="post__data">
                <li class="post__data_item">
                    <time datetime="2020-06-21 19:20"
                    ><?= $article->date ?></time
                    >
                </li>
                <li class="post__data_item">
                    <a href="#">Cоздание сайтов</a>
                </li>
            </ul>
        </div>
        <div class="post__content">
            <p class="post__text">
                <?= $article->description ?>
            </p>
            <img width="100%" height="400px" src="<?= $article->getImage() ?>"  alt="" />
            <p class="post__text">
                <?= $article->content ?>
            </p>
            <div class="releted">
                <h3 class="releted__title">Интересно почитать</h3>
                <ul class="releted__list">
                    <li class="releted__list_item">
                        <h4 class="releted__list_title">
                            <a href="#"
                            >Как я сходил на
                                FrontEnd Conf 2021</a
                            >
                        </h4>
                        <time
                            class="releted__list_date"
                            datetime="2020-06-21"
                        >21.06.2020</time
                        >
                    </li>
                    <li class="releted__list_item">
                        <h4 class="releted__list_title">
                            <a href="#"
                            >Как писать код быстро и
                                ...
                            </a>
                        </h4>
                        <time
                            class="releted__list_date"
                            datetime="2020-06-21"
                        >21.06.2020</time
                        >
                    </li>
                    <li class="releted__list_item">
                        <h4 class="releted__list_title">
                            <a href="#"
                            >Купил новый ноутбук за
                                150 000 руб</a
                            >
                        </h4>

                        <time
                            class="releted__list_date"
                            datetime="2020-06-21"
                        >21.06.2020</time
                        >
                    </li>
                    <li class="releted__list_item">
                        <h4 class="releted__list_title">
                            <a href="#"
                            >Купил новый ноутбук за
                                150 000 руб</a
                            >
                        </h4>

                        <time
                            class="releted__list_date"
                            datetime="2020-06-21"
                        >21.06.2020</time
                        >
                    </li>
                </ul>
            </div>

            <?= $this->render('/partials/comment', [
                'article'=>$article,
                'comments'=>$comments,
                'commentForm'=>$commentForm,
            ])?>

        </div>
    </article>

</div>