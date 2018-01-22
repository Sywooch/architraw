<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$info_header = \app\models\Info\Info::find()->one();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">
    <div id="offcanvas-full-screen" class="offcanvas-full-screen position-top"  data-off-canvas data-transition="overlap">
        <div class="offcanvas-full-screen__inner">
            <div class="offcanvas-screen__content">
                <div class="row">
                    <div class="small-12 align-self-middle columns">
                        <ul class="offcanvas-full-screen__menu">
                            <li><a href="#" class="link">Главная</a></li>
                            <li><a href="#" class="link">Услуги</a></li>
                            <li><a href="#" class="link">Портфолио</a></li>
                            <li><a href="#" class="link">О нас</a></li>
                            <li><a href="#" class="link">Как мы работаем</a></li>
                            <li><a href="#" class="link">Блог</a></li>
                            <li><a href="#" class="link">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="close-button" aria-label="Close menu" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <header class="header">
        <div class="row">
            <div class="top-bar align-justify">
                <div class="top-bar-left">
                    <div class="top-bar__logo">
                        <img src="img/header/h_logo.svg" width="110" height="110" alt="Logo">
                    </div>
                </div>
                <div class="top-bar-right">
                    <div class="top-bar__links">
                        <ul class="top-bar__list">
                            <li><a href="#" class="email"><?=$info_header->email?></a></li>
                            <li><a href="#" class="telephone"><?=$info_header->phone?></a></li>
                            <li><a href="#" class="btn-call-modal">Заказать звонок</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    <footer class="footer">
        <div class="footer__content">
            <div class="row footer__inner_row">
                <div class="large-6">
                    <ul class="footer__list">
                        <li><a href="#" class="footer_link">Facebook</a></li>
                        <li><a href="#" class="footer_link">Youtube</a></li>
                        <li><a href="#" class="footer_link">Instagram</a></li>
                        <li><a href="#" class="footer_link">Google+</a></li>
                    </ul>
                </div>
                <div class="large-6 text-right">
                    <a href="#" class="footer_link">Портфолио</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

