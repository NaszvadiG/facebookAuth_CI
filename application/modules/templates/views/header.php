<header class="main-header">
	<a href="#" class="logo">
		<span class="logo-mini"><i class="fa fa-gears"></i></span>
		<span class="logo-lg"><b>C</b>PANEL</span>
	</a>
	
	<nav class="navbar navbar-static-top">
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
	
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="glyphicon glyphicon-user"></i>
						<span>
							<?=$this->session->userdata('userData')['first_name'].' '.$this->session->userdata('userData')['last_name'];?>  
							<i class="caret"></i>
						</span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="" alt="" />
							<p><?=$this->session->userdata('userData')['first_name'].' '.$this->session->userdata('userData')['last_name'];?>
								<small><?=site_url();?></small>
							</p>
						</li>
						<li class="user-footer">
							<div class="pull-left">
								<a href="<?=site_url('dashboard');?>" class="btn btn-default btn-flat"><i class="fa fa-user"></i> Profile</a>
							</div>
							<div class="pull-right">
								<a href="<?=site_url('users/login/logout')?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign Out</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>

<?=$this->load->view('templates/sidebar');?>