<div class="row">
                            
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Ajouter une image</strong>
            </div>
            <div class="card-body card-block">
            <form action="<?= Router::url('index.php/admin/medias/edit/'.$id); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="col-12 col-md-9">
                        <?php echo $this->Form->input('id','hidden'); ?>
                    </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-email" class=" form-control-label">Titre</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <?php echo $this->Form->input('name','Titre',array('class' => 'form-control', 'placeholder' => 'Entrer le titre...')); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-password" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <?php echo $this->Form->input('file', 'Image',array('type' => 'file','class' => 'form-control', 'placeholder' => 'Choisissez votre image...')); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-password" class=" form-control-label">Page</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select id="pet-select" class=" form-control" name="category">
                                <option value="">--Choisissez une page s'il vous plaît--</option>
                                <?php foreach($pages as $v): ?>
                                <option value="<?php echo $v->title; ?>"><?php echo $v->title; ?></option>
                                <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-password" class=" form-control-label">Ordre</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <select id="pet-select" class=" form-control" name="ordre">
                            <option value="">--Choisissez un chiffre s'il vous plaît--</option>
                            <?php for($i=1;$i<=10;$i++): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endfor; ?>
                    </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-password" class=" form-control-label">En ligne</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <?php echo $this->Form->input('online','En ligne', array('type' => 'checkbox')); ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Valider
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Annuler
                </button>
            </div>
            
            </form>
        </div>
    </div>       
</div>