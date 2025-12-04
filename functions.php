<?php
/**
 * テーマ機能とセットアップ
 *
 * @package Qilin_Electric
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // 直接アクセスを防止
}

/**
 * テーマのセットアップ
 */
function qilin_electric_setup() {
    // テキストドメインの読み込み
    load_theme_textdomain( 'qilin-electric', get_template_directory() . '/languages' );

    // 自動フィードリンクの追加
    add_theme_support( 'automatic-feed-links' );

    // タイトルタグのサポート
    add_theme_support( 'title-tag' );

    // アイキャッチ画像のサポート
    add_theme_support( 'post-thumbnails' );

    // カスタムロゴのサポート
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    // HTML5サポート
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // カスタムヘッダーのサポート
    add_theme_support(
        'custom-header',
        array(
            'default-image'      => '',
            'width'              => 1920,
            'height'             => 500,
            'flex-height'        => true,
            'flex-width'         => true,
            'header-text'        => true,
            'default-text-color' => '333333',
        )
    );

    // カスタム背景のサポート
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'ffffff',
        )
    );

    // レスポンシブ埋め込みのサポート
    add_theme_support( 'responsive-embeds' );

    // ナビゲーションメニューの登録
    register_nav_menus(
        array(
            'primary' => esc_html__( 'プライマリーメニュー', 'qilin-electric' ),
            'footer'  => esc_html__( 'フッターメニュー', 'qilin-electric' ),
        )
    );

    // エディタースタイルのサポート
    add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'qilin_electric_setup' );

/**
 * コンテンツ幅の設定
 */
function qilin_electric_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'qilin_electric_content_width', 800 );
}
add_action( 'after_setup_theme', 'qilin_electric_content_width', 0 );

/**
 * ウィジェットエリアの登録
 */
function qilin_electric_widgets_init() {
    // サイドバー
    register_sidebar(
        array(
            'name'          => esc_html__( 'サイドバー', 'qilin-electric' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'サイドバーに表示されるウィジェット', 'qilin-electric' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    // フッターウィジェットエリア 1
    register_sidebar(
        array(
            'name'          => esc_html__( 'フッター1', 'qilin-electric' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'フッターの最初のカラム', 'qilin-electric' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    // フッターウィジェットエリア 2
    register_sidebar(
        array(
            'name'          => esc_html__( 'フッター2', 'qilin-electric' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'フッターの2番目のカラム', 'qilin-electric' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    // フッターウィジェットエリア 3
    register_sidebar(
        array(
            'name'          => esc_html__( 'フッター3', 'qilin-electric' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'フッターの3番目のカラム', 'qilin-electric' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'qilin_electric_widgets_init' );

/**
 * スタイルとスクリプトのエンキュー
 */
function qilin_electric_scripts() {
    // メインスタイルシート
    wp_enqueue_style( 'qilin-electric-style', get_stylesheet_uri(), array(), '1.0.0' );

    // レスポンシブスタイル
    wp_style_add_data( 'qilin-electric-style', 'rtl', 'replace' );

    // コメント返信スクリプト
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'qilin_electric_scripts' );

/**
 * 抜粋の長さをカスタマイズ
 */
function qilin_electric_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'qilin_electric_excerpt_length' );

/**
 * 抜粋の末尾をカスタマイズ
 */
function qilin_electric_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'qilin_electric_excerpt_more' );

/**
 * ページネーションのカスタマイズ
 */
function qilin_electric_pagination() {
    if ( is_singular() ) {
        return;
    }

    global $wp_query;

    if ( $wp_query->max_num_pages <= 1 ) {
        return;
    }

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

    echo '<nav class="pagination" role="navigation">';
    echo paginate_links(
        array(
            'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'    => '?paged=%#%',
            'current'   => max( 1, $paged ),
            'total'     => $wp_query->max_num_pages,
            'prev_text' => esc_html__( '前へ', 'qilin-electric' ),
            'next_text' => esc_html__( '次へ', 'qilin-electric' ),
            'type'      => 'list',
        )
    );
    echo '</nav>';
}

/**
 * カスタムテンプレートタグとヘルパー関数
 */

/**
 * 投稿日を表示
 */
function qilin_electric_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    $time_string = sprintf(
        $time_string,
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() )
    );

    printf(
        '<span class="posted-on">%s</span>',
        $time_string
    );
}

/**
 * 投稿者を表示
 */
function qilin_electric_posted_by() {
    printf(
        '<span class="byline">%s</span>',
        sprintf(
            '<a class="url fn n" href="%1$s">%2$s</a>',
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            esc_html( get_the_author() )
        )
    );
}

/**
 * カスタム投稿タイプ: 製品（Product）
 */
function qilin_electric_register_product_post_type() {
    $labels = array(
        'name'               => '製品',
        'singular_name'      => '製品',
        'menu_name'          => '製品管理',
        'add_new'            => '新規追加',
        'add_new_item'       => '新しい製品を追加',
        'edit_item'          => '製品を編集',
        'new_item'           => '新しい製品',
        'view_item'          => '製品を表示',
        'search_items'       => '製品を検索',
        'not_found'          => '製品が見つかりません',
        'not_found_in_trash' => 'ゴミ箱に製品はありません',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'products' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-products',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'product', $args );
}
add_action( 'init', 'qilin_electric_register_product_post_type' );

/**
 * カスタムタクソノミー: 製品カテゴリ
 */
function qilin_electric_register_product_taxonomy() {
    $labels = array(
        'name'              => '製品カテゴリ',
        'singular_name'     => '製品カテゴリ',
        'search_items'      => '製品カテゴリを検索',
        'all_items'         => 'すべての製品カテゴリ',
        'parent_item'       => '親カテゴリ',
        'parent_item_colon' => '親カテゴリ:',
        'edit_item'         => '製品カテゴリを編集',
        'update_item'       => '製品カテゴリを更新',
        'add_new_item'      => '新しい製品カテゴリを追加',
        'new_item_name'     => '新しい製品カテゴリ名',
        'menu_name'         => '製品カテゴリ',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'product-category' ),
        'show_in_rest'      => true,
    );

    register_taxonomy( 'product_category', array( 'product' ), $args );
}
add_action( 'init', 'qilin_electric_register_product_taxonomy' );

/**
 * 製品のカスタムフィールドを追加
 */
function qilin_electric_add_product_meta_boxes() {
    add_meta_box(
        'product_details',
        '製品詳細情報',
        'qilin_electric_product_details_callback',
        'product',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'qilin_electric_add_product_meta_boxes' );

/**
 * 製品詳細情報のメタボックス
 */
function qilin_electric_product_details_callback( $post ) {
    wp_nonce_field( 'product_details_nonce', 'product_details_nonce' );

    $capacity = get_post_meta( $post->ID, '_product_capacity', true );
    $output = get_post_meta( $post->ID, '_product_output', true );
    $size = get_post_meta( $post->ID, '_product_size', true );
    $weight = get_post_meta( $post->ID, '_product_weight', true );
    $price = get_post_meta( $post->ID, '_product_price', true );
    $tag = get_post_meta( $post->ID, '_product_tag', true );
    ?>

    <table class="form-table">
        <tr>
            <th><label for="product_capacity">容量</label></th>
            <td><input type="text" id="product_capacity" name="product_capacity" value="<?php echo esc_attr( $capacity ); ?>" class="regular-text" placeholder="例: 5.0kWh"></td>
        </tr>
        <tr>
            <th><label for="product_output">定格出力</label></th>
            <td><input type="text" id="product_output" name="product_output" value="<?php echo esc_attr( $output ); ?>" class="regular-text" placeholder="例: 2.0kW"></td>
        </tr>
        <tr>
            <th><label for="product_size">サイズ</label></th>
            <td><input type="text" id="product_size" name="product_size" value="<?php echo esc_attr( $size ); ?>" class="regular-text" placeholder="例: 450×600×120mm"></td>
        </tr>
        <tr>
            <th><label for="product_weight">重量</label></th>
            <td><input type="text" id="product_weight" name="product_weight" value="<?php echo esc_attr( $weight ); ?>" class="regular-text" placeholder="例: 3.5kg"></td>
        </tr>
        <tr>
            <th><label for="product_price">参考価格</label></th>
            <td><input type="text" id="product_price" name="product_price" value="<?php echo esc_attr( $price ); ?>" class="regular-text" placeholder="例: ¥980,000〜"></td>
        </tr>
        <tr>
            <th><label for="product_tag">製品タグ</label></th>
            <td>
                <select id="product_tag" name="product_tag">
                    <option value="">選択してください</option>
                    <option value="おすすめ" <?php selected( $tag, 'おすすめ' ); ?>>おすすめ</option>
                    <option value="プレミアム" <?php selected( $tag, 'プレミアム' ); ?>>プレミアム</option>
                    <option value="コンパクト" <?php selected( $tag, 'コンパクト' ); ?>>コンパクト</option>
                    <option value="産業用" <?php selected( $tag, '産業用' ); ?>>産業用</option>
                    <option value="大容量" <?php selected( $tag, '大容量' ); ?>>大容量</option>
                </select>
            </td>
        </tr>
    </table>

    <p class="description">製品の詳細情報を入力してください。これらの情報は製品ページに表示されます。</p>

    <?php
}

/**
 * 製品詳細情報の保存
 */
function qilin_electric_save_product_details( $post_id ) {
    if ( ! isset( $_POST['product_details_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['product_details_nonce'], 'product_details_nonce' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $fields = array(
        'product_capacity' => '_product_capacity',
        'product_output'   => '_product_output',
        'product_size'     => '_product_size',
        'product_weight'   => '_product_weight',
        'product_price'    => '_product_price',
        'product_tag'      => '_product_tag',
    );

    foreach ( $fields as $field => $meta_key ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $meta_key, sanitize_text_field( $_POST[ $field ] ) );
        }
    }
}
add_action( 'save_post_product', 'qilin_electric_save_product_details' );
