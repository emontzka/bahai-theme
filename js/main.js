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
    });

    $('.print-button').on('click', function () {
        console.log('is clicked');
        window.print();
        return false;
    })

    const btnCcontainer = $('.share-button-container');
    $('.share-button').on('click', function () {
        btnCcontainer.toggleClass('show-buttons');
    })


    $('.back-link').on('click', function (e) {
        // e.preventDefault();
        console.log('back clicked');
        window.history.back();
    })

});
