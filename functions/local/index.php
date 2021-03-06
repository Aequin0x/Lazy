			<!-- NEW PROJECT SECTION -->
			<p>You seem to be in a tunnel, there's no network but you can still create a tiny lazy project even if it's not recommended</p>

			<h2>Create a new project</h2>
			<hr>
			<form action="<?php echo $url ?>functions/local/local.php" method="POST" id='form-local'>
				<label for='id_name'>Project name</label>
				<input type="text" id="id_name" name="project_name" />

				<h4>Some basics frameworks?</h4>
				<input type="radio" value='yes' name='link' id='yes' /><label for="yes">Yes!</label>
				<input type="radio" value='no' name='link' id='no' checked /><label for="no">No, thanks</label><br/>
				<div class="framework_check">
					<input type="checkbox" value='bootstrap' name='framework[]' id='bootstrap' /><label for="bootstrap">Bootstrap</label><br/>
					<input type="checkbox" value='jquery' name='framework[]' id='jquery' /><label for="jquery">JQuery</label><br/>
				</div>
					
				<h4>Do you need some content?</h4>
				<input type="radio" value='yis' name='content' id='yis' /><label for="yis">Yis, plis</label>
				<input type="radio" value='nope' name='content' id='nope' checked /><label for="nope">Nope, thanks</label><br/>
				<div class="include_check">
					<input type="checkbox" value='form' name='include[]' id='form' /><label for="form">Form</label><br/>
					<input type="checkbox" value='form2' name='include[]' id='form2' /><label for="form2">Form2</label><br/>
				</div>
				<input type="submit" value="Create" name='btn_create'>
			</form>

			<p><em>When you have a network connexion you should generate a composer.json</em></p>

			<!-- PROJECT LIST SECTION -->
			<h2>Your projects</h2>
			<hr>			
			<?php getListDir(array(array())); ?>
		</div>
	</div>
	<div class="clear"></div>
	<!-- CUSTOM JS -->
	<script src="<?php echo $url ?>js/script_local.js"></script>