$(document).ready(function() {

    // Подгрузка цен
    $('[name="country"]').on('change', function() {
        var geoKey = $(this).find('option:selected').val();
        var data = $jsonData.prices[geoKey];
        var price = data.price;
        var oldPrice = data.old_price;
        var currency = data.currency

        $('.price_land_s1').text(price);
        $('.price_land_s2').text(oldPrice);
        $('.price_land_curr').text(currency);
    });

    // Плавный скролл
    $('a[href*=#]').click( function(){
        var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
        }
        return false;
    });

    // Инициализация таймера
    initializeClock('timer', deadline);

    // Смена цвета
    $('.color-block ul>li').click(function() {
        $('body').find('input.dop_params').val($(this).attr('value'));
        $('body').find('.color-block ul').children('li').removeClass('active');
        $('body').find('.info-block2 .content ul>li').children('div').removeClass('active');
        $('body').find('.info-block2 .preview>img').hide();
        $('body').find('.color-block ul>li.' + $(this).attr('class')).addClass('active');
        $('body').find('.info-block2 .content ul>li[value="' + $(this).attr('value') + '"]>div').addClass('active');
        $('body').find('.info-block2 .preview>img[alt="' + $(this).attr('value') + '"]').fadeIn();
        $(this).parent().children('li').removeClass('active');
        $(this).addClass('active');
    });
    
    $('.info-block2 .content ul>li>div').click(function() {
        $('body').find('input.dop_params').val($(this).attr('value'));
        $('body').find('.info-block2 .content ul>li').children('div').removeClass('active');
        $(this).parents('.right-side').find('.preview>img').hide();
        $('body').find('.color-block ul').children('li').removeClass('active');
        $('body').find('.info-block2 .content ul>li.' + $(this).parent().attr('class') + '>div').addClass('active');
        $('body').find('.info-block2 .preview>img[alt="' + $(this).parent().attr('value') + '"]').fadeIn();
        $('body').find('.color-block ul>li[value="' + $(this).parent().attr('value') + '"]').addClass('active');
        $(this).parent().children('div').removeClass('active');
        $(this).addClass('active');
    });
    
    // Навигация
    $('.mobile').on('click',function(){
        $('.navigation ul').slideToggle();
    
        $(document).click(function(event){
            if($(event.target).closest(".navigation").length)
            return;
            $(".navigation ul").slideUp();
            event.stopPropagation();
        });     
    
        $('.navigation ul a').on('click',function(){
            $('.desctop').slideUp();
        });
    });
});