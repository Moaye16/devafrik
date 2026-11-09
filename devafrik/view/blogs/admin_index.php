<?php $title_for_layout = 'Blog'; ?>


    <!-- Page-header start -->
    <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Blog</h4>
                            <span>Permet de créer les categories et de sujets publiés et non publiés</span>
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
                            <li class="breadcrumb-item"><a href="#">Toutes les catégories et sujets</a>
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
                    <h5>Nombre de catégorie : <code><?php echo $totalCategory; ?></code></h5>
                    <span>Liste des catégories créees</span>
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
                                    <th>Date de création</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($categories as $k => $v): ?>
                                    <tr>
                                        <th scope="row"><?= $v -> id; ?></th>
                                        <td><label class="<?= ($v->onlinecategory == 1  )? 'bg-success' : 'label-danger'; ?> p-l-20 p-r-20 p-t-5 p-b-5"><?= ($v->onlinecategory == 1)? 'En ligne' : 'Hors ligne'; ?></label></td>
                                        <td><?= $v->titlecategory; ?></td>
                                        <td><?= date_format(date_create($v->createdcategory),'d/m/Y'); ?></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a  href="<?= Router::url('index.php/cockpit/categories/edit/'.$v -> id); ?>">
                                                    <span class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="ti-pencil"></i>
                                                    </span>
                                                </a>
                                                <a onclick="return confirm('Voulez-vous vraiment supprimer ce contenu');" href="<?= Router::url('index.php/cockpit/categories/delete/'.$v -> id); ?>">
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
                            <a class="btn btn-primary btn-square" href="<?= Router::url('index.php/cockpit/categories/edit'); ?>">Créer une categorie</a>
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


<!-- Page-body start -->
<div class="page-body">
        <!-- Hover table card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Nombre de sujets : <code><?php echo $total; ?></code></h5>
                    <span>Liste de sujets édités</span>
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
                                    <th>Catégorie</th>
                                    <th>Editer par</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($posts as $k => $v): ?>
                                    <tr>
                                        <th scope="row"><?= $v -> id; ?></th>
                                        <td><label class="<?= ($v->online == 1  )? 'bg-success' : 'label-danger'; ?> p-l-20 p-r-20 p-t-5 p-b-5"><?= ($v->online == 1)? 'En ligne' : 'Hors ligne'; ?></label></td>
                                        <td><?= $v->title; ?></td>
                                        <td>
                                            <?php 
                                                $GLOBALS['model'] = 'Postcategorie';
                                                $GLOBALS['id'] = $v -> category_id; 
                                                $category = $this->request('Blogs', 'firstModel');  
                                                echo $category->titlecategory; 
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                $GLOBALS['model'] = 'User';
                                                $GLOBALS['id'] = $v -> user_id; 
                                                $user = $this->request('Blogs', 'firstModel');  
                                                echo $user->firstname.' '.$user->lastname; 
                                            ?>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a  href="<?= Router::url('index.php/cockpit/posts/edit/'.$v -> id); ?>">
                                                    <span class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="ti-pencil"></i>
                                                    </span>
                                                </a>
                                                <a onclick="return confirm('Voulez-vous vraiment supprimer ce contenu');" href="<?= Router::url('index.php/cockpit/posts/delete/'.$v -> id); ?>">
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
                            <a class="btn btn-primary btn-square" href="<?= Router::url('index.php/cockpit/posts/edit'); ?>">Editer un sujet</a>
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
