<script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js"></script>
<script>
    (function($){
        $(function () {
            $('#content').css('visibility', 'visible');
            $("#loader").fadeOut(1000);
        });

        $(window).on("beforeunload", function() {
            $("#loader").fadeIn(100);
        });
    })(jQuery);
</script>