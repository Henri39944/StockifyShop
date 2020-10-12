$(document).ready(function() {

	// images change large image
    $(document).on('click', '.image-item img', function () {
		var activeImage = $(".large-preview img");
		activeImage.attr('src', this.src);
		$('.image-item').removeClass('image_item_active');
		$(this).parent().addClass('image_item_active');
    });
    
    //courasel product overview
    var carousel = $('.carousel_small_picture_preview_webshop ul');
    var carouselChild = carousel.find('li');
    var clickCount = 0;
    var canClick = true;

    itemWidth = carousel.find('li:first').width()+15; 

    carousel.width(itemWidth*carouselChild.length);

    refreshChildPosition();

    $('.btnNext_carousel').click(function(){
        if(canClick){
            canClick = false;
            clickCount++;
            
            carousel.stop(false, true).animate({
                left : '-='+itemWidth
            },300, function(){
                lastItem = carousel.find('li:first');
                lastItem.remove().appendTo(carousel);
                lastItem.css('left', ((carouselChild.length-1)*(itemWidth))+(clickCount*itemWidth));
                canClick = true;
            });
        }
    });

    $('.btnPrevious_carousel').click(function(){
        if(canClick){
            canClick = false;
            clickCount--;
            lastItem = carousel.find('li:last');
            lastItem.remove().prependTo(carousel);

            lastItem.css('left', itemWidth*clickCount);				
            carousel.finish(true).animate({
                left: '+='+itemWidth
            },300, function(){
                canClick = true;
            });
        }
    });

    function refreshChildPosition(){
        carouselChild.each(function(){
            $(this).css('left', itemWidth*carouselChild.index($(this)));
        });
    }

});