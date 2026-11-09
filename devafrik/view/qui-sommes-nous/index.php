<?php 
		$title_for_layout = 'Qui sommes-nous ?';
?> 

<div class="colorlib-about">
				<div class="colorlib-narrow-content">
					<?php foreach($articles as $k => $v): ?>
						<?php if(!empty($v) && $v->ordreArticles == 1): ?>
							<div class="row row-bottom-padded-md">
								<div class="col-md-6">
									<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= BASE_URL.'/img/'.$v->file; ?>);">
									</div>
								</div>
								<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
									<div class="about-desc">
										<span class="heading-meta">Bienvenue</span>
										<h2 class="colorlib-heading"><?= $title_for_layout; ?></h2>
										<p><?= $v->contentArticles; ?></p>
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
					<?php endif; ?>
						<?php if(!empty($v) && $v->ordreArticles == 2): ?>
							<div class="row">
								<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
									<h2 class="colorlib-heading"><?= $v->nameArticles; ?></h2>
									<p><?= $v->contentArticles; ?></p>
								</div>
								<div class="col-md-8 animate-box" data-animate-effect="fadeInRight">
									<div class="fancy-collapse-panel">
										<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why choose me?
														</a>
													</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
													<div class="panel-body">
														<div class="row">
															<div class="col-md-6">
																<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
															</div>
															<div class="col-md-6">
																<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo">
													<h4 class="panel-title">
														<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What I do?
														</a>
													</h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
													<div class="panel-body">
														<p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
															<ul>
																<li>Separated they live in Bookmarksgrove right</li>
																<li>Separated they live in Bookmarksgrove right</li>
															</ul>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingThree">
													<h4 class="panel-title">
														<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">My Specialties
														</a>
													</h4>
												</div>
												<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
													<div class="panel-body">
														<p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
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
