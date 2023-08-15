<!-- header -->
<?php get_header(); ?>
<!-- error contents -->
<div class="l-main">
    <div class="l-main__inner">
        <div class="p-error">
            <div class="p-error__content">
                <div class="p-error__heading">
                    <h1 class="p-error__heading--title c-heading-sixth">
                        お探しのページは見つかりませんでした
                    </h1>
                </div>
                <div class="p-error__description">
                    <div class="p-error__description--text c-description-third">
                        大変申し訳ありません。お探しのページは移動または削除されているようです。
                    </div>
                </div>
                <div class="p-error__return">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-error__return--link">
                        トップページへ戻る
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / error contents -->
<!-- footer -->
<?php get_footer(); ?>