<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
	<a class="navbar-brand" href="index.html">OBI</a>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
			<li class="nav-item <?php echo $uri == ''?'active':'';?>" data-toggle="tooltip" data-placement="right" title="Dashboard">
				<a class="nav-link" href="<?php echo site_url('');?>">
				<i class="fa fa-fw fa-dashboard"></i>
				<span class="nav-link-text"><?php echo $this->lang->line('dashboard');?></span>
				</a>
			</li>
			<!-- <li class="nav-item <?php echo $uri == 'orders'?'active':'';?>" data-toggle="tooltip" data-placement="right" title="Components">
				<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
				<i class="fa fa-fw fa-users"></i>
				<span class="nav-link-text"><?php echo $this->lang->line('users');?></span>
				</a>
				<ul class="sidenav-second-level collapse" id="collapseComponents">
					<li>
						<a href="orders"><?php echo $this->lang->line('users');?></a>
					</li>
					<li>
						<a href="orders?act=upd"><?php echo $this->lang->line('users_group');?></a>
					</li>
					<li>
						<a href="orders?act=upd"><?php echo $this->lang->line('permission');?></a>
					</li>
				</ul>
			</li> -->
			<li class="nav-item <?php echo $uri == 'employees'?'active':'';?>" data-toggle="tooltip" data-placement="right" title="Link">
				<a class="nav-link" href="<?php echo site_url('employees')?>">
				<i class="fa fa-fw fa-users"></i>
				<span class="nav-link-text"><?php echo $this->lang->line('users');?></span>
				</a>
			</li>			
		</ul>
		<ul class="navbar-nav sidenav-toggler">
			<li class="nav-item">
				<a class="nav-link text-center" id="sidenavToggler">
				<i class="fa fa-fw fa-angle-left"></i>
				</a>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-fw fa-table"></i> <?php echo $this->lang->line('configs');?>
				</a>
				<div class="dropdown-menu" aria-labelledby="messagesDropdown">
					<a class="dropdown-item" href="<?php echo site_url('');?>"><?php echo $this->lang->line('users_group');?></a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo site_url('');?>"><?php echo $this->lang->line('permission');?></a>					
				</div>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-fw fa-table"></i> <?php echo $this->lang->line('organization');?>
				</a>
				<div class="dropdown-menu" aria-labelledby="messagesDropdown">
					<a class="dropdown-item" href="<?php echo site_url('organization/company');?>"><?php echo $this->lang->line('company');?></a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo site_url('');?>"><?php echo $this->lang->line('branch');?></a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo site_url('');?>"><?php echo $this->lang->line('department');?></a>					
				</div>
			</li>
		</ul>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a href="javascript:void(0)" class="nav-link dropdown-toggle mr-lg-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="<?php echo $langimg[$_SESSION['language']];?>" style="width:35px;"/>
				</a>
				<div class="dropdown-menu" aria-labelledby="messagesDropdown">
					<a class="dropdown-item" href="<?php echo site_url('home/setlanguage/en');?>">
						<img src="<?php echo $langimg['en'];?>" style="width:35px;"/>&nbsp;<?php echo $this->lang->line('en');?>	
					</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo site_url('home/setlanguage/vi');?>">
						<img src="<?php echo $langimg['vi'];?>" style="width:35px;"/>&nbsp;<?php echo $this->lang->line('vi');?>
					</a>				
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="modal" data-target="#exampleModal">
				<i class="fa fa-fw fa-sign-out"></i>Logout</a>
			</li>
		</ul>
	</div>
	</nav>