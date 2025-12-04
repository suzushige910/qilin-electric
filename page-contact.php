<?php
/**
 * Template Name: お問い合わせ
 * お問い合わせページテンプレート
 *
 * @package Qilin_Electric
 */

get_header();
?>

<main id="primary" class="site-main contact-page">

    <!-- ページヘッダー -->
    <section class="page-header" style="background: linear-gradient(135deg, #628141 0%, #8BAE66 100%);">
        <div class="container">
            <h1 class="page-title">お問い合わせ</h1>
            <p class="page-subtitle">お気軽にご相談ください</p>
        </div>
    </section>

    <!-- お問い合わせ方法 -->
    <section class="contact-methods">
        <div class="container">
            <div class="methods-grid">
                <!-- 電話 -->
                <div class="method-card">
                    <div class="method-icon" style="background-color: #8BAE66;">
                        <span style="font-size: 50px;">📞</span>
                    </div>
                    <h3>お電話でのお問い合わせ</h3>
                    <p class="method-number">03-1234-5678</p>
                    <p class="method-hours">受付時間: 9:00～18:00（土日祝除く）</p>
                    <p class="method-description">
                        お急ぎの方はお電話でお問い合わせください。
                        専門スタッフが丁寧に対応いたします。
                    </p>
                </div>

                <!-- メール -->
                <div class="method-card">
                    <div class="method-icon" style="background-color: #628141;">
                        <span style="font-size: 50px;">✉️</span>
                    </div>
                    <h3>メールでのお問い合わせ</h3>
                    <p class="method-number">info@qilin-electric.com</p>
                    <p class="method-hours">24時間受付（返信は営業時間内）</p>
                    <p class="method-description">
                        メールでのお問い合わせは24時間受け付けております。
                        2営業日以内にご返信いたします。
                    </p>
                </div>

                <!-- LINE -->
                <div class="method-card">
                    <div class="method-icon" style="background-color: #E67E22;">
                        <span style="font-size: 50px;">💬</span>
                    </div>
                    <h3>LINE公式アカウント</h3>
                    <p class="method-number">@qilin-electric</p>
                    <p class="method-hours">受付時間: 9:00～18:00（土日祝除く）</p>
                    <p class="method-description">
                        LINEで手軽にお問い合わせいただけます。
                        友だち追加後、お気軽にメッセージください。
                    </p>
                    <a href="#" class="btn btn-line">友だち追加</a>
                </div>
            </div>
        </div>
    </section>

    <!-- お問い合わせフォーム -->
    <section class="contact-form-section bg-light">
        <div class="container">
            <h2 class="section-title">お問い合わせフォーム</h2>
            <p class="section-description">
                以下のフォームに必要事項をご入力の上、送信してください。<br>
                <span style="color: #E67E22;">*</span> は必須項目です。
            </p>

            <div class="form-container">
                <form action="#" method="post" class="contact-form">
                    <!-- お問い合わせ種別 -->
                    <div class="form-group">
                        <label for="inquiry_type">お問い合わせ種別 <span class="required">*</span></label>
                        <select id="inquiry_type" name="inquiry_type" required>
                            <option value="">選択してください</option>
                            <option value="製品について">製品について</option>
                            <option value="見積依頼">見積依頼</option>
                            <option value="資料請求">資料請求</option>
                            <option value="卒FIT対策">卒FIT対策について</option>
                            <option value="BCP対策">BCP対策について</option>
                            <option value="補助金について">補助金について</option>
                            <option value="アフターサービス">アフターサービス</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>

                    <!-- お名前 -->
                    <div class="form-group">
                        <label for="name">お名前 <span class="required">*</span></label>
                        <input type="text" id="name" name="name" required placeholder="例: 山田 太郎">
                    </div>

                    <!-- フリガナ -->
                    <div class="form-group">
                        <label for="kana">フリガナ</label>
                        <input type="text" id="kana" name="kana" placeholder="例: ヤマダ タロウ">
                    </div>

                    <!-- 会社名・団体名 -->
                    <div class="form-group">
                        <label for="company">会社名・団体名</label>
                        <input type="text" id="company" name="company" placeholder="例: 株式会社サンプル">
                    </div>

                    <!-- メールアドレス -->
                    <div class="form-group">
                        <label for="email">メールアドレス <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required placeholder="例: sample@example.com">
                    </div>

                    <!-- 電話番号 -->
                    <div class="form-group">
                        <label for="phone">電話番号 <span class="required">*</span></label>
                        <input type="tel" id="phone" name="phone" required placeholder="例: 03-1234-5678">
                    </div>

                    <!-- 郵便番号 -->
                    <div class="form-group">
                        <label for="zipcode">郵便番号</label>
                        <input type="text" id="zipcode" name="zipcode" placeholder="例: 100-0001">
                    </div>

                    <!-- ご住所 -->
                    <div class="form-group">
                        <label for="address">ご住所</label>
                        <input type="text" id="address" name="address" placeholder="例: 東京都千代田区千代田1-1-1">
                    </div>

                    <!-- ご希望の連絡方法 -->
                    <div class="form-group">
                        <label>ご希望の連絡方法</label>
                        <div class="radio-group">
                            <label><input type="radio" name="contact_method" value="電話" checked> 電話</label>
                            <label><input type="radio" name="contact_method" value="メール"> メール</label>
                            <label><input type="radio" name="contact_method" value="どちらでも"> どちらでも</label>
                        </div>
                    </div>

                    <!-- ご希望の連絡時間帯 -->
                    <div class="form-group">
                        <label for="preferred_time">ご希望の連絡時間帯</label>
                        <select id="preferred_time" name="preferred_time">
                            <option value="">指定なし</option>
                            <option value="午前中（9:00-12:00）">午前中（9:00-12:00）</option>
                            <option value="午後（12:00-15:00）">午後（12:00-15:00）</option>
                            <option value="夕方（15:00-18:00）">夕方（15:00-18:00）</option>
                        </select>
                    </div>

                    <!-- お問い合わせ内容 -->
                    <div class="form-group">
                        <label for="message">お問い合わせ内容 <span class="required">*</span></label>
                        <textarea id="message" name="message" rows="8" required placeholder="お問い合わせ内容をご記入ください"></textarea>
                        <p class="form-help">
                            ※製品に関するお問い合わせの場合は、ご検討中の製品名や導入予定時期などをご記入いただけますとスムーズです。
                        </p>
                    </div>

                    <!-- プライバシーポリシー同意 -->
                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="privacy_agreement" required>
                            <a href="/privacy-policy/" target="_blank">プライバシーポリシー</a>に同意する <span class="required">*</span>
                        </label>
                    </div>

                    <!-- 送信ボタン -->
                    <div class="form-submit">
                        <button type="submit" class="btn btn-primary btn-large">送信する</button>
                    </div>
                </form>

                <!-- フォーム注意事項 -->
                <div class="form-notes">
                    <h4>お問い合わせの前にご確認ください</h4>
                    <ul>
                        <li>お問い合わせ内容により、回答までにお時間をいただく場合がございます。</li>
                        <li>土日祝日、年末年始にいただいたお問い合わせは、翌営業日以降の対応となります。</li>
                        <li>お問い合わせ内容によっては、回答できない場合もございます。予めご了承ください。</li>
                        <li>よくあるご質問については<a href="/faq/">FAQページ</a>もご覧ください。</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- よくある質問 -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">よくある質問</h2>
            <p class="section-description">
                お問い合わせの多い質問をまとめました。<br>
                詳しくは<a href="/faq/" style="color: #628141; font-weight: 600;">FAQページ</a>をご覧ください。
            </p>

            <div class="faq-list">
                <div class="faq-item">
                    <h3 class="faq-question">Q. 見積りは無料ですか?</h3>
                    <p class="faq-answer">
                        A. はい、お見積りは無料です。お気軽にお問い合わせください。
                        現地調査が必要な場合も、基本的に無料で対応いたします。
                    </p>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">Q. 補助金の申請サポートはしてもらえますか?</h3>
                    <p class="faq-answer">
                        A. はい、補助金申請のサポートも行っております。
                        国や自治体の補助金制度についてのご相談から、申請書類の作成支援まで対応いたします。
                    </p>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">Q. 工事期間はどのくらいかかりますか?</h3>
                    <p class="faq-answer">
                        A. 家庭用蓄電池の場合、通常1〜2日程度です。
                        産業用や太陽光発電との同時設置の場合は、3〜5日程度かかることがあります。
                        詳しくは現地調査の際にご説明いたします。
                    </p>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">Q. アフターサービスはありますか?</h3>
                    <p class="faq-answer">
                        A. はい、充実したアフターサービスをご用意しております。
                        定期メンテナンス、遠隔監視サービス、故障時の迅速な対応など、
                        導入後も安心してご利用いただけるサポート体制を整えています。
                    </p>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">Q. 対応エリアはどこですか?</h3>
                    <p class="faq-answer">
                        A. 全国47都道府県に対応しております。
                        札幌、仙台、東京、名古屋、大阪、広島、福岡に営業所があり、
                        各地域のお客様に迅速に対応できる体制を整えています。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- アクセス -->
    <section class="access-quick bg-light">
        <div class="container">
            <h2 class="section-title">アクセス</h2>
            <div class="access-info-compact">
                <h3>本社</h3>
                <p>
                    〒100-0001 東京都千代田区千代田1-1-1 Qilinビル 5F<br>
                    TEL: 03-1234-5678 / FAX: 03-1234-5679<br>
                    営業時間: 9:00～18:00（土日祝除く）
                </p>
                <a href="/company/#access" class="btn btn-outline-primary">詳しいアクセス情報</a>
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

/* お問い合わせ方法 */
.contact-methods {
    padding: 80px 0;
}

.methods-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.method-card {
    background: #fff;
    border: 2px solid #8BAE66;
    border-radius: 15px;
    padding: 40px 30px;
    text-align: center;
}

.method-icon {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
}

.method-card h3 {
    color: #628141;
    font-size: 20px;
    margin-bottom: 15px;
}

.method-number {
    font-size: 28px;
    font-weight: 700;
    color: #628141;
    margin-bottom: 10px;
}

.method-hours {
    color: #666;
    font-size: 14px;
    margin-bottom: 20px;
}

.method-description {
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
}

.btn-line {
    background-color: #06C755;
    color: #fff;
    border: none;
}

.btn-line:hover {
    background-color: #05A946;
}

/* お問い合わせフォームセクション */
.contact-form-section {
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
    text-align: center;
    color: #666;
    margin-bottom: 50px;
    line-height: 1.8;
}

.form-container {
    max-width: 800px;
    margin: 0 auto;
}

.contact-form {
    background: #fff;
    padding: 40px;
    border-radius: 10px;
    border: 2px solid #8BAE66;
}

.form-group {
    margin-bottom: 30px;
}

.form-group label {
    display: block;
    color: #628141;
    font-weight: 600;
    margin-bottom: 10px;
}

.required {
    color: #E67E22;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="tel"],
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #8BAE66;
}

.radio-group {
    display: flex;
    gap: 20px;
}

.radio-group label {
    display: flex;
    align-items: center;
    gap: 5px;
    font-weight: normal;
    color: #666;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: normal !important;
    color: #666 !important;
}

.checkbox-label input[type="checkbox"] {
    width: auto;
}

.form-help {
    font-size: 14px;
    color: #666;
    margin-top: 8px;
    line-height: 1.6;
}

.form-submit {
    text-align: center;
    margin-top: 40px;
}

.btn {
    display: inline-block;
    padding: 15px 40px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: 2px solid;
    cursor: pointer;
    font-size: 16px;
}

.btn-primary {
    background-color: #628141;
    color: #fff;
    border-color: #628141;
}

.btn-primary:hover {
    background-color: #8BAE66;
    border-color: #8BAE66;
}

.btn-large {
    padding: 18px 60px;
    font-size: 18px;
}

.btn-outline-primary {
    background-color: transparent;
    color: #628141;
    border-color: #628141;
}

.btn-outline-primary:hover {
    background-color: #628141;
    color: #fff;
}

.form-notes {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    margin-top: 30px;
    border-left: 4px solid #E67E22;
}

.form-notes h4 {
    color: #628141;
    margin-bottom: 15px;
}

.form-notes ul {
    color: #666;
    line-height: 1.8;
    margin-left: 20px;
}

.form-notes a {
    color: #628141;
    font-weight: 600;
}

/* よくある質問 */
.faq-section {
    padding: 80px 0;
}

.faq-list {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    border-left: 4px solid #8BAE66;
    margin-bottom: 20px;
}

.faq-question {
    color: #628141;
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 15px;
}

.faq-answer {
    color: #666;
    line-height: 1.8;
}

/* アクセス */
.access-quick {
    padding: 80px 0;
}

.access-info-compact {
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}

.access-info-compact h3 {
    color: #628141;
    font-size: 24px;
    margin-bottom: 20px;
}

.access-info-compact p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 30px;
}

/* レスポンシブ */
@media screen and (max-width: 768px) {
    .page-title {
        font-size: 32px;
    }

    .section-title {
        font-size: 28px;
    }

    .methods-grid {
        grid-template-columns: 1fr;
    }

    .contact-form {
        padding: 30px 20px;
    }

    .radio-group {
        flex-direction: column;
        gap: 10px;
    }

    .btn-large {
        width: 100%;
    }
}
</style>

<?php
get_footer();
