<?php $title_for_layout = 'Offre d\'emploi'; ?>

    <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Liste des offres d'emplois</h4>
                            <span>Permet de créer et de savoir les offres d'emplois publiées et non publiées</span>
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
                            <li class="breadcrumb-item"><a href="#">Toutes les offres d'emplois</a>
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
                    <h5>Nombre d'offres d'emplois' : <code><?php echo $total; ?></code></h5>
                    <span>Liste des offres d'emplois créees</span>
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
                                    <th>Référence</th>
                                    <th>Intitulé</th>
                                    <th>Type de contrat</th>
                                    <th>Date de publication</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($recrutements as $k => $v): ?>
                                    <tr>
                                        <th scope="row"><?= $v -> id; ?></th>
                                        <td><label class="<?= ($v -> online == 1 )? 'bg-success' : 'label-danger'; ?> p-l-20 p-r-20 p-t-5 p-b-5"><?= ($v -> online == 1 )? 'En ligne' : 'Hors ligne'; ?></label></td>
                                        <td><?= $v -> reference; ?></td>
                                        <td><?= $v -> titre; ?></td>
                                        <td><?= $v -> typecontrat; ?></td>
                                        <td><?= date_format(date_create($v -> datepublication),"d/m/Y"); ?></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a  href="<?= Router::url('index.php/cockpit/recrutements/edit/'.$v -> id); ?>">
                                                    <span class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="ti-pencil"></i>
                                                    </span>
                                                </a>
                                                <a onclick="return confirm('Voulez-vous vraiment supprimer ce contenu');" href="<?= Router::url('index.php/cockpit/recrutements/delete/'.$v -> id); ?>">
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
                            <a class="btn btn-primary btn-square" href="<?= Router::url('index.php/cockpit/recrutements/edit'); ?>">Ajouter une offre d'emploi</a>
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
