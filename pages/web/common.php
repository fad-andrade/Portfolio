<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Common User</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="../../assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="../../assets/css/Navigation-with-Search.css">
</head>

<body id="page-top" style="background-color: rgb(43,63,88);">
    <div class="photo-gallery" style="background-color: rgb(43,63,88);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: rgb(255,255,255);">Vídeos Exclusivos</h2>
                <p class="text-center" style="color: rgb(255,255,255);">Você pode aprender um pouco mais sobre os projetos desenvolvidos no ICT UNIFESP.</p>
            </div>
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color: rgba(255,255,255,0);">
                <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"></li>
                            <li class="nav-item" role="presentation"></li>
                            <li class="nav-item" role="presentation"></li>
                        </ul>
                        
                        <form action="common.php" method="post">
                            <i class="fa fa-search" style="margin-right: 10px;color: rgb(255,255,255);"></i>
                            <input type="search" id="search-field" class="search-field" name="search-field" id="search-field" placeholder="Busque pelo nome da UC...">
                            <button class="btn btn-light action-button" type="submit" style="margin-left: 10px;" name="sbmt-1" id="sbmt-1">Buscar&nbsp;</button>
                        </form>
                
                </div>
            </nav>
            <div class="row photos">
                
                
                <?php
                $uc = $_POST['search-field'];
                
                require('bd_connection.php');
                $results = $conn->query("SELECT link FROM Videos WHERE uc='$uc'");
                
                while($row = $results->fetch_assoc()){
                    echo '<div class="col-sm-6 col-md-4 col-lg-3 item">';
                    echo '<a data-lightbox="photos" href="'.$row["link"].'">';
                    echo '<iframe width="200" height="150" src="'.$row["link"].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>';
                    echo '</a>';
                    echo '</div>';
                }
                
                $results->free();
                $conn->close();
                
                ?>
                
            </div>
        </div>
    </div>
    
    <?php
    ?>
    
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/stylish-portfolio.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>
