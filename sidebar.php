<!-- CONTACT -->
<div class="blogmain__side__inner">
<div class="blogmain__side__inner__contact">
<p class="text-center">
<img class="img-fluid" src="<?php e_img_url(); ?>/h_side_contact.png" alt="空き家売却をお急ぎの方へ">
</p>
<p class="text-center">
<a href="">
<img class="img-fluid" src="<?php e_img_url(); ?>/side_tel.png" alt="電話">
</a>
</p>
<div class="text-center">
<a class="btn btn-success" href="<?php e_home_url(); ?>/company#form">
<span class="btn-primary--point">＼ 24時間受付中 ／</span>
<span class="btn-primary--txt">無料査定・売却相談はこちら</span>
</a>
</div>
</div>
</div>
<!-- CATEGORY -->
<div class="blogmain__side__inner">
<div class="blogmain__side__inner__cat">
<h3 class="text-center">カテゴリー</h3>
<ul class="blogmain__side__inner__cat__list">
<?php
$cats = get_categories();
foreach ($cats as $key => $cat):
?>
<li class="blogmain__side__inner__cat__list--li">
<a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo $cat->name; ?></a>
</li>
<?php endforeach; ?>
</ul>
</div>
</div>

<div class="blogmain__side__inner text-center">
<a href="<?php e_home_url(); ?>#reason">
<img class="img-fluid" src="<?php e_img_url(); ?>/side_btn_area.png" alt="">
</a>
</div>
<div class="blogmain__side__inner text-center">
<a href="<?php e_home_url(); ?>/works/">
<img class="img-fluid" src="<?php e_img_url(); ?>/side_btn_reason.png" alt="">
</a>
</div>