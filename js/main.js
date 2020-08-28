jQuery(function ($) {

    $('.article-link').hover(function () {
        const $article = $(this).parent();
        $article.addClass('hover');
    }, function () {
        const $article = $(this).parent();
        $article.removeClass('hover');
    });

    const $header = $('.site-header');
    $('.mobile-menu-button').on('click', function () {
        $header.toggleClass('menu-open');
    })

});
