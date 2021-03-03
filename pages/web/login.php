<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="../../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../../assets/css/Login-Form-Dark.css">
</head>

<body id="page-top">
    <div class="login-dark" style="background-image: url(&quot;../../assets/img/dark-sand.jpg&quot;);">
        <form action="login.php" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" id="email" placeholder="Email" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Senha"required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="sbmt-1" id="sbmt-1">Log In</button></div>
            <div class="form-group"><button class="btn btn-primary btn-block" name="sbmt-2" id="sbmt-2">Cadastra-se</button></div>
        </form>
    </div>
    
    <?php
        function login($email, $pass){
            require('bd_connection.php');
            
            $results = $conn->query("SELECT tipo FROM Usuarios WHERE email='$email' AND senha='$pass'");
            $row = $results->fetch_assoc();
            $type = $row['tipo'];     
            $results->free();
            $conn->close();
            
            if(strcmp($type, 'sudo') == 0){
                header("Location: sudo.php");
                exit();
            }else if(strcmp($type, 'common') == 0){
                header("Location: common.php");
                exit();
            }else{
                echo "<script>alert('Credenciais inválidas!');</script>";
            }
        }
        
        function register($email, $pass){
            require('bd_connection.php');
            
            $type = "common";
            $stmt = $conn->prepare("INSERT INTO Usuarios(email, senha, tipo) VALUES (?, ?, ?)");
            $stmt->bind_param('sss', $email, $pass, $type);
            $stmt->execute();
            $conn->close();
            
            header("Location: common.php");
            exit();
        }
        
        if(array_key_exists('sbmt-1', $_POST)){
            $email = $_POST['email'];
            $pass = md5($_POST['password']);
            login($email, $pass);
        }
        
        if(array_key_exists('sbmt-2', $_POST)){
            $email = $_POST['email'];
            $pass = md5($_POST['password']);
            register($email, $pass);
        }
    
    
    ?>
    
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/stylish-portfolio.js"></script>
</body>

</html>
