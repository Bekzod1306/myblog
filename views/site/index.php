<?php
/**
 * @var \yii\data\Pagination $pagination;
 * @var \app\models\Article $articles;
 */

use yii\helpers\Url;
use yii\widgets\LinkPager;
use app\widgets\DivPager;
?>
    <div class="container">
        <!-- Stories -->
        <div class="stories">
            <div class="stories__item" data-modal="story-modal">
                <img
                        class="stories__item_preview"
                        src="/images/Story1.jpg"
                        alt=""
                />
                <div class="stories__item_title">Отдыхаю на природе</div>
                <time class="stories__item_date" datetime="2020-09-21"
                >21.09.2020</time
                >
            </div>
            <div class="stories__item" data-modal="story-modal">
                <img
                        class="stories__item_preview"
                        src="/images/Story2.jpg"
                        alt=""
                />
                <div class="stories__item_title">Заканчиваю сложный проект</div>
                <time class="stories__item_date" datetime="2020-09-21"
                >21.09.2020</time
                >
            </div>
            <div class="stories__item" data-modal="story-modal">
                <img
                        class="stories__item_preview"
                        src="/images/Story3.jpg"
                        alt=""
                />
                <div class="stories__item_title">Отдыхаю на природе</div>
                <time class="stories__item_date" datetime="2020-09-21"
                >21.09.2020</time
                >
            </div>
            <div class="stories__item" data-modal="story-modal">
                <img
                        class="stories__item_preview"
                        src="/images/Story4.jpg"
                        alt=""
                />
                <div class="stories__item_title">Заканчиваю сложный проект</div>
                <time class="stories__item_date" datetime="2020-09-21"
                >21.09.2020</time
                >
            </div>
        </div>
        <!-- /Stories -->

        <!--Add Post -->
        <div class="add__post">
            <form class="add__post_form" action="/" method="post">
                <textarea
                        name="add__post_textarea"
                        placeholder="Напишите что-нибудь"
                ></textarea>
                <div class="add__post_actions">
                    <label class="add__post_file" for="add-post-file-input">
                        <input type="file" id="add-post-file-input" />
                        <img
                                src="/images/add_photo.svg"
                                alt=""
                        />
                    </label>
                    <button class="add__post_send" type="submit">
                        <img
                                src="/images/add_send.svg"
                                alt=""
                        />
                    </button>
                </div>
            </form>
        </div>

        <!-- <div class="post">
            <div class="post__content">
                <p class="post__text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. Minus blanditiis itaque, esse quia voluptatum
                    nulla aut magni, quam vitae, voluptate veritatis.
                    Commodi tempora eius adipisci molestias eum facere
                    quidem culpa!
                </p>
            </div>
            <div class="post__footer">
                <ul class="post__data">
                    <li class="post__data_item">
                        <time datetime="2020-06-21 19:20"
                        >21.06.2020</time
                        >
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- Post1 -->
    <?php foreach ($articles as $article): ?>
        <article class="post">
            <div class="post__header post__header_preview">
                <img style="height:400px" src="<?= $article->getImage() ?>"  alt="" />
            </div>
            <div class="post__content">
                <h2 class="post__title">
                    <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"
                    ><?= $article->title ?></a
                    >
                </h2>
                <br>
                <p class="post__text">
                    <?= $article->description ?>
                </p>
            </div>
            <div class="post__footer">
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
                <a class="post__read" href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?= (int ) $article->viewed ?> читать</a>
            </div>
        </article>
        <?php endforeach; ?>

     <?php    echo LinkPager::widget([
         'pagination' => $pagination,
     ]); ?>

<!--        --><?php
//        echo LinkPager::widget([
//            'pagination' => $pages,
//            'options' => [
//                'class' => 'pagination',
//                'firstPageLabel' => '',
//                'lastPageLabel' => '',
//                'prevPageLabel' => 'previous',
//                'nextPageLabel' => 'next',
//
//                'pageCssClass' => 'filter_nav',
//                'nextPageCssClass' => 'prev_s',
//                'nextPageCssClass' => 'next_s',
//
//                'firstPageCssClass' => 'lknflbes',
//                'maxButtonCount' => 1,
//            ]
//        ]);
//        ?>
<!--        --><?php //echo DivPager::widget([
//            'pagination' => $pages,
//            'options' => [
//                'class' => 'filter_nav',
//            ],
//            'maxButtonCount'=>1,
//            'prevPageLabel'=>'&lsaquo;',
//            'nextPageLabel'=>'&rsaquo;',
//            'prevPageCssClass' => 'prev_s',
//            'nextPageCssClass' => 'next_s',
//
//            'maxButtonCount' => 1,
//        ]);?><!--?>-->

        <!-- Pagination -->
<!--        <ul class="pagination">-->
<!--            <li class="pagination__item">-->
<!--                <a href="#" class="pagination__item_link">&lt;</a>-->
<!--            </li>-->
<!--            <li class="pagination__item">-->
<!--                <a href="#" class="pagination__item_link">1</a>-->
<!--            </li>-->
<!--            <li class="pagination__item active">-->
<!--                <a href="#" class="pagination__item_link">2</a>-->
<!--            </li>-->
<!--            <li class="pagination__item">-->
<!--                <a href="#" class="pagination__item_link">3</a>-->
<!--            </li>-->
<!--            <li class="pagination__item">-->
<!--                <a href="#" class="pagination__item_link">&gt;</a>-->
<!--            </li>-->
<!--        </ul>-->

    </div>
