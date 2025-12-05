<?php
/**
 * フロントページテンプレート（トップページ）
 *
 * @package Qilin_Electric
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- ヒーローセクション -->
    <section class="hero-section">
        <div class="hero-slider">
            <div class="hero-slide" style="background: linear-gradient(135deg, #628141 0%, #8BAE66 100%);">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="hero-title">環境にやさしい<br>未来のエネルギーを</h1>
                        <p class="hero-subtitle">家庭用・産業用蓄電システムで、持続可能な暮らしを実現</p>
                        <div class="hero-buttons">
                            <a href="/products/" class="btn btn-primary">製品を見る</a>
                            <a href="http://qilin-electric.com/script/mailform/main/" class="btn btn-secondary">お問い合わせ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- サービス概要 -->
    <section class="services-overview">
        <div class="container">
            <h2 class="section-title">Qilin Electricが選ばれる理由</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">⚡</div>
                    <h3>高品質な蓄電システム</h3>
                    <p>家庭用から産業用まで、ニーズに合わせた最適な蓄電システムをご提案します。</p>
                    <a href="/products/" class="service-link">製品一覧 →</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">🌱</div>
                    <h3>環境配慮型ソリューション</h3>
                    <p>太陽光発電と組み合わせて、クリーンエネルギーの有効活用を実現します。</p>
                    <a href="/solutions/" class="service-link">ソリューション →</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">🛡️</div>
                    <h3>万全のサポート体制</h3>
                    <p>導入前の相談から設置後のメンテナンスまで、安心のサポートをお約束します。</p>
                    <a href="/support/" class="service-link">サポート情報 →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 主要ソリューション -->
    <section class="main-solutions">
        <div class="container">
            <h2 class="section-title">主要ソリューション</h2>
            <div class="solutions-grid">
                <div class="solution-item">
                    <div class="solution-image" style="background-color: #8BAE66;"></div>
                    <h3>卒FIT対策</h3>
                    <p>固定価格買取制度終了後の売電価格低下に対応。蓄電池で自家消費を増やし、電気代を削減します。</p>
                    <a href="/solutions/sotsufit/" class="btn-text">詳しく見る →</a>
                </div>
                <div class="solution-item">
                    <div class="solution-image" style="background-color: #628141;"></div>
                    <h3>BCP・防災対策</h3>
                    <p>災害時の事業継続や停電対策に。企業・施設向けの大容量蓄電システムをご提案します。</p>
                    <a href="/solutions/bcp/" class="btn-text">詳しく見る →</a>
                </div>
                <div class="solution-item">
                    <div class="solution-image" style="background-color: #E67E22;"></div>
                    <h3>オフグリッドシステム</h3>
                    <p>電力会社に頼らない完全自給自足の電力システム。山小屋や離島など様々な場所で活用できます。</p>
                    <a href="/solutions/offgrid/" class="btn-text">詳しく見る →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 導入事例ハイライト -->
    <section class="case-studies-highlight">
        <div class="container">
            <h2 class="section-title">導入事例</h2>
            <p class="section-subtitle">実際にQilin Electricの蓄電システムを導入されたお客様の声をご紹介します</p>
            <div class="cases-grid">
                <?php
                // 導入事例の最新3件を取得
                $case_studies = new WP_Query(array(
                    'post_type' => 'case_study',
                    'posts_per_page' => 3,
                ));

                if ($case_studies->have_posts()) :
                    while ($case_studies->have_posts()) : $case_studies->the_post();
                ?>
                    <div class="case-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="case-image">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="case-content">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-text">詳細を見る →</a>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <!-- デフォルトの事例表示 -->
                    <div class="case-card">
                        <div class="case-image" style="background-color: #EBD5AB; height: 200px;"></div>
                        <div class="case-content">
                            <h3>戸建て住宅での導入事例</h3>
                            <p>太陽光発電と蓄電池を組み合わせて、電気代を80%削減に成功。災害時の備えも万全です。</p>
                            <a href="/case-studies/" class="btn-text">詳細を見る →</a>
                        </div>
                    </div>
                    <div class="case-card">
                        <div class="case-image" style="background-color: #8BAE66; height: 200px;"></div>
                        <div class="case-content">
                            <h3>オフィスビルでのBCP対策</h3>
                            <p>大容量蓄電システムで、停電時も業務継続が可能に。取引先からの信頼も向上しました。</p>
                            <a href="/case-studies/" class="btn-text">詳細を見る →</a>
                        </div>
                    </div>
                    <div class="case-card">
                        <div class="case-image" style="background-color: #628141; height: 200px;"></div>
                        <div class="case-content">
                            <h3>工場での電力コスト削減</h3>
                            <p>ピークカット機能で電力デマンドを最適化。年間300万円のコスト削減を実現しました。</p>
                            <a href="/case-studies/" class="btn-text">詳細を見る →</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="text-center" style="margin-top: 40px;">
                <a href="/case-studies/" class="btn btn-primary">すべての導入事例を見る</a>
            </div>
        </div>
    </section>

    <!-- お知らせ・ニュース -->
    <section class="news-section">
        <div class="container">
            <h2 class="section-title">お知らせ・ニュース</h2>
            <div class="news-list">
                <?php
                $news_query = new WP_Query(array(
                    'posts_per_page' => 5,
                    'post_status' => 'publish',
                ));

                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) : $news_query->the_post();
                ?>
                    <div class="news-item">
                        <time class="news-date"><?php echo get_the_date('Y.m.d'); ?></time>
                        <span class="news-category"><?php the_category(', '); ?></span>
                        <a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <div class="news-item">
                        <time class="news-date">2025.12.04</time>
                        <span class="news-category">お知らせ</span>
                        <a href="#" class="news-title">年末年始の営業日についてのお知らせ</a>
                    </div>
                    <div class="news-item">
                        <time class="news-date">2025.11.20</time>
                        <span class="news-category">新製品</span>
                        <a href="#" class="news-title">家庭用蓄電システム新モデル発売のお知らせ</a>
                    </div>
                    <div class="news-item">
                        <time class="news-date">2025.11.15</time>
                        <span class="news-category">キャンペーン</span>
                        <a href="#" class="news-title">冬の蓄電池導入キャンペーン実施中</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="text-center" style="margin-top: 30px;">
                <a href="/news/" class="btn-text">すべてのお知らせを見る →</a>
            </div>
        </div>
    </section>

    <!-- CTAセクション -->
    <section class="cta-section" style="background-color: #628141;">
        <div class="container">
            <div class="cta-content">
                <h2 style="color: #EBD5AB;">まずはお気軽にご相談ください</h2>
                <p style="color: #EBD5AB;">専門スタッフが、お客様のニーズに最適な蓄電システムをご提案いたします</p>
                <div class="cta-buttons">
                    <a href="http://qilin-electric.com/script/mailform/main/" class="btn btn-light">お問い合わせ</a>
                    <a href="tel:0120-xxx-xxxx" class="btn btn-outline-light">📞 0120-XXX-XXXX</a>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
/* ヒーローセクション */
.hero-section {
    width: 100%;
    padding: 0;
    margin: 0;
}

.hero-slide {
    padding: 100px 0;
    min-height: 500px;
    display: flex;
    align-items: center;
}

.hero-content {
    max-width: 800px;
}

.hero-title {
    font-size: 48px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 20px;
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 20px;
    color: #EBD5AB;
    margin-bottom: 30px;
}

.hero-buttons {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

/* サービス概要 */
.services-overview {
    padding: 80px 0;
    background-color: #fff;
}

.section-title {
    font-size: 36px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 50px;
    color: #628141;
}

.section-subtitle {
    text-align: center;
    font-size: 18px;
    color: #666;
    margin-bottom: 40px;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.service-card {
    background: #fff;
    border: 2px solid #8BAE66;
    border-radius: 10px;
    padding: 40px 30px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(98, 129, 65, 0.2);
}

.service-icon {
    font-size: 60px;
    margin-bottom: 20px;
}

.service-card h3 {
    font-size: 22px;
    color: #628141;
    margin-bottom: 15px;
}

.service-card p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
}

.service-link {
    color: #E67E22;
    font-weight: 600;
    text-decoration: none;
}

/* ソリューション */
.main-solutions {
    padding: 80px 0;
    background-color: #EBD5AB;
}

.solutions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.solution-item {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
}

.solution-image {
    height: 200px;
    width: 100%;
}

.solution-item h3,
.solution-item p,
.solution-item .btn-text {
    padding: 0 20px;
}

.solution-item h3 {
    margin: 20px 0 10px;
    color: #628141;
    font-size: 22px;
}

.solution-item p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
}

/* 導入事例 */
.case-studies-highlight {
    padding: 80px 0;
    background-color: #fff;
}

.cases-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.case-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
}

.case-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.case-content {
    padding: 20px;
}

.case-content h3 {
    color: #628141;
    margin-bottom: 10px;
}

.case-content p {
    color: #666;
    margin-bottom: 15px;
}

/* ニュース */
.news-section {
    padding: 80px 0;
    background-color: #f9f9f9;
}

.news-list {
    max-width: 900px;
    margin: 0 auto;
}

.news-item {
    display: flex;
    gap: 20px;
    padding: 20px 0;
    border-bottom: 1px solid #ddd;
    align-items: center;
}

.news-date {
    color: #666;
    font-size: 14px;
    white-space: nowrap;
}

.news-category {
    background-color: #8BAE66;
    color: #fff;
    padding: 4px 12px;
    border-radius: 3px;
    font-size: 12px;
    white-space: nowrap;
}

.news-title {
    color: #333;
    text-decoration: none;
    flex: 1;
}

.news-title:hover {
    color: #E67E22;
}

/* CTA */
.cta-section {
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

/* ボタン */
.btn {
    display: inline-block;
    padding: 15px 40px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color: #E67E22;
    color: #fff;
}

.btn-primary:hover {
    background-color: #d35400;
}

.btn-secondary {
    background-color: transparent;
    color: #fff;
    border: 2px solid #fff;
}

.btn-secondary:hover {
    background-color: #fff;
    color: #628141;
}

.btn-light {
    background-color: #fff;
    color: #628141;
}

.btn-light:hover {
    background-color: #EBD5AB;
}

.btn-outline-light {
    background-color: transparent;
    color: #EBD5AB;
    border: 2px solid #EBD5AB;
}

.btn-outline-light:hover {
    background-color: #EBD5AB;
    color: #628141;
}

.btn-text {
    color: #E67E22;
    text-decoration: none;
    font-weight: 600;
}

.btn-text:hover {
    color: #d35400;
}

.text-center {
    text-align: center;
}

/* レスポンシブ */
@media screen and (max-width: 768px) {
    .hero-title {
        font-size: 32px;
    }

    .hero-subtitle {
        font-size: 16px;
    }

    .section-title {
        font-size: 28px;
    }

    .hero-slide {
        padding: 60px 0;
        min-height: 400px;
    }

    .services-grid,
    .solutions-grid,
    .cases-grid {
        grid-template-columns: 1fr;
    }

    .news-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
}
</style>

<?php
get_footer();
