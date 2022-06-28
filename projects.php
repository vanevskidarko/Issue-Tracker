<?php 

session_start();
require('./config/database.php');

if(!isset($_SESSION['firstname'])){
	header('Location: /test/');
}


$sql = "SELECT * from projects;";
$query = mysqli_query($conn, $sql);
$arr = array();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;family=Roboto+Mono&amp;display=swap" rel="stylesheet">
	<link href="assets/build/styles/ltr-core.css" rel="stylesheet">
	<link href="assets/build/styles/ltr-vendor.css" rel="stylesheet">
	<link href="assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<title>Dashboard | Panely</title>
</head>

<body class="theme-light preload-active aside-active aside-mobile-minimized aside-desktop-maximized" id="fullscreen">
	<!-- BEGIN Preload -->
	<!-- END Preload -->
	<!-- BEGIN Page Holder -->
	<div class="holder">
		<!-- BEGIN Aside -->

        <?php include 'aside_header.php'; ?>
		<!-- END Aside -->
		<!-- BEGIN Page Wrapper -->
		<div class="wrapper">
			<!-- BEGIN Header -->
            <?php require('header.php'); ?>
			<!-- END Header -->
			<!-- BEGIN Page Content -->
			<div class="content ">
				<div class="container-fluid">

                    <div class="row">
					<?php
                
				while($row = mysqli_fetch_array($query)){

				echo "

				<div class='col-md-12 pb-5'>
				<div class='card'>
				<div class='card-header'><h3>Made By:  ".$row['project']. " </h3> </div>
				<div class'card-body px-5 mx-5'>Company: ".$row['company']." <br> Task:</div> 
				<div class='card-footer'><button type='submit' class='btn btn-danger delete_project
				float-right' id=".$row['id']." >Delete</button></div>
				</div>
				</div>
					";

					}
			?>	

				</div>
			</div>
			<!-- END Page Content -->
			<!-- BEGIN Footer -->
			<?php require ('footer.php'); ?>
			<!-- END Footer -->
		</div>
		<!-- END Page Wrapper -->
	</div>
	<!-- END Page Holder -->
	<!-- BEGIN Scroll To Top -->
	<div class="scrolltop">
		<button class="btn btn-info btn-icon btn-lg">
			<i class="fa fa-angle-up"></i>
		</button>
	</div>
	<!-- END Scroll To Top -->
	<!-- BEGIN Sidemenu -->
	<div class="sidemenu sidemenu-right sidemenu-wider" id="sidemenu-todo">
		<div class="sidemenu-header">
			<h3 class="sidemenu-title">May 14, 2020</h3>
			<div class="sidemenu-addon">
				<button class="btn btn-label-danger btn-icon" data-dismiss="sidemenu">
					<i class="fa fa-times"></i>
				</button>
			</div>
		</div>
		<div class="sidemenu-body pb-0" data-simplebar="data-simplebar">
			<!-- BEGIN Portlet -->
			<div class="portlet portlet-bordered">
				<div class="portlet-header portlet-header-bordered">
					<div class="portlet-icon">
						<i class="fa fa-tasks"></i>
					</div>
					<h3 class="portlet-title">Upcoming events</h3>
				</div>
				<div class="portlet-body">
					<!-- BEGIN Timeline -->
					<div class="timeline rich-list-bordered">
						<div class="timeline-item">
							<div class="timeline-pin">
								<i class="marker marker-circle text-primary"></i>
							</div>
							<div class="timeline-content">
								<!-- BEGIN Rich List -->
								<div class="rich-list-item">
									<div class="rich-list-content">
										<h5 class="rich-list-title">12:00</h5>
										<p class="rich-list-paragraph">Donec laoreet fringilla justo a pellentesque</p>
									</div>
								</div>
								<!-- END Rich List -->
							</div>
						</div>
						<div class="timeline-item">
							<div class="timeline-pin">
								<i class="marker marker-circle text-success"></i>
							</div>
							<div class="timeline-content">
								<!-- BEGIN Rich List -->
								<div class="rich-list-item">
									<div class="rich-list-content">
										<h5 class="rich-list-title">13:20</h5>
										<p class="rich-list-paragraph">Nunc quis massa nec enim</p>
									</div>
								</div>
								<!-- END Rich List -->
							</div>
						</div>
						<div class="timeline-item">
							<div class="timeline-pin">
								<i class="marker marker-circle text-danger"></i>
							</div>
							<div class="timeline-content">
								<!-- BEGIN Rich List -->
								<div class="rich-list-item">
									<div class="rich-list-content">
										<h5 class="rich-list-title">14:00</h5>
										<p class="rich-list-paragraph">Praesent sit amet</p>
									</div>
								</div>
								<!-- END Rich List -->
							</div>
						</div>
					</div>
					<!-- END Timeline -->
				</div>
			</div>
			<!-- END Portlet -->
			<!-- BEGIN Portlet -->
			<div class="portlet portlet-bordered">
				<div class="portlet-header portlet-header-bordered">
					<div class="portlet-icon">
						<i class="fa fa-users"></i>
					</div>
					<h3 class="portlet-title">Contacts</h3>
					<div class="portlet-addon">
						<button class="btn btn-label-primary btn-icon">
							<i class="fa fa-plus"></i>
						</button>
					</div>
				</div>
				<div class="portlet-body p-0">
					<!-- BEGIN Rich List -->
					<div class="rich-list rich-list-flush rich-list-action">
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-addon avatar-addon-top">
										<div class="avatar-icon avatar-icon-info">
											<i class="fa fa-thumbtack"></i>
										</div>
									</div>
									<div class="avatar-display">
										<img src="../assets/images/avatar/blank.webp" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-secondary"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Charlie Stone</h4>
								<span class="rich-list-subtitle">Art Director</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">1 min</span>
								<span class="badge badge-success badge-pill">1</span>
							</div>
						</a>
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="../assets/images/avatar/blank.webp" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-success"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Freddie Stevens</h4>
								<span class="rich-list-subtitle">Journalist</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">2 hour</span>
								<span class="badge badge-success badge-pill">12</span>
							</div>
						</a>
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="../assets/images/avatar/blank.webp" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-success"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Tyler Clark</h4>
								<span class="rich-list-subtitle">Programmer</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">5 hour</span>
							</div>
						</a>
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-addon avatar-addon-top">
										<div class="avatar-icon avatar-icon-success">
											<i class="fa fa-check"></i>
										</div>
									</div>
									<div class="avatar-display">
										<img src="../assets/images/avatar/blank.webp" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-secondary"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Darcy Harrison</h4>
								<span class="rich-list-subtitle">Internet Marketer</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">1 day</span>
								<span class="badge badge-success badge-pill">2</span>
							</div>
						</a>
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="../assets/images/avatar/blank.webp" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-success"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Victor Payne</h4>
								<span class="rich-list-subtitle">Accountant</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">1 day</span>
								<span class="badge badge-success badge-pill">5</span>
							</div>
						</a>
						<a href="#" class="rich-list-item">
							<div class="rich-list-prepend">
								<!-- BEGIN Avatar -->
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="../assets/images/avatar/blank.webp" alt="Avatar image">
									</div>
									<div class="avatar-addon avatar-addon-bottom">
										<i class="marker marker-dot text-secondary"></i>
									</div>
								</div>
								<!-- END Avatar -->
							</div>
							<div class="rich-list-content">
								<h4 class="rich-list-title">Alberta Harris</h4>
								<span class="rich-list-subtitle">UI Designer</span>
							</div>
							<div class="rich-list-append flex-column align-items-end">
								<span class="text-muted text-nowrap">2 day</span>
								<span class="badge badge-success badge-pill">4</span>
							</div>
						</a>
					</div>
					<!-- END Rich List -->
				</div>
			</div>
			<!-- END Portlet -->
		</div>
	</div>
	<!-- END Sidemenu -->
	<!-- BEGIN Sidemenu -->
	<div class="sidemenu sidemenu-right sidemenu-wider" id="sidemenu-settings">
		<div class="sidemenu-header">
			<h3 class="sidemenu-title">Settings</h3>
			<div class="sidemenu-addon">
				<button class="btn btn-label-danger btn-icon" data-dismiss="sidemenu">
					<i class="fa fa-times"></i>
				</button>
			</div>
		</div>
		<div class="sidemenu-body pb-0" data-simplebar="data-simplebar">
			<!-- BEGIN Portlet -->
			<div class="portlet portlet-bordered">
				<div class="portlet-header portlet-header-bordered">
					<div class="portlet-icon">
						<i class="fa fa-bolt"></i>
					</div>
					<h3 class="portlet-title">Performance</h3>
				</div>
				<div class="portlet-body">
					<!-- BEGIN Widget -->
					<div class="widget4 mb-3">
						<div class="widget4-group">
							<div class="widget4-display">
								<h6 class="widget4-subtitle">CPU Load</h6>
							</div>
							<div class="widget4-addon">
								<h6 class="widget4-subtitle text-info">60%</h6>
							</div>
						</div>
						<!-- BEGIN Progress -->
						<div class="progress progress-sm">
							<div class="progress-bar bg-info" style="width: 60%"></div>
						</div>
						<!-- END Progress -->
					</div>
					<!-- END Widget -->
					<!-- BEGIN Widget -->
					<div class="widget4 mb-3">
						<div class="widget4-group">
							<div class="widget4-display">
								<h6 class="widget4-subtitle">CPU Temparature</h6>
							</div>
							<div class="widget4-addon">
								<h6 class="widget4-subtitle text-success">42°</h6>
							</div>
						</div>
						<!-- BEGIN Progress -->
						<div class="progress progress-sm">
							<div class="progress-bar bg-success" style="width: 30%"></div>
						</div>
						<!-- END Progress -->
					</div>
					<!-- END Widget -->
					<!-- BEGIN Widget -->
					<div class="widget4">
						<div class="widget4-group">
							<div class="widget4-display">
								<h6 class="widget4-subtitle">RAM Usage</h6>
							</div>
							<div class="widget4-addon">
								<h6 class="widget4-subtitle text-danger">6,532 MB</h6>
							</div>
						</div>
						<!-- BEGIN Progress -->
						<div class="progress progress-sm">
							<div class="progress-bar bg-danger" style="width: 80%"></div>
						</div>
						<!-- END Progress -->
					</div>
					<!-- END Widget -->
				</div>
			</div>
			<!-- END Portlet -->
			<!-- BEGIN Portlet -->
			<div class="portlet portlet-bordered">
				<div class="portlet-header">
					<h3 class="portlet-title">Customer care</h3>
				</div>
				<div class="portlet-body">
					<!-- BEGIN Form Group -->
					<div class="form-group">
						<!-- BEGIN Custom Switch -->
						<div class="custom-control custom-control-lg custom-switch">
							<input type="checkbox" class="custom-control-input" id="generalSetting1">
							<label class="custom-control-label" for="generalSetting1">Enable notifications</label>
						</div>
						<!-- END Custom Switch -->
					</div>
					<!-- END Form Group -->
					<!-- BEGIN Form Group -->
					<div class="form-group">
						<!-- BEGIN Custom Switch -->
						<div class="custom-control custom-control-lg custom-switch">
							<input type="checkbox" class="custom-control-input" id="generalSetting2" checked="checked">
							<label class="custom-control-label" for="generalSetting2">Enable case tracking</label>
						</div>
						<!-- END Custom Switch -->
					</div>
					<!-- END Form Group -->
					<!-- BEGIN Form Group -->
					<div class="form-group mb-0">
						<!-- BEGIN Custom Switch -->
						<div class="custom-control custom-control-lg custom-switch">
							<input type="checkbox" class="custom-control-input" id="generalSetting3">
							<label class="custom-control-label" for="generalSetting3">Support portal</label>
						</div>
						<!-- END Custom Switch -->
					</div>
					<!-- END Form Group -->
				</div>
			</div>
			<!-- END Portlet -->
			<!-- BEGIN Portlet -->
			<div class="portlet portlet-bordered">
				<div class="portlet-header">
					<h3 class="portlet-title">Reports</h3>
				</div>
				<div class="portlet-body">
					<!-- BEGIN Form Group -->
					<div class="form-group">
						<!-- BEGIN Custom Switch -->
						<div class="custom-control custom-control-lg custom-switch">
							<input type="checkbox" class="custom-control-input" id="generalSetting4">
							<label class="custom-control-label" for="generalSetting4">Generate reports</label>
						</div>
						<!-- END Custom Switch -->
					</div>
					<!-- END Form Group -->
					<!-- BEGIN Form Group -->
					<div class="form-group">
						<!-- BEGIN Custom Switch -->
						<div class="custom-control custom-control-lg custom-switch">
							<input type="checkbox" class="custom-control-input" id="generalSetting5" checked="checked">
							<label class="custom-control-label" for="generalSetting5">Enable report export</label>
						</div>
						<!-- END Custom Switch -->
					</div>
					<!-- END Form Group -->
					<!-- BEGIN Form Group -->
					<div class="form-group mb-0">
						<!-- BEGIN Custom Switch -->
						<div class="custom-control custom-control-lg custom-switch">
							<input type="checkbox" class="custom-control-input" id="generalSetting6">
							<label class="custom-control-label" for="generalSetting6">Allow data</label>
						</div>
						<!-- END Custom Switch -->
					</div>
					<!-- END Form Group -->
				</div>
			</div>
			<!-- END Portlet -->
			<!-- BEGIN Portlet -->
			<div class="portlet portlet-bordered">
				<div class="portlet-header">
					<h3 class="portlet-title">Projects</h3>
				</div>
				<div class="portlet-body">
					<!-- BEGIN Form Group -->
					<div class="form-group">
						<!-- BEGIN Custom Switch -->
						<div class="custom-control custom-control-lg custom-switch">
							<input type="checkbox" class="custom-control-input" id="generalSetting7">
							<label class="custom-control-label" for="generalSetting7">Enable create projects</label>
						</div>
						<!-- END Custom Switch -->
					</div>
					<!-- END Form Group -->
					<!-- BEGIN Form Group -->
					<div class="form-group">
						<!-- BEGIN Custom Switch -->
						<div class="custom-control custom-control-lg custom-switch">
							<input type="checkbox" class="custom-control-input" id="generalSetting8" checked="checked">
							<label class="custom-control-label" for="generalSetting8">Enable custom projects</label>
						</div>
						<!-- END Custom Switch -->
					</div>
					<!-- END Form Group -->
					<!-- BEGIN Form Group -->
					<div class="form-group mb-0">
						<!-- BEGIN Custom Switch -->
						<div class="custom-control custom-control-lg custom-switch">
							<input type="checkbox" class="custom-control-input" id="generalSetting9">
							<label class="custom-control-label" for="generalSetting9">Enable project review</label>
						</div>
						<!-- END Custom Switch -->
					</div>
					<!-- END Form Group -->
				</div>
			</div>
			<!-- END Portlet -->
		</div>
	</div>
	<!-- END Sidemenu -->
	<!-- BEGIN Float Button -->
	<div class="float-btn float-btn-right">
		<button class="btn btn-flat-primary btn-icon mb-2" id="theme-toggle" data-toggle="tooltip" data-placement="right" title="Change theme">
			<i class="fa fa-moon"></i>
		</button>
		<a href="../rtl/index.html" class="btn btn-flat-primary btn-icon" data-toggle="tooltip" data-placement="right" title="Switch to RTL">
			<i class="fa fa-sync"></i>
		</a>
	</div>
	<!-- END Float Button -->
	<script type="text/javascript" src="assets/build/scripts/mandatory.js"></script>
	<script type="text/javascript" src="assets/build/scripts/core.js"></script>
	<script type="text/javascript" src="assets/build/scripts/vendor.js"></script>
	<script type="text/javascript" src="assets/app/home.js"></script>
<script>	
$( document ).ready(function() {
    	$(".delete_project").click(function(){
			var project_id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "delete-project.php",
				data : {project_id: project_id},
				success: function(res){
					location.reload(true)
				}
			})
		})
		});
	</script>
</body>

</html>
