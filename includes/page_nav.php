<?php
$page = $_GET['page'];  
?>

<div class="menu">
        <ul>
          <li><a href="../index.php"><span>Home</span></a></li>
          <li><a href="about.php?page=1" <?php if($page==1){echo "class=\"active\"";}?>><span> About Us</span></a></li>
          <li><a href="what_we_do.php?page=3" <?php if($page==3){echo "class=\"active\"";}?>><span>What we do</span></a></li>
          <li><a href="contact.php?page=4" <?php if($page==4){echo "class=\"active\"";}?>><span> Get in touch </span></a></li>
        </ul>
      </div>