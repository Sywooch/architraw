
    <main class="main blog-page" id="fullpage">
        <?php foreach ($categories as $category) :?>
        <section class="main_section first_portfolio_section">
            <div class="main_section__wrapper">
                <div class="row">
                    <div class="small-12 main_section__inner align-self-middle columns">
                        <div class="row">
                            <div class="large-4 pr-50 columns">
                                <p class="pre-title">Портфолио</p>
                                <p class="like_h1"><?=$category->title?></p>
                                <p class="text"><?=$category->description?></p>

                            </div>
                            <div class="large-8 portfolio columns">
                                <div class="row">
                                    <?php foreach ($category->projects as $project){?>
                                        <div class="portfolio__item large-3 medium-4 columns">
                                            <img src="/uploads/<?=$project->image?>" alt="portfolio_img" width="290" height="300" class="portfolio__img" />
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
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endforeach;?>
    </main>
