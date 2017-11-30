<?php

/*

Template Name: FAQ

*/

?>


<div class="wrap">

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

        <?php

            $args = array( 'post_type' => 'qr', 'posts_per_page' => 20 );

            $loop = new WP_Query( $args );
            echo '<div class="faq">';
            while ( $loop->have_posts() ) : $loop->the_post();

                echo '<div class="trombi-content">';

                the_content();

                echo '</div>';

            endwhile;
            echo '</div>';
        ?>

        </main><!-- #main -->

    </div><!-- #primary -->

</div><!-- .wrap -->
