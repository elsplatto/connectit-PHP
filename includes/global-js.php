<script>
    document.write('<script src=' +
        ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
        '.js><\/script>')
</script>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/plugins/jquery/scroll-start-stop.js"></script>

<script>
    $(function() {
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



    });
</script>

<script src="js/foundation.min.js"></script>
<script src="js/foundation/foundation.topbar.js"></script>
<script src="js/foundation/foundation.dropdown.js"></script>

<!--

<script src="js/foundation/foundation.js"></script>

<script src="js/foundation/foundation.alerts.js"></script>

<script src="js/foundation/foundation.clearing.js"></script>

<script src="js/foundation/foundation.cookie.js"></script>

<script src="js/foundation/foundation.dropdown.js"></script>

<script src="js/foundation/foundation.forms.js"></script>

<script src="js/foundation/foundation.joyride.js"></script>

<script src="js/foundation/foundation.magellan.js"></script>

<script src="js/foundation/foundation.joyride.js"></script>

<script src="js/foundation/foundation.orbit.js"></script>

<script src="js/foundation/foundation.reveal.js"></script>

<script src="js/foundation/foundation.section.js"></script>

<script src="js/foundation/foundation.tooltips.js"></script>

<script src="js/foundation/foundation.topbar.js"></script>

<script src="js/foundation/foundation.interchange.js"></script>

<script src="js/foundation/foundation.placeholder.js"></script>

-->

<script>
    $(document).foundation('topbar');
    $(document).foundation('dropdown',{
        offsetTop: 25,
        offsetLeft: 184
    });

</script>