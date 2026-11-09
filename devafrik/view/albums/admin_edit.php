<?php $title_for_layout = 'Galerie'; $Edite_for_layout = 'Créer un album'; ?>

    <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Ajouter un album</h4>
                            <span>Permet d'ajouter un album</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Toutes les albums</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Ajouter un album</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>    
    <!-- Page-header end -->

<!-- Page-body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                    <div class="card">
                        <div class="card-header">
                                <div class="card-header-right">
                                    <i class="icofont icofont-spinner-alt-5"></i>
                                </div>
                                <div class="card-header-right">
                                    <i class="icofont icofont-spinner-alt-5"></i>
                                </div>
                        </div>
                        <div class="card-block">
                            <h4 class="sub-title">Fiche de création d'album</h4>
                            <form method="post" action="<?= Router::url('index.php/cockpit/albums/edit/'.$id); ?>">
                                <div class="col-12 col-md-9">
                                    <?= $this->Form->input('id','hidden'); ?>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Album</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('nameAlbum','Album',array('class' => 'form-control', 'placeholder' => 'Entrer un nom d\'album...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">URL</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('slugAlbum', 'Slug',array('class' => 'form-control', 'placeholder' => 'lien de l\'album...', 'readonly' => 'readonly')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('contentAlbum','Description', array('type' => 'textarea', 'class' => 'form-control wysiwyg', 'placeholder' => 'Entrer une description...', 'rows' => 5, 'cols' => 20)); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">En ligne</label>
                                        <div class="col-sm-10">
                                        <?php echo $this->Form->input('onlineAlbum','En ligne', array('type' => 'checkbox')); ?>
                                        </div>
                                </div>
                                <h4 class="sub-title"></h4>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-out-dotted btn-primary btn-square">
                                        <i class="fa fa-dot-circle-o"></i> Valider
                                    </button>
                                    <button type="reset" class="btn btn-out-dotted btn-danger btn-square">
                                        <i class="fa fa-ban"></i> Annuler
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
     </div>
<!-- Page-body end -->
