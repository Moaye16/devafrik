<?php $contact = $this->request('Dashboards', 'contact'); ?>
<!--?php $contact = $this->request('Dashboards', 'paramCompteur'); ?-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $contact->sigle; ?> .::. </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= BASE_URL."/img/logo/ico/{$contact->ico_file}"; ?>" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?= BASE_URL.'/css/css_daih/fonts/flaticon/font/flaticon.css'; ?>">
    <!-- Fontawesome font-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= Router::webroot('css/css_admin/bootstrap.min.css'); ?>">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= Router::webroot('css/css_admin/bootstrap-select.min.css'); ?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= Router::webroot('css/css_admin/themify-icons.css'); ?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= Router::webroot('css/css_admin/icofont.css'); ?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= Router::webroot('css/css_admin/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= Router::webroot('css/css_admin/jquery.mCustomScrollbar.css'); ?>">
</head>

<body >
<!-- Pre-loader start -->
<div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <a class="mobile-search morphsearch-search" href="#">
                        <i class="ti-search"></i>
                    </a>
                    <a href="<?= Router::url("index.php/cockpit"); ?>">
                        <img class="img-fluid" width=75px src="<?= BASE_URL."/img/logo/{$contact->file}"; ?>" alt="<?= $contact->sigle; ?>" />
                    </a>
                    <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                        </li>

                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <a href="#!">
                                <i class="ti-bell"></i>
                                <span class="badge bg-c-pink"></span>
                            </a>
                            <ul class="show-notification">
                                <li>
                                    <h6>Notifications</h6>
                                    <label class="label label-danger">New</label>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">John Doe</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">Joseph William</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">Sara Soudein</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="user-profile header-notification">
                            <a href="#!">
                                <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                <span><?= $this->Session->user('firstname').' '.$this->Session->user('lastname'); ?></span>
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <li>
                                    <a href="#!">
                                        <i class="ti-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-email"></i> My Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-lock"></i> Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Router::webroot('index.php/users/logout'); ?>">
                                        <i class="ti-layout-sidebar-left"></i> Deconnexion
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="">
                            <div class="main-menu-header">
                                <img class="img-40 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                <div class="user-details">
                                    <span><?= $this->Session->user('firstname').' '.$this->Session->user('lastname'); ?></span>
                                    <span id="more-details"><?= $this->Session->user('role'); ?><i class="ti-angle-down"></i></span>
                                </div>
                            </div>

                            <div class="main-menu-content">
                                <ul>
                                    <li class="more-details">
                                        <a href="#"><i class="ti-user"></i>View Profile</a>
                                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                                        <a href="<?= Router::URL('index.php/users/logout'); ?>"><i class="ti-layout-sidebar-left"></i>Deconnexion</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Tableau de bord & pages</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="active">
                                <a href="<?= Router::url("index.php/cockpit"); ?>">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Tableau de bord</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-write"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Edition de pages</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="<?= Router::url("index.php/cockpit/menus"); ?>">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Pages</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?= Router::url("index.php/cockpit/articles"); ?>">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Articles</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?= Router::url("index.php/cockpit/recrutements"); ?>">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Offres d'emploi</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?= Router::url("index.php/cockpit/slideshows"); ?>">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Slideshow</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Médias & utilisateurs</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-video-camera"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Médias</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="<?= Router::url("index.php/cockpit/images"); ?>">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Images</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?= Router::url("index.php/cockpit/photos"); ?>">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Galeries</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?php echo Router::url("index.php/cockpit/equipes"); ?>">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Equipes</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?php echo Router::url("index.php/cockpit/partenaires"); ?>">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Partenaires</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?php echo Router::url("index.php/cockpit/medias"); ?>">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Videos</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-user"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Utilisateurs</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="<?= Router::url("index.php/cockpit/users"); ?>">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Comptes</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?= Router::url("index.php/cockpit/members"); ?>">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Membres</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Gestion du blog</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="<?= Router::url('index.php/cockpit/blogs/'); ?>">
                                    <span class="pcoded-micon"><i class="ti-archive"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Posts</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Router::url('index.php/users/logout'); ?>">
                                    <span class="pcoded-micon"><i class="ti-comments"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Commentaires</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>

                        </ul>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Retour au site</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="<?= Router::url(''); ?>">
                                    <span class="pcoded-micon"><i class="ti-layout"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Voir le site</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Router::url('index.php/users/logout'); ?>">
                                    <span class="pcoded-micon"><i class="ti-power-off"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Deconnexion</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">

                                <!-- ALERT-->
                                <?= $this->Session->flash(); ?>
                                <?= $content_for_layout; ?>
                                <!-- END ALERT-->

                            </div>
                        </div>
                        <div id="styleSelector">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/jquery-ui.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/popper.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/bootstrap-select.js'); ?>"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/jquery.slimscroll.js'); ?>"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/modernizr.js'); ?>"></script>
<!-- am chart -->
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/amchart/amcharts.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/amchart/serial.min.js'); ?>"></script>
<!-- Todo js -->
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/todo/todo.js'); ?>"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/dashboard/custom-dashboard.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/script.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/SmoothScroll.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/pcoded.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/demo-12.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/js_admin/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>

<script type="text/javascript" src="<?= Router::webroot('js/url.inc.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/tinymce/jquery.tinymce.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Router::webroot('js/tinymce/tinymce.min.js'); ?>"></script>

<script>

tinyMCE.init({
        mode : "textareas",
        editor_selector: "wysiwyg",
        height: 300,
        browser_spellcheck: true,
        contextmenu: false,
        themes: 'modern',
        relative_urls : false,
        language:"fr_FR",
        plugins: [
            "advlist, autolink, autosave, link, image, lists, charmap, print, preview, hr, anchor, pagebreak, spellchecker, layer,",
            "searchreplace, visualblocks, visualchars, code, fullscreen, insertdatetime, media, nonbreaking, responsivefilemanager",
            "table, contextmenu, directionality, emoticons, template, textcolor, paste, fullpage, textcolor, colorpicker, textpattern, imagetools"
        ],

        toolbar1: "bold, italic, underline, strikethrough,|,bullist,numlist,|,outdent, indent, blockquote,|,alignleft,aligncenter,alignright,alignjustify,|,link,unlink,image|undo, redo",
        toolbar2: "forecolor, preview, code,|,styleselect formatselect, fontselect, fontsizeselect,|,image, spellchecker",
        toolbar3: "",
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'],

        menubar: false,
        toolbar_items_size: 'small',

        image_caption: true,
        relative_urls: false,
        image_advtab: true,
        
        
        external_filemanager_path: "<?= Router::webroot('js/filemanager/'); ?>",
        filemanager_title: "Galerie",
        external_plugins: {"filemanager": "<?= Router::webroot('js/filemanager/plugin.min.js'); ?>"},
        visualblocks_default_state: false,
        style_formats_autohide: true,
        style_formats_merge: true,
           
        
    style_formats: [{
            title: 'Bold text',
            inline: 'b'
        }, {
            title: 'Red text',
            inline: 'span',
            styles: {
                color: '#ff0000'
            }
        }, {
            title: 'Red header',
            block: 'h1',
            styles: {
                color: '#ff0000'
            }
        }, {
            title: 'Example 1',
            inline: 'span',
            classes: 'example1'
        }, {
            title: 'Example 2',
            inline: 'span',
            classes: 'example2'
        }, {
            title: 'Table styles'
        }, {
            title: 'Table row 1',
            selector: 'tr',
            classes: 'tablerow1'
        }],

        templates: [{
            title: 'Test template 1',
            content: 'Test 1'
        }, {
            title: 'Test template 2',
            content: 'Test 2'
        }],

    });


</script>

<script>
     $(function() { 
    $(document).ready(function(){
        $("#inputnameMenu").on("input", function(){
          $("#inputslugMenu").val(format_url($(this).val()));
        });
      });
});
</script>

<script>
     $(function() { 
    $(document).ready(function(){
        $("#inputnamePhotos").on("input", function(){
          $("#inputslugPhotos").val(format_url($(this).val()));
        });
      });
});
</script>

<script>
     $(function() { 
    $(document).ready(function(){
        $("#inputnameAlbum").on("input", function(){
          $("#inputslugAlbum").val(format_url($(this).val()));
        });
      });
});
</script>

<script>
     $(function() { 
    $(document).ready(function(){
        $("#inputnameArticles").on("input", function(){
          $("#inputslugArticles").val(format_url($(this).val()));
        });
      });
});
</script>

<script>
     $(function() { 
    $(document).ready(function(){
        $("#inputcontent").on("input", function(){
          $("#inputslug").val(format_url($(this).val()));
        });
      });
});
</script>

<script>
     $(function() { 
        $(document).ready(function(){
            $("#inputtitre").on("input", function(){
            $("#inputslugRecru").val(format_url($(this).val()));
            });
        });
    });
</script>

<script>
     $(function() { 
        $(document).ready(function(){
            $("#inputtitle").on("input", function(){
            $("#inputslugtopic").val(format_url($(this).val()));
            });
        });
    });
</script>

<script>
     $(function() { 
        $(document).ready(function(){
            $("#inputtitlecategory").on("input", function(){
            $("#inputslugCategory").val(format_url($(this).val()));
            });
        });
    });
</script>

<script>
     $(function() { 
        $(document).ready(function(){
            $("body").on('input', function(){
            $("#inputaccount").val(format_url($('#inputfirstnameMembers').val())+"."+format_url($('#inputlastnameMembers').val())+'@a2gc.ci');
            });
        });
    });
</script>

<script>
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        }
        else {
            nav.removeClass('active');
        }
    });
</script>

</body>
</html>

