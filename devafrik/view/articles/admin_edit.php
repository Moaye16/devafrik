<?php $title_for_layout = 'Articles'; $Edite_for_layout = 'Editer un article'; ?>

<?php 

    $valeur = array();
    for($i=1;$i<=10;$i++){
            $valeur[$i] = $i;
    }  

    $menu = array();
    foreach($pages as $k=>$v){
        $menu[$v->id] = $v->nameMenu;
    } 

    $Fonticons = array();
    //$icon = true;
    foreach($icons as $k=>$v){
        $Fonticons[$v->code] = $v->name;
    } 
?>


    <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Edition d'un article</h4>
                            <span>Permet d'éditer un article</span>
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
                            <li class="breadcrumb-item"><a href="#">Tous les articles</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Edition d'un article</a>
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
                            <h4 class="sub-title">Fiche d'édition d'un article</h4>
                            <form action="<?php echo Router::url('index.php/cockpit/articles/edit/'.$id); ?>" method="post">
                                <div class="col-12 col-md-9">
                                    <?= $this->Form->input('id','hidden'); ?>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Titre</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('nameArticles','Titre',array('class' => 'form-control', 'placeholder' => 'Entrer le titre...')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">URL</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('slugArticles', 'Url',array('class' => 'form-control', 'placeholder' => 'lien de l\'article...', 'readonly' => 'readonly')); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Contenu</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('contentArticles','Contenu', array('type' => 'textarea', 'class' => 'form-control wysiwyg', 'placeholder' => 'Entrer le contenu...', 'rows' => 5, 'cols' => 20)); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Ordre</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('ordreArticles', 'Ordre',array('type' => 'select','class' => 'form-control', ),$valeur, '--Choisissez un emplacement s\'il vous plaît---'); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Icône</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('fontIcon', 'Icône',array('type' => 'select','class' => 'form-control'), $Fonticons,'--Choisissez d\'une icône s\'il vous plaît---', true); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Page</label>
                                        <div class="col-sm-10">
                                            <?= $this->Form->input('menu_ID', 'Page',array('type' => 'select','class' => 'form-control'),$menu, '--Choisissez une page s\'il vous plaît---'); ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">En ligne</label>
                                        <div class="col-sm-10">
                                        <?php echo $this->Form->input('onlineArticles','En ligne', array('type' => 'checkbox')); ?>
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
