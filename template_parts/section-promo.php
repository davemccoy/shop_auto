<?php
$images = get_field('baners');
if (get_field('first_slide_text')) {
    $slide1 = get_field('first_slide_text');
} else {
    $slide1 = __('Мы готовы приехать и <span>купить</span> Ваш автомобиль ', 'shop_auto');
}

if (get_field('second_slide_text')) {
    $slide2 = get_field('second_slide_text');
} else {
    $slide2 = __('Автовыкуп - Дорого, Быстро. Выкуп сразу в день осмотра', 'shop_auto');
}

if (get_field('third_slide_text')) {
    $slide3 = get_field('third_slide_text');
} else {
    $slide3 = __('Выкуп авто до 95% от рынка. Оценка по телефону.', 'shop_auto');
}
if($images) { ?>
    <div style="display: none">
        <?php foreach( $images as $image ): ?>
            <img src="<?php echo $image['url']; ?>" alt="">
        <?php endforeach; ?>
    </div>
    <script>
        jQuery(document).ready(function ($) {
            $(function () {
                var item_image = $('.js-promo');
                var item_texts = $('.js-slider-text');
                var backgrounds = [
                    <?php foreach( $images as $image ): ?>
                    'url(<?php echo $image['url']; ?>)',
                    <?php endforeach; ?>
                ];
                var texts = [
                    '<?php echo $slide1 ?>',
                    '<?php echo $slide2 ?>',
                    '<?php echo $slide3 ?>'
                ];
                var current = 0;
                var text_current = 0;

                function nextBackground() {
                    item_image.css(
                        'background-image',
                        backgrounds[current = ++current % backgrounds.length]);
                    setTimeout(function() {
                       item_texts.text(texts[text_current = ++text_current % texts.length]);
                    }, 300)
                    setTimeout(nextBackground, 4700);
                }                

                setTimeout(nextBackground, 4700); 
                item_image.css('background-image', backgrounds[0]);
                item_texts.text(texts[0]);
            });
        });
    </script>
    <section class="promo js-promo <?php if (get_field('baners')) {
        echo 'white';
    } ?>">
        <div class="container-fluid container-800" style="padding-left: 0">
            <div class="row">
                <div class="col-md-9 col-sm-8 hide-800">
                    <div class="js-slider-text slider-text">

                    </div>
                    <?php get_template_part('template_parts/section', 'count') ?>
                </div>
                <div class="col-md-3 col-sm-4 center-block-800">
                    <div class="call_back">
                        <a href="javascript:void('0')">
                            <?php _e('заказать обратный звонок', 'shop_auto') ?>
                        </a>
                    </div>

                    <form class="price_request">
                        <div class="thx-message" style="display: none">
                            <?php _e('Спасибо за заявку. Мы скоро свяжемся с Вами', 'shop_auto') ?>
                        </div>
                        <div class="form_title">
                            <?php _e('Узнать стоимость своего авто в пару кликов ', 'shop_auto') ?>
                        </div>
                        <div class="inputs_wrapper">
                            <select class="input" name="year" id="">
                                <option value="0" style="color:#CCC;"><?php _e('Год выпуска', 'shop_auto') ?></option>
                                <script>
                                    var year = new Date().getFullYear();
                                    for (var i = year; i >= 1910; i--) {
                                        document.write('<option value="' + i + '">' + i + '</option>');
                                    }
                                </script>
                            </select>
                            <select class="input" name="brand" id="rst-oldcars-form-make">
                                <?php
                                $wpdb_sale = new wpdb("shopavto_db", "BsDsJFhE", "shopavto_db", "shopavto.mysql.tools");
                                $q = $wpdb_sale->get_results("SELECT t.term_id, t.name, t.slug FROM sale_terms AS t INNER JOIN sale_term_taxonomy AS tt ON (t.term_id = tt.term_id AND tt.parent = 0) WHERE tt.taxonomy IN ('carproducer') ORDER BY t.name ASC");
                                echo '<option selected="selected" value="0">Марка авто</option>';
                                foreach ($q as $row) {
                                    echo '<option data-brand="' . $row->name . '" value="' . $row->term_id . '">' . $row->name . '</option>';
                                } ?>

                            </select>
                            <select class="input" name="model" id="rst-oldcars-form-model" disabled="true">
                                <option value="">Модель авто</option>
                            </select>

                            <input class="input" type="tel" name="tel" placeholder="Номер телефона">
                        </div>
                        <div class="send_btn">
                            <button class="btn"><?php _e('Узнать', 'shop_auto') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>

    <section class="promo">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                    <div class="section-title center">
                        <?php _e('Выкуп авто в любом состоянии', 'shop_auto') ?>
                        <div class="section-sub-title">
                            <?php _e('Выезд в любую точку Украины', 'shop_auto') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid container-800" style="padding-left: 0">
            <div class="row">
                <div class="col-md-9 col-sm-8 hide-800">
                    <div class="promo-slider owl-carousel">
                        <div class="slide">
                            <div class="text">
                                <?php
                                if (get_field('first_slide_text')) {
                                    the_field('first_slide_text');
                                } else {
                                    _e('Мы готовы приехать и <span>купить</span> Ваш автомобиль ', 'shop_auto');
                                }
                                ?>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/_images/car1.png" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="text">
                                <?php
                                if (get_field('second_slide_text')) {
                                    the_field('second_slide_text');
                                } else {
                                    _e('Автовыкуп - Дорого, Быстро. Выкуп сразу в день осмотра', 'shop_auto');
                                }
                                ?>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/_images/car2.png" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="text">
                                <?php
                                if (get_field('third_slide_text')) {
                                    the_field('third_slide_text');
                                } else {
                                    _e('Выкуп авто до 95% от рынка. Оценка по телефону.', 'shop_auto');
                                }
                                ?>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/_images/car3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 center-block-800">
                    <div class="call_back">
                        <a href="javascript:void('0')">
                            <?php _e('заказать обратный звонок', 'shop_auto') ?>
                        </a>
                    </div>

                    <form class="price_request">
                        <div class="thx-message" style="display: none">
                            <?php _e('Спасибо за заявку. Мы скоро свяжемся с Вами', 'shop_auto') ?>
                        </div>
                        <div class="form_title">
                            <?php _e('Узнать стоимость своего авто в пару кликов ', 'shop_auto') ?>
                        </div>
                        <div class="inputs_wrapper">
                            <select class="input" name="year" id="">
                                <option value="0" style="color:#CCC;"><?php _e('Год выпуска', 'shop_auto') ?></option>
                                <script>
                                    var year = new Date().getFullYear();
                                    for (var i = year; i >= 1910; i--) {
                                        document.write('<option value="' + i + '">' + i + '</option>');
                                    }
                                </script>
                            </select>
                            <select class="input" name="brand" id="rst-oldcars-form-make">
                                <?php
                                $wpdb_sale = new wpdb("shopavto_db", "BsDsJFhE", "shopavto_db", "shopavto.mysql.tools");
                                $q = $wpdb_sale->get_results("SELECT t.term_id, t.name, t.slug FROM sale_terms AS t INNER JOIN sale_term_taxonomy AS tt ON (t.term_id = tt.term_id AND tt.parent = 0) WHERE tt.taxonomy IN ('carproducer') ORDER BY t.name ASC");
                                echo '<option selected="selected" value="0">Марка авто</option>';
                                foreach ($q as $row) {
                                    echo '<option data-brand="' . $row->name . '" value="' . $row->term_id . '">' . $row->name . '</option>';
                                } ?>

                            </select>
                            <select class="input" name="model" id="rst-oldcars-form-model" disabled="true">
                                <option value="">Модель авто</option>
                            </select>

                            <input class="input" type="tel" name="tel" placeholder="Номер телефона">
                        </div>
                        <div class="send_btn">
                            <button class="btn"><?php _e('Узнать', 'shop_auto') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php } ?>