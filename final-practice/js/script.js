$(function () {
    //PCカルーセル
    $('#carousel').slick({
        autoplay: true,
        arrows: false,
    });
//SPカルーセル
    $('#carousel-sp').slick({
        autoplay: true,
        arrows: false,
    });

    /*--- プログレスバー設定 -----------------------*/
    if (window.matchMedia('(max-width: 767px)').matches) {
        var
            time = 3,
            $bar = $('#js-progressBar'),
            isPause,
            tick,
            percentTime;
        function startProgressbar() {
            resetProgressbar();
            percentTime = 0;
            isPause = false;
            tick = setInterval(interval, 10);
        }
        function interval() {
            if (isPause === false) {
                percentTime += 1 / (time + 0.1);
                $bar.css({
                    width: percentTime + "%"
                });
                if (percentTime >= 100) {
                    $('#carousel-sp').slick('slickNext');
                    startProgressbar();
                }
            }
        }
        function resetProgressbar() {
            $bar.css({
                width: 0 + '%'
            });
            clearTimeout(tick);
        }
        startProgressbar();
    } else if (window.matchMedia('(min-width:768px)').matches) {
        var
            time = 3,
            $bar = $('#js-progressBar'),
            isPause,
            tick,
            percentTime;
        function startProgressbar() {
            resetProgressbar();
            percentTime = 0;
            isPause = false;
            tick = setInterval(interval, 10);
        }
        function interval() {
            if (isPause === false) {
                percentTime += 1 / (time + 0.1);
                $bar.css({
                    width: percentTime + "%"
                });
                if (percentTime >= 100) {
                    $('#carousel').slick('slickNext');
                    startProgressbar();
                }
            }
        }
        function resetProgressbar() {
            $bar.css({
                width: 0 + '%'
            });
            clearTimeout(tick);
        }
        startProgressbar();
    }

//下のカルーセル
    $('#bottom-carousel').slick({
        autoplay: true,
        arrows: false,
    });
    $('#bottom-carousel-sp').slick({
        autoplay: true,
        arrows: false,
    });
});



$(function () {
    //.header__menu--btnがクリックされたら
    $('.header__menu--btn').click(function () {
        //.header__menu--btnにopenクラスを追加 二度目は削除
        $(this).toggleClass('open');
        //#btn__menuにactiveクラスを追加 二度目は削除
        $('#btn__menu').toggleClass('active');

        $('#black-back').toggleClass('active');
    });

});