<?php get_header(  ); ?>
<!-- Header start -->
<header class="header">
    <div class="hdrIn">
        <a id="logo" href="#">
            <amp-img width="294" height="89" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/logo.png" alt="Amazing"></amp-img>
            <em class="discernible_name">empty</em>
        </a>
        <button id="menuBtn" on="tap:menu.toggleClass(class='toggleMenu')" title="Title">
            <span class="menuBtnIn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </span>
            <em class="discernible_name">empty</em>
        </button>
        <nav class="navigation">
            <ul id="menu" class="menu">
                <li class="current-menu-item current_page_item"><a href="#">Home</a></li>
                <li class="menu-item-has-children"><a href="#">About</a>
                    <ul class="sub-menu">
                        <li><a href="JavaScript:;">Sub menu item 1</a></li>
                        <li><a href="JavaScript:;">Sub menu item 2</a></li>
                        <li><a href="JavaScript:;">Sub menu item 3</a></li>
                        <li><a href="JavaScript:;">Sub menu item 4</a></li>
                        <li><a href="JavaScript:;">Sub menu item 5</a></li>
                        <li><a href="JavaScript:;">Sub menu item 6</a></li>
                        <li><a href="JavaScript:;">Sub menu item 7</a></li>
                        <li><a href="JavaScript:;">Sub menu item 8</a></li>
                    </ul>
                </li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Business Coaching</a></li>
                <li><a href="#">Zoho Services</a></li>
                <li><a href="#">My Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- Header area end -->

<!-- Banner start -->
<div class="banner">
    <div class="bnrIn">
        <div class="homeBnrBox">
            <div class="homeBnrImg">
            	<amp-img width="294" height="294" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/photo1.jpg" alt="Image"></amp-img>
            </div>
            <div class="homeBnrTxt">
                <h1>I Am a <a href="#">Business Coach</a>, Using Zoho One To Boost Marketing, Sales & Customer Service.</h1>
                <p>Over the past 15 years I have established and sold multiple businesses in the services industry. I welcome you to watch my videos and take my courses were I share my experiences.</p>
                <a class="bnrBtn1" href="#">Free Trial</a>
                <a class="bnrBtn2" href="#">ZOHO TRAINING</a>
            </div>
        </div>       
    </div>
</div>
<!-- Banner end -->

<!-- freeTrial start -->
<div class="freeTrial">
    <div class="fTrialCont">
    	<h2>Zoho 30 Days Free Trial</h2>
        <p>Amazing Business Results offers an affordable Zoho CRM subscription based online Training.<br> Bonus: weekly videos on how to use the different Zoho One products</p>
        <div class="fTrialMid">
            <div class="fTrialIn">
                <div class="fTrialImg">
                    <amp-img width="506" height="441" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/trial-img-1.png" alt="Image"></amp-img>
                </div>
            </div>
            <div class="fTrialIn">
                <div class="fTrialImg">
            		<amp-img width="615" height="441" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/trial-img-2.png" alt="Image"></amp-img>
                </div>
            </div>
            <div class="fTrialIn">
                <div class="fTrialImg">
            		<amp-img width="506" height="441" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/trial-img-3.png" alt="Image"></amp-img>
                </div>
            </div>
        </div>
        <h4>Go to Zoho 30 Days <a href="#">Free</a> Trial </h4>
        <a class="ftBtn" href="#">Free Trial</a>
    </div>
</div>
<!-- freeTrial end -->

<!-- gRating start -->
<div class="gRating">
    <div class="gRatingTop">
        <h2>Some Words From Our Clients</h2>
    </div>
    <div class="grCarousel">
        <div class="grCaroIn">
            <amp-carousel id="carousel" width="1200" height="630" layout="responsive" type="slides" autoplay delay="3000" on="slideChange:cSelector.toggle(index=event.index, value=true)">
                <div class="slide-wrap">
                    <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/gLogo.png" alt="gLogo"></amp-img></span>                    
                    <div class="slideMid">
                        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sadips ipsums aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."</p>
                    </div>
                    <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                    <h6>Plain Jane</h6>
                </div>
                <div class="slide-wrap">
                    <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/gLogo.png" alt="gLogo"></amp-img></span>                   
                    <div class="slideMid">
                    	<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</p>
                    </div>
                    <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                    <h6>Plain Jane</h6>
                </div>
                <div class="slide-wrap">
                    <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/gLogo.png" alt="gLogo"></amp-img></span>                   
                    <div class="slideMid">
                    	<p>"It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing."</p>
                    </div>
                    <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                    <h6>Plain Jane</h6>
                </div>
                <div class="slide-wrap">
                    <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/gLogo.png" alt="gLogo"></amp-img></span>                   
                    <div class="slideMid">
                    	<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sadips ipsums aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."</p>
                    </div>
                    <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                    <h6>Plain Jane</h6>
                </div>
                <div class="slide-wrap">
                    <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/gLogo.png" alt="gLogo"></amp-img></span>                   
                    <div class="slideMid">
                    	<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</p>
                    </div>
                    <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                    <h6>Plain Jane</h6>
                </div>                
            </amp-carousel>
            <amp-selector id="cSelector" on="select:carousel.goToSlide(index=event.targetOption)" layout="container">
                <span option="0" selected></span>
                <span option="1"></span>
                <span option="2"></span>
                <span option="3"></span>
                <span option="4"></span>
            </amp-selector>
        </div>
    </div>
    <div class="gRatingBtm">
        <div class="grBtmIn">
            <span>See more reviews on:</span>
            <ul>
            	<li><a href="#"><amp-img width="194" height="56" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/upLogo.png" alt="upLogo"></amp-img></a></li>
            	<li><button on="tap:gPopup"><amp-img width="185" height="62" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/gLogo2.png" alt="gLogo2"></amp-img></button></li>
            	<li><a href="#"><amp-img width="241" height="66" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/udLogo.png" alt="udLogo"></amp-img></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- gRating end -->

<!-- myServices start -->
<div class="myServices">
    <div class="mySvsCont">
    	<h2>My Services</h2>
        <div class="mySvsMid">
            <div class="mySvsIn">
            	<h6>Zoho products Customization & Training Services</h6>
				<amp-youtube width="480" height="270" layout="responsive" data-param-modestbranding="1" data-param-rel="1" data-videoid="6cdYo90M45M"></amp-youtube>
            </div>
            <div class="mySvsIn">
            	<h6>Online Marketing Architect Solution</h6>
				<amp-youtube width="480" height="270" layout="responsive" data-param-modestbranding="1" data-param-rel="1" data-videoid="OCTzhm-cpf4"></amp-youtube>
            </div>
            <div class="mySvsIn">
            	<h6>About My Service</h6>
				<amp-youtube width="480" height="270" layout="responsive" data-param-modestbranding="1" data-param-rel="1" data-videoid="SarkuAoQWzs"></amp-youtube>
            </div>
            <div class="mySvsIn">
            	<h6>Web Design Services Architect</h6>
				<amp-youtube width="480" height="270" layout="responsive" data-param-modestbranding="1" data-param-rel="1" data-videoid="1130_0jZFlQ"></amp-youtube>
            </div>
        </div>
        <div class="btnBox">
        	<span>
            	<a class="moreBtn" href="#">See more</a>
            </span>
        </div>
    </div>
</div>
<!-- myServices end -->

<!-- homeAbout start -->
<div class="homeAbout">
    <div class="homeimgBox">
        <div class="homeimgBoxIn">
        	<amp-img width="838" height="838" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/homeimgBox.jpg" alt="Image"></amp-img>
        </div>
    </div>
    <div class="hometxtBox">
        <h3>About me:</h3>
        <p>As the changes in my life have led to many successes many people have asked me to help them achieve the same goals. This has created another big change in my life from being a successful business person to becoming a successful mentor. It has created a wonderful journey for me which gives me great pleasure to take other people down the road of success with me.</p>
        <p>My focus is now on imparting my knowledge through online courses, workshops, speaking engagements and one on one consultations.
As my way of paying back for the wonderful successes that I have been able to achieve, I have started this most exciting YouTube channel to share with others what I have learned in the hopes they too will be able to turn their "I wishes" into "I haves". I mostly willingly share all that I have to offer by way of expertise, experience and knowledge here on my Youtube channel at absolutely NO charge</p>
    </div>
</div>
<!-- homeAbout end -->

<!-- Clients start -->
<div class="clients">
	<h2>Some Of My Clients</h2>
    <ul>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-1.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-2.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-3.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-4.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-5.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-6.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-7.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-8.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-9.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-10.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-11.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-12.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-13.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-14.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-15.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-16.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-17.png" alt="Logo"></amp-img></a></li>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/clients/lient-18.png" alt="Logo"></amp-img></a></li>
    </ul>
</div>
<!-- Clients end -->
<?php get_footer(  ); ?>