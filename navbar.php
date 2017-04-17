<header>
  <!-- Logo -->
  <a class="navbar-logo" href="index.php"><img class="navbar-img" src="img/Corrao_Group_Logo_Resized.png" alt=""></a>

  <!-- Contact Us Button -->
  <div class="container-fluid navbar-container">
    <?php if($title != 'Giving Back' && $title != 'EZ-AR Solutions') {?>
      <button class="contact-us-button" type="button">CONTACT US</button>
    <?php } else { ?>
      <a href="about_us.php#our-services-container"><button class="contact-us-button" type="button">CONTACT US</button></a>
    <?php } ?>
    <a href="https://www.linkedin.com/company-beta/793013/" target="_blank"><div id="linkedin-sprite-navbar"></div></a>
    <a href="https://twitter.com/Corrao_Group" target="_blank"><div id="twitter-sprite-navbar"></div></a>
  </div>

  <nav class="navbar navbar-default">
    <div class="container-fluid navbar-container">

      <!-- Logo -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a href="#" class="navbar-brand">Corrao Group</a> -->
      </div>

      <!-- Menu Items -->
      <div class="collapse navbar-collapse" id="mainNavBar">
        <ul class="nav navbar-nav navbar-right">

          <!-- Salesforce Dropdown -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">SALESFORCE <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="new_to_salesforce.php">NEW TO SALESFORCE</a></li>
              <li><a href="optimizing_salesforce.php">OPTIMIZING SALESFORCE</a></li>
              <li><a href="salesforce_expansion.php">SALESFORCE EXPANSION</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">SOLUTIONS <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="ez-ar.php">EZ-AR</a></li>
            </ul>
          </li>

          <li><a href="about_us.php">ABOUT US</a></li>
          <li><a href="giving_back.php">GIVING BACK</a></li>
          <li><a href="http://corraogroup.com/blog/" target="_blank">BLOG</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
