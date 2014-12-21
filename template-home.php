<?php
/*
Template Name: Home
*/
?>
    <div id="owl-example" class="owl-carousel">
        <div class="general-slider"><img class="" src="<?php bloginfo('template_url'); ?>/assets/img/slide1.jpg"></div>
        <div class="general-slider"><img src="<?php bloginfo('template_url'); ?>/assets/img/retro_dra_69.jpg"></div>
    </div>
<?php while (have_posts()) : the_post(); ?>
    <div>
        <p class="about-title">О КОМПАНИИ</p>
        <p class="rtecenter"><span>«VIP-ОКНА» — это производитель окон, который начал свое развитие в 1993
                в Армении, и два года назад начали свою деятельность в городе Самара.</span>
            <br>
            <span> За это время мы успели заслужить доверие и уважение многих клиентов. Мы работаем
                качественно, выполняя даже самые сложные заказы точно в срок.</span>

        </p>
    </div>
    <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>