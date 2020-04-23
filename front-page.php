<?php get_header(); ?>

<div class="mv">
<img class="w-100 img-switch img-switch" src="<?php e_img_url(); ?>/mv_pc.png" alt="訳あり物件を現状のまま買い取ります！">
</div>
<!-- mv -->

<div class="support">
<div class="container">
<img class="img-fluid support--img img-switch" src="<?php e_img_url(); ?>/support_txt_pc.png" alt="相続、空き家売却に伴う税金の問題、認知症対策などもサポートします！まるごとお任せください！">
</div>
</div>

<?php get_template_part('templates/contact'); ?>

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
<div class="col-md text-center d-md-block d-flex">
<div class="mb-md-3 mr-md-0 mr-2">
<a href="<?php e_home_url(); ?>/works/">
<img class="img-fluid img-switch" src="<?php e_img_url(); ?>/btn_works_pc.png" alt="実績">
</a>
</div>
<div>
<a href="<?php e_home_url(); ?>#area">
<img class="img-fluid img-switch" src="<?php e_img_url(); ?>/btn_area_pc.png" alt="対応エリア">
</a>
</div>
</div>
</div>
</div>
<!-- container -->
</section>
<!-- blog -->

<section id="service" class="sec target bg-info">
<div class="container">
<h2 class="ttl__h2 text-center">
<img class="img-fluid img-switch" src="<?php e_img_url(); ?>/h_target_pc.png" alt="このような空き家でも買い取ることが可能です！まずはお気軽にご相談ください！">
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

<section id="reason" class="sec reason bg-square">
<div class="container">
<h2 class="ttl__h2 text-center">
<img class="img-fluid img-switch" src="<?php e_img_url(); ?>/h_reason_pc.png" alt="選ばれる12の理由">
</h2>
<p class="text-center">大阪府下にある空き家を専門に買い取っている当社はなぜたくさんのお客様から支持されるのか。
<br>なぜ他社ではなく当社を選ぶのか。その理由をまとめましたので、ご紹介いたします。</p>

<div class="reason__list d-md-flex">
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_1.png" alt="あんしんの無料査定">
<h3 class="reason__list__inner--h3 text-center">あんしんの無料査定</h3>
<p class="reason__list__inner--p mb-0">現状の物件がどのくらいの買取金額になるのか想像もつきませんよね。なのでまずは一度無料で物件の価値がどれくらいなのかを査定することができます。<br>お気軽にお問い合わせください。</p>
</div>
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_2.png" alt="どんなにボロボロな家でも買い取れます！">
<h3 class="reason__list__inner--h3 text-center">どんなにボロボロな家でも<br>買い取れます！</h3>
<p class="reason__list__inner--p mb-0">長屋やゴミ屋敷、経年劣化による倒壊の恐れがある家屋、などどんなにボロボロな家でも買い取ることができます。</p>
</div>
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_3.png" alt="あんしんの無料査定">
<h3 class="reason__list__inner--h3 text-center">スピード買取！<br>すぐに買い取ることが可能！</h3>
<p class="reason__list__inner--p mb-0">当社が購入するので、買い手を待たずにすぐに買い取ることができます。放置期間が長い空き家ほど早く買い取りした方が良いケースがほとんどです。お気軽にお問い合わせください。</p>
</div>
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_4.png" alt="処分費用は一切かかりません！">
<h3 class="reason__list__inner--h3 text-center">処分費用は一切かかりません！</h3>
<p class="reason__list__inner--p mb-0">通常ボロボロな家や倒壊の恐れがある物件は解体して処分費用が必ず発生しますが、当社で買い取る場合は処分費用は一切発生しません。</p>
</div>
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_5.png" alt="ローンが残っていてもOK！">
<h3 class="reason__list__inner--h3 text-center">ローンが残っていてもOK！</h3>
<p class="reason__list__inner--p mb-0">ほとんどの家がローンがまだある状態だと思います。そうなると通常はローンを差し引いた金額となりほとんど値段がつきません。もしくは逆に支払うことになりますが、当社はお客様から費用を頂くことはありません。</p>
</div>
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_6.png" alt="秘密厳守！">
<h3 class="reason__list__inner--h3 text-center">秘密厳守！</h3>
<p class="reason__list__inner--p mb-0">近隣住民やその他物件を売却することを知られたくない人への秘密厳守は徹底しています。プライバシーをお守りします。</p>
</div>
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_7.png" alt="多数の買取実績！">
<h3 class="reason__list__inner--h3 text-center">多数の買取実績！</h3>
<p class="reason__list__inner--p mb-0">大阪府下を対象とした様々な空き家や長屋、ゴミ屋敷などあらゆる物件を買い取ってきました。その数は数百件以上に上ります。多数の実績があるからこそ安心して買い取らせて頂ければと思います。</p>
</div>
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_8.png" alt="手続きにかかわる費用は無料！">
<h3 class="reason__list__inner--h3 text-center">手続きにかかわる費用は無料！</h3>
<p class="reason__list__inner--p mb-0">不動産を売却する際は様々な手続きが必要です。それは専門家を通しての手続きなどがあります。そうなると手続き費用などが発生しますが、当社で買い取らせて頂くと手続きに関する費用は無料となります。(実費別)</p>
</div>
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_9.png" alt="相続や税金などもサポート！">
<h3 class="reason__list__inner--h3 text-center">相続や税金などもサポート！</h3>
<p class="reason__list__inner--p mb-0">空き家のほとんどは相続が絡んできます。そこで当社は様々な専門家と連携して相続の問題を解決しています。例えば税金関係や司法関係、認知症対策などもサポートできます。<br>空き家買取に関わる全てのことをまるごとお任せください。</p>
</div>
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_10.png" alt="共有持ち分のみの売却もできる！">
<h3 class="reason__list__inner--h3 text-center">共有持ち分のみの売却もできる！</h3>
<p class="reason__list__inner--p mb-0">共有持ち分のみの売却もできますので、ご兄弟などあらゆるケースの所有状況にも対応できますので、まずはお問い合わせください。</p>
</div>
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_11.png" alt="即日現金化！">
<h3 class="reason__list__inner--h3 text-center">即日現金化！</h3>
<p class="reason__list__inner--p mb-0">全案件ではございませんが、上手くいけば即日現金化もできます。過去にも何度も即日に現金化したことがございます。すぐに現金が必要な場合など、すぐにご連絡ください。</p>
</div>
<div class="reason__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/reason_img_12.png" alt="戸建て、長屋、マンションなど様々な物件に対応！">
<h3 class="reason__list__inner--h3 text-center">戸建て、長屋、マンションなど<br>様々な物件に対応！</h3>
<p class="reason__list__inner--p mb-0">長屋、ゴミ屋敷、戸建て、マンション、土地、など様々な物件タイプに対応しています。<br>もちろん長屋や戸建て、ゴミ屋敷などが一般的に多い物件タイプになります。</p>
</div>
</div>
<!-- reason__list -->
</div>
<!-- container -->
</section>
<!-- reason -->

<section class="sec works bg-works">
<div class="container">
<h2 class="ttl__h2 text-center"><img class="img-fluid img-switch" src="<?php e_img_url(); ?>/h_works_pc.png" alt="高価買取・即日現金化の実績をご紹介します"></h2>
<p class="text-center">大阪府下の高価買取実績とこちらに掲載している実績は即日現金化したものを集めたものになります。</p>
<div class="works__list d-flex">
<?php
$args = [
    'posts_per_page' => 4,
    'post_type' => 'works',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
$term = get_the_terms(get_the_ID(), 'area')[0];
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = '';
}
?>
<div class="works__list__inner">
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
<!-- works__list__inner -->
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- works__list -->
<div class="text-center">
<a class="btn btn-primary bg-primary" href="<?php e_home_url(); ?>/works/">もっと実績を見る</a>
</div>
</div>
<!-- container -->
</section>
<!-- works -->

<div class="voice sec">
<div class="container">
<div class="text-center">
<a href="<?php e_home_url(); ?>/voice/">
<img class="img-fluid" src="<?php e_img_url(); ?>/bnr_voice.png" alt="お客様のお声">
</a>
</div>
</div>
</div>
<!-- voice -->

<section id="flow" class="flow sec bg-info">
<div class="container">
<h2 class="ttl__h2"><img class="img-fluid img-switch" src="<?php e_img_url(); ?>/h_flow_pc.png" alt="空き家買取の売却までの流れをご紹介します"></h2>
<p class="text-center">空き家になっている背景や、なぜ今売却を検討されているのかや、売却してどうしたいのか、<br>などヒアリングさせて頂き、その後正式に売却まで進めていきます。<br>そんな売却までの流れをご紹介いたします。</p>
<div class="flow__list d-flex">
<img class="img-fluid flow__list--border" src="<?php e_img_url(); ?>/flow_border.png" alt="点線">
<div class="flow__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_1.png" alt="お問い合わせ">
<div class="flow__list__inner__txt">
<i class="flow__list__inner__txt--ribbon">STEP<span>1</span></i>
<h3 class="flow__list__inner__txt--h3">お問い合わせ</h3>
<p>お電話もしくはフォームからお気軽にお問い合わせください。<br>無料査定いたしますので、かんたんに現状についてヒアリングさせて頂きます。</p>
</div>
</div>
<!-- flow__list__inner -->
<div class="flow__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_2.png" alt="現地確認">
<div class="flow__list__inner__txt">
<i class="flow__list__inner__txt--ribbon">STEP<span>2</span></i>
<h3 class="flow__list__inner__txt--h3">現地確認</h3>
<p>現地にて現状の物件の状況などを確認します。建物の外からと中から両方を確認していきます。</p>
</div>
</div>
<!-- flow__list__inner -->
<div class="flow__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_3.png" alt="無料査定">
<div class="flow__list__inner__txt">
<i class="flow__list__inner__txt--ribbon">STEP<span>3</span></i>
<h3 class="flow__list__inner__txt--h3">無料査定</h3>
<p>現地確認を行い、建物を状況を確認した後に査定を行います。今売却すればどれくらいの金額になるのかご提示いたします。</p>
</div>
</div>
<!-- flow__list__inner -->
<div class="flow__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_4.png" alt="ご契約">
<div class="flow__list__inner__txt">
<i class="flow__list__inner__txt--ribbon">STEP<span>4</span></i>
<h3 class="flow__list__inner__txt--h3">ご契約</h3>
<p>査定金額に問題なければご契約書を交わし正式に売却を進めていきます。</p>
</div>
</div>
<!-- flow__list__inner -->
<div class="flow__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_5.png" alt="物件引き渡し">
<div class="flow__list__inner__txt">
<i class="flow__list__inner__txt--ribbon">STEP<span>5</span></i>
<h3 class="flow__list__inner__txt--h3">物件引き渡し</h3>
<p>空き家物件の鍵を当社に引き渡して頂きます。その際に必要なものは別途お伝えいたします。</p>
</div>
</div>
<!-- flow__list__inner -->
<div class="flow__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_6.png" alt="所有権移転登記">
<div class="flow__list__inner__txt">
<i class="flow__list__inner__txt--ribbon">STEP<span>6</span></i>
<h3 class="flow__list__inner__txt--h3">所有権移転登記</h3>
<p>所有権を当社へ移転するための登記を行います。必要書類などございますので、別途お伝えいたします。</p>
</div>
</div>
<!-- flow__list__inner -->
<div class="flow__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_7.png" alt="手続き完了">
<div class="flow__list__inner__txt">
<i class="flow__list__inner__txt--ribbon">STEP<span>7</span></i>
<h3 class="flow__list__inner__txt--h3">手続き完了</h3>
<p>行政への手続きが完了した時点で正式に所有権は当社へ移転されました。そして買取金額のお支払いを実行いたします。</p>
</div>
</div>
<!-- flow__list__inner -->
<div class="flow__list__inner">
<img class="w-100" src="<?php e_img_url(); ?>/flow_img_8.png" alt="アフターフォロー">
<div class="flow__list__inner__txt">
<i class="flow__list__inner__txt--ribbon">STEP<span>8</span></i>
<h3 class="flow__list__inner__txt--h3">アフターフォロー</h3>
<p>相続や税金関係など売却してからもアフターフォローを実施しています。安心して最後までお任せください。</p>
</div>
</div>
<!-- flow__list__inner -->
</div>
<!-- flow__list -->
</div>
<!-- container -->
</section>
<!-- flow -->

<section class="faq sec bg-square-blue">
<div class="container">
<h2 class="ttl__h2 text-center">
<img class="img-fluid" src="<?php e_img_url(); ?>/h_faq.png" alt="よくあるご質問">
</h2>
<p class="text-center">空き家買取に関する質問や相続の質問、税金関係の質問、<br>手続き関係の質問など様々な質問に対し回答しておりますので、ご紹介いたします。</p>
<div class="faq__list">
<dl class="faq__list__inner">
<dt class="faq__list__inner--dt">ボロボロな家ですが、買い取ってくれますか？</dt>
<dd class="faq__list__inner--dd">はい。当社ではどんな物件でも買い取ることが可能です。<br>まずは無料査定をお申込みください。</dd>
</dl>
<dl class="faq__list__inner">
<dt class="faq__list__inner--dt">マンションでも買い取れますか？</dt>
<dd class="faq__list__inner--dd">はい。どんな物件タイプでも買い取ることができます。</dd>
</dl>
<dl class="faq__list__inner">
<dt class="faq__list__inner--dt">処分費用などは発生しますか？</dt>
<dd class="faq__list__inner--dd">処分費用は一切発生しませんのでご安心ください。</dd>
</dl>
<dl class="faq__list__inner">
<dt class="faq__list__inner--dt">最短どれくらいで売却できますか？</dt>
<dd class="faq__list__inner--dd">物件の状況などあらゆる現状により期間は大幅に変動しますので、まずは無料査定で確認してみてください。</dd>
</dl>
<dl class="faq__list__inner">
<dt class="faq__list__inner--dt">売却するのにこちらの手間はかかりますか？</dt>
<dd class="faq__list__inner--dd">特にお手間はかかりません。</dd>
</dl>
</div>
</div>
<!-- container -->
</section>
<!-- faq -->

<section id="area" class="sec area">
<div class="container">
<h2 class="ttl__h2 text-center d-md-none d-block"><img class="img-fluid" src="<?php e_img_url(); ?>/h_area.png" alt="対応エリア"></h2>
<div class="area__inner d-md-flex">
<div class="area__inner__img text-center">
<img class="img-fluid" src="<?php e_img_url(); ?>/area_img.png" alt="地図">
</div>
<div class="area__inner__txt">
<h2 class="ttl__h2 text-center d-md-block d-none"><img class="img-fluid" src="<?php e_img_url(); ?>/h_area.png" alt="対応エリア"></h2>
<div class="area__inner__txt__list">
<p class="m-0">大阪市（⻄区/浪速区/⻄成区/港区/此花区/⻄淀川区/東淀川区/東成区/天王寺区/住吉区/大正区/旭区/福島区/都島区/城東区/生野区/阿倍野区/東住吉区/淀川区/鶴見区/平野区/住之江区/中央区/北区）/ 堺市（中区/東区/⻄区/南区/北区/美原区）/ 豊中市 / 高槻市 / 枚方市 / 東大阪市 / 吹田市 / 茨木市 / 岸和田市 / 寝屋川市 / 八尾市 / 池田市 / 箕面市 / 豊能郡 / 能勢町 / 豊能町 / 摂津市 / 三島郡 / 島本町 / 泉大津市 / 和泉市 / 高石市 / 泉北郡 / 忠岡町 / 貝塚市 / 泉佐野市 / 泉南市 / 阪南市 / 泉南郡 / 熊取町 / 田尻町 / 岬町 / 守口市 / 大東市 / 門真市 / 四條畷市 / 交野市 / 柏原市 / 富田林市 / 河内⻑野市 / 松原市 / 羽曳野市 / 藤井寺市 / 大阪狭山市 / 南河内郡 / 太子町 / 河南町 / 千早赤阪村</p>
</div>
</div>
</div>
<!-- area__inner -->
</div>
<!-- container -->
</section>
<!-- area -->

<section class="sec message">
<div class="container">
<h2 class="ttl__h2 text-center px-md-0 px-5">
<img class="img-fluid" src="<?php e_img_url(); ?>/h_message.png" alt="">
</h2>
<div class="row message__inner align-items-center">
<div class="col-md order-md-last message__inner__img">
<img class="img-fluid" src="<?php e_img_url(); ?>/message_img.png" alt="">
</div>
<div class="col-md order-md-first message__inner__txt">
<p class="text-white">空き家買取屋さん公式ホームページにご来訪いただきありがとうございます。近年の空き家問題は年々深刻化されています。空き家件数自体増えており、あと数年後には1000万件以上の空き家が出てくると言われております。そんな中、まだ空き家の放置リスクに対する危機感が世間に知られていないと感じております。空き家は放置すると様々なリスクが発生します。一例として「腐敗による悪臭」や「経年劣化による倒壊」「不法侵入」など様々です。そして何より放置することにより近隣への被害は計り知れません。</p>
<p class="text-white mb-0">一刻も早く空き家をどうするか、各家庭で本気で考えて欲しいと思います。その一つの選択肢に売却があると思いますが、売却といってもすべての物件が売却できるとは限りません。それは市場が決めることです。市場において価値がないと判断されれば待っていても売れません。また空き家というのは手入れをされていないケースがほとんどなので、そういった物件は価値がほとんどなく、最悪の場合、逆に処分費用として請求されるケースも多く発生しています。当社ではそうならないためにお客様に金銭的な負担をさせず、どんな物件でも値段を付けるということをしてきました。その結果、たくさんのお客様の悩みを解決してきました。今後もできる限りどんな物件でも買い取れるよう精進して参りますので、今後とも空き家買取屋さんをどうぞよろしくお願い致します。</p>
</div>
</div>
</div>
<!-- container -->
</section>
<!-- message -->

<?php get_footer();
