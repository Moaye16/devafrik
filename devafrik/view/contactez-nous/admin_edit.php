

<!-- Page-header start -->
<div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Ajouter contact de l'entreprise</h4>
                            <span>Permet d'ajouter un contact de l'entreprise</span>
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
                            <li class="breadcrumb-item"><a href="#">Toutes les contacts</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Ajouter un contact</a>
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
                            <h4 class="sub-title">Fiche des coordonnées de l'entreprise</h4>
                            <form method="post" action="<?= Router::url('index.php/cockpit/contactez-nous/edit/'.$id); ?>" enctype="multipart/form-data">
                                <div class="col-12 col-md-9">
                                    <?= $this->Form->input('id','hidden'); ?>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sigle</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('sigle','Sigle',array('class' => 'form-control', 'placeholder' => 'Entrer le sigle de l\'entreprise...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Dénomination</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('denomination','Dénomination',array('class' => 'form-control', 'placeholder' => 'Entrer la dénomination de l\'entreprise...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Logo</label>
                                        <div class="col-sm-10">
                                        <?= $this->Form->input('file','Fichier',array('type' => 'file', 'class' => 'form-control', 'placeholder' => 'Insérer le logo...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Localisation</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('adresse_geo','Localisation',array('type' => 'textarea', 'class' => 'form-control', 'placeholder' => 'Entrer votre situation géographique...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Adresse postale</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('adresse','Adresse postal',array('class' => 'form-control', 'placeholder' => 'Entrer votre adresse...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Téléphone fixe</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('fixe','Fixe',array('type' => 'tel', 'class' => 'form-control', 'placeholder' => 'Entrer le contact fixe...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Téléphone mobile</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('mobile','Mobile',array('type' => 'tel', 'class' => 'form-control', 'placeholder' => 'Entrer le contact mobile...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('email','Email',array('type' => 'email', 'class' => 'form-control', 'placeholder' => 'Entrer le mail électronique...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Google map</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('googlemap','Google map',array('class' => 'form-control', 'placeholder' => 'Entrer le api de google maps...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Facebook</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('facebook','Facebook',array('class' => 'form-control', 'placeholder' => 'Entrer le compte facebook...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Twitter</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('twitter','Twitter',array('class' => 'form-control', 'placeholder' => 'Entrer le compte twitter...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Google +</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('googleplus','Google +',array('class' => 'form-control', 'placeholder' => 'Entrer le compte google plus...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Linkedln</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('linkedin','Linkedln +',array('class' => 'form-control', 'placeholder' => 'Entrer le compte linkedln...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Instagram</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('instagram','Instagram +',array('class' => 'form-control', 'placeholder' => 'Entrer le compte instagram...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">En ligne</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('online','En ligne', array('type' => 'checkbox')); ?>
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