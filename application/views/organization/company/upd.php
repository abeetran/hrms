<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo site_url()?>"><?php echo $this->lang->line('dashboard');?></a>
		</li>
		<li class="breadcrumb-item active"><?php echo $this->lang->line('update').'&nbsp;'.$this->lang->line('companyinfo');?></li>
	</ol>
	<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fa fa-table"></i> <?php echo $this->lang->line('update').'&nbsp;'.$this->lang->line('companyinfo');?>
		</div>
		<div class="card-body" id="updated-info">
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('companyname');?></label>&nbsp;<span class="text-danger">*</span>
						<input type="text" name="company" value="<?php echo $obj?$obj->company:'' ?>" placeholder="<?php echo $this->lang->line('companyname');?>" class="form-control" required>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('tax');?></label>
						<input type="text" name="tax" value="<?php echo $obj?$obj->tax:'' ?>" placeholder="<?php echo $this->lang->line('tax');?>" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('website');?></label>
						<input type="text" name="website" value="<?php echo $obj?$obj->website:'' ?>" placeholder="<?php echo $this->lang->line('website');?>" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('com_stated');?></label>
						<input type="date" name="started_on" value="<?php echo $obj?$obj->started_on:'' ?>" placeholder="<?php echo $this->lang->line('com_stated');?>" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('total_employees');?></label>&nbsp;<span class="text-danger">*</span>
						<select name="total_employees" class="form-control">
							<?php foreach($total_employees as $t=>$te){?>
							<option value="<?php echo $t?>" <?php echo $obj&&$t==$obj->total_employees?'selected':''; ?> ><?php echo $te?></option>
							<?php }?>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('primary_phone');?></label>
						<input type="text" name="primary_phone" value="<?php echo $obj?$obj->primary_phone:'' ?>" placeholder="<?php echo $this->lang->line('com_stated');?>" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('secondary_phone');?></label>
						<input type="text" name="secondary_phone" value="<?php echo $obj?$obj->secondary_phone:'' ?>" placeholder="<?php echo $this->lang->line('secondary_phone');?>" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('hotline');?></label>
						<input type="text" name="hotline" value="<?php echo $obj?$obj->hotline:'' ?>" placeholder="<?php echo $this->lang->line('hotline');?>" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('fax');?></label>
						<input type="text" name="fax" value="<?php echo $obj?$obj->fax:'' ?>" placeholder="<?php echo $this->lang->line('fax');?>" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('cities');?></label>&nbsp;<span class="text-danger">*</span>
						<select name="cities" class="form-control">
							<?php foreach($cities as $c=>$city){?>
							<option value="<?php echo $city->id?>" <?php echo ($obj&&$city->id == $obj->cities)?'selected':'';?> ><?php echo $city->city?></option>
							<?php }?>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('districts');?></label>&nbsp;<span class="text-danger">*</span>
						<select name="districts" class="form-control">
							<?php if($districts):foreach($districts as $c=>$district){?>
							<option value="<?php echo $district->id?>" <?php echo ($obj&&$district->id == $obj->districts)?'selected':'';?> ><?php echo (int)$district->districts>0?$this->lang->line('dist').'&nbsp;'.$district->districts:$district->districts;?></option>
							<?php } endif;?>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label><?php echo $this->lang->line('address');?></label>&nbsp;<span class="text-danger">*</span>
						<input type="text" name="address" value="<?php echo $obj?$obj->address:'' ?>" placeholder="<?php echo $this->lang->line('address');?>" class="form-control" required>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>