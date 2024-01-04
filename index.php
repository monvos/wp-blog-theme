<?php get_header(); ?>
<div class="mx-auto mt-[75px] main-container">
  <div class="grid grid-cols-1 3xl:grid-cols-4 xl:grid-cols-3 lg:grid-cols-2">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="aspect-[4/3] overflow-hidden relative group">
          <div class="aspect-[4/3] after:absolute after:top-0 after:bottom-0 after:w-full after:h-full after:bg-[rgba(0,0,0,.25)]">
            <?php the_post_thumbnail('full', array('class' => 'min-h-full min-w-full object-cover group-hover:scale-110 transition-transform duration-300')); ?>
          </div>
          <div class="aspect-[4/3] absolute top-0 bottom-0 w-full h-full flex justify-end flex-col pt-5 px-10 pb-9">
            <h3 class="text-white text-xs font-main relative"><?php the_time('F j, Y'); ?></h3>
            <h2 class="text-white text-3xl font-semibold font-main mb-2 relative">
              <a href="<?php the_permalink(); ?>" class="z-20 relative"><?php the_title(); ?>.</a>
            </h2>
            <div class="flex relative flex-wrap">
              <?php
              $post_category = get_the_category();
              if ($post_category) {
                foreach ($post_category as $category) {
              ?>
                  <a href="<?php echo get_category_link($category) ?>" class="z-20 block bg-main-bg hover:bg-main-red px-3 py-2 mt-1 mr-1 text-main-text font-main text-xs capitalize relative">
                    <?php echo $category->name ?>
                  </a>
              <?php
                }
              }
              ?>
            </div>
          </div>
          <a href="<?php the_permalink(); ?>" class="z-10 aspect-[4/3] absolute top-0 bottom-0 w-full h-full"></a>
        </article>
      <?php endwhile;
    else : ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>