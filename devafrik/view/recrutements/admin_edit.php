<?php $title_for_layout = 'Toutes les offres d\'emplois'; $Edite_for_layout = 'Editer une offre d\'emploi'; ?>

    <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Edition d'une offre d'emploi</h4>
                            <span>Permet d'éditer une offre d'emploi</span>
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
                            <li class="breadcrumb-item"><a href="#">Toutes les offres</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Edition d'une offre</a>
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
                            <h4 class="sub-title">Fiche d'édition d'une offre d'emploi</h4>
                            <form action="<?= Router::url('index.php/cockpit/recrutements/edit/'.$id); ?>" method="post">
                                <div class="col-12 col-md-9">
                                    <?= $this->Form->input('id','hidden'); ?>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Référence</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('reference','Réference',array('class' => 'form-control', 'placeholder' => 'Entrer la réference...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Intitulé</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('titre', 'Intitulé',array('class' => 'form-control', 'placeholder' => 'Entrer l\'intitulé du poste...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">URL</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('slugRecru', 'Url',array('class' => 'form-control', 'placeholder' => 'Lien de l\'offre...', 'readonly' => 'readonly')); ?> 
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description du poste</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('detail','Description du poste',array('type' => 'textarea', 'class' => 'form-control  wysiwyg', 'placeholder' => 'Entrer la description du poste...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Type de contrat</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('typecontrat', 'Type de contrat',array('class' => 'form-control', 'placeholder' => 'Sélectionner le type de contrat...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Date de publication</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('datepublication', 'Date de publication',array('type' => 'date', 'class' => 'form-control', 'placeholder' => 'Entrer une date...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Date de prise de poste</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('datepriseposte', 'Date de prise de poste',array('type' => 'date', 'class' => 'form-control', 'placeholder' => 'Entrer une date...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">En ligne</label>
                                        <div class="col-sm-10">
                                        <?php echo $this->Form->input('online','En ligne', array('type' => 'checkbox')); ?>
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
