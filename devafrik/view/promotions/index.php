<?php $title_for_layout = 'Promotion'; ?>


			<div class="colorlib-work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Promotion</span>
							<h2 class="colorlib-heading">Voir nos promotions</h2>
						</div>
					</div>
					<div class="row row-bottom-padded-md">
						<?php foreach($photos as $k => $v): ?>
							<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
								<div class="project" style="background-image: url(<?= BASE_URL.'/img/galerie/'.date_format(date_create($v->datePhotos),'Y').'/'.$v->filePhotos; ?>);">
									<div class="desc">
										<div class="con">
											<?php $GLOBALS['album_ID'] = $v->album_ID; $album = $this->request('Galeries', 'Album'); ?>
											<h3><a href="#"><?= $album->nameAlbum; ?></a></h3>
											<span><?= $v->namePhotos; ?></span>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<ul class="pagination">
								<?php for($i=1 ; $i<=$page ; $i++): ?>
									<li class="<?= ($i==$this->request->page) ? 'active' : ''; ?> ">
										<a href="?page=<?= $i; ?>"><?= $i; ?></a>
									</li>
								<?php endfor; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>




    