<?php
/**
 * Template Name: 導入事例
 * 導入事例・実績ページテンプレート
 *
 * @package Qilin_Electric
 */

get_header();
?>

<main id="primary" class="site-main case-studies-page">

    <!-- ページヘッダー -->
    <section class="page-header" style="background: linear-gradient(135deg, #628141 0%, #8BAE66 100%);">
        <div class="container">
            <h1 class="page-title">導入事例・実績</h1>
            <p class="page-subtitle">お客様の声と豊富な導入実績をご紹介</p>
        </div>
    </section>

    <!-- カテゴリナビ -->
    <section class="category-nav-section">
        <div class="container">
            <nav class="category-nav">
                <a href="#residential" class="nav-item">住宅向け</a>
                <a href="#commercial" class="nav-item">企業・施設向け</a>
                <a href="#voices" class="nav-item">お客様の声</a>
            </nav>
        </div>
    </section>

    <!-- 住宅向け導入事例 -->
    <section id="residential" class="case-section">
        <div class="container">
            <h2 class="section-title">住宅向け導入事例</h2>
            <p class="section-description">戸建て住宅や集合住宅での蓄電池導入事例をご紹介します</p>

            <div class="cases-grid">
                <!-- 事例1 -->
                <div class="case-card">
                    <div class="case-image" style="background-color: #8BAE66;"></div>
                    <div class="case-content">
                        <span class="case-tag">戸建て住宅</span>
                        <h3 class="case-title">東京都・Aさま邸</h3>
                        <p class="case-summary">
                            卒FIT後の太陽光発電を有効活用するため、5kWh蓄電池を導入。
                            電気代が月平均8,000円削減され、停電時の備えもできて安心。
                        </p>
                        <div class="case-specs">
                            <div class="spec-item">
                                <span class="spec-label">導入製品</span>
                                <span class="spec-value">家庭用蓄電池 5kWh</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入目的</span>
                                <span class="spec-value">卒FIT対策・電気代削減</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入効果</span>
                                <span class="spec-value">月8,000円の電気代削減</span>
                            </div>
                        </div>
                        <div class="case-voice">
                            <p>「FIT期間終了後、売電価格が下がって困っていましたが、蓄電池を導入してから電気代が大幅に減りました。停電時も安心で、導入して本当に良かったです。」</p>
                        </div>
                    </div>
                </div>

                <!-- 事例2 -->
                <div class="case-card">
                    <div class="case-image" style="background-color: #628141;"></div>
                    <div class="case-content">
                        <span class="case-tag">戸建て住宅</span>
                        <h3 class="case-title">神奈川県・Bさま邸</h3>
                        <p class="case-summary">
                            新築時に太陽光発電10kWと蓄電池10kWhを同時導入。
                            ほぼ電力自給自足を実現し、電気代はほとんどかからない生活を実現。
                        </p>
                        <div class="case-specs">
                            <div class="spec-item">
                                <span class="spec-label">導入製品</span>
                                <span class="spec-value">太陽光10kW + 蓄電池10kWh</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入目的</span>
                                <span class="spec-value">エネルギー自給自足・環境貢献</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入効果</span>
                                <span class="spec-value">電気代90%削減・CO2削減</span>
                            </div>
                        </div>
                        <div class="case-voice">
                            <p>「環境に配慮した家づくりをしたくて、太陽光と蓄電池を導入しました。電気代がほとんどかからず、エコな生活ができて満足しています。」</p>
                        </div>
                    </div>
                </div>

                <!-- 事例3 -->
                <div class="case-card">
                    <div class="case-image" style="background-color: #E67E22;"></div>
                    <div class="case-content">
                        <span class="case-tag">集合住宅</span>
                        <h3 class="case-title">千葉県・Cマンション</h3>
                        <p class="case-summary">
                            マンション全体で50kWh蓄電池を導入。共用部の電気代削減と、
                            災害時の非常用電源として活用。管理組合の評判も上々。
                        </p>
                        <div class="case-specs">
                            <div class="spec-item">
                                <span class="spec-label">導入製品</span>
                                <span class="spec-value">産業用蓄電池 50kWh</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入目的</span>
                                <span class="spec-value">共用部電気代削減・BCP対策</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入効果</span>
                                <span class="spec-value">年間36万円の電気代削減</span>
                            </div>
                        </div>
                        <div class="case-voice">
                            <p>「マンションの管理費削減のため導入しました。電気代が大幅に下がり、災害時の備えもでき、住民の満足度も高いです。」</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 企業・施設向け導入事例 -->
    <section id="commercial" class="case-section bg-light">
        <div class="container">
            <h2 class="section-title">企業・施設向け導入事例</h2>
            <p class="section-description">オフィス、店舗、工場、公共施設での導入事例をご紹介</p>

            <div class="cases-grid">
                <!-- 事例4 -->
                <div class="case-card">
                    <div class="case-image" style="background-color: #628141;"></div>
                    <div class="case-content">
                        <span class="case-tag industrial">オフィス</span>
                        <h3 class="case-title">IT企業D社（東京都）</h3>
                        <p class="case-summary">
                            サーバー室の電力確保とBCP対策のため、100kWh蓄電池を導入。
                            停電時も24時間業務継続が可能になり、取引先からの信頼度も向上。
                        </p>
                        <div class="case-specs">
                            <div class="spec-item">
                                <span class="spec-label">導入製品</span>
                                <span class="spec-value">産業用蓄電池 100kWh</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入目的</span>
                                <span class="spec-value">BCP対策・ピークカット</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入効果</span>
                                <span class="spec-value">年間120万円のコスト削減</span>
                            </div>
                        </div>
                        <div class="case-voice">
                            <p>「データセンターのBCP対策として導入しました。停電時も業務が継続でき、ピークカット効果で電気代も大幅削減。投資回収は7年の見込みです。」</p>
                        </div>
                    </div>
                </div>

                <!-- 事例5 -->
                <div class="case-card">
                    <div class="case-image" style="background-color: #8BAE66;"></div>
                    <div class="case-content">
                        <span class="case-tag industrial">工場</span>
                        <h3 class="case-title">製造業E社（埼玉県）</h3>
                        <p class="case-summary">
                            工場の電力コスト削減と環境対策のため、太陽光50kWと蓄電池200kWhを導入。
                            年間300万円の電力コスト削減を達成。
                        </p>
                        <div class="case-specs">
                            <div class="spec-item">
                                <span class="spec-label">導入製品</span>
                                <span class="spec-value">太陽光50kW + 蓄電池200kWh</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入目的</span>
                                <span class="spec-value">電力コスト削減・環境対策</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入効果</span>
                                <span class="spec-value">年間300万円のコスト削減</span>
                            </div>
                        </div>
                        <div class="case-voice">
                            <p>「電力コストが年々上昇する中、抜本的な対策として太陽光と蓄電池を導入しました。予想以上のコスト削減効果で、5年で投資回収できる見込みです。」</p>
                        </div>
                    </div>
                </div>

                <!-- 事例6 -->
                <div class="case-card">
                    <div class="case-image" style="background-color: #E67E22;"></div>
                    <div class="case-content">
                        <span class="case-tag industrial">公共施設</span>
                        <h3 class="case-title">F市コミュニティセンター</h3>
                        <p class="case-summary">
                            避難所指定施設のため、災害時の電力確保として100kWh蓄電池を導入。
                            平時は施設の電力コスト削減に貢献。
                        </p>
                        <div class="case-specs">
                            <div class="spec-item">
                                <span class="spec-label">導入製品</span>
                                <span class="spec-value">産業用蓄電池 100kWh</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入目的</span>
                                <span class="spec-value">防災対策・電力コスト削減</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">導入効果</span>
                                <span class="spec-value">避難所機能強化・年間80万円削減</span>
                            </div>
                        </div>
                        <div class="case-voice">
                            <p>「避難所として災害時の電力確保が課題でした。蓄電池導入により、停電時も照明や冷暖房、通信機器が使用でき、安心して避難所運営ができます。」</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- お客様の声 -->
    <section id="voices" class="voices-section">
        <div class="container">
            <h2 class="section-title">お客様の声</h2>
            <p class="section-description">導入いただいたお客様からの評価をご紹介します</p>

            <div class="voices-grid">
                <div class="voice-card">
                    <div class="voice-rating">★★★★★</div>
                    <p class="voice-text">
                        「担当者の方が親身に相談に乗ってくれて、我が家に最適なシステムを提案してくれました。
                        補助金の申請もサポートしていただき、スムーズに導入できました。」
                    </p>
                    <p class="voice-author">東京都・60代男性</p>
                </div>

                <div class="voice-card">
                    <div class="voice-rating">★★★★★</div>
                    <p class="voice-text">
                        「工事も丁寧で、アフターフォローもしっかりしています。
                        電気代が本当に下がって、導入して大正解でした。」
                    </p>
                    <p class="voice-author">神奈川県・40代女性</p>
                </div>

                <div class="voice-card">
                    <div class="voice-rating">★★★★★</div>
                    <p class="voice-text">
                        「企業のBCP対策として導入しましたが、平時のコスト削減効果も大きく、
                        経営層も満足しています。導入を検討している企業にはおすすめです。」
                    </p>
                    <p class="voice-author">東京都・製造業経営者</p>
                </div>

                <div class="voice-card">
                    <div class="voice-rating">★★★★★</div>
                    <p class="voice-text">
                        「停電時に実際に蓄電池が活躍しました。冷蔵庫や照明が使えて、
                        家族全員が安心できました。導入しておいて本当に良かったです。」
                    </p>
                    <p class="voice-author">千葉県・30代男性</p>
                </div>

                <div class="voice-card">
                    <div class="voice-rating">★★★★★</div>
                    <p class="voice-text">
                        「見積もりから施工まで迅速で、説明も分かりやすかったです。
                        スマホアプリで発電量や使用量が見られて、省エネ意識も高まりました。」
                    </p>
                    <p class="voice-author">埼玉県・50代女性</p>
                </div>

                <div class="voice-card">
                    <div class="voice-rating">★★★★★</div>
                    <p class="voice-text">
                        「他社と比較検討しましたが、価格、サービス、実績ともに
                        Qilin Electricが一番良かったです。自信を持っておすすめできます。」
                    </p>
                    <p class="voice-author">東京都・40代男性</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 実績数値 -->
    <section class="stats-section" style="background-color: #628141;">
        <div class="container">
            <h2 style="color: #EBD5AB; text-align: center; margin-bottom: 50px;">導入実績</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number" style="color: #EBD5AB;">1,200</div>
                    <div class="stat-label" style="color: #EBD5AB;">件以上</div>
                    <div class="stat-description" style="color: #EBD5AB;">累計導入実績</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" style="color: #EBD5AB;">98</div>
                    <div class="stat-label" style="color: #EBD5AB;">%</div>
                    <div class="stat-description" style="color: #EBD5AB;">お客様満足度</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" style="color: #EBD5AB;">15</div>
                    <div class="stat-label" style="color: #EBD5AB;">年</div>
                    <div class="stat-description" style="color: #EBD5AB;">平均サポート期間</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" style="color: #EBD5AB;">47</div>
                    <div class="stat-label" style="color: #EBD5AB;">都道府県</div>
                    <div class="stat-description" style="color: #EBD5AB;">全国対応エリア</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTAセクション -->
    <section class="case-cta">
        <div class="container">
            <div class="cta-content">
                <h2 style="color: #628141;">あなたも蓄電池で快適な暮らしを</h2>
                <p style="color: #666;">まずは無料相談・お見積りから始めませんか？</p>
                <div class="cta-buttons">
                    <a href="http://qilin-electric.com/script/mailform/main/" class="btn btn-primary">無料相談・お見積り</a>
                    <a href="/products/" class="btn btn-outline-primary">製品一覧を見る</a>
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

/* カテゴリナビ */
.category-nav-section {
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

/* セクション */
.case-section {
    padding: 80px 0;
}

.bg-light {
    background-color: #f9f9f9;
}

.section-title {
    font-size: 36px;
    font-weight: 700;
    color: #628141;
    text-align: center;
    margin-bottom: 15px;
}

.section-description {
    font-size: 18px;
    color: #666;
    text-align: center;
    margin-bottom: 50px;
}

/* 事例カード */
.cases-grid {
    display: grid;
    gap: 40px;
}

.case-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
}

.case-image {
    height: 300px;
    width: 100%;
}

.case-content {
    padding: 30px;
}

.case-tag {
    display: inline-block;
    background-color: #E67E22;
    color: #fff;
    padding: 5px 15px;
    border-radius: 3px;
    font-size: 14px;
    margin-bottom: 15px;
}

.case-tag.industrial {
    background-color: #628141;
}

.case-title {
    font-size: 24px;
    font-weight: 700;
    color: #628141;
    margin-bottom: 15px;
}

.case-summary {
    color: #666;
    line-height: 1.8;
    margin-bottom: 25px;
}

.case-specs {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.spec-item {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
}

.spec-item:last-child {
    border-bottom: none;
}

.spec-label {
    font-weight: 600;
    color: #628141;
}

.spec-value {
    color: #666;
}

.case-voice {
    background-color: #8BAE66;
    color: #fff;
    padding: 20px;
    border-radius: 8px;
    border-left: 4px solid #628141;
}

.case-voice p {
    margin: 0;
    line-height: 1.8;
}

/* お客様の声 */
.voices-section {
    padding: 80px 0;
    background-color: #f9f9f9;
}

.voices-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.voice-card {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    border: 2px solid #8BAE66;
}

.voice-rating {
    color: #E67E22;
    font-size: 24px;
    margin-bottom: 15px;
}

.voice-text {
    color: #666;
    line-height: 1.8;
    margin-bottom: 15px;
}

.voice-author {
    color: #628141;
    font-weight: 600;
    text-align: right;
}

/* 実績数値 */
.stats-section {
    padding: 80px 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 40px;
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 60px;
    font-weight: 700;
    margin-bottom: 10px;
}

.stat-label {
    font-size: 24px;
    margin-bottom: 10px;
}

.stat-description {
    font-size: 16px;
}

/* CTA */
.case-cta {
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

.btn {
    display: inline-block;
    padding: 15px 40px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color: #628141;
    color: #fff;
    border: 2px solid #628141;
}

.btn-primary:hover {
    background-color: #8BAE66;
    border-color: #8BAE66;
}

.btn-outline-primary {
    background-color: transparent;
    color: #628141;
    border: 2px solid #628141;
}

.btn-outline-primary:hover {
    background-color: #628141;
    color: #fff;
}

/* レスポンシブ */
@media screen and (max-width: 768px) {
    .page-title {
        font-size: 32px;
    }

    .section-title {
        font-size: 28px;
    }

    .case-content {
        padding: 20px;
    }

    .voices-grid {
        grid-template-columns: 1fr;
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .stat-number {
        font-size: 40px;
    }

    .cta-buttons {
        flex-direction: column;
    }
}
</style>

<?php
get_footer();
