<?php get_header(); ?>

<article>
  <section>
    <div class="content">
      <h2>piwheels blog</h2>
  <?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>
  <div class="small-12 medium-8 columns">
    <date><?php echo get_the_date(); ?></date>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    <div class="callout primary">
      <?php show_tag_list(get_the_ID(), ', ', 'Tags: '); ?>
    </div>
  </div>
  <?php endwhile; ?>
<?php else: ?>
  <div class="small-12 medium-8 columns">
    <h2>No posts</h2>
  </div>
<?php endif; ?>
    </div>
  </section>
</article>


<?php get_footer();