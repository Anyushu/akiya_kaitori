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
    <p>この度は【空き家買取屋さん】へお問い合わせ頂き誠にありがとうございます。
      <br>内容を確認し、担当者よりご連絡致します。</p>
    <div class="mt-5 text-center">
      <a class="btn btn-primary bg-primary" href="<?php e_home_url(); ?>">トップへ戻る</a>
    </div>
  </div>
</section>
<?php get_footer();
