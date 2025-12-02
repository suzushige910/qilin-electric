<?php
/**
 * メインテンプレートファイル
 *
 * @package Qilin_Electric
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="content-area">

            <?php
            if ( have_posts() ) :

                // 投稿がある場合のループ
                while ( have_posts() ) :
                    the_post();
                    ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php
                            if ( is_singular() ) :
                                the_title( '<h1 class="entry-title">', '</h1>' );
                            else :
                                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                            endif;
                            ?>

                            <div class="entry-meta">
                                <span class="posted-on">
                                    <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                        <?php echo esc_html( get_the_date() ); ?>
                                    </time>
                                </span>
                                <span class="byline">
                                    <?php
                                    printf(
                                        esc_html__( '投稿者: %s', 'qilin-electric' ),
                                        '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
                                    );
                                    ?>
                                </span>
                                <?php if ( has_category() ) : ?>
                                    <span class="cat-links">
                                        <?php
                                        printf(
                                            esc_html__( 'カテゴリー: %s', 'qilin-electric' ),
                                            get_the_category_list( ', ' )
                                        );
                                        ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </header>

                        <?php if ( has_post_thumbnail() && is_singular() ) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </div>
                        <?php endif; ?>

                        <div class="entry-content">
                            <?php
                            if ( is_singular() ) :
                                the_content();

                                wp_link_pages(
                                    array(
                                        'before' => '<div class="page-links">' . esc_html__( 'ページ:', 'qilin-electric' ),
                                        'after'  => '</div>',
                                    )
                                );
                            else :
                                the_excerpt();
                                ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more">
                                    <?php esc_html_e( '続きを読む', 'qilin-electric' ); ?>
                                </a>
                                <?php
                            endif;
                            ?>
                        </div>

                        <?php if ( is_singular() ) : ?>
                            <footer class="entry-footer">
                                <?php if ( has_tag() ) : ?>
                                    <span class="tags-links">
                                        <?php
                                        printf(
                                            esc_html__( 'タグ: %s', 'qilin-electric' ),
                                            get_the_tag_list( '', ', ' )
                                        );
                                        ?>
                                    </span>
                                <?php endif; ?>
                            </footer>
                        <?php endif; ?>
                    </article>

                    <?php
                endwhile;

                // ページネーション
                the_posts_pagination(
                    array(
                        'mid_size'  => 2,
                        'prev_text' => esc_html__( '前へ', 'qilin-electric' ),
                        'next_text' => esc_html__( '次へ', 'qilin-electric' ),
                    )
                );

            else :
                ?>

                <section class="no-results not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( '投稿が見つかりません', 'qilin-electric' ); ?></h1>
                    </header>

                    <div class="page-content">
                        <p><?php esc_html_e( '申し訳ございません。お探しのページは見つかりませんでした。', 'qilin-electric' ); ?></p>
                    </div>
                </section>

                <?php
            endif;
            ?>

        </div>
    </div>
</main>

<?php
get_footer();
