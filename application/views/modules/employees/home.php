<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo site_url()?>"><?php echo $this->lang->line('dashboard');?></a>
		</li>
		<li class="breadcrumb-item active"><?php echo $this->lang->line('employees');?></li>
	</ol>
	<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fa fa-table"></i> <?php echo $this->lang->line('emp_manage');?>
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
							<th><?php echo $this->lang->line('avatar');?></th>
							<th><?php echo $this->lang->line('fullname');?></th>
							<th><?php echo $this->lang->line('email');?></th>
							<th><?php echo $this->lang->line('birthday');?></th>
							<th><?php echo $this->lang->line('phone');?></th>
							<th><?php echo $this->lang->line('language');?></th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php if($obj): foreach($obj as $key=>$row):
							$hinh = empty($row->avatar)?base_url('assets/public/avatar/no-avatar.png'):base_url('assets/public/avatar/'.$row->avatar);
						?>
						<tr>
							<td><?php echo $key+1;?></td>
							<td><div class="avatar" style="background-image:url('<?php echo $hinh?>')"></div></td>
							<td><?php echo $row->fullname;?></td>
							<td><?php echo $row->email;?></td>
							<td><?php echo date('d/m/Y',strtotime($row->birthday));?></td>
							<td><?php echo $row->phone;?></td>
							<td>&nbsp;</td>
							<td>
								<a href="<?php echo site_url('color?act=upd&id='.$row->id);?>"><i class="fa fa-edit"></i></a>
								<a href="<?php echo site_url('color?act=del&id='.$row->id);?>"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach; endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>