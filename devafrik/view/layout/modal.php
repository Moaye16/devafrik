<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= Router::webroot('css/css_modal/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= Router::webroot('css/css_modal/styleperso.css'); ?>">
    <title>Document</title>
</head>
<body >

<!-- ALERT-->
<?= $this->Session->flash(); ?>
<?= $content_for_layout; ?>
<!-- END ALERT-->



</body>
</html>