<div id="comingSoonModal" class="white">
    <h3>Coming Soon...</h3>
    <p>This modal has yet to be designed - the share suite that you used to initiate it was a late addition</p>
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