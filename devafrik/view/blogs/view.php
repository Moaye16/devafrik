<?php
		$title_for_layout = 'Blogs';
?> 

<div class="blog-main">
	<div class="container">
		<div class="row">
			<!-- Post Content Column -->
			<div class="col-lg-8">
				<!-- Preview Image -->
				<img class="img-fluid rounded" src="images/blog-item-01.jpg" alt="" />
				<hr>
					<!-- Date/Time -->
					<p>Publié le <?= dateEnLettre($post->datepublication); ?></p>
					<hr>
					<?= $post->topic; ?>
				<hr>
			    <div class="blog-right-side">
				    <!-- Comments Form -->
				    <div class="card my-4">
					    <h5 class="card-header">Laissez un commentaire:</h5>
						    <div class="card-body">
                                <form method="POST" action="<?= Router::url("index.php/blogs/addComment/id:{$this->request-> params[0]}/slug:{$this->request-> params[1]}"); ?>">
                                    <div class="form-group row">
                                            <div class="col-sm-6">
                                                <?= $this->Form->input('fullname','Nom et prénoms',array('class' => 'form-control', 'placeholder' => 'Nom et prénoms')); ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <?= $this->Form->input('email','Email',array('type' => 'email', 'class' => 'form-control', 'placeholder' => 'email@domain')); ?>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <?= $this->Form->input('content','Laissez un commentaire:',array('type' => 'textarea','class' => 'form-control wysiwyg', 'placeholder' => 'Laissez votre commentaire')); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </form>
						    </div>
					</div>
				</div>
				<!-- Single Comment -->
				<div class="media mb-4">
					<img class="d-flex mr-3 rounded-circle" src="images/testi_01.png" alt="">
					<div class="media-body">
						<h5 class="mt-0">Commenter Name</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</div>

				<!-- Comment with nested comments -->
				<div class="media mb-4">
					<img class="d-flex mr-3 rounded-circle" src="images/testi_02.png" alt="">
					<div class="media-body">
							<h5 class="mt-0">Commenter Name</h5>
							Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
						<div class="media mt-4">
							<img class="d-flex mr-3 rounded-circle" src="images/testi_01.png" alt="">
							<div class="media-body">
								<h5 class="mt-0">Commenter Name</h5>
								Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
							</div>
						</div>						
					</div>
				</div>
				<!-- Single Comment -->
				<div class="media mb-4">
					<img class="d-flex mr-3 rounded-circle" src="images/testi_03.png" alt="">
					<div class="media-body">
						<h5 class="mt-0">Commenter Name</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</div>
			</div>

			<!-- Sidebar Widgets Column -->
			<div class="col-md-4 blog-right-side">
			  <!-- Search Widget -->
			    <div class="card mb-4">
				    <h5 class="card-header">Search</h5>
				    <div class="card-body">
				        <div class="input-group">
					        <input type="text" class="form-control" placeholder="Search for...">
					        <span class="input-group-btn">
					            <button class="btn btn-secondary" type="button">Go!</button>
					        </span>
				        </div>
				    </div>
			    </div>
			  
			    <!-- Categories Widget -->
			    <div class="card my-4">
				    <h5 class="card-header">Categories</h5>
				    <div class="card-body">
				        <div class="row">
                            <?php foreach($categories as $c): ?>
						        <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#"><?= $c->titlecategory; ?></a>
                                        </li>
                                    </ul>
						        </div>
					        <?php endforeach; ?>
				        </div>
				    </div>
			    </div>
			</div>
		</div>
		  <!-- /.row -->
	</div>
	<!-- /.container -->
</div>
