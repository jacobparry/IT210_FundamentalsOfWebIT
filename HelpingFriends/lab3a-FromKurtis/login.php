<!-- MY MODAL FORM -->

			<div id="Login_Modal" class="modal fade" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header disableButton();">
		    		
		    		<h3>You are not logged in!</h3>
		  			</div>
		  				<div class="modal-body">
		  					<form action = "contact_me.php" method = "POST">
		  						<label> Please enter your information: </label>
		  						<?php
		  						echo $_SESSION["error"];
		  						?>
		    				
		    				  	<div class = "pull-right">
		    					<input id="Username" type="text" name = "Username" value = "" placeholder="[Enter Username here]":>
		    					<input id="Password" type="password" name = "Password" value = "" placeholder="[Enter Password here]":>
		  				    	</div>
		  					
		  				</div>
		  				
  				<div class="modal-footer">
    			<button type = "Submit" class="btn btn-success" >Log In</button>
    			</form>
  				</div>
			</div>

			<!-- END OF MY MODAL FORM -->

			<?php

			function request_log_in()
			{
				if($_SESSION["Logged_In"]==1)
				{
					echo " You are currently Logged In";
					return;
				}
				
				else
				{
					?>
					<script type="text/javascript">
						$('#Login_Modal').modal('show');
						</script>
						<?php
				}
			}
			?>

			