<?php get_header(); ?>
<section class="kv bg-square-blue sec">
<div class="container">
<h2 class="m-0">
<img src="<?php e_img_url(); ?>/kv_blog.png" alt="買取実績">
</h2>
</div>
</section>
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs"><div class="container">', '</div></div>');
}
?>
<section class="sec">
<div class="container">
<h2 class="ttl__h3"><?php single_cat_title(); ?></h2>
<div class="blogmain">
<div class="blogmain__inner">
<div class="bloglist">
<?php
if (have_posts()):
while (have_posts()): the_post();
$t = get_the_title();
$category = get_the_category();
$cat_name = $category[0]->name;
$permalink = get_the_permalink();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = get_template_directory_uri().'/lib/images/no_img.png';
}
?>
<div class="bloglist__inner">
<a class="bloglist__inner__link" href="<?php echo $permalink; ?>">
<div class="bloglist__inner__link__img">
<img class="w-100" src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<div class="bloglist__inner__link__txt">
<div class="bloglist__inner__link__txt__meta">
<span class="small"><?php the_time('Y年n月j日'); ?></span>
<span class="badge badge-sm badge-info"><?php echo $cat_name; ?></span>
</div>
<h3 class="bloglist__inner__link__txt--h2"><?php echo $t; ?></h3>
</div>
</a>
</div>
<!-- bloglist__inner -->
<?php endwhile; endif; ?>
</div>
<!-- bloglist -->
<?php wp_pagenavi(); ?>
</div>
<!-- blogmain__inner -->
<aside class="blogmain__side">
<?php get_sidebar(); ?>
</aside>
<!-- blogmain__side -->
</div>
<!-- blogmain -->
</div>
</section>
<?php get_footer();