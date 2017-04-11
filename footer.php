<footer>

  <div class="container-fluid">

    <div class="row">
      <div class="col-sm-6 text-center">
          <a href="index.php"><img class="footer-image" src="img/Corrao_Group_Logo_Resized.png" alt=""></a>
      </div>
      <div class="col-sm-6 text-center">
        <a href="http://corraogroup.com/blog" target="_blank"><div id="linkedin-sprite"></div></a>
        <a href="http://corraogroup.com/blog" target="_blank"><div id="twitter-sprite"></div></a>
        <a href="https://twitter.com/Corrao_Group" target="_blank"><img class="social-media-logo" src="img/Twitter_Logo_White_On_Blue.png" alt="" ></a>
        <a href="http://corraogroup.com/blog" target="_blank"><img class="social-media-logo" src="img/linkedin-logo.png" alt=""></a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 text-center">
        <a href="new_to_salesforce.php"><img class="footer-icon" src="img/new_to_salesforce_icon.png" alt=""></a>
        <a href="optimizing_salesforce.php"><img class="footer-icon" src="img/salesforce_optimization_icon.png" alt=""></a>
        <a href="salesforce_expansion.php"><img class="footer-icon" src="img/salesforce_expansion_icon.png" alt=""></a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 text-center footer-nav-links">

        <div class="row">
          <div class="col-sm-3">
            <a href="index.php">HOME</a>
          </div>
          <div class="col-sm-3">
            <a href="new_to_salesforce.php">SALESFORCE</a>
          </div>
          <div class="col-sm-3">
            <a href="about_us.php">ABOUT US</a>
          </div>
          <div class="col-sm-3">
            <a href="#">CONTACT US</a>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <a href="giving_back.php">GIVING BACK</a>
          </div>
        </div>

      </div>
    </div>

  </div>

  <p class="text-right rights-text">All Rights Reserved &copy; 2017 Corrao Group</p>

  <div class="navbar-default navbar-fixed-bottom">
      <div class="container text-center contact-us-button-mobile">
        <?php if($title != 'Giving Back') {?>
          <a class="contact-us-button-mobile" href="#contact-us">CONTACT US</a>
        <?php } else { ?>
          <a class="contact-us-button-mobile" href="about_us.php#contact-us">CONTACT US</a>
        <?php } ?>
      </div>
  </div>

</footer>

<!-- Scripts -->
<!-- JQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="assets/parallax.js" charset="utf-8"></script>
<script>
$('.parallax-window').parallax();
</script>
<script type="text/javascript" src="assets/smooth-scroll.js"></script>
<script type="text/javascript" src="assets/scrollshow.js"></script>

<!-- Pardot Tracking Code -->
<script type="text/javascript">

piAId = '53032';

piCId = '1006';

(function() {

function async_load(){

var s = document.createElement('script'); s.type = 'text/javascript';

s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') +

'.pardot.com/pd.js';

var c = document.getElementsByTagName('script')[0];

c.parentNode.insertBefore(s, c);

}

if(window.attachEvent) { window.attachEvent('onload', async_load); }

else { window.addEventListener('load', async_load, false); }

})();

</script>
</body>
</html>
