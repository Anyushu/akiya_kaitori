<?php
$current = $term;
get_header(); ?>
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
<section id="works" class="sec bg-cream">
<div class="container">
<div class="cat-select form-inline">
<span class="text-primary form-group mb-0">エリア：</span>
<div class="form-group mb-0">
<?php $categories = get_categories(array('taxonomy' => 'area')); if ($categories) : ?>
<select class="form-control" name="cat-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
<option>エリアを選択</option>
<option value="<?php e_home_url(); ?>">すべてのエリア</option>
<?php foreach ($categories as $category): ?>
<option <?php $current == $category->slug ? print 'selected="selected"' : print ''; ?> value="<?php echo esc_html(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></option>
<?php endforeach; ?>
</select>
<?php endif; ?>
</div>
</div>
<!-- cat-select -->
<div class="works__list d-flex mb-3">
<?php
if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$p = get_the_permalink();
$term = get_the_terms(get_the_ID(), 'area')[0];
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = '';
}
?>
<div class="works__list__inner mb-4">
<a href="<?php echo $p; ?>">
<?php if ($i !== ''): ?>
<img class="w-100" src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
<?php endif; ?>
<div class="works__list__inner__txt">
<h3 class="works__list__inner__txt--h3"><?php echo $t; ?></h3>
<table class="works__list__inner__txt__table">
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
<td><span class="works__list__inner__txt__table--price"><?php the_field('price'); ?></span>万円</td>
</tr>
</tbody>
</table>
</div>
</a>
</div>
<?php endwhile; endif; ?>
</div>
<!-- works__list -->
<?php wp_pagenavi(); ?>
</div>
<!-- container -->
</section>
<!-- works -->
<?php get_footer();
