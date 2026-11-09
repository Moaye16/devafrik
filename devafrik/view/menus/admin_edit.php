<?php $title_for_layout = 'Pages'; $Edite_for_layout = 'Editer une page'; ?>

<?php 

    $valeur = array();
    for($i=1;$i<=10;$i++){
            $valeur[$i] = $i;
    }

?>

<?php $title_for_layout = 'Pages'; ?>

    <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Edition d'une page</h4>
                            <span>Permet d'éditer une page</span>
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
                            <li class="breadcrumb-item"><a href="#">Toutes les pages</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Edition d'une page</a>
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
                            <h4 class="sub-title">Fiche d'édition de page</h4>
                            <form action="<?php echo Router::url('index.php/cockpit/menus/edit/'.$id); ?>" method="post">
                                <div class="col-12 col-md-9">
                                    <?php echo $this->Form->input('id','hidden'); ?>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Titre</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('nameMenu','Titre',array('class' => 'form-control', 'placeholder' => 'Entrer le titre...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">URL</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('slugMenu', 'Url',array('class' => 'form-control', 'placeholder' => 'lien de l\'Url...', 'readonly' => 'readonly')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Ordre</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('ordreMenu', 'Ordre',array('type' => 'select','class' => 'form-control'),$valeur, '--Choisissez un emplacement s\'il vous plaît---'); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">En ligne</label>
                                        <div class="col-sm-10">
                                        <?php echo $this->Form->input('onlineMenu','En ligne', array('type' => 'checkbox')); ?>
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