<footer>
    <div class="container">
        <div class="widget-items flex-sb">
            <div class="widget-item">
                <nav>
                    <h2>Menu</h2>
                    <ul class="footer-menu">
                        <li class="nav-item active"><a href="index.php">Home</a></li>
                        <li class="nav-item"><a href="">Portfolio</a></li>
                        <li class="nav-item"><a href="">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="widget-item">
                <h2>Social media</h2>
                <ul>
                    <li><a href="https://www.facebook.com/EJSTechniek/?fref=ts" target="_blank">Like ons op Facebook</a></li>
                    <li><a href="https://www.linkedin.com/in/eric-suijkerbuijk-34863539?authType=OUT_OF_NETWORK&authToken=bO-g&locale=en_US&srchid=5115170051467656518133&srchindex=1&srchtotal=4&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A5115170051467656518133%2CVSRPtargetId%3A135933608%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Afalse%2CauthType%3AOUT_OF_NETWORK" target="_blank">Linkedin</a></li>
                </ul>
            </div>
            <div class="widget-item">
                <h2>About</h2>
                <ul>
                    <li><strong>EJS-techniek</strong></li>
                    <li>Rijksweg 21</li>
                    <li>4681 RB Nieuw-Vossemeer</li>
                    <li>The Netherlands (Nederland)</li>
                    <li>KvK: 20128299</li>
                    <li>BTW: 147.698.959B01</li>
                </ul>
            </div>
            <div class="widget-item">
                <h2>Contact</h2>
                <ul>
                    <li>(0031)651586099 (directeur)</li>
                    <li href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#101;&#114;&#105;&#99;&#64;&#69;&#74;&#83;&#45;&#84;&#101;&#99;&#104;&#110;&#105;&#101;&#107;&#46;&#110;&#108;">&#101;&#114;&#105;&#99;&#64;&#69;&#74;&#83;&#45;&#84;&#101;&#99;&#104;&#110;&#105;&#101;&#107;&#46;&#110;&#108;</li>
                    <li>(0031)167-850059 (administratie)</li>
                    <li href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#106;&#101;&#97;&#110;&#101;&#116;&#116;&#101;&#64;&#69;&#74;&#83;&#45;&#84;&#101;&#99;&#104;&#110;&#105;&#101;&#107;&#46;&#110;&#108;">&#106;&#101;&#97;&#110;&#101;&#116;&#116;&#101;&#64;&#69;&#74;&#83;&#45;&#84;&#101;&#99;&#104;&#110;&#105;&#101;&#107;&#46;&#110;&#108;</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script> -->

<!-- Slideshow script -->
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("slide-img");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>
<!-- END Slideshow script -->

<!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script> -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>