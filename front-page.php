<?php get_header(); ?>

<div class="mv">
<img class="w-100" src="<?php e_img_url(); ?>/mv_pc.png" srcset="<?php e_img_url(); ?>/mv_pc.png 1x, <?php e_img_url(); ?>/mv_pc@2x.png 2x" alt="訳あり物件を現状のまま買い取ります！">
</div>
<!-- mv -->

<div class="support">
<div class="container">
<img class="img-fluid support--img" src="<?php e_img_url(); ?>/support_txt.png" alt="相続、空き家売却に伴う税金の問題、認知症対策などもサポートします！まるごとお任せください！">
</div>
</div>

<div class="contact">
<div class="container position-relative">
<p class="contact__h">
<img src="<?php e_img_url(); ?>/contact_h.png" alt="どんなに些細な事でもお気軽にお問い合わせください。">
</p>
<div class="contact__link">
<a href="">
<img src="<?php e_img_url(); ?>/btn_assessment.png" alt="">
</a>
<a class="mx-3" href="">
<img src="<?php e_img_url(); ?>/btn_buying.png" alt="">
</a>
<a href="">
<img src="<?php e_img_url(); ?>/contact_tel.png" alt="">
</a>
</div>
<img class="contact--bg" src="<?php e_img_url(); ?>/bg_contact_text.png" alt="背景">
</div>
<!-- container -->
</div>
<!-- contact -->

<section class="sec blog">
<div class="container">
<div class="row align-items-end">
<div class="col-md">
<h2 class="blog__h2 position-relative ttl__h2">
<img class="img-fluid" src="<?php e_img_url(); ?>/h_blog.png" alt="ブログ">
<a class="btn btn-outline-primary blog__h2--link ttl__h2--link" href="<?php e_home_url(); ?>/blog/">もっと見る</a>
</h2>
<ul class="home-blog">
<?php
$arg = [
  'posts_per_page' => 3,
  'orderby' => 'date',
  'order' => 'DESC',
];
$posts = get_posts($arg);
foreach ($posts as $post):
setup_postdata($post);
$t = get_the_title();
$time = get_the_time('Y年n月j日');
$p = get_the_permalink();
$categories = get_the_category();
$cat_name = $categories[0]->name;
?>
<li class="home-blog__li">
<a class="text-body" href="<?php echo $p; ?>">
<p class="home-blog__li__meta">
<small class="home-blog__li__meta--time mr-2"><?php echo $time; ?></small>
<small class="home-blog__li__meta--cat badge badge-info"><?php echo $cat_name; ?></small>
</p>
<h3 class="home-blog__li--h3"><?php echo $t; ?></h3>
</a>
</li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>
</div>
<div class="col-md text-center">
<div class="mb-3">
<a href="<?php e_home_url(); ?>/works/">
<img class="img-fluid" src="<?php e_img_url(); ?>/btn_works.png" alt="実績">
</a>
</div>
<div>
<a href="#00ff00">
<img class="img-fluid" src="<?php e_img_url(); ?>/btn_area.png" alt="対応エリア">
</a>
</div>
</div>
</div>
</div>
<!-- container -->
</section>
<!-- blog -->

<section class="sec target bg-info">
<div class="container">
<h2 class="ttl__h2 text-center">
<img class="img-fluid" src="<?php e_img_url(); ?>/h_target.png" alt="このような空き家でも買い取ることが可能です！まずはお気軽にご相談ください！">
</h2>
<p class="text-center">大阪の空き家買取は「空き家買取屋さん」にお任せください。
<br>空き家の高価買い取り、無料査定、そして売却相談までお気軽にお問い合わせください。
<br>即⽇現金化をできるよう売却サポートいたします。</p>
<div class="target__list">
<div class="target__list__inner">
<img class="target__list__inner--pin" src="<?php e_img_url(); ?>/icon_pin.png" alt="pin">
<div class="target__list__inner--img">
<img class="w-100" src="<?php e_img_url(); ?>/target_img_1.png" alt="">
</div>
<h3 class="text-center target__list__inner--h3"><mark>10年以上</mark><br>空き家になっている</h3>
<p class="mb-0 target__list__inner--p">10年以上も空き家の状態で、カビや腐敗が侵食していて、手が付けらない状況になっている場合でも、高価買い取りが可能です！</p>
</div>
<div class="target__list__inner">
<img class="target__list__inner--pin" src="<?php e_img_url(); ?>/icon_pin.png" alt="pin">
<div class="target__list__inner--img">
<img class="w-100" src="<?php e_img_url(); ?>/target_img_2.png" alt="">
</div>
<h3 class="text-center target__list__inner--h3"><mark>住宅ローンが<br>残っている</mark>空き家</h3>
<p class="mb-0 target__list__inner--p">住宅ローンが残っていても買い取ることが可能です！金融機関とのやり取りなど安心・安全に売却サポートいたします！</p>
</div>
<div class="target__list__inner">
<img class="target__list__inner--pin" src="<?php e_img_url(); ?>/icon_pin.png" alt="pin">
<div class="target__list__inner--img">
<img class="w-100" src="<?php e_img_url(); ?>/target_img_3.png" alt="">
</div>
<h3 class="text-center target__list__inner--h3"><mark>経年劣化がひどい</mark><br>空き家</h3>
<p class="mb-0 target__list__inner--p">雨漏りやシロアリなどの被害や庭の草が伸びていたり、悪臭や腐敗など経年劣化がひどい空き家でも買い取ることが可能です！</p>
</div>
<div class="target__list__inner">
<img class="target__list__inner--pin" src="<?php e_img_url(); ?>/icon_pin.png" alt="pin">
<div class="target__list__inner--img">
<img class="w-100" src="<?php e_img_url(); ?>/target_img_4.png" alt="">
</div>
<h3 class="text-center target__list__inner--h3">長屋やゴミ屋敷などの<br><mark>ボロボロな</mark>空き家</h3>
<p class="mb-0 target__list__inner--p">長屋やゴミ屋敷などどんなにボロボロな空き家でも買い取ることが可能です！</p>
</div>
</div>
</div>
<!-- container -->
</section>
<!-- target -->

<section class="sec reason bg-square">
<div class="container">
<h2 class="ttl__h2 text-center">
<img class="img-fluid" src="<?php e_img_url(); ?>/h_reason.png" alt="選ばれる12の理由">
</h2>
<p class="text-center">大阪府下にある空き家を専門に買い取っている当社はなぜたくさんのお客様から支持されるのか。
<br>なぜ他社ではなく当社を選ぶのか。その理由をまとめましたので、ご紹介いたします。</p>
</div>
<!-- container -->
</section>
<!-- reason -->

<?php get_footer();
