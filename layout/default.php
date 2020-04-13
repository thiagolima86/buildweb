<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buildweb</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <?php css_tag("style"); ?>
    
    

</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <div class="col-md-3 col-sm-6 col-8">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <?php img("budweb_logo.png", "autox25"); ?>
            </a>
        </div>
        <div class="col-">
            <a href="#" class="icon-menu">
                <i class="fas fa-bars"></i>
            </a>
            <ul class="main-menu">
                <li><a href="#" class="btn-close-menu"><i class="fas fa-times"></i></a></li>
                <li><a href="#">quem somos</a></li>
                <li><a href="#">o que fazemos</a></li>
                <li><a href="#">equipe</a></li>
                <li><a href="#">contato</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php echo yield_page(); ?>

<footer>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-6">
                Al. das angélicas, 263, Cidade 2000, 
                <br>
                Fortaleza-ce | +55 (85) 9 8102-0026
            </div>
            <div class="col- text-right">
                <?php img("budweb_logo_footer.png", "autox18"); ?>
            </div>
        </div>
    </div>
</footer>

<?php js_tag("jquery.min"); ?>
<?php js_tag("pooper.min"); ?>
<?php js_tag("bootstrap.min"); ?>
<?php js_tag("menu"); ?>
</body>
</html>