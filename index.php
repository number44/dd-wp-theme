<?php

get_header(); ?>
<!-- example react component -->
<div id="front-root">sssx</div>
<!-- end example react component -->
<div class="grid">

    <?php if (have_posts()) {

        while (have_posts()) {
            the_post(); ?>
            <div>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_content(); ?>
            </div>
    <?php }
    }
    ?>
</div>
<?php
get_footer();
