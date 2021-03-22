<div id="body-container">
	<div class="container">
		<div class="page-header form-header">
			<h3><?php echo $title?></h3>
		</div>
		<?php
			 $msg_err = $this->session->flashdata('admin_save_error');
			 $msg_succes = $this->session->flashdata('admin_save_success');
		?>
		<?php if(!empty($msg_err)): ?>
		<div class="alert alert-danger">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<strong>Error!</strong> <?php echo $msg_err;?>
		</div>
		<?php endif; ?>
		<?php if(!empty($msg_succes)): ?>
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<strong>Succes!</strong> <?php echo $msg_succes;?>
		</div>
		<?php endif; ?>
		<form  method="post" action="<?php echo site_url("kepribadian/save")?>"  >
			<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data->id_kepribadian; ?>" >
			<div class="panel panel-default form-master">
			  <div class="panel-heading">
			  		<div class="row">
			  			<div class="col-md-4  pull-right">
			  				<div class="form-action pull-right">
			     				<button type="submit" class="btn btn-success" name="action" value="save">Save</button>
								<button type="submit" class="btn btn-success" name="action" value="saveexit">Save & Exit</button>
			     				<button type="reset" class="btn btn-warning">Reset</button>
			     				<a  href="<?php echo site_url("kepribadian")?>" class="btn btn-danger">Cancel</a>
			     			</div>
			  			</div>
			  		</div>
			  </div>
			  <div class="panel-body">
				<div class="form-horizontal" >
					<div class="form-group">
						<label for="id_kepribadian" class="col-sm-2 control-label">ID Kepribadian</label>
						<div class="col-sm-4">
						  <input type="text" class="form-control" id="id_kepribadian" placeholder="input id kepribadian" name="id_kepribadian" value="<?php echo $data->id_kepribadian == "" ? $data->autocode : $data->id_kepribadian; ?>"  readonly >
						</div>
					</div>
					<div class="form-group">
						<label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>
						<div class="col-sm-4">
						  <input type="text" class="form-control" id="deskripsi" placeholder="input deskripsi" name="deskripsi" required="required" value="<?php echo $data->deskripsi; ?>"  >
						</div>
					</div>
				</div>
			  </div>
			  <div class="panel-footer">
			  
			  </div>
			</div>
		</form>
	</div>
</div>

