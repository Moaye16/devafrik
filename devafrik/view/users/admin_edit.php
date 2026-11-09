
<?php $title_for_layout = 'Articles'; $Edite_for_layout = 'Editer un article'; ?>

    <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Edition d'un compte</h4>
                            <span>Permet d'éditer un compte</span>
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
                            <li class="breadcrumb-item"><a href="#">Tous les comptes</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Edition d'un compte</a>
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
                            <h4 class="sub-title">Fiche d'édition d'un compte</h4>
                            <form action="<?php echo Router::url('index.php/cockpit/users/edit/'.$id); ?>" method="post">
                                <div class="col-12 col-md-9">
                                    <?= $this->Form->input('id','hidden'); ?>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('firstname','Nom',array('class' => 'form-control', 'placeholder' => 'NOM' )); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Prénom(s)</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('lastname','Prénoms',array('class' => 'form-control', 'placeholder' => 'PRENOMS' )); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Identifiant</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('login','Identifiant',array('class' => 'form-control', 'placeholder' => 'IDENTIFIANT' )); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mot de passe</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('password','Mot de passe',array('type' => 'password', 'class' => 'form-control', 'placeholder' => 'MOT DE PASSE')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Retapez le mot de passe</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('repeatpassword','Retapez le mot de passe',array('type' => 'password', 'class' => 'form-control', 'placeholder' => 'RETAPEZ LE MOT DE PASSE')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Active</label>
                                        <div class="col-sm-10">
                                        <?php echo $this->Form->input('active','Active', array('type' => 'checkbox')); ?>
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