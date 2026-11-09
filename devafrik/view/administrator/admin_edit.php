<div class="page-header">
    
    <h1>Editer un administrateur</h1>
    
</div>

<form action="<?php echo Router::url('admin/administrator/edit/'.$id); ?>" method="post">

    <?php echo $this->Form->input('firstname','Nom',array('placeholder' => 'NOM' )); ?>
    <?php echo $this->Form->input('lastname','Prénoms',array('placeholder' => 'PRENOMS' )); ?>
    <?php echo $this->Form->input('login','Identifiant',array('placeholder' => 'IDENTIFIANT' )); ?>
    <?php echo $this->Form->input('password','Mot de passe',array('type' => 'password', 'placeholder' => 'MOT DE PASSE')); ?>
    <?php echo $this->Form->input('id', 'hidden'); ?>
    <?php echo $this->Form->input('role','Role',array('placeholder' => 'ROLE' )); ?>
    
    <div class="actions">
    
    	<input type="submit" class="btn btn-primary" value="Envoyer">
    
	</div>

</form>