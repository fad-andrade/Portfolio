<!DOCTYPE html>
<html class="text-left">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Portfólio</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="../../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css" />
</head>

<body id="page-top">    
    <section class="portfolio-block contact" style="display: true" onchange="showSection()">
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="km">Selecione</label>
                    <select class="form-control item" id="options">
                        <option value="1">Exercício 1</option>
                        <option value="2">Exercício 2</option>
                        <option value="3">Exercício 3</option>
                        <option value="4">Exercício 4</option>
                        <option value="5">Exercício 5</option>
                    </select>
                </div>
            </form>
        </div>
    </section>
    
    <section class="portfolio-block contact" style="display: true" id="exc-1">
        <div class="container">
            <h3>Exercicio 1</h3>
            <form action="homework5.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><label for="km">Quilômetros</label><input type="number" class="form-control item" id="km" name="km" value="10" readonly /></div>
                <div class="form-group"><label for="liters">Litros</label><input type="number" class="form-control item" id="liters" name="liters" value="15" readonly /></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-1" id="sbmt-1">Calcular</button></div>
            </form>
        </div>
    </section>
    
    <section class="portfolio-block contact" style="display: none" id="exc-2">
        <div class="container">
            <h3>Exercicio 2</h3>
            <form action="homework5.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><label for="width">Largura</label><input type="number" class="form-control item" id="width" name="width" /></div>
                <div class="form-group"><label for="height">Comprimento</label><input type="number" class="form-control item" id="height" name="height" /></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-2" id="sbmt-2">Calcular</button></div>
            </form>
        </div>
    </section>
    
    <section class="portfolio-block contact" style="display: none" id="exc-3">
        <div class="container">
            <h3>Exercicio 3.1</h3>
            <form action="homework5.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><label for="base1">Base maior do trapézio</label><input type="number" class="form-control item" id="base1" name="base1" /></div>
                <div class="form-group"><label for="base2">Base menor do trapézio</label><input type="number" class="form-control item" id="base2" name="base2" /></div>
                <div class="form-group"><label for="height1">Altura do trapézio</label><input type="number" class="form-control item" id="height1" name="height1" /></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-3-1" id="sbmt-3-1">Calcular</button></div>
            </form>
            
            <h3>Exercicio 3.2</h3>
            <form action="homework5.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><label for="base1">Comprimento da pirâmide</label><input type="number" class="form-control item" id="width1" name="width1" /></div>
                <div class="form-group"><label for="base2">Largura da pirâmide</label><input type="number" class="form-control item" id="width2" name="width2" /></div>
                <div class="form-group"><label for="height1">Altura da pirâmide</label><input type="number" class="form-control item" id="height2" name="height2" /></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-3-2" id="sbmt-3-2">Calcular</button></div>
            </form>
        </div>
    </section>
    
    <section class="portfolio-block contact" style="display: none" id="exc-4">
        <div class="container">
            <h3>Exercicio 4</h3>
            <form action="homework5.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><label for="width">Lado A</label><input type="number" class="form-control item" id="side1" name="side1" /></div>
                <div class="form-group"><label for="height">Lado B</label><input type="number" class="form-control item" id="side2" name="side2" /></div>
                <div class="form-group"><label for="height">Lado C</label><input type="number" class="form-control item" id="side3" name="side3" /></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-4" id="sbmt-4">Calcular</button></div>
            </form>
        </div>
    </section>
    
    <section class="portfolio-block contact" style="display: none" id="exc-5">
        <div class="container">
            <h3>Exercicio 5</h3>
            <form action="homework5.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><label for="width">N-ésimo termo</label><input type="number" class="form-control item" id="n-num" name="nnum" /></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-5" id="sbmt-5">Calcular</button></div>
            </form>
        </div>
    </section>
    
    <br />
    
    <?php
        function consumption($km, $liters){
            if($liters != 0){
                $result = $km / $liters;
                echo "<script>alert('$result km/litro');</script>";
            }
        }
        
        function capacity($width, $height){
            $area = $width * $height;
            $result = floor($area / 2.25);
            echo "<script>alert('$result alunos/sala');</script>";
        }
        
        function trapeze($base1, $base2, $height1){
            $result = ($base1 + $base2) * $height1 / 2;
            echo "<script>alert('A área do trapézio é $result');</script>";
        }
        
        function pyramid($width1, $width2, $height2){
            $result = $width1 * $width2 * $height2 * (1/3);
            echo "<script>alert('O volume da pirâmide é $result');</script>";
        }
        
        function triangle($side1, $side2, $side3){
            if(($side1 > $side2+$side3)||($side2 > $side1+$side3)||($side3 > $side1+$side2)){
                echo "<script>alert('Não é triângulo');</script>";
            } else{
                if(($side1 == $side2) && ($side1 == $side3)){
                    echo "<script>alert('Triângulo Equilátero');</script>";
                } else{
                    if(($side1 == $side2) || ($side1 == $side3) || ($side2 == $side3)){
                        echo "<script>alert('Triângulo Isósceles');</script>";
                    } else {  
                        echo "<script>alert('Triângulo Escaleno');</script>";
                    }
                }
            } 
        }
        
        function fibbo($nnum){
            $first = 0;
            $second = 1;
            
            $arr = array($first, $second);

            for($i = 0; $i < $nnum - 2; $i++){
                $fibo = $first + $second;
                $first = $second;
                $second = $fibo;
                array_push($arr, $fibo);
            }
            
            echo "<script type='text/javascript'> alert(".json_encode($arr).") </script>";
        }
        
        if(array_key_exists('sbmt-1',$_POST)){
            $km = $_POST['km'];
            $liters = $_POST['liters'];
            consumption($km, $liters);
            
        } else if(array_key_exists('sbmt-2',$_POST)){
            $width = $_POST['width'];
            $height = $_POST['height'];
            capacity($width, $height);
            
        } else if(array_key_exists('sbmt-3-1',$_POST)){
            $base1 = $_POST['base1'];
            $base2 = $_POST['base2'];
            $height1 = $_POST['height1'];
            trapeze($base1, $base2, $height1);
            
        } else if(array_key_exists('sbmt-3-2',$_POST)){
            $width1 = $_POST['width1'];
            $width2 = $_POST['width2'];
            $height2 = $_POST['height2'];
            pyramid($width1, $width2, $height2);
            
        } else if(array_key_exists('sbmt-4',$_POST)){
            $side1 = $_POST['side1'];
            $side2 = $_POST['side2'];
            $side3 = $_POST['side3'];
            triangle($side1, $side2, $side3);
            
        } else if(array_key_exists('sbmt-5',$_POST)){
            $nnum = $_POST['nnum'];
            fibbo($nnum);
        }
    ?>

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/stylish-portfolio.js"></script>
    
    <script>
        $(document).ready(function(){
            $('#options').on('change', function() {
                if (this.value == '1'){
                    $("#exc-1").show();
                    $("#exc-2").hide();
                    $("#exc-3").hide();
                    $("#exc-4").hide();
                    $("#exc-5").hide();
                } else if(this.value == '2'){
                    $("#exc-1").hide();
                    $("#exc-2").show();
                    $("#exc-3").hide();
                    $("#exc-4").hide();
                    $("#exc-5").hide();
                } else if(this.value == '3'){
                    $("#exc-1").hide();
                    $("#exc-2").hide();
                    $("#exc-3").show();
                    $("#exc-4").hide();
                    $("#exc-5").hide();
                } else if(this.value == '4'){
                    $("#exc-1").hide();
                    $("#exc-2").hide();
                    $("#exc-3").hide();
                    $("#exc-4").show();
                    $("#exc-5").hide();
                } else if(this.value == '5'){
                    $("#exc-1").hide();
                    $("#exc-2").hide();
                    $("#exc-3").hide();
                    $("#exc-4").hide();
                    $("#exc-5").show();
                }
            });
        });
    </script>
    
</body>

</html>
