<?php $title_for_layout = 'Accueils'; $count=1; ?>

<aside id="colorlib-hero" class="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
            <?php foreach($slideshows as $s => $t): ?>
                <li style="background-image:url(<?= BASE_URL."/img/slideshow/{$t->file}"; ?>);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1><?= $t->name; ?></h1>
                                        <h2><?= $t->content; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
		</ul>
	</div>
</aside>

			<div class="colorlib-about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6">
                            <?php foreach($ArticleAccueil as $k => $v ): ?>
                                <?php if($v->nameArticles == $ArticleBienvenue->nameArticles ): ?>
                                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= BASE_URL."/img/{$v->file}"; ?>);">
                                    </div>
                                <?php endif; ?>   
                            <?php endforeach; ?>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">Bienvenue</span>
								<h2 class="colorlib-heading"><?= $ArticleBienvenue->nameArticles; ?></h2>
								<p><?= $ArticleBienvenue->contentArticles; ?></p>
							</div>
							<div class="row padding">
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps active">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Nous sommes <br>La passion</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Honnête <br>Sûr</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Toujours <br>S'améliorer</h3>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="colorlib-services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<p><?= "Les activités de DEV AFRIK couvrent également l’investissement, l’agro-industrie, l’import-export, l’immobilier, le transport et la logistique."; ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
							<div class="colorlib-feature">
								<div class="colorlib-text">
									<h2 class="colorlib-heading"><?= "Énergie"; ?></h2>
									<p><?= "Accompagnement d’AKSA Enerji par DEV AFRIK, ayant abouti à un contrat pour une centrale de 119 MW, actuellement en construction au Burkina Faso."; ?></p>
									<p><?= "Signature, pour le compte direct de DEV AFRIK INVESTMENT, de contrats portant sur des projets de centrales de 102 MW et 258 MW."; ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
							<div class="colorlib-feature">
								<div class="colorlib-text">
									<h2 class="colorlib-heading"><?= "Mines et produits chimiques miniers"; ?></h2>
									<p><?= "Depuis 2025, développement par la filiale DEV AFRIK MINING d’une activité d’extraction semi-mécanisée de gypse au Niger."; ?></p>
									<p><?= "Présence de DEV AFRIK dans le domaine des produits chimiques miniers au Mali, au Niger, en République centrafricaine, au Bénin, au Nigeria et au Tchad."; ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
							<div class="colorlib-feature">
								<div class="colorlib-text">
									<h2 class="colorlib-heading"><?= "Immobilier"; ?></h2>
									<p><?= "DEV AFRIK Côte d’Ivoire intervient comme financier-constructeur d’une tranche de 1 050 logements sociaux du projet d’urgence porté par l’entreprise SNGI, actuellement en cours de réalisation."; ?></p>
									<p><?= "Financement et construction de 281 villas haut standing à Motobé, Grand-Bassam, en cours de réalisation."; ?></p>
									<p><?= "Programmes de villas haut standing à Assouindé et dans la cité ADO à Bassam, comprenant respectivement 12 villas et 10 villas."; ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="colorlib-feature">
								<div class="colorlib-text">
									<span class="heading-meta"><?= "Direction"; ?></span>
									<h2 class="colorlib-heading"><?= "Président-Directeur Général — DEV AFRIK INVESTMENT HOLDING"; ?></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="colorlib-services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Quelques services</span>
							<h2 class="colorlib-heading">VOICI QUELQUES SERVICES QUE NOUS OFFRONS</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
                                    <?php foreach($nosServices as $f => $e): ?>
                                        <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                            <div class="colorlib-icon">
                                                <i class="<?= $e->fontIcon; ?>"></i>
                                            </div>
                                            <div class="colorlib-text">
                                                <h3><?= $e->nameArticles; ?></h3>
                                                <p><?= $e->contentArticles; ?> </p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
                                <?php foreach($ArticleAccueil as $k => $v ): ?>
                                    <?php foreach($nosServices as $s ): ?>
                                        <?php if($v->articles_ID == $s->id): ?>
                                            <?php if($count === 1 || $count === 4): ?>
                                                <div class="col-md-6 <?= ($count ===1 ) ? '':'move-bottom'; ?>">
                                            <?php endif; ?>
                                                <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                                    <div class="services-img" style="background-image: url(<?= BASE_URL."/img/{$v->file}"; ?>)"></div>
                                                    <div class="desc">
                                                        <h3><?= $v->name; ?></h3>
                                                    </div>
                                                </a>
                                            <?php if($count === 3 || $count === 5): ?>
                                                </div>
                                            <?php endif; ?>
                                        <?php $count++; endif; ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(<?= BASE_URL."/img/cover_bg_1.jpg"; ?>);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-skyline"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Pojets</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-engineer"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Employés</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Chantiers</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-worker"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Partenaires</span>
						</div>
					</div>
				</div>
			</div>