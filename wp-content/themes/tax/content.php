<!-- Content -->
<main>
    <section class="head-block">
        <div class="wrap">
            <h1>Бизнес — <br> в любой точке мира!</h1>
            <a href="#">узнать как</a>
            <div class="icon-scroll"></div>
        </div>
    </section>
    <section class="our-services">
        <div class="wrap">
            <div class="title">
                <?php
                $args_our_services = array(
                    'post_type' => 'our_services', //slag
                    'posts_per_page' => 10,
                );
                $our_services = new WP_Query($args_our_services);

                //loop
                $i = 0;
                $ix = 0;
                if ($our_services->have_posts()) :
                    $result = object_to_array($our_services);
                    foreach ($result['posts'] as $item) {
                        //display title
                        if ($item['post_content'] == 'Заголовок') {
                            if ($i == 0) {
                                echo $item['post_title'];
                                echo "</div>";
                            }
                            $i++;
                        }
                        if ($item['post_title'] == 'Описание') {
                            if (($i > 0) && ($ix == 0)) {
                                echo "<div class='text'>";
                                echo $item['post_content'];
                                echo "</div>";
                                echo "<div class='services'>";
                            }
                            $ix++;
                        }
                    }
                endif;
                wp_reset_postdata(); // return global variables to state of main query
                $args_our_services = array(
                    'post_type' => 'our_services', //slag
                    'posts_per_page' => 10,
                    'meta_key' => 'wpcf-number_our_services',
                    'orderby' => 'meta_value',
                    'order' => 'ASC'
                );
                $our_services = new WP_Query($args_our_services);
                if ($our_services->have_posts()) :
                    while ($our_services->have_posts()) :
                        $our_services->the_post();
                        //display benefits
                        if (!get_the_content()) {
                            echo "<div class='item'>";
                            the_post_thumbnail();
                            echo " <p><span>";
                            echo types_render_field("number_our_services", array("style" => "FIELD_NAME : $ FIELD_VALUE"));
                            echo "</span>";
                            the_title();
                            echo "</p>";
                            echo "</div>";
                        }
                    endwhile;
                endif;
                wp_reset_postdata(); // return global variables to state of main query ?>
            </div>
    </section>

    <section class="special-offer">
        <div class="offer-title">
            <?php
            $args_special_offers = array(
                'post_type' => 'special_offers', //slag
                'posts_per_page' => 10,
            );
            $special_offers = new WP_Query($args_special_offers);

            //loop
            $i = 0;
            if ($special_offers->have_posts()) :
                while ($special_offers->have_posts()) :
                    $result = object_to_array($special_offers);
                    foreach ($result['posts'] as $item) {
                        //display title
                        if ($item['post_content'] == 'Заголовок') {
                            if ($i == 0) {
                                echo $item['post_title'];
                                echo "</div>";
                                echo "<div class='wrap'>";
                                echo "<div class='owl-carousel carousel-1'>";
                            }
                            $i++;
                        }
                    }
                    $special_offers->the_post();
                    //display benefits
                    if (!get_the_content()) {
                        echo "<div class='item'>";
                        echo "<div class='item-wrap'><p>";
                        the_title();
                        echo "</p>";
                        echo "<a href='#'>ПОДРОБНЕЕ<img src='";
                        echo bloginfo('template_url') . "/img/right-arrow.png' alt=''></a></div></div>";
                    }
                endwhile;
            endif;
            wp_reset_postdata(); // return global variables to state of main query ?>
        </div>
        </div>
    </section>
    <section class="results">
        <div class="wrap">
            <div class="results-title"><?php
                $args_result_in_numbers = array(
                    'post_type' => 'result_in_numbers', //slag
                    'posts_per_page' => 10,
                );
                $result_in_numbers = new WP_Query($args_result_in_numbers);

                //loop
                $i = 0;
                $ix = 0;
                $description = '';
                if ($result_in_numbers->have_posts()) :
                    $result = object_to_array($result_in_numbers);
                    foreach ($result['posts'] as $item) {
                        //display title
                        if ($item['post_content'] == 'Заголовок') {
                            if ($i == 0) {
                                echo $item['post_title'];
                                echo "</div>";
                                echo "<div class='result-items'>";
                            }
                            $i++;
                        }
                        if ($item['post_title'] == 'Боковой_текст') {
                            if (($i > 0) && ($ix == 0)) {
                                $description = "<div class='item bank'>";
                                $description .= "<img src='";
                                $description .= get_bloginfo('template_url') . "/img/bank.png' alt=''>";
                                $description .= "<p>";
                                $description .= $item['post_content'];
                                $description .= "</p></div>";
                            }
                            $ix++;
                        }
                    }
                endif;

                $check_div = 0;
                if ($result_in_numbers->have_posts()) :
                    while ($result_in_numbers->have_posts()) :
                        $result_in_numbers->the_post();
                        //display benefits
                        if ((get_the_content() != 'Заголовок') && (get_the_title() != 'Боковой_текст')) {
                            if($check_div%2 == 0)
                            echo "<div class='item'>";
                            echo "<div class='number'>";
                            the_title();
                            echo "</div>";
                            echo "<p>";
                            the_content();
                            echo "</p>";
                            if($check_div%2 == 1)
                            echo "</div>";
                            $check_div++;
                        }
                    endwhile;
                endif;
                echo $description;
                wp_reset_postdata(); // return global variables to state of main query ?>
        </div>
    </section>
    <section class="our-work">
        <div class="wrap">
            <div class="title">КАК МЫ РАБОТАЕМ</div>
            <div class="work-item">
                <div class="item">
                    <div><img src="<?php bloginfo('template_url') ?>/img/h-work-1.png" alt=""></div>
                    <div class="shema">
                        <div class="circle"></div>
                        <div class="rectangle"></div>
                    </div>
                    <p>Определяем цели и задачи<br> для регистрации компании</p>
                </div>
                <div class="item">
                    <div><img src="<?php bloginfo('template_url') ?>/img/h-work-2.png" alt=""></div>
                    <div class="shema">
                        <div class="circle"></div>
                        <div class="rectangle"></div>
                    </div>
                    <p>Выбираем название и<br> юрисдикцию компании</p>
                </div>
                <div class="item">
                    <div><img src="<?php bloginfo('template_url') ?>/img/h-work-3.png" alt=""></div>
                    <div class="shema">
                        <div class="circle"></div>
                        <div class="rectangle"></div>
                    </div>
                    <p>Консультируем в отношении<br> ведения бухгалтерии и<br> налогового планирования</p>
                </div>
                <div class="item">
                    <div><img src="<?php bloginfo('template_url') ?>/img/h-work-4.png" alt=""></div>
                    <div class="shema">
                        <div class="circle"></div>
                        <div class="rectangle"></div>
                    </div>
                    <p>Выбираем банк для<br>
                        открытия счета</p>
                </div>
                <div class="item">
                    <div><img src="<?php bloginfo('template_url') ?>/img/h-work-5.png" alt=""></div>
                    <div class="shema">
                        <div class="circle"></div>
                        <div class="rectangle"></div>
                    </div>
                    <p>Консультируем в отношении<br> дальнейшего <br>администрирования компании</p>
                </div>
            </div>
        </div>
    </section>
    <section class="advanteges">
        <div class="wrap">
            <div class="item">
                <div class="title">
                    <?php
                    $args_flavor = array(
                        'post_type' => 'flavor', //slag
                        'posts_per_page' => 8,
                    );
                    $flavor = new WP_Query($args_flavor);

                    //loop
                    $i = 0;
                    if ($flavor->have_posts()) :
                        $result = object_to_array($flavor);
                        foreach ($result['posts'] as $item) {
                            //display title
                            if ($item['post_content'] == 'Заголовок') {
                                if ($i == 0) {
                                    echo $item['post_title'];
                                    echo "</div>";
                                }
                                $i++;
                            }
                        }
                    endif;
                    wp_reset_postdata(); // return global variables to state of main query
                    $args_flavor = array(
                        'post_type' => 'flavor', //slag
                        'posts_per_page' => 10,
                        'meta_key' => 'wpcf-number_flv',
                        'orderby' => 'meta_value',
                        'order' => 'ASC'
                    );
                    $flavor = new WP_Query($args_flavor);
                    if ($flavor->have_posts()) :
                        while ($flavor->have_posts()) :
                            $flavor->the_post();
                            //display benefits
                            if (!get_the_content()) {
                                echo "<p><span>";
                                echo types_render_field("number_flv", array("style" => "FIELD_NAME : $ FIELD_VALUE"));
                                echo "</span>";
                                the_title();
                                echo "</p>";
                            }
                        endwhile;
                    endif;
                    wp_reset_postdata(); // return global variables to state of main query ?>
                </div>
            </div>
    </section>
    <section class="helpful-info">
        <div class="wrap">
            <div class="title">
                <?php
                $args_helpful_information = array(
                    'post_type' => 'helpful_information', //slag
                    'posts_per_page' => 10,
                );
                $_helpful_information = new WP_Query($args_helpful_information);

                //loop
                $i = 0;
                if ($_helpful_information->have_posts()) :
                    while ($_helpful_information->have_posts()) :
                        $result = object_to_array($_helpful_information);
                        foreach ($result['posts'] as $item) {
                            //display title
                            if ($item['post_content'] == 'Заголовок') {
                                if ($i == 0) {
                                    echo $item['post_title'];
                                    echo "</div>";
                                    echo "<div class='info-item'>";
                                }
                                $i++;
                            }
                        }
                        $_helpful_information->the_post();
                        //display benefits
                        if (!get_the_content()) {
                            echo "<div class='item'>";
                            echo "<a href='#'>";
                            the_title();
                            echo "</a></div>";
                        }
                    endwhile;
                endif;
                wp_reset_postdata(); // return global variables to state of main query ?>

            </div>
            <div class="see-more">
                <a href="#">ПОКАЗАТЬ БОЛЬШЕ</a>
            </div>
        </div>
    </section>
    <section class="feadback-form">
        <div class="form-wrap">
            <div class="title-form">НАПИСАТЬ НАМ</div>
            <form action="">
                <input type="text" placeholder="Имя">
                <input type="email" placeholder="Email">
                <textarea name="" placeholder="Текст"></textarea>
                <input type="submit" value="Отправить">
            </form>
        </div>
    </section>
    <section class="news-front">
        <div class="title">НОВОСТИ</div>
        <div class="wrap">
            <div class="owl-carousel carousel-2">
                <div class="item">
                    <div class="item-wrap">
                        <div class="date">29 июня 2016</div>
                        <p>Британские Виргинские о-ва: новые требований для Регулируемых компаний и Взаимных фондов</p>
                        <a href="#"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item-wrap">
                        <div class="date">27 января 2016</div>
                        <p>Британские Виргинские о-ва: новые требований для Регулируемых компаний и Взаимных фондов</p>
                        <a href="#"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item-wrap">
                        <div class="date">29 июня 2016</div>
                        <p>Британские Виргинские о-ва: новые требований для Регулируемых компаний и Взаимных фондов</p>
                        <a href="#"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item-wrap">
                        <div class="date">27 января 2016</div>
                        <p>Британские Виргинские о-ва: новые требований для Регулируемых компаний и Взаимных фондов</p>
                        <a href="#"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item-wrap">
                        <div class="date">29 июня 2016</div>
                        <p>Британские Виргинские о-ва: новые требований для Регулируемых компаний и Взаимных фондов</p>
                        <a href="#"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item-wrap">
                        <div class="date">27 января 2016</div>
                        <p>Британские Виргинские о-ва: новые требований для Регулируемых компаний и Взаимных фондов</p>
                        <a href="#"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item-wrap">
                        <div class="date">29 июня 2016</div>
                        <p>Британские Виргинские о-ва: новые требований для Регулируемых компаний и Взаимных фондов</p>
                        <a href="#"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item-wrap">
                        <div class="date">27 января 2016</div>
                        <p>Британские Виргинские о-ва: новые требований для Регулируемых компаний и Взаимных фондов</p>
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End content -->