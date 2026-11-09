<?php $title_for_layout = 'Articles'; ?>

    <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Liste des articles</h4>
                            <span>Permet de créer et de savoir les articles publiés et non publiés</span>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>    
    <!-- Page-header end -->

<!-- Page-body start -->
    <div class="page-body">
        <!-- Hover table card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Nombre d'articles : <code><?php echo $total; ?></code></h5>
                    <span>Liste des articles crées</span>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left "></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>En ligne</th>
                                    <th>Titre</th>
                                    <th>Ordre</th>
                                    <th>Pages</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($articles as $k => $v): ?>
                                    <tr>
                                        <th scope="row"><?= $v -> id; ?></th>
                                        <td><label class="<?= ($v -> onlineArticles == 1 )? 'bg-success' : 'label-danger'; ?> p-l-20 p-r-20 p-t-5 p-b-5"><?= ($v -> onlineArticles == 1 )? 'En ligne' : 'Hors ligne'; ?></label></td>
                                        <td><?= $v -> nameArticles; ?></td>
                                        <td><?= $v -> ordreArticles; ?></td>
                                        <?php foreach($menus as $f => $e): ?>
                                            <?php if($v->menu_ID == $e->id): ?>
                                                <td><?php  echo $e->nameMenu; ?></td>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <td>
                                            <div class="table-data-feature">
                                                <a  href="<?php echo Router::url('index.php/cockpit/articles/edit/'.$v -> id); ?>">
                                                    <span class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="ti-pencil"></i>
                                                    </span>
                                                </a>
                                                <a onclick="return confirm('Voulez-vous vraiment supprimer ce contenu');" href="<?php echo Router::url('index.php/cockpit/articles/delete/'.$v -> id); ?>">
                                                    <span class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                        <i class="ti-trash"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row p-b-10 p-l-10 p-t-5">
                        <div class="col-xl-3">
                            <a class="btn btn-primary btn-square" href="<?= Router::url('index.php/cockpit/articles/edit'); ?>">Ajouter un article</a>
                        </div>
                        <div class="col-xl-3 align-self-center">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <?php for($i=1 ; $i<=$page ; $i++): ?>
                                        <li <?php if($i==$this->request->page) echo 'class="active"'; ?>><a class="btn btn-primary" href="?page=<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php endfor; ?>
                                </ul>
                            </nav> 
                        </div>
                    </div>
                </div>  
            </div>
        <!-- Hover table card end -->
     </div>
<!-- Page-body end -->
 