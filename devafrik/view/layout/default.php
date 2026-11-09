<?php $contact = $this->request('Dashboards', 'contact'); ?>

<?php $slideshows = $this->request('Slideshows', 'getSlideshow'); ?>
<?php $GLOBALS['TitleMenu'] = "$title_for_layout"; $slideshowsFirst = $this->request('Slideshows', 'getSlideshowFirst');   //debug($slideshowsFirst); die(); ?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= isset($title_for_layout) ? $title_for_layout.".::. D.A.I.H" : "D.A.I.H"; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?= BASE_URL."/img/logo/ico/{$contact->ico_file}"; ?>">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= BASE_URL.'/css/css_daih/animate.css'; ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?= BASE_URL.'/css/css_daih/icomoon.css'; ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?= BASE_URL.'/css/css_daih/bootstrap.min.css'; ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?= BASE_URL.'/css/css_daih/flexslider.css'; ?>">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?= BASE_URL.'/css/css_daih/fonts/flaticon/font/flaticon.css'; ?>">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?= BASE_URL.'/css/css_daih/owl.carousel.min.css'; ?>">
	<link rel="stylesheet" href="<?= BASE_URL.'/css/css_daih/owl.theme.default.min.css'; ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= BASE_URL.'/css/css_daih/style.css'; ?>">
	<link rel="stylesheet" href="<?= BASE_URL.'/css/css_daih/styleperso.css'; ?>">

	<!-- Modernizr JS -->
	<script src="<?= BASE_URL.'/js/js_daih/modernizr-2.6.2.min.js'; ?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo" class="arplan">
				<a href="<?= Router::url(""); ?>">
					<img width=150px src="<?= BASE_URL."/img/logo/{$contact->file}"; ?>" alt="<?= $contact->sigle; ?>" />
				</a>
			</h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<?php $pagesMenu = $this->request('Menus', 'getMenu'); ?>
						<?php foreach ($pagesMenu as $p): ?>
							<li class="nav-item"><a class="nav-link <?php if($p->nameMenu==$title_for_layout) echo 'active'; ?>" href="<?= ($p->nameMenu == "Accueils") ? Router::url("") : Router::url("index.php/slug:{$p->slugMenu}"); ?>" title="<?php echo $p->nameMenu; ?>"><?php if($p->nameMenu == "Accueils"){ echo "Accueil"; }elseif($p->nameMenu == "Blogs"){ echo "Blog"; }else{ echo $p->nameMenu; } ?></a></li>
						<?php endforeach; ?>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<p>
					<small>
						Copyright &copy; 2021 développé <i class="icon-heart" aria-hidden="true"></i> par 
						<a href="https://www.synergieintegrale-ci.com" target="_blank">Synergie Intégrale Côte d'Ivoire</a>
					</small>
				</p>
				<ul>
					<li><a href="<?= $contact->facebook; ?>"><i class="icon-facebook2"></i></a></li>
					<li><a href="<?= $contact->twitter; ?>"><i class="icon-twitter2"></i></a></li>
					<li><a href="<?= $contact->instagram; ?>"><i class="icon-instagram"></i></a></li>
					<li><a href="<?= $contact->linkedin; ?>"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="colorlib-main">
			

		<!-- Page Content -->
			
			
			<!-- ALERT-->
			<div class="container">
					<?= $this->Session->flash(); ?>
				</div>
			<!-- END ALERT-->
			<!-- CONTENT-->
				<?= $content_for_layout; ?>
			<!-- END CONTENT-->
			
			


			<div id="get-in-touch" class="colorlib-bg-color">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Nous joindre !</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="colorlib-lead">Vous pouvez nous joindre à tout instant de la journée. Nous sommes à votre entière disposition.</p>
						<?php foreach ($pagesMenu as $p): ?>
							<?php if($p->nameMenu == "Contactez-nous"): ?>
							<p><a href="<?= Router::url("index.php/slug:{$p->slugMenu}"); ?>" class="btn btn-primary btn-learn">Contactez-nous !</a></p>
						</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="<?= BASE_URL.'/js/js_daih/jquery.min.js'; ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?= BASE_URL.'/js/js_daih/jquery.easing.1.3.js'; ?>"></script>
	<!-- Bootstrap -->
	<script src="<?= BASE_URL.'/js/js_daih/bootstrap.min.js'; ?>"></script>
	<!-- Waypoints -->
	<script src="<?= BASE_URL.'/js/js_daih/jquery.waypoints.min.js'; ?>"></script>
	<!-- Flexslider -->
	<script src="<?= BASE_URL.'/js/js_daih/jquery.flexslider-min.js'; ?>"></script>
	<!-- Sticky Kit -->
	<script src="<?= BASE_URL.'/js/js_daih/sticky-kit.min.js'; ?>"></script>
	<!-- Owl carousel -->
	<script src="<?= BASE_URL.'/js/js_daih/owl.carousel.min.js'; ?>"></script>
	<!-- Counters -->
	<script src="<?= BASE_URL.'/js/js_daih/jquery.countTo.js'; ?>"></script>
	
	
	<!-- MAIN JS -->
	<script src="<?= BASE_URL.'/js/js_daih/main.js'; ?>"></script>



	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="dash">
				

			</div>
		</div>
	</div>

	<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
          
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);

          var dataString = 'id='+recipient;

          if("<?= $this->request->controller; ?>" == 'Comments'){

                var ok;
                
                var statut = $('.stud_id').val();

                if(statut == 'En ligne'){
                        ok = 1;  
                }else{
                        ok = 0; 
                }

              var online = 'onlineComment='+ok;  

              var dataBase =  'dataString & +online';
          }
          
          
          
          
            $.ajax({
                type: "POST",
                url: "<?= Router::url('index.php/modal/'.$this->request->controller.'/view/'); ?>"+recipient,
                data: dataBase,
                cache: false,
                datatype: "html",
                success: function (data) {
                    console.log(data);
                    modal.find('.dash').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
    })
</script>

	</body>
</html>
