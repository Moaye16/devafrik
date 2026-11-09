<?php
		$title_for_layout = 'Contactez-nous';

?> 

<div class="colorlib-contact" >
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Contact</span>
							<h2 class="colorlib-heading">Contactez-nous !</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="mailto:<?= $contact->email; ?>"><?= $contact->email; ?></a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p><?= $contact->adresse_geo; ?></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://"><?= $contact->fixe."<br/>".$contact->mobile ; ?></a></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
									<form method="POST" action="<?php echo Router::url('index.php/contactez-nous/'); ?>">
										<div class="form-group">
											<?= $this->Form->input('nom','Nom et Prénoms',array('class' => 'form-control','placeholder' => 'Entrer votre nom et prénoms...')); ?>
										</div>
										<div class="form-group">
											<?= $this->Form->input('contact','Contact',array('type' => 'tel', 'class' => 'form-control', 'placeholder' => 'Entrer votre contact...')); ?>
										</div>
										<div class="form-group">
											<?= $this->Form->input('email','Email',array('type' => 'email', 'class' => 'form-control', 'placeholder' => 'Entrer votre email...')); ?>
										</div>
										<div class="form-group">
										<?= $this->Form->input('sujet','Sujet',array('class' => 'form-control','placeholder' => 'Entrer votre sujet...')); ?>
										</div>
										<div class="form-group">
											<?php echo $this->Form->input('message','Message',array('type' => 'textarea', 'class' => 'form-control',  'cols' => 30, 'rows' => 7,'placeholder' => 'Entrer votre message...')); ?>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-send-message" value="Envoyez votre message">
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>

<div class="map-main">
	<!-- Embedded Google Map -->
		<iframe src="<?= $contact->googlemap; ?>" width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" loading="lazy"></iframe>
</div>
