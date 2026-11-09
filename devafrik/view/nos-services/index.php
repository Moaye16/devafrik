<?php 
		$title_for_layout = 'Nos services';
?> 
<!-- Page Content --> 

<div class="colorlib-services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta"><?= $title_for_layout; ?></span>
							<h2 class="colorlib-heading">Les services que nous offrons</h2>
						</div>
					</div>
					<div class="row row-bottom-padded-md">
                        <?php foreach($nosServices as $f => $e): ?>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                            <div class="colorlib-icon">
                                                <i class="<?= $e->fontIcon; ?>"></i>
                                            </div>
                                            <div class="colorlib-text">
                                                <h3><?= $e->nameArticles; ?></h3>
                                                <p> <?= $e->contentArticles; ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
					</div>
					<div class="row">
                        <?php foreach($nosServices as $f => $e): ?>
                            <div class="col-md-4">
                                <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                    <div class="services-img" style="background-image: url(<?= BASE_URL."/img/{$e->file}"; ?>)"></div>
                                    <div class="desc">
                                        <h3><?= $e->name; ?></h3>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
					</div>
				</div>
			</div>
	