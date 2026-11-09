<?php $title_for_layout = 'Comptes'; ?>

<div class="table-responsive m-b-20">
    
    <h1><?php echo $total; ?> Membres</h1>
    
</div>

<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">

        <thead>
        
            <tr>
            
                <th>ID</th>

                <th>Nom et Prénoms</th>
                
                <th>Compte</th>
                
                <th>Rôle</th>

                <th>Statut</th>
                
                <th>Actions</th>
            
            </tr>
        
        </thead>
        
        <tbody>
        
            <?php foreach($members as $k => $v): ?>
            
                <tr>
               
                    <td><?php echo $v -> id; ?></td>
                    
                    <td><?php echo $v->firstnameMembers.' '.$v->lastnameMembers; ?></td>
                    
                    <td><?php echo $v->account; ?></td>
                    
                    <td><?php echo $v->role; ?></td>

                    <td><span class="<?php echo ($v->active == 1 )? 'role member' : 'role admin'; ?>"><?php echo ($v -> active == 1 )? 'Activé' : 'Desactivé'; ?></span></td>
                    
                    <td>
                        <div class="table-data-feature">
                            <a  href="<?php echo Router::url('index.php/cockpit/members/edit/'.$v -> id); ?>">
                                <span class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </span>
                            </a>
                            <a onclick="return confirm('Voulez-vous vraiment supprimer ce contenu');" href="<?php echo Router::url('index.php/cockpit/members/delete/'.$v -> id); ?>">
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
        <a class="btn btn-primary" href="<?php echo Router::url('index.php/cockpit/members/edit'); ?>">créer un membre</a>
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