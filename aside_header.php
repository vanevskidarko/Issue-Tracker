<div class="aside">
			<div class="aside-header">
				<h3 class="aside-title"><?php echo 'Hello ' .$_SESSION['firstname']; ?></h3>
				<div class="aside-addon">
					<button class="btn btn-label-primary btn-icon btn-lg" data-toggle="aside">
						<i class="fa fa-times aside-icon-minimize"></i>
						<i class="fa fa-thumbtack aside-icon-maximize"></i>
					</button>
				</div>
			</div>
			<div class="aside-body" data-simplebar="data-simplebar">
				<!-- BEGIN Menu -->
				<div class="menu">
					<div class="menu-item">
						<a href="dashboard.php" data-menu-path="/ltr/index.html" class="menu-item-link">
							<div class="menu-item-icon">
								<i class="fa fa-desktop"></i>
							</div>
							<span class="menu-item-text">Dashboard</span>
							<div class="menu-item-addon">
								<span class="badge badge-success">New</span>
							</div>
						</a>
					</div>
					<!-- BEGIN Menu Section -->
					<div class="menu-section">
						<div class="menu-section-icon">
							<i class="fa fa-ellipsis-h"></i>
						</div>
						<h2 class="menu-section-text">Elements</h2>
					</div>
					<!-- END Menu Section -->
					<div class="menu-item">
						<button class="menu-item-link menu-item-toggle">
							<div class="menu-item-icon">
								<i class="fa fa-palette"></i>
							</div>
							<span class="menu-item-text">Complaints</span>
							<div class="menu-item-addon">
								<i class="menu-item-caret caret"></i>
							</div>
						</button>
						<!-- BEGIN Menu Submenu -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="complaints.php" data-menu-path="complaints.php" class="menu-item-link">
									<i class="menu-item-bullet"></i>
									<span class="menu-item-text">All Complaints</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="add_complaint.php" data-menu-path="add_complaint.php" class="menu-item-link">
									<i class="menu-item-bullet"></i>
									<span class="menu-item-text">File A Complaint</span>
								</a>
							</div>


						</div>
						<!-- END Menu Submenu -->
					</div>
					<?php 
						$isAdmin = $_SESSION['isAdmin'];
						if($isAdmin == 1){
							echo '
							<div class="menu-item">
							<button class="menu-item-link">
								<div class="menu-item-icon">
									<i class="fa fa-adjust"></i>
								</div>
								<div class="menu-item">
									<a href="users.php" data-menu-path="users.php" class="menu-item-link">
										<span class="menu-item-text">Users</span>
									</a>
								<div class="menu-item-addon">
								</div>
							</button>
						</div>
							';
						} else if($isAdmin == 0){
							echo "  ";
						}
					?>
					<div class="menu-item">
						<button class="menu-item-link menu-item-toggle">
							<div class="menu-item-icon">
								<i class="fa fa-icons"></i>
							</div>
							<span class="menu-item-text">Tasks</span>
							<div class="menu-item-addon">
								<i class="menu-item-caret caret"></i>
							</div>
						</button>
						<!-- BEGIN Menu Submenu -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="add_task.php" data-menu-path="add_task.php" class="menu-item-link">
									<i class="menu-item-bullet"></i>
									<span class="menu-item-text">Add A Task</span>
								</a>
							</div>
							<div class="menu-item">
								<a href="unfinished_tasks.php" data-menu-path="unfinished_tasks.php" class="menu-item-link">
									<i class="menu-item-bullet"></i>
									<span class="menu-item-text">Unfinished Tasks</span>
								</a>
							</div>
						</div>
						<!-- END Menu Submenu -->
					</div>
					<div class="menu-item">
						<button class="menu-item-link menu-item-toggle">
							<div class="menu-item-icon">
								<i class="fa fa-window-restore"></i>
							</div>
							<a href="projects.php">
								
							<span class="menu-item-text text-white">Projects</span>
							<div class="menu-item-addon">
							<i class="menu-item-bullet"></i>

							</a>

							</div>
						</button>
						<div class="menu-submenu">


</div>
							<div class="menu-submenu">
							<div class="menu-item">
							<button class="menu-item-link menu-item-toggle">
							<div class="menu-item-icon">
								<i class="fa fa-window-restore"></i>
							</div>
							<a href="add-project.php">
							<span class="menu-item-text text-white">Add A Project</span>
							
							<div class="menu-item-addon">
							</a>

							</div>

						</button>
							</div>
						</div>
						<!-- BEGIN Menu Submenu -->

						<!-- END Menu Submenu -->
					</div>

					<div class="menu-item">
						<button class="menu-item-link menu-item-toggle">
							<div class="menu-item-icon">
								<i class="fa fa-window-restore"></i>
							</div>
							<a href="logout.php" data-menu-path="logout.php">
							<span class="menu-item-text">Logout</span>

							</a>
							<div class="menu-item-addon">
							</div>
						</button>
						<!-- BEGIN Menu Submenu -->

						<!-- END Menu Submenu -->
					</div>

					<!-- BEGIN Menu Section -->

					<!-- END Menu Section -->
				</div>
				<!-- END Menu -->
			</div>
		</div>