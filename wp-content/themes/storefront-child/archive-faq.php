<div class="FAQ">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="faq">

        <div class="content">
          <?php the_content();
		get_template_part( 'template-parts/post/content', 'faq' );
echo "salut";
 ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
