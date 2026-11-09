<?php 
		$title_for_layout = 'Présentation';
?> 


<!-- section -->
<div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-8 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><?= substr($article->nameArticles,0,10); ?></span> <?= substr($article->nameArticles,11); ?></h2>
                        </div>
						<div class="full">
						  <p><?= $article->contentArticles; ?></p>
						</div>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="margin-top_50">
                        <img src="<?= BASE_URL.'/img/'.$article->file; ?>" alt="#" width="370px" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->


