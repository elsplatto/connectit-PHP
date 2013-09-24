<div id="videoModal" class="white">
    <h3>Maang</h3>
    <div class="flex-video" style="-webkit-transform-origin: 0px 0px; opacity: 1; -webkit-transform: scale(1, 1);">
        <iframe width="560" height="315" src="//www.youtube.com/embed/gCLcCuFFigE" frameborder="0" allowfullscreen></iframe>
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