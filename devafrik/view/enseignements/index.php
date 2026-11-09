<?php 
		$title_for_layout = 'Enseignements';
?> 


<!-- section -->
<div class="section margin-top_50">
        <div class="container">
        <?php foreach($Articles as $p): ?>
            <div class="row">
                <div class="col-md-8 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><?= substr($p->nameArticles,0,10); ?></span></h2>
                        </div>
						<div class="full">
						  <p><?= $p->contentArticles; ?></p>
						</div>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full margin-top_50">
                        <img src="<?= BASE_URL.'/img/'.$p->file; ?>" alt="#" />
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
	<!-- end section -->


