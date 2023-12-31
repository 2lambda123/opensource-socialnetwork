<?php
	$hide_loggedin = '';
	if(ossn_isLoggedin()){		
		$hide_loggedin = "d-none d-lg-block";
	}
?>
<!-- ossn topbar -->
<div class="topbar">
	<div class="container-fluid">
		<div class="row">
			<div class="col col-lg-2 left-side left">
				<?php if(ossn_isLoggedin()){ ?>
				<div class="topbar-menu-left">
					<li id="sidebar-toggle" data-toggle='0'>
						<a role="button" data-bs-target="#"> <i class="fa fa-th-list"></i></a>
					</li>
				</div>
				<?php } ?>
			</div>
			<div class="col-lg-7 site-name text-center <?php echo $hide_loggedin;?>">
				<span><a href="<?php echo ossn_site_url();?>"><?php echo ossn_site_settings('site_name');?></a></span>
			</div>
			<div class="col-9 col-lg-3 text-right right-side">
				<div class="topbar-menu-right">
					<ul>
					<li class="ossn-topbar-dropdown-menu">
						<div class="dropdown">
						<?php
							if(ossn_isLoggedin()){						
								echo ossn_plugin_view('output/url', array(
									'role' => 'button',
									'data-bs-toggle' => 'dropdown',
									'data-bs-target' => '#',
									'text' => '<i class="fa fa-sort-down"></i>',
								));									
								echo ossn_view_menu('topbar_dropdown'); 
							}
							?>
						</div>
					</li>                
					<?php
						if(ossn_isLoggedin()){
							echo ossn_plugin_view('notifications/page/topbar');
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ./ ossn topbar -->