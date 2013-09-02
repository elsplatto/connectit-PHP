<div id="subscribeModal" class="white">
    <h3>Subscribe</h3>
    <p>
        Are you sure you want to be notified when new content is added to this section?
    </p>

    <div class="note-holder">
        <span class="note">You can edit your subscriptions at any time in your profile.</span>
    </div>
    <a href="#" class="button green reveal-close right">Confirm Subscription</a>
    <a href="#" class="button secondary reveal-close right">Cancel</a>

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