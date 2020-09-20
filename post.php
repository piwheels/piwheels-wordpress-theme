<div class="row">
    <div class="small-12 medium-8 columns">
        <date><?php echo get_the_date(); ?></date>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <div class="callout primary">
            <?php show_tag_list(get_the_ID(), ', ', 'Tags: '); ?>
        </div>
    </div>
    <?php get_template_part('sidebar'); ?>
</div>
