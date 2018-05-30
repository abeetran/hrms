<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo site_url()?>"><?php echo $this->lang->line('dashboard');?></a>
		</li>
		<li class="breadcrumb-item active"><?php echo $this->lang->line('companyinfo');?></li>
	</ol>
	<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fa fa-table"></i> <?php echo $this->lang->line('companyinfo');?>
			<span style="float:right">
				<a href="<?php echo site_url('color?act=upd');?>"><i class="fa fa-plus"></i> <?php echo $this->lang->line('add');?></a>
			</span>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th><?php echo $this->lang->line('logo');?></th>
							<th><?php echo $this->lang->line('companyname');?></th>
							<th><?php echo $this->lang->line('tax');?></th>
							<th><?php echo $this->lang->line('bussiness_domain');?></th>
							<th><?php echo $this->lang->line('phone');?></th>
							<th><?php echo $this->lang->line('total_employees');?></th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					<?php if($obj): foreach($obj as $key=>$row):
						$logo = empty($row->logo)?base_url('assets/public/no-image.jpg'):base_url('assets/public/logo/'.$row->logo);
					?>
						<tr>
							<td><?php echo $key+1?></td>
							<td><div class="avatar" style="background-image:url('<?php echo $logo;?>')"></div></td>
							<td><?php echo $row->company?></td>
							<td><?php echo $row->tax?></td>
							<td><?php echo $row->bussiness_domain?></td>
							<td><?php echo $row->primary_phone?></td>
							<td><?php echo $row->total_employees?></td>
							<td>
								<a href="<?php echo site_url('organization/company?act=upd&id='.$row->id.'&token='.$system->token);?>"><i class="fa fa-edit"></i></a>
								<a href="<?php echo site_url('organization/company?act=locked&id='.$row->id.'&token='.$system->token);?>" style="margin:0 0.5rem"><i class="fa fa-lock"></i></a>
							</td>
						</tr>
					<?php endforeach; endif;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>