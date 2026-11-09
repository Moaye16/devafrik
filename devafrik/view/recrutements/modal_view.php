
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
	</div>
		<form method="POST" action="<?= Router::url("index.php/recrutements/modal/view/".$id); ?>">
			<div class="modal-body">
				<div class="card-block">
					<center>
						<b><span>POSTE A POURVOIR</span></b>
						<h4 class="sub-title"><?= $recrutement->titre; ?></h4>
						<span>Type de contrat : <?= $recrutement->typecontrat; ?> - Prise de poste : <?= dateEnLettre($recrutement->datepriseposte); ?></span>
					</center><br>
                    <div class="col-12 col-md-9">
                        <?= $this->Form->input('id','hidden'); ?>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-4 col-form-label">Nom et Prénoms</label>
                        <div class="col-sm-8">
                            <?= $this->Form->input('fullname','Nom et prénoms',array('class' => 'form-control', 'placeholder' => 'NOM ET PRENOMS...' )); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Numéro de téléphone</label>
                        <div class="col-sm-8">
                            <?= $this->Form->input('mobile','Numéro de téléphone',array('type' => 'tel', 'class' => 'form-control', 'placeholder' => 'NUMERO DE TELEPHONE...' )); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <?= $this->Form->input('email','Email',array('class' => 'form-control', 'placeholder' => 'email@domain' )); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Formation</label>
                        <div class="col-sm-8">
                            <?= $this->Form->input('formation','Contact',array('type' => 'tel', 'class' => 'form-control', 'placeholder' => 'CONTACT DU MEMBRE...' )); ?>
                        </div>
                    </div>
                    <h4 class="sub-title"></h4>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-out-dotted btn-primary btn-square">
                        	<i class="fa fa-dot-circle-o"></i> Valider
                        </button>
                    </div>
                </div>			
			</div>	
		</form>
</div>
