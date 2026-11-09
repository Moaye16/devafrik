<?php
		$title_for_layout = 'Page introuvable';
?>
<?php if(!$this->Session->isLogged() || $this->Session->user('role') != 'admin'){ ?>
<!-- full Title -->
<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3"> 404 </h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.html">Accueil</a>
					</li>
					<li class="breadcrumb-item active">404</li>
				</ol>
			</div>
		</div>
	</div>
	<?php } ?>
<!-- Page Content -->
<div class="container">
		<div class="error-contents">
			<div class="error-img">
				<img class="img-fluid" src="<?php echo Router::webroot('img/404.png'); ?>" alt="" />
			</div>
			<h3>Oops! Cette page est introuvable.</h3>
			<p>La page recherchée est introuvable. Vous pouvez consulter notre <a href="<?php echo Router::webroot(''); ?>">Page d'accueil</a>.</p>
            <p><?= $message; ?></p>
			<a class="btn btn-success" href="<?php echo Router::webroot(''); ?>">Retour à la page d'accueil </a>
		</div>
		<!-- /.jumbotron -->
</div>
