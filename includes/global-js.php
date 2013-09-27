


<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/plugins/jquery/scroll-start-stop.js"></script>


<script id="scriptAnchor">
$(function() {
    $('#frmSearch').submit(function(e){
        e.preventDefault();
        e.stopPropagation();
        $('#autocomplete-holder').empty();
        $('#autocomplete-holder').hide();
        returnResults();
        return false;
    });
    $('#search').on('keyup',function(e){
        if (e.keyCode !== 13)
        {
            var searchStr = $(this).val();
            var keyCode = e.keyCode;

            $.getJSON( 'assets/search/results.json?t='+getRandom(1,1000), function( data ) {
                var items = [];
                searchResultsArray = [];
                if (keyCode < 37 || keyCode > 40)
                {
                    $.each( data, function( key, val ) {
                        if (val.phrase.match('^'+searchStr))
                        {
                            items.push(val.phrase);
                        }
                    });

                    var unique=items.filter(function(itm,i,items){
                        return i==items.indexOf(itm);
                    });

                    var filtered = [];

                    filtered = unique;
                    var listHTML = '';


                    for (var i=0; i<filtered.length; i++)
                    {
                        if (i === 0 && searchStr !== filtered[i])
                        {
                            listHTML = '<li><a href="#">'+searchStr+'<\/a><\/li>';
                        }
                        listHTML = listHTML + '<li><a href="#">'+splitString(searchStr,filtered[i])+'<\/a><\/li>';
                    }
                    if (filtered.length > 0)//results returned
                    {
                        $('#autocomplete-holder').show();
                        $('#autocomplete-holder').empty();
                        $('#autocomplete-holder').html(listHTML);

                        if (!$('#autocomplete-holder li:eq(0) a').hasClass('focus'))
                        {
                            $('#autocomplete-holder li:eq(0) a').addClass('focus');
                        }
                    }
                    else
                    {
                        $('#autocomplete-holder').empty();
                        $('#autocomplete-holder').hide();
                    }
                }

                switch(keyCode)
                {
                    //down arrow
                    case 40:
                        e.preventDefault();
                        moveFocusDown();
                        break;
                    //up arrow
                    case 38:
                        e.preventDefault();
                        moveFocusUp();
                        break;
                    case 13:
                        e.preventDefault();
                        returnResults();
                        break;
                }
            });
        }
    });

    function returnResults() {
        var resultsHTML = '';
        var searchStr = $('#search').val();
        $.getJSON( 'assets/search/results.json?t='+getRandom(1,1000), function( data ) {
            var items = [];
            $.each( data, function( key, val ) {
                if (val.phrase.match('^'+searchStr))
                {
                    items.push(val);
                }
            });
            for (var i=0; i<items.length; i++)
            {
                resultsHTML = resultsHTML + '<div class="padding-top-20 '+items[i].class+'">';
                resultsHTML = resultsHTML + '<h5>'+items[i].section+' / '+items[i].type+'<\/h5>';
                resultsHTML = resultsHTML + '<h6><a href="'+items[i].url+'">'+items[i].title+'<\/a><\/h6>';
                resultsHTML = resultsHTML + '<p>'+items[i].summary+'<\/p>';
                resultsHTML = resultsHTML + '<\/div>';
                resultsHTML = resultsHTML + '<hr\/>';
            }
            $('#results-holder').html(resultsHTML);
        });
    }

    function getRandom (min, max) {
        return Math.random() * (max - min) + min;
    }
    function splitString(str1,str2)
    {
        var pos1 = 0;
        var pos2 = str1.length;
        var spl1 = str2.substring(pos1,pos2);
        var spl2 = str2.substring(pos2);
        var rStr = spl1 + '<strong>'+spl2+'<\/strong>';
        return rStr;
    }

    function moveFocusDown()
    {
        var focusSet = false;
        var obj = $('#autocomplete-holder li a');
        var objLength = obj.length;
        obj.each(function(i) {
            if($(this).hasClass('focus'))
            {
                if (parseInt(i+1) === objLength)
                {
                    $(this).removeClass('focus');
                    return false;
                }
                else
                {
                    focusSet = true;
                    $(this).removeClass('focus');
                    $('#autocomplete-holder li:eq('+(i+1)+') a').addClass('focus');
                    $('#search').val($('#autocomplete-holder li:eq('+(i+1)+') a').text());
                }
            }
            if (focusSet)
            {
                return false;
            }
        });
        if (!focusSet) {
            $('#autocomplete-holder li:eq(0) a').addClass('focus');
            $('#search').val($('#autocomplete-holder li:eq(0) a').text());
        }
    }

    function moveFocusUp()
    {
        var focusSet = false;
        var obj = $('#autocomplete-holder li a');
        var objLength = obj.length;
        obj.each(function(i) {
            if($(this).hasClass('focus'))
            {
                if (i === 0)
                {
                    $(this).removeClass('focus');
                    focusSet = false;
                    return false;
                }
                else
                {
                    focusSet = true;
                    $(this).removeClass('focus');
                    $('#autocomplete-holder li:eq('+(i-1)+') a').addClass('focus');
                    $('#search').val($('#autocomplete-holder li:eq('+(i-1)+') a').text());
                }
            }
            if (focusSet)
            {
                return false;
            }
        });
        if (!focusSet) {
            $('#autocomplete-holder li:eq('+parseInt(objLength-1)+') a').addClass('focus');
            $('#search').val($('#autocomplete-holder li:eq('+parseInt(objLength-1)+') a').text());
        }
    }

    $(document.body).on('click', '#autocomplete-holder li a', function(e) {
        e.preventDefault();
        $('#search').val($(this).text());
        returnResults();
        setTimeout(function(){
            $('#autocomplete-holder').empty();
            $('#autocomplete-holder').hide();
        }, 1);
    });

    $(document.body).on('mouseenter', '#autocomplete-holder li a', function(e) {
        var obj = $('#autocomplete-holder li a.focus');
        obj.each(function(i) {
            $(this).removeClass('focus');
        });
        $('#search').val($(this).text());
    });

    $(document.body).on('click','.search-it a', function() {
        if ($(this).attr('data-closeOnClick') =='true')
        {
            $('#search').val('');
            $('#autocomplete-holder').empty();
            $('#autocomplete-holder').hide();
        }
        else
        {
            setTimeout(function(){
                $('#search').focus();
            }, 1);
        }
    });

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
                sliderMarginWidth = $(orbitContainer[0]).offset().left - offset;
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

    $('.toggle-view').click(function(e){
        e.preventDefault();
        var targetEl = $('#'+$(this).attr('data-target'));
        var targetState = $(this).attr('data-state').toLowerCase();
        if (targetState === 'open')
        {
            targetEl.hide();
            $(this).attr('data-state','closed');
        }
        else
        {
            targetEl.show();
            $(this).attr('data-state','open');
        }
    });

    $('.filter-box a, .tag-box a').click(function(e) {
        e.preventDefault();
        if($(this).hasClass('selected'))
        {
            $(this).removeClass('selected');
        }
        else
        {
            $(this).addClass('selected')
        }
    });

    $('.clear-all').each(function( index ) {
        $(this).on('click', function(e) {
            e.preventDefault();
            var targetHolder = $(this).siblings('div.filter-box:eq('+index+')');
            var targetEls =  targetHolder.children('a');
            var i;
            for (i = 0;i < targetEls.length; i++)
            {
                $(targetEls[i]).removeClass('selected');

            }
        });
    });

    $('.select-all').each(function( index ) {
        $(this).on('click', function(e) {
            e.preventDefault();
            var targetHolder = $(this).siblings('div.filter-box:eq('+index+')');
            var targetEls =  targetHolder.children('a');
            console.log('['+targetEls.length+']');
            var i;
            for (i = 0;i < targetEls.length; i++)
            {
                $(targetEls[i]).addClass('selected');

            }
        });
    });

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

    $('textarea, input[type="text"], input[type="email"], input[type="search"], input[type="url"]').focus(function(){
        if ($('html').hasClass('touch') && $('#global-header').not(':hidden'))
        {
            $('#global-header').hide();
        }
    });

    $('textarea, input[type="text"], input[type="email"], input[type="search"], input[type="url"]').blur(function(){
        if ($('html').hasClass('touch') && $('#global-header').not(':visible'))
        {
            $('#global-header').show();
        }
    });



});
</script>


<script src="js/foundation.min.js"></script>
<script src="js/foundation/foundation.topbar.js"></script>
<script src="js/foundation/foundation.dropdown.js"></script>

<script src="js/foundation/foundation.abide.js"></script>



<script>

    $(document).foundation('topbar');
    $(document).foundation('dropdown',{
        offsetTop: 25,
        offsetLeft: 184
    });
    $(document).foundation('abide','events');

</script>