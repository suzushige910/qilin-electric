<?php
/**
 * Template Name: 蓄電システム
 * 製品ページテンプレート
 *
 * @package Qilin_Electric
 */

get_header();
?>

<main id="primary" class="site-main products-page">

    <!-- ページヘッダー -->
    <section class="page-header" style="background: linear-gradient(135deg, #628141 0%, #8BAE66 100%);">
        <div class="container">
            <h1 class="page-title">蓄電システム</h1>
            <p class="page-subtitle">家庭用から産業用まで、最適な蓄電システムをご提案</p>
        </div>
    </section>

    <!-- 製品カテゴリナビ -->
    <section class="product-nav">
        <div class="container">
            <nav class="category-nav">
                <a href="#residential" class="nav-item">家庭用蓄電システム</a>
                <a href="#industrial" class="nav-item">産業用蓄電システム</a>
                <a href="#portable" class="nav-item">ポータブル電源</a>
            </nav>
        </div>
    </section>

    <!-- 家庭用蓄電システム -->
    <section id="residential" class="product-category">
        <div class="container">
            <h2 class="category-title">家庭用蓄電システム</h2>
            <p class="category-description">
                太陽光発電と組み合わせることで、昼間に発電した電気を夜間に使用できます。
                停電時の備えとしても安心です。
            </p>

            <!-- 製品ラインナップ -->
            <div class="products-grid">
                <?php
                // 家庭用蓄電システムの製品を取得
                $residential_products = new WP_Query(array(
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));

                if ($residential_products->have_posts()) :
                    while ($residential_products->have_posts()) : $residential_products->the_post();
                        $capacity = get_post_meta(get_the_ID(), '_product_capacity', true);
                        $output = get_post_meta(get_the_ID(), '_product_output', true);
                        $size = get_post_meta(get_the_ID(), '_product_size', true);
                        $weight = get_post_meta(get_the_ID(), '_product_weight', true);
                        $price = get_post_meta(get_the_ID(), '_product_price', true);
                        $tag = get_post_meta(get_the_ID(), '_product_tag', true);
                        $tag_class = '';
                        if ($tag === 'プレミアム') $tag_class = 'premium';
                ?>
                    <div class="product-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="product-image">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php else : ?>
                            <div class="product-image" style="background-color: #8BAE66;"></div>
                        <?php endif; ?>
                        <div class="product-content">
                            <?php if ($tag) : ?>
                                <span class="product-tag <?php echo esc_attr($tag_class); ?>"><?php echo esc_html($tag); ?></span>
                            <?php endif; ?>
                            <h3 class="product-name"><?php the_title(); ?></h3>
                            <?php if ($capacity || $output || $size || $weight) : ?>
                                <p class="product-spec">
                                    <?php if ($capacity) : ?>容量: <?php echo esc_html($capacity); ?><br><?php endif; ?>
                                    <?php if ($output) : ?>定格出力: <?php echo esc_html($output); ?><br><?php endif; ?>
                                    <?php if ($size) : ?>サイズ: <?php echo esc_html($size); ?><br><?php endif; ?>
                                    <?php if ($weight) : ?>重量: <?php echo esc_html($weight); ?><?php endif; ?>
                                </p>
                            <?php endif; ?>
                            <p class="product-description">
                                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                            </p>
                            <?php if ($price) : ?>
                                <div class="product-price">
                                    <span class="price-label">参考価格</span>
                                    <span class="price-value"><?php echo esc_html($price); ?></span>
                                </div>
                            <?php endif; ?>
                            <a href="/contact/" class="btn btn-primary">お問い合わせ</a>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>製品が登録されていません。</p>';
                endif;
                ?>
            </div>

            <!-- 選び方ガイド -->
            <div class="guide-box">
                <h3>家庭用蓄電システムの選び方</h3>
                <div class="guide-content">
                    <div class="guide-item">
                        <h4>1. 容量で選ぶ</h4>
                        <p>家族構成や電気使用量に合わせて適切な容量を選びましょう。
                        3kWhは1-2人世帯、5kWhは3-4人世帯、10kWhは5人以上またはオール電化住宅に最適です。</p>
                    </div>
                    <div class="guide-item">
                        <h4>2. 設置スペースを確認</h4>
                        <p>室内設置型と屋外設置型があります。
                        設置場所の広さや環境に合わせて最適なタイプをご提案します。</p>
                    </div>
                    <div class="guide-item">
                        <h4>3. 補助金を活用</h4>
                        <p>国や自治体の補助金制度を活用することで、導入コストを大幅に削減できます。
                        当社では補助金申請のサポートも行っています。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 産業用蓄電システム -->
    <section id="industrial" class="product-category bg-light">
        <div class="container">
            <h2 class="category-title">産業用蓄電システム</h2>
            <p class="category-description">
                事業所・工場・施設向けの大容量蓄電システム。
                BCP対策やピークカットによるコスト削減に貢献します。
            </p>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image" style="background-color: #628141;"></div>
                    <div class="product-content">
                        <span class="product-tag industrial">産業用</span>
                        <h3 class="product-name">Qilin Industrial 50kWh</h3>
                        <p class="product-spec">
                            容量: 50.0kWh<br>
                            定格出力: 20.0kW<br>
                            サイズ: 1200×1800×400mm
                        </p>
                        <p class="product-description">
                            中規模事業所向けの大容量システム。
                            停電時も業務を継続できる安心の容量です。
                        </p>
                        <div class="product-price">
                            <span class="price-label">参考価格</span>
                            <span class="price-value">¥5,800,000〜</span>
                        </div>
                        <a href="/contact/" class="btn btn-primary">お見積り依頼</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-color: #8BAE66;"></div>
                    <div class="product-content">
                        <span class="product-tag industrial">産業用</span>
                        <h3 class="product-name">Qilin Industrial 100kWh</h3>
                        <p class="product-spec">
                            容量: 100.0kWh<br>
                            定格出力: 50.0kW<br>
                            サイズ: 1500×2000×500mm
                        </p>
                        <p class="product-description">
                            大規模施設向けの超大容量システム。
                            ピークカット機能で電力コストを大幅削減します。
                        </p>
                        <div class="product-price">
                            <span class="price-label">参考価格</span>
                            <span class="price-value">¥9,800,000〜</span>
                        </div>
                        <a href="/contact/" class="btn btn-primary">お見積り依頼</a>
                    </div>
                </div>
            </div>

            <div class="feature-box">
                <h3>産業用蓄電システムの特長</h3>
                <div class="features-grid">
                    <div class="feature-item">
                        <span class="feature-icon">⚡</span>
                        <h4>ピークカット機能</h4>
                        <p>電力使用のピーク時に蓄電池から放電し、デマンド料金を削減</p>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🛡️</span>
                        <h4>BCP対策</h4>
                        <p>停電時も業務継続が可能、取引先からの信頼向上</p>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">📊</span>
                        <h4>エネルギー管理</h4>
                        <p>リアルタイムで電力使用状況を監視・最適化</p>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">💰</span>
                        <h4>コスト削減</h4>
                        <p>年間数百万円の電力コスト削減事例多数</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ポータブル電源 -->
    <section id="portable" class="product-category">
        <div class="container">
            <h2 class="category-title">ポータブル電源</h2>
            <p class="category-description">
                持ち運び可能な蓄電池。キャンプや車中泊、非常用電源として活躍します。
            </p>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image" style="background-color: #E67E22;"></div>
                    <div class="product-content">
                        <span class="product-tag">コンパクト</span>
                        <h3 class="product-name">Qilin Portable 300W</h3>
                        <p class="product-spec">
                            容量: 288Wh<br>
                            定格出力: 300W<br>
                            重量: 3.5kg
                        </p>
                        <p class="product-description">
                            軽量コンパクトで持ち運びに便利。
                            スマホやノートPCの充電に最適です。
                        </p>
                        <div class="product-price">
                            <span class="price-label">参考価格</span>
                            <span class="price-value">¥39,800</span>
                        </div>
                        <a href="/contact/" class="btn btn-primary">お問い合わせ</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-color: #8BAE66;"></div>
                    <div class="product-content">
                        <span class="product-tag">おすすめ</span>
                        <h3 class="product-name">Qilin Portable 1000W</h3>
                        <p class="product-spec">
                            容量: 1024Wh<br>
                            定格出力: 1000W<br>
                            重量: 10.8kg
                        </p>
                        <p class="product-description">
                            家電製品も使える高出力モデル。
                            車中泊やアウトドアに最適です。
                        </p>
                        <div class="product-price">
                            <span class="price-label">参考価格</span>
                            <span class="price-value">¥128,000</span>
                        </div>
                        <a href="/contact/" class="btn btn-primary">お問い合わせ</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-color: #628141;"></div>
                    <div class="product-content">
                        <span class="product-tag premium">大容量</span>
                        <h3 class="product-name">Qilin Portable 2000W</h3>
                        <p class="product-spec">
                            容量: 2048Wh<br>
                            定格出力: 2000W<br>
                            重量: 22kg
                        </p>
                        <p class="product-description">
                            超大容量で長時間使用が可能。
                            非常用電源としても安心の容量です。
                        </p>
                        <div class="product-price">
                            <span class="price-label">参考価格</span>
                            <span class="price-value">¥228,000</span>
                        </div>
                        <a href="/contact/" class="btn btn-primary">お問い合わせ</a>
                    </div>
                </div>
            </div>

            <div class="usage-examples">
                <h3>ポータブル電源の用途例</h3>
                <div class="examples-grid">
                    <div class="example-item">
                        <h4>🏕️ アウトドア・キャンプ</h4>
                        <p>照明、扇風機、電気毛布など、快適なキャンプをサポート</p>
                    </div>
                    <div class="example-item">
                        <h4>🚗 車中泊・車載</h4>
                        <p>炊飯器、電気ケトル、冷蔵庫など、車内でも家電が使える</p>
                    </div>
                    <div class="example-item">
                        <h4>🆘 非常用電源</h4>
                        <p>停電時のスマホ充電、照明、ラジオなど、災害時の備えに</p>
                    </div>
                    <div class="example-item">
                        <h4>🏗️ 屋外作業</h4>
                        <p>電動工具、ドローン、現場照明など、電源のない場所でも使用可能</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTAセクション -->
    <section class="products-cta" style="background-color: #628141;">
        <div class="container">
            <div class="cta-content">
                <h2 style="color: #EBD5AB;">製品についてのご相談・お見積り</h2>
                <p style="color: #EBD5AB;">お客様のニーズに合わせた最適な蓄電システムをご提案いたします</p>
                <div class="cta-buttons">
                    <a href="/contact/" class="btn btn-light">お問い合わせ</a>
                    <a href="/downloads/" class="btn btn-outline-light">カタログダウンロード</a>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
/* ページヘッダー */
.page-header {
    padding: 80px 0;
    text-align: center;
}

.page-title {
    font-size: 48px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 15px;
}

.page-subtitle {
    font-size: 20px;
    color: #EBD5AB;
}

/* 製品カテゴリナビ */
.product-nav {
    background-color: #fff;
    padding: 20px 0;
    border-bottom: 2px solid #8BAE66;
    position: sticky;
    top: 0;
    z-index: 100;
}

.category-nav {
    display: flex;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
}

.category-nav .nav-item {
    color: #628141;
    text-decoration: none;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.category-nav .nav-item:hover {
    background-color: #8BAE66;
    color: #fff;
}

/* 製品カテゴリ */
.product-category {
    padding: 80px 0;
}

.bg-light {
    background-color: #f9f9f9;
}

.category-title {
    font-size: 36px;
    font-weight: 700;
    color: #628141;
    margin-bottom: 20px;
}

.category-description {
    font-size: 18px;
    color: #666;
    max-width: 800px;
    margin: 0 auto 50px;
    text-align: center;
}

/* 製品グリッド */
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    margin-bottom: 60px;
}

.product-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.product-image {
    height: 250px;
    width: 100%;
}

.product-content {
    padding: 25px;
}

.product-tag {
    display: inline-block;
    background-color: #E67E22;
    color: #fff;
    padding: 4px 12px;
    border-radius: 3px;
    font-size: 12px;
    margin-bottom: 10px;
}

.product-tag.premium {
    background-color: #8BAE66;
}

.product-tag.industrial {
    background-color: #628141;
}

.product-name {
    font-size: 24px;
    font-weight: 700;
    color: #628141;
    margin-bottom: 15px;
}

.product-spec {
    font-size: 14px;
    color: #666;
    line-height: 1.8;
    margin-bottom: 15px;
    border-left: 3px solid #8BAE66;
    padding-left: 10px;
}

.product-description {
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
}

.product-price {
    margin-bottom: 20px;
    padding: 15px;
    background-color: #f9f9f9;
    border-radius: 5px;
}

.price-label {
    display: block;
    font-size: 12px;
    color: #666;
    margin-bottom: 5px;
}

.price-value {
    display: block;
    font-size: 28px;
    font-weight: 700;
    color: #E67E22;
}

/* ガイドボックス */
.guide-box {
    background-color: #fff;
    border: 2px solid #8BAE66;
    border-radius: 10px;
    padding: 40px;
    margin-top: 40px;
}

.guide-box h3 {
    font-size: 28px;
    color: #628141;
    margin-bottom: 30px;
}

.guide-content {
    display: grid;
    gap: 30px;
}

.guide-item h4 {
    color: #628141;
    margin-bottom: 10px;
}

.guide-item p {
    color: #666;
    line-height: 1.8;
}

/* 特長ボックス */
.feature-box {
    margin-top: 60px;
}

.feature-box h3 {
    font-size: 28px;
    color: #628141;
    margin-bottom: 30px;
    text-align: center;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.feature-item {
    text-align: center;
    padding: 30px 20px;
    background-color: #fff;
    border-radius: 10px;
}

.feature-icon {
    font-size: 48px;
    display: block;
    margin-bottom: 15px;
}

.feature-item h4 {
    color: #628141;
    margin-bottom: 10px;
}

.feature-item p {
    color: #666;
    font-size: 14px;
}

/* 用途例 */
.usage-examples {
    margin-top: 60px;
}

.usage-examples h3 {
    font-size: 28px;
    color: #628141;
    margin-bottom: 30px;
    text-align: center;
}

.examples-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.example-item {
    background-color: #fff;
    border: 2px solid #8BAE66;
    border-radius: 10px;
    padding: 25px;
}

.example-item h4 {
    color: #628141;
    margin-bottom: 10px;
    font-size: 18px;
}

.example-item p {
    color: #666;
    font-size: 14px;
    line-height: 1.8;
}

/* CTA */
.products-cta {
    padding: 80px 0;
}

.cta-content {
    text-align: center;
}

.cta-content h2 {
    font-size: 36px;
    margin-bottom: 15px;
}

.cta-content p {
    font-size: 18px;
    margin-bottom: 30px;
}

.cta-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

/* レスポンシブ */
@media screen and (max-width: 768px) {
    .page-title {
        font-size: 32px;
    }

    .category-title {
        font-size: 28px;
    }

    .products-grid {
        grid-template-columns: 1fr;
    }

    .category-nav {
        flex-direction: column;
        gap: 10px;
    }

    .guide-box,
    .feature-box {
        padding: 20px;
    }
}
</style>

<?php
get_footer();
