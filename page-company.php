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
<th>代表者</th>
<td>金子 憲太郎</td>
</tr>
<tr>
<th>所在地</th>
<td>〒546-0042 大阪市東住吉区西今川三丁目19-6-306</td>
</tr>
<tr>
<th>電話番号</th>
<td>0120-600-035</td>
</tr>
</tbody>
</table>
</div>

<div class="mb-5">
<h3 class="ttl__h3">アクセス</h3>
<div class="row">
<div class="col-md">
<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.1776776817865!2d135.53166731473243!3d34.624949994780245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000de863c7676f1%3A0x9e088fe6414d01ef!2z44CSNTQ2LTAwNDIg5aSn6Ziq5bqc5aSn6Ziq5biC5p2x5L2P5ZCJ5Yy66KW_5LuK5bed77yT5LiB55uu77yR77yZ4oiS77yW!5e0!3m2!1sja!2sjp!4v1587801370667!5m2!1sja!2sjp"></iframe>
</div>
</div>
<div class="col-md mt-md-0 mt-3">
<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!4v1587801496693!6m8!1m7!1sH26HlvBUGMC3XmXZQ1OOZw!2m2!1d34.62501744648476!2d135.5339732718086!3f230.04235086624868!4f23.519236204348942!5f0.7820865974627469"></iframe>
</div>
</div>
</div>
</div>

<div class="staff">
<h3 class="ttl__h3">スタッフ紹介</h3>
<div class="staff__list d-flex">
<?php
$arg = [
'post_type' => 'staff',
'posts_per_page' => 4,
'orderby' => 'date',
'order' => 'DESC',
];
$posts = get_posts($arg);
foreach ($posts as $post):
setup_postdata($post);
$t = get_the_title();
$content = strip_tags(get_the_content());
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = get_template_directory_uri().'/lib/images/no_img.png';
}
?>
<div class="staff__list__inner">
<img class="w-100" src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
<h3 class="staff__list__inner--h3"><?php echo $t; ?></h3>
<p class="staff__list__inner--p"><?php echo $content; ?></p>
</div>
<!-- staff__list__inner -->
<?php endforeach; ?>
</div>
<!-- staff__list -->
</div>

</div>
<!-- container -->
</section>

<section id="form" class="form sec bg-square-blue">
<div class="container">
<h2 class="ttl__h2 text-center"><img class="img-fluid" src="<?php e_img_url(); ?>/h_form.png" alt="フォーム"></h2>
<div class="form__point">
<img class="img-fluid form__point--img" src="<?php e_img_url(); ?>/pic_form.png" alt="人物">
<div class="form__point__txt">
<p class="form__point__txt--p">お急ぎのお客様へ、お電話でのお問い合わせも受け付けております。
<br>「<mark>空き家買取屋さんのホームページを見た</mark>」の一言でお気軽にご相談下さい。</p>
<div class="form__point__txt__tel">
<a class="text-body" href="tel:0120-600-035">
<span class="form__point__txt__tel--icon"><img class="img-fluid" src="<?php e_img_url(); ?>/icon_tel_form.png" alt="電話アイコン"></span>
<span class="form__point__txt__tel--num">0120-600-035</span>
</a>
<p class="mb-0 form__point__txt__tel--p">営業時間：9時〜18時｜定休⽇：水曜日</p>
</div>
</div>
</div>
<!-- form__point -->
<p class="text-center">下記フォームの必要事項をご入力の上、送信ボタンでお問い合わせください。
<br>※お送りいただいた情報については折り返しのご連絡以外の目的に使用致しません。お問い合わせ頂いた内容に対してのみご連絡させて頂きます。</p>
<?php echo do_shortcode('[contact-form-7 id="21" title="お問い合わせ"]'); ?>
</div>
<!-- container -->
</section>
<!-- form -->
<?php get_footer();
