


<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/plugins/jquery/scroll-start-stop.js"></script>
<script src="js/vendor/plugins/jquery/jq-slickWrap.js"></script>

<script id="scriptAnchor">
$(function() {
    $('.reveal-init').click(function(e)
    {
        e.preventDefault();
        var size = 'small';
        size = $(this).attr('data-size');
        $('.reveal-modal-bg').show();
        var modal = $('<div>').addClass('reveal-modal '+size).prependTo('body');
        $.get($(this).attr('href'), function(data) {
            modal.empty().html(data).foundation('reveal', 'open');
        });
        $('.reveal-modal').show();
    });

    $('.reveal-close, .reveal-modal-bg').on('click',function(e) {
        e.preventDefault();
        $('#fileModal').foundation('reveal','close');
        $('.reveal-modal-bg').hide();
    });

    $(document).keyup(function(e) {

        if (e.keyCode == 27) {
            $('#fileModal').foundation('reveal','close');
            $('.reveal-modal-bg').hide();
        }   // esc
    });
    if ($('.slider-holder').length > 0 || $('.feature-holder').length > 0)
    {
        var scriptHTML = '<script src="js\/foundation\/foundation.orbit.js"><\/script>';
        $(scriptHTML).insertAfter($('#scriptAnchor'));

        $(document).foundation('orbit');

        $(function() {
            var offset = 18 //half the width of the gutters
            var sliderNextArrow = $('.orbit-container .orbit-next');
            var sliderPrevArrow = $('.orbit-container .orbit-prev');
            var orbitContainer = $('.slider-holder .orbit-container');
            var sliderMarginWidth = 0;
            var arrowPosition = 0;
            var i = 0;

            if ($('html').hasClass('lt-ie9'))
            {
                offset = 14;
            }

            for (i = 0;i < sliderNextArrow.length; i++)
            {
                sliderMarginWidth = $(orbitContainer[i]).offset().left - offset;
                arrowPosition = sliderMarginWidth + offset;
                $(sliderNextArrow[i]).addClass('desktop');
                $(sliderPrevArrow[i]).addClass('desktop');
                $(sliderNextArrow[i]).css({
                    'width': sliderMarginWidth + 'px',
                    'right': '-' +  arrowPosition + 'px'
                });
                $(sliderPrevArrow[i]).css({
                    'width': sliderMarginWidth + 'px',
                    'left': '-' +  arrowPosition + 'px'
                });
            }

            $(window).resize(function() {
                sliderMarginWidth = $(orbitContainer[i]).offset().left - offset;
                arrowPosition = sliderMarginWidth + offset;
                for (i = 0;i < sliderNextArrow.length; i++)
                {
                    $(sliderNextArrow[i]).css({
                        'width': sliderMarginWidth + 'px',
                        'right': '-' +  arrowPosition + 'px'
                    });
                    $(sliderPrevArrow[i]).css({
                        'width': sliderMarginWidth + 'px',
                        'left': '-' +  arrowPosition + 'px'
                    });
                }
            });
        });
    }
});
</script>

<script>
$(function() {

    $('.action-list .header, .action-list .header a').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        var targetEl;
        if ($(e.target).hasClass('header'))
        {
            targetEl = $(e.target).siblings('.preview');
        }
        else
        {
            targetEl = $(e.target).closest('.header').siblings('.preview');
        }

        if (targetEl.is(':hidden'))
        {
            targetEl.show();
        }
        else
        {
            targetEl.hide();
        }
    });

    $('.action-list .mark-as-read').click(function(e) {
        e.preventDefault();
        var targetEl = $(e.target).closest('li');
        targetEl.removeClass('unread');
        targetEl.addClass('read');
        $(e.target).hide('fast');
    });

    $('img.wrap').slickWrap();
    $('#btnSideNav').click( function(e) {
        e.preventDefault();
        if ($('body').hasClass('active'))
        {
            $('body').removeClass('active');
        }
        else
        {
            $('body').addClass('active');
        }
    });

    if ($('html').hasClass('no-touch'))
    {
        var startPos = 0;
        var stopPos = 0;
        var scrollPos = 0;

        var bannerHolder = $('#banner-holder');
        var navHolder = $('#nav-holder');
        var navPad = $('#nav-pad');
        var bannerHolderHeight = bannerHolder.height();
        var navHolderHeight = navHolder.height();
        var bannerNavHeight = bannerHolderHeight + navHolderHeight;
        var scrollingDistance = 0;

        $(window).bind('scrollstart', function() {
            startPos = $(window).scrollTop();
        });

        $(window).bind('scrollstop', function(){
            stopPos = $(window).scrollTop();
        });

        $(window).scroll(function(event)
        {
            scrollPos = $(this).scrollTop();
            scrollingDistance = startPos - scrollPos;

            if (((scrollPos + navHolderHeight) >= bannerNavHeight) && !navHolder.hasClass('respond'))
            {
                //scrolled past height where we want the nav to 'float/fix'
                //add class to navHolder to fix it
                //add class to navPad to keep doc size the same
                navHolder.addClass('respond');
                navPad.addClass('respond');

            }
            else if (((scrollPos + navHolderHeight) <= bannerNavHeight) && navHolder.hasClass('respond'))
            {
                //scrolled back up to the  height where we want the nav to stay in original spot
                //remove class from navHolder to keep it relative
                //remove class from navPad to keep doc size the same
                navHolder.removeClass('respond');
                navPad.removeClass('respond');
            }
        });

        var difference = function (a, b) { return Math.abs(a - b) }

    }

});
</script>


<script src="js/foundation.min.js"></script>
<script src="js/foundation/foundation.topbar.js"></script>
<script src="js/foundation/foundation.dropdown.js"></script>



<script>

    $(document).foundation('topbar');
    $(document).foundation('dropdown',{
        offsetTop: 25,
        offsetLeft: 184
    });

</script>