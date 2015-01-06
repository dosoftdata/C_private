
<!--ul id="header-navigation">
	<li <?php /* if (strpos($_SERVER['SCRIPT_NAME'], 'index') !== false) echo 'class="selected"' ?>><a href="index.php">Products</a></li>
	<li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'case_studies') !== false) echo 'class="selected"' ?>><a href="case_studies.php">Case Studies</a></li>
	<li <?php if (strpos($_SERVER['SCRIPT_NAME'],'gallery') !== false) echo 'class="selected"' ?>><a href="gallery.php">Gallery</a></li>
	<li <?php if (strpos($_SERVER['SCRIPT_NAME'],'brochures') !== false) echo 'class="selected"' ?>><a href="brochures.php">Brochures</a></li>
	<li <?php if (strpos($_SERVER['SCRIPT_NAME'], 'register_interest') !== false) echo 'class="selected"' */?>><a href="register_interest.php">Request Callback</a></li>
</ul-->
 <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #363335;">
	<div class="container">
		<div class="main-menu-list col-xs-12 col-md-8">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collepsed-visible" data-toggle="collapse" data-target="#main-menu" style="padding-bottom:20px">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar "></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div id="welcome">
					<a class="navbar-brand height70 " href="#">
						<span class="menu-color-white menu-actve-gray-color">WELCOME<span><br>
						<small class="menu-color-idata memu-font-size menu-actve-gray-color">Success starts here</small>
					</a>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="main-menu">
				<ul class="nav navbar-nav navbar-left menu-helper">
					<li><a href="#about">
						<span class="menu-color-white">BROWSE</span><br>
			            <small class="menu-color-idata memu-font-size">Find the right widgets</small></a>
					</li>
					<li><a href="#contact">
						<span class="menu-color-white"> INTEGRATE</span><br>
						 <small class="menu-color-idata memu-font-size">As easy as 1,2,3</small></a>
					</li>
					<li><a href="#contact">
						<span class="menu-color-white">FAVOURITES</span>
						<br><small class="menu-color-idata memu-font-size">Your personal site</small></a>
					</li>
					<li><a class="menu-color-white" href="#contact">
						<span class="menu-color-white">HELP </span><br>
					    <small class="menu-color-idata memu-font-size">Find answers</small></a>
					</li>
				</ul>
	        </div>
		</div>
		<div class="alter-menu-list col-xs-6 col-md-4">
			<ul class="dropdown-menu alternated-menu" role="menu" style="background-color: #363335; display: inline-flex;width: auto; top: -7px">
				<li><a href="#"><img src="images/buttons/home/nav/ask.png"><br><small class="menu-color-white memu-font-size">Ask</small></a></li> 
				<li><a type="button" class="btn open-search-box" data-toggle="modal" data-target="#search-dialog"href="#search" href="#search">
					<img src="images/buttons/home/nav/search.png"><br><small class="menu-color-white memu-font-size">Search</small></a>
				</li> 
				<li><a href="#"><img src="images/buttons/home/nav/x.png"><br><small class="menu-color-white memu-font-size">Logout</small></a></li> 
			</ul>
			<div class="brand-menu pull-right">
				<div style="padding-top:10px">		 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
						<img src="images/logos/logo.png" style="background-color:#363335;" style="padding:0;margin:0;">
					</a>
			    </div>
		        <ul class="dropdown-menu main-menu-list-brand" role="menu" style="background-color: #363335; display: inline-flex;width: 205px">
			        <li><a href="#"><img src="images/buttons/home/nav/ask.png"><br><small class="menu-color-white memu-font-size">Ask</small>
				    </a></li> 
				    <li><a type="button" class="btn open-search-box" data-toggle="modal" data-target="#search-dialog"href="#search"
						href="#search"><img src="images/buttons/home/nav/search.png"><br><small class="menu-color-white memu-font-size">Search</small></a></li> 
				    <li><a href="#"><img src="images/buttons/home/nav/x.png"><br><small class="menu-color-white memu-font-size">Logout</small></a></li>               
				</ul>
			</div>
            <div id="popupBottom" class="popover show">
				<div class="arrow"></div>
				<div class="popover-title">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-8 pull-left popover-title-text-width">
                                                    <span class="header-idata-colored-upercased header-font-size" > widget quick finder</span>
                                                </div>
						<div class="col-xs-6 col-lg-4 pull-right popover-title-close-button-width popover-title-right-button-pos" id="close-search-box"> 
							<img id="close-search-box" src="images/buttons/home/popover/close.png" alt="close" />
						</div>
					</div>        
				</div>
				<div class="popover-content">
                                    <ul class="quick-finder-content" style="display: block; z-index: 1060">
                                        <li><span class="quick-find-tag-title"> Find Widget by tag...</span></li>
                                        <li>
                                            <div class="row zeropadding">
                                                <div class="col-xs-12 col-md-9 zeropadding" style="height:30px">
                                                    <dl id="by-tag-quick-find" class="quick-find-tag find-by-tag">
                                                        <dt><a href="#"><span style="padding-left: 5px">select</span></a></dt>
                                                        <dd>
                                                            <ul class="select-item">
                                                                <li><a href="#">Brazil<span class="value">BR</span></a></li>
                                                                <li><a href="#">France<span class="value">FR</span></a></li>
                                                                <li><a href="#">Germany<span class="value">DE</span></a></li>
                                                                <li><a href="#">India<span class="value">IN</span></a></li>
                                                                <li><a href="#">Japan<span class="value">JP</span></a></li>
                                                                <li><a href="#">Serbia<span class="value">CS</span></a></li>
                                                                <li><a href="#">United Kingdom<span class="value">UK</span></a></li>
                                                                <li><a href="#">United States<span class="value">US</span></a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                          
                                                </div>
                                                <div class="col-xs-6 col-md-3 zeropadding">
                                                Find
                                                </div>
                                            </div>
                                        </li>
                                        <li> <span class="quick-find-tag-title"> --or in alphabetical order</span></li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-9 zeropadding">
                                                     <dl id="by-tag-quick-find" class="quick-find-tag find-by-alpha">
                                                        <dt><a href="#"><span style="padding-left: 5px">select</span></a></dt>
                                                        <dd>
                                                            <ul class="select-item">
                                                                <li><a href="#">Brazil<span class="value">BR</span></a></li>
                                                                <li><a href="#">France<span class="value">FR</span></a></li>
                                                                <li><a href="#">Germany<span class="value">DE</span></a></li>
                                                                <li><a href="#">India<span class="value">IN</span></a></li>
                                                                <li><a href="#">Japan<span class="value">JP</span></a></li>
                                                                <li><a href="#">Serbia<span class="value">CS</span></a></li>
                                                                <li><a href="#">United Kingdom<span class="value">UK</span></a></li>
                                                                <li><a href="#">United States<span class="value">US</span></a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-xs-6 col-md-3 zeropadding">
                                                    Find
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
				</div>
			</div>
		</div> 
	</div>
</nav>
