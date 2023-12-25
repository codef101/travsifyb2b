<script src="<?= site_url('themes/focus2/vendor/toastr/js/toastr.min.js'); ?>"></script>
<script src="<?= site_url('themes/focus2/vendor/timeago/jquery.timeago.js'); ?>"></script>
<script src="<?= site_url('themes/focus2/vendor/timeago/locales/jquery.timeago.'.langJS().'.js'); ?>"></script>
<script>
    "use strict";
    $(document).ready(function () {
        let time_ago  = document.getElementsByClassName("timeAgo");
        for (let i = 0; i < time_ago.length; i++) {
            time_ago[i].innerText = jQuery.timeago(time_ago[i].innerText)
        }
    });
    let checkbox = document.getElementById("env");
    let mode = "";
    checkbox.addEventListener( "change", () => {
        if ( checkbox.checked ) {
            mode = "test";
            window.location.href = '/developers/update/'+mode;
        } else {
            mode = "live";
            window.location.href = '/developers/update/'+mode;
        }
    });
</script>
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed by <a href="https://official-john.github.io/" target="_blank">John</a> &amp; Developed by <a href="https://harvardvalleysolutions.top/" target="_blank">Harvard Valley Softech Solutions</a> </p>
    </div>
</div>
</div>
</body>
</html>