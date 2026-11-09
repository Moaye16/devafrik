<?php $title_for_layout = 'Inscription'; ?>

  <div class="contact-main">
		<div class="container">
			<!-- Content Row -->
		  <div class="row">
			<!-- Map Column -->
				<div class="col-lg-6 mb-4 contact-left py-4">
					<h3>INSCRIPTION</h3>
                        <form action="<?php echo Router::url('users/signup/'.$id); ?>" method="post" name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                                <div class="controls">
                                    <?php echo $this->Form->input('id','hidden'); ?>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <?php echo $this->Form->input('firstname','Nom',array('class' => 'form-control', 'placeholder' => 'NOM' )); ?>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <?php echo $this->Form->input('lastname','Prénoms',array('class' => 'form-control', 'placeholder' => 'PRENOMS' )); ?>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <?php echo $this->Form->input('login','Identifiant',array('class' => 'form-control', 'placeholder' => 'IDENTIFIANT' )); ?>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                <?php echo $this->Form->input('password','Mot de passe',array('type' => 'password', 'class' => 'form-control', 'placeholder' => 'MOT DE PASSE')); ?>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-success" id="sendMessageButton">S'INSCRIRE</button>
					    </form>
				</div>
				<!-- Contact Details Column -->
				
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
