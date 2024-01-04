<?php get_header(); ?>
<div class="mx-auto main-container mt-[75px]">
  <div class="px-5 pt-10 font-main2 text-main-text overflow-hidden">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="xl:text-8xl text-5xl pb-5 font-main text-center">
          <?php the_title(); ?>
        </h1>
        <h2 class="text-lg capitalize text-[#aaaaaa] text-center pb-5 post-category"><?php the_category(' / '); ?></h2>
        <h3 class="text-sm capitalize text-[#aaaaaa] text-center pb-10"><?php the_time('F j, Y'); ?></h3>
        <div class="max-w-5xl mx-auto">
          <!-- <h3 class="text-sm capitalize">Tags: <?php the_tags(' '); ?></h3> -->
          <?php
          $post_tags = get_the_tags();

          if ($post_tags) {
            foreach ($post_tags as $tag) {
          ?>
              <a href="<?php echo get_tag_link($tag) ?>" class="inline-block bg-black hover:bg-[#aaaaaa] hover:text-black px-2 py-1 mt-1 text-[#aaaaaa] font-main text-xs capitalize">
                <?php echo $tag->name ?>
              </a>
          <?php
            }
          }
          ?>
        </div>
        <div class="main-post-content max-w-5xl mx-auto mt-5 pb-10 text-[#aaaaaa]">
          <?php the_content(); ?>
        </div>
        <div class="main-post-footer max-w-5xl mx-auto mt-5 pb-10 text-[#aaaaaa] xl:flex flex-row justify-between">
          <div>
            <h2>Previous post</h2>
            <?php previous_post_link('%link', '%title'); ?>
          </div>
          <div class="xl:text-right mt-4 xl:mt-0">
            <h2>Next post</h2>
            <?php next_post_link('%link', '%title'); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>