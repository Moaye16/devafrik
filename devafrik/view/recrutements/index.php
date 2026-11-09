<?php
		$title_for_layout = 'Recrutements';
?> 

<div class="colorlib-contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta"><?= $title_for_layout; ?></span>
							<h2 class="colorlib-heading">Offre d'emploi</h2>
						</div>
					</div>
                    <div class="label">
                        <h2><span class="icon-share3" aria-hidden = "true"></span>&nbsp;Nos offres d'emploi</h2>
                    </div>
                    <div class="container">
                        <?php foreach($listrecrutements as $k => $v): ?>
                            <div class="row offre">
                                <div class="col-md-8">
                                    <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib">
                                            <p class="titreOffre">
                                                + <?= $v->titre; ?>
                                            </p>
                                            <p class="societe">
                                                DEV AFRIK INVESTMENT HOLDING
                                            </p>
                                            <p class="description"><?= htmlspecialchars(mb_substr(html_entity_decode(strip_tags($v->detail), ENT_QUOTES, 'UTF-8'), 0, 450)); ?>...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-md-push-1">
                                    <div class="row pt-30 center">
                                        <div class="col-md-12 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                                            <p class="typeContrat">
                                                <?= $v->typecontrat; ?>
                                            </p>
                                            <p class="datepub">
                                                Publiée le <?= date_format(date_create($v->datepublication),"d/m/Y"); ?>
                                            </p>
                                            <p id="joblink">
                                                <a href="<?= Router::url("index.php/recrutements/view/id:{$v->id}/slug:{$v->slugRecru}"); ?>">
                                                    Consulter l'offre
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="row">
                            <div class="col-md-12 center">
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
			</div>