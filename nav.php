
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
            <div id="popupBottom" class="popover">
				<div class="arrow"></div>
				<div class="popover-title">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-8 pull-left popover-title-text-width">left</div>
						<div class="col-xs-6 col-lg-4 pull-right popover-title-close-button-width popover-title-right-button-pos" id="close-search-box"> 
							<img id="close-search-box" src="images/buttons/home/popover/close.png" alt="close" />
						</div>
					</div>        
				</div>
				<div class="popover-content">
					<p>Sed posuere consectetur est at lobortis. Aenean
						eu leo quam. Pellentesque ornare sem lacinia
						quam venenatis vestibulum.
						<a href="#" class="btn helloWorld">Click me</a>
					</p>
				</div>
			</div>
		</div> 
	</div>
</nav>
