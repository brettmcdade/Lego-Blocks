$('.image-container').hover( 
    function() {
        $(this).find('img').animate({'opacity':'0'}, 100);


        imageWidth = $(this).width();
        linkWidth = $('.image-container-link').width();
        
        $(this).find('.image-container-link').css({'display':'block'});
        $(this).find('.image-container-link').css({'margin-top': (-(imageWidth / 2)-5) + 'px'});
        $(this).find('.image-container-link').css({'margin-left': ((imageWidth / 2)-(linkWidth / 2)) + 'px'});        

    },
    function() {
        $(this).find('img').animate({'opacity':'1'}, 100);
        $(this).find('.image-container-link').css({'display':'none'});
    }
    
);
