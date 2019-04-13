<?php get_header(); ?>

<div class="row">
<?php if (have_posts()): ?>
    <h1>piwheels blog</h1>
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
    <div></div>
<?php else: ?>
    <h1>404 - page not found</h1>
<?php endif; ?>

</div>

<?php get_footer();
