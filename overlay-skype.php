<div id="videoModal" class="white">
    <h3>Skype In The Classroom.</h3>
    <div class="flex-video" style="-webkit-transform-origin: 0px 0px; opacity: 1; -webkit-transform: scale(1, 1);">
        <iframe src="//player.vimeo.com/video/44867804" width="500" height="281" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <a class="close-reveal-modal reveal-close"></a>
</div>
<script>
    $(function() {
        $('.reveal-modal-bg, .reveal-close').click(function(e){
            e.preventDefault();
            $('.reveal-modal').foundation('reveal','close');
            $('.reveal-modal-bg').hide();
            $('.reveal-modal').remove();
        })
    });
</script>