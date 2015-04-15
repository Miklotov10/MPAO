		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
			<div class="panel panel-info" >
				<div class="panel-heading">
					<div class="panel-title">Sign In</div>
					<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
				</div>     
				<div style="padding-top:30px" class="panel-body" >
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->Form->create('User', array('action' => 'login')); 
						$this->Form->inputDefaults(array(
						        'label' => false,
						        'div' => false,
						        'class' => 'form-control'
						    )
						);
					?>
					<fieldset>
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<?php echo $this->Form->input('username'); ?>
					</div>
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<?php echo $this->Form->input('password'); ?></br>
					</div>
					</fieldset>
					<div style="margin-top:10px" class="form-group">
						<div class="col-sm-12 controls">
							<input type="submit" class="btn btn-success" value="Login">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12 control"></br>
							<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >Don't have an account! <a href="add">Sign Up Here</a></div>
						</div>
					</div>    
					<?php echo $this->Form->end(); ?>
				</div>                     
			</div>  
		</div>

