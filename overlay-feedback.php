
<div id="feedbackModal" class="white">
    <h3>Help us help you!</h3>
    <p>
        We are trying to make your job easier. But did we take a wrong turn? Did you find a bug or something annoying? Or did we deliver everything you ever wished for?
    </p>
    <p>
        Please send us your feedback:
    </p>
    <form id="frmFeedback" action="#" method="POST">
            <textarea></textarea>




            <input type="submit" class="button green right" value="Submit" />
            <a href="#" class="button secondary reveal-close right">Cancel</a>
    </form>
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