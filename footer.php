</main>

<?php get_template_part('templates/contact'); ?>

<footer class="footer sec">
<div class="container">
<div class="row justify-content-between footer__inner">
<div class="col-md-4 text-md-left text-center">
<p class="footer__inner__logo"><a href="<?php e_home_url(); ?>"><img class="img-fluid" src="<?php e_img_url(); ?>/head_logo.png" alt="<?php bloginfo('name'); ?>"></a></p>
<p class="small mb-0 footer__inner__address">〒550-0015
<br>大阪府大阪市⻄区南堀江3丁目15−22
<br>TEL 06-6531-9200</p>
</div>
<div class="col-md-6 text-md-left text-center mt-md-0 mt-4">
<div class="text-center">
<a class="btn btn-primary" href="<?php e_home_url(); ?>/company#form">
<span class="btn-primary--point">＼ 24時間受付中 ／</span>
<span class="btn-primary--txt">無料査定・売却相談はこちら</span>
</a>
</div>
<ul class="footer__inner__link">
<li><a href="<?php e_home_url(); ?>">トップページ</a></li>
<li><a href="<?php e_home_url(); ?>#service">サービス内容</a></li>
<li><a href="<?php e_home_url(); ?>/works/">買取実績</a></li>
<li><a href="<?php e_home_url(); ?>#flow">サービスの流れ</a></li>
<li><a href="<?php e_home_url(); ?>/voice/">お客様の声</a></li>
<li><a href="<?php e_home_url(); ?>/blog/">ブログ</a></li>
<li><a href="<?php e_home_url(); ?>/company/">会社案内</a></li>
</ul>
</div>
</div>
</div>
<!-- container -->
</footer>
<!-- footer -->
<small class="d-block text-center p-2 border-top">©2020 空き家買取屋さん</small>
<a class="to-top" href="#"><img class="img-fluid" src="<?php e_img_url(); ?>/to_top.png" alt="トップへ"></a>
<?php wp_footer(); ?>
</body>
</html>