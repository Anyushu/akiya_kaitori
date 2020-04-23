<?php get_header(); ?>
<section class="kv bg-square-blue sec">
<div class="container">
<h2 class="m-0">
<img src="<?php e_img_url(); ?>/kv_works.png" alt="買取実績">
</h2>
</div>
</section>
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs"><div class="container">', '</div></div>');
}
?>
<?php
if (have_posts()):
while (have_posts()): the_post();
$t = get_the_title();
$term = get_the_terms(get_the_ID(), 'area')[0];
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = '';
}
?>
<article class="sec workspost bg-cream">
<div class="container">
<div class="workspost__inner">
<div class="workspost__inner__info">
<div class="workspost__inner__info__img">
<img class="w-100" src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<!-- workspost__inner__info--img -->
<div class="workspost__inner__info__txt">
<h2 class="workspost__inner__info__txt--h2"><?php echo $t; ?></h2>
<table class="workspost__inner__info__txt__table">
<tbody>
<tr>
<th>エリア</th>
<td><?php echo $term->name; ?></td>
</tr>
<tr>
<th>物件面積</th>
<td><?php the_field('menseki'); ?></td>
</tr>
<tr>
<th>築年数</th>
<td><?php the_field('age'); ?></td>
</tr>
<tr>
<th>買取額</th>
<td><span class="workspost__inner__info__txt__table--price"><?php the_field('price'); ?></span>万円</td>
</tr>
</tbody>
</table>
</div>
<!-- workspost__inner__info--txt -->
</div>
<!-- workspost__inner__info -->
<div class="workspost__inner__post">
<h2 class="workspost__inner__post--h2"><img class="img-fluid" src="<?php e_img_url(); ?>/icon_flag.png" alt="旗"><span>買取ポイント</span></h2>
<div class="workspost__inner__post__content post">
<?php the_content(); ?>
</div>
</div>
</div>
<!-- workspost__inner -->
<div class="text-center mt-5">
<a class="btn btn-primary bg-primary px-5 font-weight-bold" href="<?php e_home_url(); ?>/works/">一覧に戻る</a>
</div>
</div>
</article>
<?php endwhile; endif; ?>
<?php get_footer();