		<?php echo $this->Form->create('Reservation'); 
			$this->Form->inputDefaults(array(
			        'label' => false,
			        'div' => false,
			        'class' => 'form-control'
			    )
			);
		?>
		<div class = "panel panel-primary">
			<div class = "panel-heading"><?php echo $facilityType['FacilityType']['name']; ?></br>Availability</div>
			<div class = "panel-body" >
				<div class="alert alert-info"></br>
					<div class="row">
						<div class="col-md-3 .col-md-offset-3" >
							<label>Choose facility: </label>
						</div>
						<center></br>
	  					<div class="col-md-3 .col-md-offset-3" >
							<label>Rentable Spaces: </label>
							<?php echo $this->Form->input('facility_id'); ?>
						</div>
						<div class="col-md-3 .col-md-offset-3">
						  	<label>Other Facilities: </label>
						  	<?php echo $this->Form->input('is_other_facility', array('options' => array('Yes','No'),'empty' => '---')); ?>
						</div>
						</center>
					</div>			
					</br>
				</div>
			</div>
	 	</div>
		<div class = "panel panel-primary">
			<div class = "panel-heading">
				<?php echo $this->Html->image('calendarlogo.png', array('alt' => 'CakePHP', 'witdh' => 77, 'height' => 76)); ?> Calendar
			</div>
			<div id='full-calendar' class = "panel-body">
			</div>
		</div>
		<div class = "panel panel-primary">
			<div class = "panel-heading"><?php echo $facilityType['FacilityType']['name']; ?></br>Reservation Form</div>
			<div class="panel-body">
			<div class="row">
				<div class="col-md-6">
					<div class = "alert alert-info">
						<!--<form method="post" action="" class="form-horizontal" role="form">-->
						<fieldset>
							<div class="row">
								<div class = "col-md-4">
									<label>Title of Activity:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('name'); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>Nature of Activity:</label>
								</div>
								<div class = "col-md-6">
								  	<?php echo $this->Form->input('activity_id'); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>Date of Activity:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('activity_date', array('type' => 'text', 'id' => 'example1')); ?>
								</div>
							</div>
							<br/><b><hr></b>
							<div class="row">
								<div class = "col-md-4">
									<label>Name of Organizer:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('organizer'); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>Authorized Representative:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('authorized_person'); ?>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class = "col-md-4">
									<label>Position:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('position'); ?>
								</div>
							</div>
							<br/>
							<hr></hr>
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
									<label>Email Address:</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('email'); ?>
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
								<div class = "col-md-4">
									<label>No. of person</label>
								</div>
								<div class = "col-md-6">
									<?php echo $this->Form->input('headcount'); ?>
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
						<!--</form>-->
					</div>
				</div>
				<div class="col-md-6">
					<div class = "alert alert-info">
						<center>Use Cost</center>
						</br>
						<div id='use_cost'>
						<?php if (!empty($rentalPromos)) { ?>
							<?php foreach($rentalPromos as $rentalPromo) { ?>
								<div>Facility: <?php echo $rentalPromo['Facility']['name']; ?></div>
								<div>With Aircon: <?php echo !empty($rentalPromo['RentalPromo']['aircon']) ? 'Yes' : 'No'; ?></div>
								<div>Cost per <?php echo $rentalPromo['RentalPromo']['aircon_count']; ?> Hour/s: <?php echo $rentalPromo['RentalPromo']['aircon_cost']; ?></div>
								<div>Cost per succeeding <?php echo $rentalPromo['RentalPromo']['aircon_succeeding_count']; ?> Hour/s: <?php echo $rentalPromo['RentalPromo']['aircon_succeeding_cost']; ?></div>
								<strong><hr></strong>
							<?php } ?>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		/*
		$this->Js->get('#ReservationFacilityId')->event('change', 
			$this->Js->request(array(
					'controller'=>'rental_promos',
					'action'=>'get_rental_promos'
				), array(
					'update'=>'#use_cost',
					'async' => true,
					'method' => 'post',
					'dataExpression'=>true,
					'data'=> $this->Js->serializeForm(array(
						'isForm' => true,
						'inline' => true
				))
			))
		);
		
		//$this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add', 'plugin' => 'full_calendar'));
		*/
	?>