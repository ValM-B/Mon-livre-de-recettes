<div class="container my-4">
   <div class="row justify-content-center">
	<div class="col-6">
		<h2>Se connecter</h2>
		
			<?php
			if(isset($viewData['errorList'])){
				

				foreach ($errorList as $error) {?>
					<div class="alert alert-danger" role="alert">
						<?= $error ?>
					</div>
			<?php
			
				}
			}
			
			?>
		
		<form action="" method="POST" class="mt-5 form-category">
			<div class="mb-3 email">
				<label for="email" class="form-label">E-mail</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="votrenom@email.com">
			</div>
			<div class="mb-3 password">
				<label for="password" class="form-label">Mot de passe</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" >
			</div>
			
			<div class="d-grid gap-2">
				<button type="submit" class="btn btn-primary mt-5">Se connecter</button>
			</div>
		</form>
	</div>	
	</div>
</div>