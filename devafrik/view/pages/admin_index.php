<div class="table-responsive m-b-40">
    
    <h1><?php echo $total; ?> Pages</h1>
    
</div>

<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">

        <thead>
        
            <tr>
            
                <th>ID</th>

                <th>En ligne</th>
                
                <th>Titre</th>
                
                <th>Ordre</th>
                
                <th>Actions</th>
            
            </tr>
        
        </thead>
        
        <tbody>
            
            <?php foreach($pages as $k => $v): ?>
            
                <tr>
               
                    <td><?php echo $v -> idMenu; ?></td>

                    <td><span class="<?php echo ($v -> online == 1 )? 'role member' : 'role admin'; ?>"><?php echo ($v -> onlineMenu == 1 )? 'En ligne' : 'Hors ligne'; ?></span></td>
                    
                    <td><?php echo $v -> nameMenu; ?></td>

                    <td><?php echo $v -> ordreMenu; ?></td>
                    
                    <td>
                        <div class="table-data-feature">
                            <a  href="<?php echo Router::url('index.php/admin/menus/edit/'.$v -> idMenu); ?>">
                                <span class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </span>
                            </a>
                            <a onclick="return confirm('Voulez-vous vraiment supprimer ce contenu');" href="<?php echo Router::url('index.php/admin/menus/delete/'.$v -> idMenu); ?>">
                                <span class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </span>
                            </a>
                        </div>
                        
                    </td>
                    
                </tr>
            
            <?php endforeach; ?>
            
        </tbody>

    </table>
</div>

<div class="row">
    <div class="col-xl-3">
    <a class="btn btn-primary" href="<?php echo Router::url('index.php/admin/menus/edit'); ?>">Ajouter une page</a>
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