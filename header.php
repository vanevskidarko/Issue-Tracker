<?php 

$name = $_SERVER['REQUEST_URI'];

$url = substr($name,6);
$panel = substr($url,0,-4);

$panel = ucfirst($panel);
?>

<div class="header">
				<!-- BEGIN Header Holder -->
				<div class="header-holder header-holder-desktop sticky-header" id="sticky-header-desktop">
					<div class="header-container container-fluid">
						<div class="header-wrap">
							<!-- BEGIN Nav -->
							<ul class="nav nav-pills">
								<!-- BEGIN Dropdown -->
								<li class="nav-item dropdown">
									<a href="#" class="nav-link active" data-toggle="dropdown">Apps</a>
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-animated">
										<a href="#" class="dropdown-item">
											<div class="dropdown-icon">
												<i class="fa fa-boxes"></i>
											</div>
											<span class="dropdown-content">Inventory Manager</span>
											<div class="dropdown-addon">
												<span class="badge badge-warning badge-pill">20</span>
											</div>
										</a>
										<!-- BEGIN Dropdown Submenu -->
										<div class="dropdown-submenu">
											<a href="#" class="dropdown-item">
												<div class="dropdown-icon">
													<i class="fa fa-project-diagram"></i>
												</div>
												<span class="dropdown-content">Project manager</span>
												<div class="dropdown-addon">
													<i class="caret"></i>
												</div>
											</a>
											<div class="dropdown-submenu-menu dropdown-submenu-left">
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Create project</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Delete project</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Ongoing project</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Completed project</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Urgent project</span>
												</a>
											</div>
										</div>
										<!-- END Dropdown Submenu -->
										<!-- BEGIN Dropdown Submenu -->
										<div class="dropdown-submenu">
											<a href="#" class="dropdown-item">
												<div class="dropdown-icon">
													<i class="fa fa-tasks"></i>
												</div>
												<span class="dropdown-content">Task manager</span>
												<div class="dropdown-addon">
													<i class="caret"></i>
												</div>
											</a>
											<div class="dropdown-submenu-menu dropdown-submenu-left">
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Show task</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Assign task</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Assign member</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Completed task</span>
												</a>
												<a href="#" class="dropdown-item">
													<i class="dropdown-bullet"></i>
													<span class="dropdown-content">Urgent task</span>
												</a>
											</div>
										</div>
										<!-- END Dropdown Submenu -->
										<a href="#" class="dropdown-item">
											<div class="dropdown-icon">
												<i class="fa fa-dollar-sign"></i>
											</div>
											<span class="dropdown-content">Invoice</span>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">
											<div class="dropdown-icon">
												<i class="fa fa-user-cog"></i>
											</div>
											<span class="dropdown-content">My Account</span>
										</a>
									</div>
								</li>
								<!-- END Dropdown -->
								<!-- BEGIN Dropdown -->
								<li class="nav-item dropdown">
									<a href="#" class="nav-link" data-toggle="dropdown">Features</a>
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-wide dropdown-menu-animated overflow-hidden">
										<div class="dropdown-row">
											<!-- BEGIN Dropdown Column -->
											
											<!-- END Dropdown Column -->
											<!-- BEGIN Dropdown Column -->
											<div class="dropdown-col">
												<h4 class="dropdown-header dropdown-header-lg">Features</h4>
												<!-- BEGIN Grid Nav -->
												<div class="grid-nav grid-nav-action">
													<div class="grid-nav-row">
														<a href="dashboard.php" class="grid-nav-item">
															<div class="grid-nav-icon">
																<i class="far fa-window-restore"></i>
															</div>
															<span class="grid-nav-content">Dashboard</span>
														</a>
														<a href="unfinished_tasks.php" class="grid-nav-item">
															<div class="grid-nav-icon">
																<i class="far fa-clipboard"></i>
															</div>
															<span class="grid-nav-content">Tasks</span>
														</a>
														<a href="complaints.php" class="grid-nav-item">
															<div class="grid-nav-icon">
																<i class="far fa-question-circle"></i>
															</div>
															<span class="grid-nav-content">Complaints</span>
														</a>
													</div>
													<div class="grid-nav-row">
														<a href="add-project.php" class="grid-nav-item">
															<div class="grid-nav-icon">
																<i class="far fa-images"></i>
															</div>
															<span class="grid-nav-content">Add Project</span>
														</a>
														<a href="add_task.php" class="grid-nav-item">
															<div class="grid-nav-icon">
																<i class="far fa-chart-bar"></i>
															</div>
															<span class="grid-nav-content">Add Task</span>
														</a>
														<a href="add_complaint.php" class="grid-nav-item">
															<div class="grid-nav-icon">
																<i class="far fa-bookmark"></i>
															</div>
															<span class="grid-nav-content">Add Complaint</span>
														</a>
													</div>
												</div>
												<!-- END Grid Nav -->
											</div>
											<!-- END Dropdown Column -->
											<!-- BEGIN Dropdown Column -->
											
											<!-- END Dropdown Column -->
										</div>
									</div>
								</li>
								<!-- END Dropdown -->
							</ul>
							<!-- END Nav -->
						</div>
						

					</div>
				</div>
				<!-- END Header Holder -->
				<!-- BEGIN Header Holder -->
				<div class="header-holder header-holder-desktop">
					<div class="header-container container-fluid">
						<h4 class="header-title"><?php echo $panel; ?></h4>
						<i class="header-divider"></i>
						<div class="header-wrap header-wrap-block justify-content-start">
							<!-- BEGIN Breadcrumb -->
							<div class="breadcrumb">
								<a href="dashboard.php" class="breadcrumb-item">
									<div class="breadcrumb-icon">
										<i data-feather="home"></i>
									</div>
									<span class="breadcrumb-text">Dashboard</span>
								</a>
							</div>
							<!-- END Breadcrumb -->
						</div>
						<div class="header-wrap">
							<!-- BEGIN Button Group -->
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-flat-primary active">
									<input type="radio" name="timeOption" id="timeOption1" checked="checked"> Today </label>
								<label class="btn btn-flat-primary">
									<input type="radio" name="timeOption" id="timeOption2"> Week </label>
								<label class="btn btn-flat-primary">
									<input type="radio" name="timeOption" id="timeOption3"> Month </label>
							</div>
							<!-- END Button Group -->
							<button class="btn btn-label-info btn-icon ml-2" id="fullscreen-trigger" data-toggle="tooltip" title="Toggle fullscreen" data-placement="left">
								<i class="fa fa-expand fullscreen-icon-expand"></i>
								<i class="fa fa-compress fullscreen-icon-compress"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- END Header Holder -->
				<!-- BEGIN Header Holder -->
				<div class="header-holder header-holder-mobile sticky-header" id="sticky-header-mobile">
					<div class="header-container container-fluid">
						<div class="header-wrap">
							<button class="btn btn-flat-primary btn-icon" data-toggle="aside">
								<i class="fa fa-bars"></i>
							</button>
						</div>
						<div class="header-wrap header-wrap-block justify-content-start px-3">
							<h4 class="header-brand">Panely</h4>
						</div>
						<div class="header-wrap">
							<button class="btn btn-flat-primary btn-icon" data-toggle="sidemenu" data-target="#sidemenu-todo">
								<i class="far fa-calendar-alt"></i>
							</button>
							<!-- BEGIN Dropdown -->
							<div class="dropdown ml-2">
								<button class="btn btn-flat-primary widget13" data-toggle="dropdown">
									<div class="widget13-text"> Hi <strong>User</strong>
									</div>
									<!-- BEGIN Avatar -->
									<div class="avatar avatar-info widget13-avatar">
										<div class="avatar-display">
											<i class="fa fa-user-alt"></i>
										</div>
									</div>
									<!-- END Avatar -->
								</button>
								<div class="dropdown-menu dropdown-menu-wide dropdown-menu-right dropdown-menu-animated overflow-hidden py-0">
									<!-- BEGIN Portlet -->
									<div class="portlet border-0">
										<div class="portlet-header bg-primary rounded-0">
											<!-- BEGIN Rich List Item -->
											<div class="rich-list-item w-100 p-0">
												<div class="rich-list-prepend">
													<!-- BEGIN Avatar -->
													<div class="avatar avatar-circle">
														<div class="avatar-display">
															<img src="../assets/images/avatar/blank.webp" alt="Avatar image">
														</div>
													</div>
													<!-- END Avatar -->
												</div>
												<div class="rich-list-content">
													<h3 class="rich-list-title text-white">Brielle Williamson</h3>
													<span class="rich-list-subtitle text-white">Software Engineer</span>
												</div>
												<div class="rich-list-append">
													<span class="badge badge-warning badge-square badge-lg">9+</span>
												</div>
											</div>
											<!-- END Rich List Item -->
										</div>
										<div class="portlet-body p-0">
											<!-- BEGIN Grid Nav -->
											<div class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
												<div class="grid-nav-row">
													<a href="#" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-address-card"></i>
														</div>
														<span class="grid-nav-content">Profile</span>
													</a>
													<a href="#" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-comments"></i>
														</div>
														<span class="grid-nav-content">Messages</span>
													</a>
													<a href="#" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-clone"></i>
														</div>
														<span class="grid-nav-content">Activities</span>
													</a>
												</div>
												<div class="grid-nav-row">
													<a href="#" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-calendar-check"></i>
														</div>
														<span class="grid-nav-content">Tasks</span>
													</a>
													<a href="#" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-sticky-note"></i>
														</div>
														<span class="grid-nav-content">Notes</span>
													</a>
													<a href="#" class="grid-nav-item">
														<div class="grid-nav-icon">
															<i class="far fa-bell"></i>
														</div>
														<span class="grid-nav-content">Notification</span>
													</a>
												</div>
											</div>
											<!-- END Grid Nav -->
										</div>
										<div class="portlet-footer portlet-footer-bordered rounded-0">
											<button class="btn btn-label-danger">Sign out</button>
										</div>
									</div>
									<!-- END Portlet -->
								</div>
							</div>
							<!-- END Dropdown -->
						</div>
					</div>
				</div>
				<!-- END Header Holder -->
				<!-- BEGIN Header Holder -->
				<div class="header-holder header-holder-mobile">
					<div class="header-container container-fluid">
						<div class="header-wrap header-wrap-block justify-content-start w-100">
							<!-- BEGIN Breadcrumb -->
							<div class="breadcrumb">
								<a href="../ltr/index.html" class="breadcrumb-item">
									<div class="breadcrumb-icon">
										<i data-feather="home"></i>
									</div>
									<span class="breadcrumb-text">Dashboard</span>
								</a>
							</div>
							<!-- END Breadcrumb -->
						</div>
					</div>
				</div>
				<!-- END Header Holder -->
			</div>