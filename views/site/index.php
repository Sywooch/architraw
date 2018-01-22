<?php

/* @var $this yii\web\View */

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>

    <main class="main" id="fullpage">
        <section class="main_section first_home_section">
            <div class="main_section__wrapper">
                <div class="row">
                    <div class="large-8 main_section__inner align-self-middle columns" style="color: #fff;">
                        <p class="pre-title"><b>ARCHITRAV</b> <span>Design group</span></p>
                        <h1 class="title"><?=$header->title?></h1>
                        <p class="text"><?=$header->text?></p>
                        <div class="links_block">
                            <a href="#" class="orange-btn">Обсудить проект</a>
                            <a href="site/download" class="btn-dwn">Скачать презентацию</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main_section second_home_section">
            <div class="main_section__wrapper">
                <div class="row">
                    <div class="small-12 main_section__inner align-self-middle columns">
                        <div class="row">
                            <div class="large-4 pr-50 columns">
                                <p class="pre-title">Услуги</p>
                                <p class="like_h1"><?=$service->title?></p>
                                <p class="text"><?=$service->text?></p>
                            </div>
                            <div class="large-8 columns">
                                <div class="row gallery">
                                    <?php foreach ($service_categories as $service_category):?>
                                    <div class="large-4 gallery__item columns">
                                        <figure>
                                            <img src="uploads/<?=$service_category->image?>" alt="card-gallery" class="gallery__img" />
                                            <figcaption>
                                                <span class="gallery__title"><?=$service_category->title?></span>
                                                <span class="gallery__text"><?=$service_category->description?></span>
                                                <a href="#" class="gallery__link">подробнее <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main_section third_home_section">
            <div class="main_section__wrapper">
                <div class="row">
                    <div class="small-12 main_section__inner align-self-middle columns">
                        <div class="row">
                            <div class="large-4 pr-50 columns">
                                <p class="pre-title">Портфолио</p>
                                <p class="like_h1"><?=$project->title?></p>
                                <p class="text"> <?=$project->text?></p>
                                <div class="text">
                                    <p class="mb-5">Посмотрите все нащи работы:</p>
                                    <ul class="text-list">
                                        <?php foreach ($service_categories as $service_category):?>
                                            <li><a href="#"><?=$service_category->title?></a></li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                            </div>
                            <div class="large-8 portfolio columns">
                                <div class="row">
                                    <?php foreach ($projects as $project):?>
                                    <div class="portfolio__item large-3 medium-4 columns">
                                        <img src="uploads/<?=$project->image?>" alt="portfolio_img" width="290" height="300" class="portfolio__img" />
                                        <div class="portfolio__meta">
                                            <i class="portfolio__cat"><?=$project->category?></i>
                                            <p class="portfolio__title"><?=$project->name?></p>
                                            <p class="portfolio__text">
                                                Общая площадь: <?=$project->flat?><br/>
                                                Статус: <?=$project->status?><br/>
                                            </p>
                                            <a href="#" class="portfolio__link">подробнее <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main_section fourth_home_section">
            <div class="main_section__wrapper">
                <div class="row">
                    <div class="small-12 main_section__inner align-self-middle columns">
                        <div class="row align-middle">
                            <div class="large-6 columns">
                                <img src="img/home_section/about_architrav.png" alt="W" />
                            </div>
                            <div class="large-6 section__text columns">
                                <p class="pre-title">О нас</p>
                                <p class="like_h1"><?=$about->title?></p>
                                <div class="row">
                                    <div class="large-6 columns">
                                        <p class="text"><?=$about->text1?></p>
                                    </div>
                                    <div class="large-6 columns">
                                        <p class="text"><?=$about->text2?></p>
                                    </div>
                                </div>
                                <div class="row block_advantages">
                                    <div class="large-5 large-offset-1 advantages__item columns"><p>лет компании</p></div>
                                    <div class="large-5 large-offset-1 advantages__item columns"><p>число пройденных экспертиз проектов за последний год</p></div>
                                    <div class="large-5 large-offset-1 advantages__item columns"><p>получено разрешений на строительство за последний год</p></div>
                                    <div class="large-5 large-offset-1 advantages__item columns"><p>баз отдыха, в проектировнии которых мы принимали участие</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main_section fifth_home_section">
            <!--<div class="main_section__wrapper workflow">-->
            <!--<div class="row">-->
            <!--<div class="small-12 align-self-middle columns">-->
            <!--<div class="row align-middle">-->
            <!--<div class="large-6 columns">-->
            <!--<p class="pre-title">Workflow</p>-->
            <!--<p class="like_h1">Схема <br/> сотрудничества</p>-->
            <!--<div class="text" style="text-align: right; padding-right: 10rem;">-->
            <!--<img src="img/people.png" alt="people" />-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="large-6 workflow__img columns">-->
            <!--<img src="img/workflow.png" alt="workflow" />-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
        </section>
        <section class="main_section sixth_home_section">
            <div class="main_section__wrapper">
                <div class="row">
                    <div class="small-12 main_section__inner align-self-middle columns">
                        <div class="row">
                            <div class="large-5 columns">
                                <p class="pre-title">Контакты</p>
                                <p class="like_h1">Будем на связи</p>
                            </div>
                            <div class="large-3 columns">
                                <div class="contacts_item">
                                    <img src="img/footer/telephone.png" alt="telephone" />
                                    <a href="#" class="contacts_item__link"><?=$info->phone?></a>
                                </div>
                                <div class="contacts_item large-offset-5">
                                    <img src="img/footer/email.png" alt="email" />
                                    <a href="#" class="contacts_item__link"><?=$info->email?></a>
                                </div>
                                <div class="contacts_item">
                                    <img src="img/footer/maps.png" alt="maps" />
                                    <a href="#" class="contacts_item__link"><?=$info->address?></a>
                                </div>
                            </div>
                            <div class="large-4 columns">
                                <div class="contact_form">
                                    <p class="contact_form__title text-center">Хотите получить консультацию по проекту или задать вопрос?</p>
                                    <p class="contact_form__sub-title text-center">Задайте его в форме ниже и наш менеджер свяжется с Вами в ближайшее время</p>
                                    <?php $form = ActiveForm::begin(); ?>
                                        <div class="form-container">
                                            <label>
                                                <?= $form->field($model, 'name')->textInput([
                                                    'placeholder' => 'Ваше имя'
                                                ])->label(false) ?>
                                            </label>
                                        </div>
                                        <div class="form-container">
                                            <label>
                                                <?= $form->field($model, 'phone')->textInput([
                                                    'placeholder' => 'Ваш телефон'
                                                ])->label(false) ?>
                                            </label>
                                        </div>
                                        <div class="form-container">
                                            <label>
                                                <?= $form->field($model, 'email')->textarea([
                                                    'rows' => 10,
                                                    'placeholder' => 'Ваше сообщение'
                                                ])->label(false) ?>
                                            </label>
                                        </div>
                                        <div class="form-container">
                                            <?= Html::submitButton('Отправить', ['class' => 'contact_form__sumbit']) ?>
                                        </div>
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
