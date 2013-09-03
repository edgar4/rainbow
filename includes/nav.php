<?php
if(isset($page)){
	
	$page = $_GET['page'];
}else{
	$page = "";
}
?>

<div class="menu">
        <ul>
          <li><a href="index.php" class="active"><span>Home</span></a></li>
          <li><a href="pages/about.php?page=1" <?php if($page==1){echo "class=\"active\"";}?>><span> About Us</span></a></li>
          <li><a href="pages/what_we_do.php?page=3"><span>What we do</span></a></li>
          <li><a href="pages/contact.php?page=4" <?php if($page==1){echo "class=\"active\"";}?>><span> Get in touch </span></a></li>
        </ul>
      </div>
