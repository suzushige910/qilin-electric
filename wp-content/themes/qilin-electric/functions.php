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
