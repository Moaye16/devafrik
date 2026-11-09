<?php
		$title_for_layout = 'Recrutements';
        //debug($this->request->controller); die();
?> 

<div class="colorlib-contact">
    <div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
				<span class="heading-meta"><?= $title_for_layout; ?></span>
				<h2 class="colorlib-heading">Offre d'emploi</h2>
			</div>
		</div>
        <div class="row">
            <div class="col-md-8">
                <div class="by-post">
                    <span>Offre d'emploi</span>
                    <h4 class="text-success"><?= $recrutement->titre; ?></h4>
                    <div class="row">
                        <div class="col-md-6">
                            <b>Référence de l'offre :</b> <?= $recrutement->reference; ?>
                        </div>
                        <div class="col-md-6">
                            <b>Publiée le :</b> <?= date_format(date_create($recrutement->datepublication),"d-m-Y"); ?>
                        </div>
                        <div class="col-md-6">
                            <i class="fas fa-file-o"></i>
                            <b>Type de contrat :</b> <?= $recrutement->typecontrat; ?>
                        </div>
                        <div class="col-md-6">
                            <i class="fa fa-calendar-o"></i>
                            <b>Prise de poste :</b> <?= date_format(date_create($recrutement->datepublication),"d M Y"); ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-8 contact-left">
                            <h3>Description de l'offre</h3>
                        </div>
                        <div class="col-lg-4 contact-right">
                        <p id="<?php 
                                            if($recrutement->datepriseposte >= DateUTC()){
                                            echo 'joblink2';
                                            }else{
                                               echo 'joblinkdisabled'; 
                                            }
                                    ?>">
                                <a 
                                    <?php 
                                    
                                            if(DateUTC() > $recrutement->datepriseposte){
                                            echo "class='disabled'";
                                            }
                                        
                                    ?> 
                                data-toggle="modal" data-target="#exampleModal" data-whatever="<?= $this->request->params[0]; ?>">
                                    Postuler
                                </a>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <!-- Post Content -->
                            <p><?= $recrutement->detail; ?></p> 
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-md-4 blog-right-side">
                <div class="card my-4">
                    <h3 class="card-header"><i class="fas fa-external-link"></i> Postulez également...</h3>
                    <?php foreach($listrecrutements as $k => $v): ?>
                        <?php if($this->request->params[0] != $v->id): ?>
                            <div class="card-body">
                                <p class="titreoffreRight">+ <?= $v->titre; ?></p>
                                <p class="typeContratRight"><?= $v->typecontrat; ?></p>
                                <p class="offreRight"><?= substr($v->detail,0,135).'...'; ?></p>
                                <p id="joblink3">
                                    <a href="<?= Router::url("index.php/recrutements/view/id:{$v->id}/slug:{$v->slugRecru}"); ?>">+ Consulter l'offre</a>
                                </p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>    
            </div>   
        </div>    
    </div>
</div>
