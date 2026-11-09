<?php $title_for_layout = 'Galerie'; $Edite_for_layout = 'Insérer une image'; ?>

<?php  

    $menu = array();
    foreach($pages as $k=>$v){
        if($v->nameMenu=='Galerie' || $v->nameMenu=='Promotion'){
            $menu[$v->id] = $v->nameMenu;
        }
    } 

    $album = array();
    foreach($albums as $k=>$v){
        $album[$v->id] = $v->nameAlbum;
    } 
?>

<!-- Page-header start -->
<div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Ajouter une photo</h4>
                            <span>Permet d'ajouter une photo</span>
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
                            <li class="breadcrumb-item"><a href="#">Toutes les photos</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Ajouter une photo</a>
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
                            <h4 class="sub-title">Fiche d'ajout de photo</h4>
                            <form method="post" action="<?= Router::url('index.php/cockpit/photos/edit/'.$id); ?>" method="post" enctype="multipart/form-data" >
                                <div class="col-12 col-md-9">
                                    <?= $this->Form->input('id','hidden'); ?>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Titre</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('namePhotos','Titre',array('class' => 'form-control', 'placeholder' => 'Entrer un titre...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">URL</label>
                                        <div class="col-sm-10">
                                        <?= $this->Form->input('slugPhotos', 'URL',array('class' => 'form-control', 'placeholder' => 'Entrer l\'URL...', 'readonly' => 'readonly')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('contentPhotos','Description',array('type' => 'textarea','class' => 'form-control wysiwyg', 'placeholder' => 'Entrer une description...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Photo</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('filePhotos', 'Photo',array('type' => 'file','class' => 'form-control', 'placeholder' => 'Choisissez votre photo...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Date de l'évènement</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('datePhotos', 'Date de publication',array('type' => 'date', 'class' => 'form-control', 'placeholder' => 'Entrer une date...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Page</label>
                                        <div class="col-sm-10">
                                        <?= $this->Form->input('page_id', 'Page',array('type' => 'select','class' => 'form-control'),$menu, '--Choisissez une page s\'il vous plaît---'); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Album</label>
                                        <div class="col-sm-10">
                                        <?= $this->Form->input('album_ID', 'Album',array('type' => 'select','class' => 'form-control'),$album, '--Choisissez un article s\'il vous plaît---'); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">En ligne</label>
                                        <div class="col-sm-10">
                                        <?php echo $this->Form->input('onlinePhotos','En ligne', array('type' => 'checkbox')); ?>
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
