<?php
/*
Template Name: Contact
*/
?>
<div class="node-content">
    <div class="field field-name-body field-type-text-with-summary field-label-hidden">
        <div class="field-item even" property="content:encoded">
            <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=wkZjX6NT_PZUqK5VW0VszGtlmslcsUui&amp;width=100%&amp;height=300"></script>
            <?php while (have_posts()) : the_post(); ?>
                           <?php get_template_part('templates/content', 'page'); ?>
            <?php endwhile; ?>

        </div>
    </div>
</div>
