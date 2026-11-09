<?php $title_for_layout = 'Blogs'; ?>

	<div class="blog-main">
		<div class="container">
			<div class="row">
				<!-- Blog Entries Column -->
				<div class="col-md-8 blog-entries">
					<!-- Blog Post -->
					<?php foreach($posts as $v): ?>
					<div class="card mb-4">
						<div class="card-body">
							<div class="by-post">
								Publié le <?= dateEnLettre($v->datepublication); ?>. 
								<a href="#">
									<?php 
										$GLOBALS['model'] = 'User';
										$GLOBALS['id'] = $v -> user_id; 
										$user = $this->request('Blogs', 'firstModel');  
										echo $user->firstname.' '.$user->lastname; 
									?>
								</a>
							</div>
							<h2 class="card-title"><?= $v->title; ?></h2>
							<p class="card-text"><?= substr($v->topic,0,300); ?></p>
							<a href="<?= Router::url("index.php/blogs/view/id:{$v->id}/slug:{$v->slugtopic}"); ?>" class="btn btn-primary">Lire la suite &rarr;</a>
						</div>
					</div>
					<?php endforeach; ?>
					<div class="pagination_bar_arrow">
					  <!-- Pagination -->
						<ul class="pagination justify-content-center mb-4">
							<li class="page-item">
								<a class="page-link" href="#">&larr; Older</a>
							</li>
							<li class="page-item disabled">
								<a class="page-link" href="#">Newer &rarr;</a>
							</li>
						</ul>
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
