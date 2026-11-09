<?php $title_for_layout = 'Se connecter'; $contact = $this->request('Dashboards', 'contact'); ?>

<div class="login-card card-block auth-body mr-auto ml-auto">
	<form action="<?php echo Router::url('index.php/users/login'); ?>" method="post" class="md-float-material">
		<div class="text-center">
			<img src="<?= BASE_URL."/img/logo/{$contact->file}"; ?>" width="100px" alt="logo.png">
		</div>
		<div class="auth-box">
			<div class="row m-b-20">
				<div class="col-md-12">
					<h3 class="text-left txt-primary">Se connecter</h3>
				</div>
			</div>
			<hr/>
			<?= $this->Form->input('login','Identifiant',array('class' => 'form-control m-b-10', 'placeholder' => 'Compte utilisateur...' )); ?>
			<span class="md-line"></span>
			<?php echo $this->Form->input('password','Mot de passe',array('class' => 'form-control m-b-10','type' => 'password', 'placeholder' => 'Mote de passe utilisateur...')); ?>
			<span class="md-line"></span>
			<div class="row m-t-30">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">S'identifier</button>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-md-10">
					<p class="text-inverse text-left m-b-0">Merci et profitez de notre site Web.</p>
					<p class="text-inverse text-left"><b>Zone d'administration,</b> <a href="<?= Router::url(''); ?>">Retournez au site</a></p>
				</div>
				<div class="col-md-2">
					<img src="<?= BASE_URL."/img/logo/{$contact->file}"; ?>" width="45" alt="small-logo.png">
				</div>
			</div>
		</div>
	</form>
	<!-- end of form -->
</div>