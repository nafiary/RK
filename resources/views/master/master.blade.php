<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
@include('master.head') 
<body class="sticky-header left-side-collapsed"  onload="initMap()">
	<section>
		@include('master.nav')

		<!-- main content start-->
		<div class="main-content main-content3">
			<!-- header-starts -->
			<div class="header-section">

				<!--toggle button start-->
				<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
				<!--toggle button end-->

				<!--notification menu start -->
				<div class="menu-right">
					<div class="user-panel-top">  	
						<div class="profile_details">		
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											<div class="user-name">
												<p>
													@yield('user')
												</p>
											</div>
											<div class="clearfix"></div>	
										</div>	
									</a>
								</li>
								<div class="clearfix"> </div>
							</ul>
						</div>			             	
						<div class="clearfix"></div>
					</div>
				</div>
				<!--notification menu end -->
			</div>
			<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">@yield('judul')</h3>
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							@yield('content')
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--footer section start-->
		<footer>
			<p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
		</footer>
		<!--footer section end-->
	</section>
	@include('master.script')
</body>
</html>