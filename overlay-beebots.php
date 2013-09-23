<div id="videoModal" class="white">
    <h3>Teaching Maths With Robots.</h3>
    <div class="flex-video" style="-webkit-transform-origin: 0px 0px; opacity: 1; -webkit-transform: scale(1, 1);">
        <iframe width="800" height="315" src="http://www.youtube.com/embed/IkOQw96cfyE" frameborder="0" allowfullscreen="" kwframeid="1"></iframe>
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
    })
</script>