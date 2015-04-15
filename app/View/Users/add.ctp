		<?php echo $this->Form->create('User'); 
			$this->Form->inputDefaults(array(
			        'label' => false,
			        'div' => false,
			        'class' => 'form-control'
			    )
			);
		?>
		<div class = "panel panel-primary">
			<div class = "panel-heading">User Registration</div>
			<div class="panel-body">
				<div class="row">
					<div class = "alert alert-info">
						<fieldset>
							<div class="row">
								<div class = "col-md-4">
									<label>Username:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('username'); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>Password:</label>
								</div>
								<div class = "col-md-6">
								  	<?php echo $this->Form->input('password'); ?>
								</div>
							</div>
							<br/>
							<div class="row"><hr></div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>First Name:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('first_name'); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>Middle Name:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('middle_name'); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>Last Name:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('last_name'); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>Email:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('email'); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>St/Brgy:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('address'); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>City</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('city_id', array('empty' => 'select one')); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>Mobile Number:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('mobile_number'); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>Landline or Fax:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('telephone_number'); ?>
								</div>
							</div>
							<br/>								  
							<div class="row">
								<div class = "col-md-4"></div>
								<div class = "col-md-6">
									<div class="span6 pull-right" style="text-align:right">
								 		<input type = "submit" value ="Submit" class="btn btn-primary btn-lg">
								 	</div>
								</div>
							</div>
							<br/>
						</fieldset>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>

