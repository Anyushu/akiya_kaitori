<?php get_header(); ?>
<section class="kv bg-square-blue sec">
<div class="container">
<h2 class="m-0">
<img src="<?php e_img_url(); ?>/kv_company.png" alt="<?php the_title(); ?>">
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
<div class="mb-5">
<h3 class="ttl__h3">会社概要</h3>
<table class="table w-100">
<tbody>
<tr>
<th>会社名</th>
<td>バリュークリエイト株式会社</td>
</tr>
<tr>
<th>資本金</th>
<td>ダミーテキスト</td>
</tr>
<tr>
<th>代表者</th>
<td>ダミーテキスト</td>
</tr>
<tr>
<th>所在地</th>
<td>〒550-0015　大阪府大阪市⻄区南堀江3丁目15−22</td>
</tr>
<tr>
<th>電話番号</th>
<td>06-6531-9200</td>
</tr>
</tbody>
</table>
</div>

<div class="mb-5">
<h3 class="ttl__h3">アクセス</h3>
<div class="row">
<div class="col-md">
<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.3425851473253!2d135.48527091473363!3d34.671302192300764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7a9d57b52e1%3A0xff92be66de9ffe68!2z44CSNTUwLTAwMTUg5aSn6Ziq5bqc5aSn6Ziq5biC6KW_5Yy65Y2X5aCA5rGf77yT5LiB55uu77yR77yV4oiS77yS77yS!5e0!3m2!1sja!2sjp!4v1587545912098!5m2!1sja!2sjp"></iframe>
</div>
</div>
<div class="col-md">
<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!4v1587546004868!6m8!1m7!1sb25t9DQsdCV22_5mnpxlBg!2m2!1d34.67137900684231!2d135.4877028398966!3f18.64189033003348!4f27.31697009271531!5f0.7820865974627469"></iframe>
</div>
</div>
</div>
</div>

<div class="staff">
<h3 class="ttl__h3">スタッフ紹介</h3>
<div class="staff__list d-flex">
<div class="staff__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_1.png" alt="">
<h3 class="staff__list__inner--h3">名前</h3>
<p class="staff__list__inner--p">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
</div>
<!-- staff__list__inner -->
<div class="staff__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_1.png" alt="">
<h3 class="staff__list__inner--h3">名前</h3>
<p class="staff__list__inner--p">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
</div>
<!-- staff__list__inner -->
<div class="staff__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_1.png" alt="">
<h3 class="staff__list__inner--h3">名前</h3>
<p class="staff__list__inner--p">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
</div>
<!-- staff__list__inner -->
<div class="staff__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_1.png" alt="">
<h3 class="staff__list__inner--h3">名前</h3>
<p class="staff__list__inner--p">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
</div>
<!-- staff__list__inner -->
</div>
<!-- staff__list -->
</div>

</div>
<!-- container -->
</section>

<section class="form sec bg-square-blue">
<div class="container">
<h2 class="ttl__h2 text-center">
<img class="img-fluid" src="<?php e_img_url(); ?>/h_form.png" alt="フォーム">
</h2>
</div>
</section>
<?php get_footer();
