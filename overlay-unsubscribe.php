<div id="unsubscribeModal" class="white">
    <h3>Unsubscribe</h3>
    <p>Are you sure you want to unsubscribe?</p>

    <div class="button-holder">
        <a href="#" class="button green reveal-close right">Yes</a>
        <a href="#" class="button secondary reveal-close right">No</a>
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