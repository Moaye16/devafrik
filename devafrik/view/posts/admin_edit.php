<?php $title_for_layout = 'Blog'; $Edite_for_layout = 'Ajouter un sujet'; ?>

<?php  

    $listCategory = array();
    foreach($categories as $k=>$v){
        $listCategory[$v->id] = $v->titlecategory;
    } 
?>

<!-- Page-header start -->
<div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Ajouter un sujet</h4>
                            <span>Permet d'éditer un sujet</span>
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
                            <li class="breadcrumb-item"><a href="#">Toutes le categories et sujets</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Ajouter un sujet</a>
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
                            <h4 class="sub-title">Fiche d'ajout de sujet</h4>
                            <form method="post" action="<?= Router::url('index.php/cockpit/posts/edit/'.$id); ?>" method="post">
                                <div class="col-12 col-md-9">
                                    <?= $this->Form->input('id','hidden'); ?>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sujet</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('title','Sujet',array('class' => 'form-control', 'placeholder' => 'Entrer un titre...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">URL</label>
                                        <div class="col-sm-10">
                                        <?= $this->Form->input('slugtopic', 'URL',array('class' => 'form-control', 'placeholder' => 'Entrer l\'URL...', 'readonly' => 'readonly')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Détail</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('topic','Détail',array('type' => 'textarea','class' => 'form-control wysiwyg', 'placeholder' => 'Entrer le détail...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Date de publication</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('datepublication', 'Date de publication',array('type' => 'date', 'class' => 'form-control', 'placeholder' => 'Entrer une date...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Catégorie</label>
                                        <div class="col-sm-10">
                                        <?= $this->Form->input('category_id', 'Catégorie',array('type' => 'select','class' => 'form-control'),$listCategory, '--Choisissez un article s\'il vous plaît---'); ?>
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
