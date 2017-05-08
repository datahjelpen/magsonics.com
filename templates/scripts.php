<script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js"></script>
<div id="mobilecheck"></div>
<script>
    window.addEventListener('load', function() {
        window.is_mobile = false;
        if (window.getComputedStyle(document.getElementById("mobilecheck")).getPropertyValue("content") == "\"mobile\"") {
            window.is_mobile = true;
        }
    });

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