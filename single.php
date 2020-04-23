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

<div class="blogmain">
<article class="blogmain__inner">
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
<div class="blogmain__inner__meta">
<span class="small"><?php the_time('Y年n月j日'); ?></span>
<span class="badge badge-sm badge-info"><?php echo $cat_name; ?></span>
</div>
<h2 class="blogmain__inner__ttl"><?php echo $t; ?></h2>
<figure class="blogmain__inner__thumbnail">
<img class="w-100" src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</figure>
<div class="post mt-4">
<?php the_content(); ?>
</div>
<!-- post -->
<?php endwhile; endif; ?>
<div class="blogmain__inner__sns">
<a class="blogmain__inner__sns__fb" href="http://www.facebook.com/share.php?u=<?php echo $permalink; ?>" target="_blank"><i class="fab fa-facebook-f mr-md-1"></i><span>Facebook</span></a>
<a class="blogmain__inner__sns__tw" href="https://twiter.com/share?url=<?php echo $permalink; ?>" target="_blank"><i class="fab fa-twitter mr-md-1"></i><span>Twitter</span></a>
<a class="blogmain__inner__sns__li" href="https://social-plugins.line.me/lineit/share?url=<?php echo $permalink; ?>" target="_blank"><i class="fab fa-line mr-md-1"></i><span>LINE</span></a>
</div>
<div class="text-center mt-5">
<a class="btn btn-primary bg-primary px-5 font-weight-bold" href="<?php e_home_url(); ?>/blog/">一覧に戻る</a>
</div>
</article>
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