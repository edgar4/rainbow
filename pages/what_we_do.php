<?php include("../includes/page_header.php");?>
<body>
<div class="main">
  <div class="header">
    <div class="block_header">
      <div class="logo"><a href="../index.php"><img src="../images/logo.gif" alt="logo" border="0" height="119" width="219"></a></div>
      <?php include("../includes/page_nav.php");?>
      <div class="clr"></div>
    </div>
  </div>
  <div class="sub_text">
    <div class="sub_text_resize"> <a href="#"><img src="../images/more_information.gif" alt="picture" border="0" height="42" width="156"></a> </div>
  </div>
  <div class="search_blog">
    <div class="search_blog_resize">
      <div class="search">
        <form id="form1" name="form1" method="post" action="">
          <label><span>
            <input name="q" class="keywords" id="textfield" maxlength="50" value="Search..." type="text">
            </span>
            <input name="b" src="about_files/search.gif" class="button" type="image">
          </label>
        </form>
      </div>
      <h2>Big colors ...bigger ideas.<br>
        <span>.........the marriage of technilogy, design and invention.</span> </h2>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <div class="clr"></div>
      <div class="right">
        <div class="right2">
          <h2>Quick links</h2>
         <?php include("../includes/sub_links.php");?>
        </div>
        <div class="right2">
          <h2>What  Our Clients They Say</h2>
          "Quis autem vel eum iure reprehenderit qui
          in ea voluptate velit esse voluptas nulla pariatur?"
          by:<br/>
          <span>John S., webdesigner</span>
          <br/><br/><br/>
          
          "Quis autem vel eum iure reprehenderit qui
          in ea voluptate velit esse voluptas nulla pariatur?"
          by:<br/>
          <span>John S., webdesigner </span></div>
          <!--comments-->
          <div class="right2">
         		<div class="cn_wrapper">
			<div id="cn_preview" class="cn_preview">
				<div class="cn_content" style="top:5px;">
					<img src="../images/polaroidphotobar.jpg" alt=""/>
					
				</div>
				<div class="cn_content">
					<img src="../images/fullpageimagegallery.jpg" alt=""/>
					
				</div>
				<div class="cn_content">
					<img src="../images/collapsingsitenavigation.jpg" alt=""/>
					
				</div>
				<div class="cn_content">
					<img src="../images/thumbnailsnavigation.jpg" alt=""/>
					
				</div>
				<div class="cn_content">
					<img src="../images/musicportfoliotemplate.jpg" alt=""/>
					
				</div>
				<div class="cn_content">
					<img src="../images/relatedpostsslideouts.jpg" alt=""/>
				
				</div>
				<div class="cn_content">
					<img src="../images/LatestTweetsTooltip.jpg" alt=""/>
				
				</div>
				<div class="cn_content">
					<img src="../images/slidedownbox.jpg" alt=""/>
					
				</div>
				<div class="cn_content">
					<img src="../images/MinimalisticSlideshowGallery.jpg" alt=""/>
					
				</div>
				<div class="cn_content">
					<img src="../images/imagehighlight.jpg" alt=""/>
					
				</div>
				<div class="cn_content">
					<img src="../images/photodesk.jpg" alt=""/>
					
				</div>
			</div>
			<div id="cn_list" class="cn_list">
				<div class="cn_page" style="display:block;">
					<div class="cn_item selected">
						<h4>Branding</h4>
						
					</div>
					<div class="cn_item">
						<h4>Vehicle Branding</h4>
						
					</div>
					<div class="cn_item">
						<h4>promo-Items</h4>
						
					</div>
					<div class="cn_item">
						<h4>In- Store Branding</h4>
				
					</div>
				</div>
				<div class="cn_page">
					<div class="cn_item">
						<h4>Fliers/posters</h4>
				
					</div>
					<div class="cn_item">
						<h4>Web design</h4>
					
					</div>
					<div class="cn_item">
						<h4>Flat bed Printing</h2>
						
					</div>
					<div class="cn_item">
						<h4>Roll-ups Banners</h4>
					
					</div>
				</div>
				<div class="cn_page">
					<div class="cn_item">
						<h4>Signages</h4>
					
					</div>
					<div class="cn_item">
						<h2>Point of Sale Display Units</h2>
				
					</div>
					<div class="cn_item">
						<h4>Large Format Display</h4>
						
					</div>
				</div>
				<div class="cn_nav">
					<a id="cn_prev" class="cn_prev disabled"></a>
					<a id="cn_next" class="cn_next"></a>
				</div>
			</div>
		</div>
        <div>
           
		</div>

        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="../scripts/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                //caching
				//next and prev buttons
				var $cn_next	= $('#cn_next');
				var $cn_prev	= $('#cn_prev');
				//wrapper of the left items
				var $cn_list 	= $('#cn_list');
				var $pages		= $cn_list.find('.cn_page');
				//how many pages
				var cnt_pages	= $pages.length;
				//the default page is the first one
				var page		= 1;
				//list of news (left items)
				var $items 		= $cn_list.find('.cn_item');
				//the current item being viewed (right side)
				var $cn_preview = $('#cn_preview');
				//index of the item being viewed. 
				//the default is the first one
				var current		= 1;
				
				/*
				for each item we store its index relative to all the document.
				we bind a click event that slides up or down the current item
				and slides up or down the clicked one. 
				Moving up or down will depend if the clicked item is after or
				before the current one
				*/
				$items.each(function(i){
					var $item = $(this);
					$item.data('idx',i+1);
					
					$item.bind('click',function(){
						var $this 		= $(this);
						$cn_list.find('.selected').removeClass('selected');
						$this.addClass('selected');
						var idx			= $(this).data('idx');
						var $current 	= $cn_preview.find('.cn_content:nth-child('+current+')');
						var $next		= $cn_preview.find('.cn_content:nth-child('+idx+')');
						
						if(idx > current){
							$current.stop().animate({'top':'-300px'},600,'easeOutBack',function(){
								$(this).css({'top':'310px'});
							});
							$next.css({'top':'310px'}).stop().animate({'top':'5px'},600,'easeOutBack');
						}
						else if(idx < current){
							$current.stop().animate({'top':'310px'},600,'easeOutBack',function(){
								$(this).css({'top':'310px'});
							});
							$next.css({'top':'-300px'}).stop().animate({'top':'5px'},600,'easeOutBack');
						}
						current = idx;
					});
				});
				
				/*
				shows next page if exists:
				the next page fades in
				also checks if the button should get disabled
				*/
				$cn_next.bind('click',function(e){
					var $this = $(this);
					$cn_prev.removeClass('disabled');
					++page;
					if(page == cnt_pages)
						$this.addClass('disabled');
					if(page > cnt_pages){ 
						page = cnt_pages;
						return;
					}	
					$pages.hide();
					$cn_list.find('.cn_page:nth-child('+page+')').fadeIn();
					e.preventDefault();
				});
				/*
				shows previous page if exists:
				the previous page fades in
				also checks if the button should get disabled
				*/
				$cn_prev.bind('click',function(e){
					var $this = $(this);
					$cn_next.removeClass('disabled');
					--page;
					if(page == 1)
						$this.addClass('disabled');
					if(page < 1){ 
						page = 1;
						return;
					}
					$pages.hide();
					$cn_list.find('.cn_page:nth-child('+page+')').fadeIn();
					e.preventDefault();
				});
				
            });
        </script>
          </div><!--slider2-->
      </div>
      <div class="left">
        <h3>What we do</h3>
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top">
    <td width="27%"><img src="../images/brand.png" width="149" height="102" alt="brand" class="img_b" /></td>
    <td width="73%"><p><span>Branding</span><br/>
    <span>Till &amp; Trolley Advertising</span><br />
      The first product till receipt advertising was successfully launched in July 2004 with the 
      biggest supermarket chain – Nakumatt Holding Ltd being the forerunners in adopting this 
      concept with open arms and with other chains following suit.<br />  As an added value for 
      advertisers, we also have coupons on the shelf for in-store money off discounts.<br />
      We also do trolley branding at both Nakumatt &amp; Tusker Supermarkets. 
      Through trolley advertising you will be creating+ the opportunity to place the brand you<br />
        stock in front of decision makers while they are actually shopping. <br />
        The company holds the exclusive rights for the above concepts at these chains.
      Some of the companies doing business with us besides our large portfolio of advertisers:</p></td>
  </tr>
  <tr align="left" valign="top">
    <td><img src="../images/coporate.png" height="83" width="163" alt="corporate" class="img_b"/></td>
    <td><p><span>Corporate Branding</span><br/>Branding of a product results in product recognition that attracts buyers to an already 
familiar name.  Branding can incorporate a range of products such as logo designs, 
packaging, advertising and stationery.

INNOVATION,ACHIEVEMENT,BREAKTHROUGH IS POSSIBLE through product 
recognition. Ideas are manufactured from the imagination and by the determination 
of people. And only businesses that recognize this are the ones that will succeed.

Our mission is to help organizations across the globe achieve more than they thought 
possible.</p></td>
  </tr>
  <tr align="left" valign="top">
    <td><img src="../images/carbr.png" width="160" height="86" alt="carb randing" class="img_b"/></td>
    <td><p><span>Vehicle Branding</span><br/>we, at Rainbow Printographics, have the expertise and experience to design and 
apply all types of vehicle branding.

We can apply vinyl films and full colour fleet marking films utilizing the latest 
technology for outstanding impact whenever your vehicle is driven.Get free product
 exposure wherever your vehicle is driven or parked. 

Let us become your branding partner of choice and help you wrap your fleet with an
 exciting, innovative and eye-catching campaign!</p></td>
  </tr>
  <tr align="left" valign="top">
    <td><img src="../images/window.png" height="88" width="167" alt="window" class="img_b"/></td>
    <td><p><span>window Graphics</span><br/>Window Graphics are a great method to communicate key information with customers.
From contact details to special offers, window graphics can be used long or short term.
</p></td>
  </tr>
</table>

      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <?php include("../includes/footer.php");?>