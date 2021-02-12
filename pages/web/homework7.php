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
                        <option value="1">Insert</option>
                        <option value="2">Select</option>
                        <option value="3">Update</option>
                        <option value="4">Delete</option>
                    </select>
                </div>
            </form>
        </div>
    </section>
    
    <section class="portfolio-block contact" style="display: true" id="insert">
        <div class="container">
            <h3>Insert</h3>
            <form action="homework7.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><label for="title_i">Título do filme</label><input type="text" class="form-control item" id="title_i" name="title_i"/></div>
                <div class="form-group"><label for="year_i">Ano de lançamento</label><input type="text" class="form-control item" id="year_i" name="year_i"/></div>
                <div class="form-group"><label for="director_i">Diretor</label><input type="text" class="form-control item" id="director_i" name="director_i"/></div>
                <div class="form-group"><label for="gender_i">Gênero</label><input type="text" class="form-control item" id="gender_i" name="gender_i"/></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-1" id="sbmt-1">Inserir</button></div>
            </form>
        </div>
    </section>
    
    <section class="portfolio-block contact" style="display: none" id="select">
        <div class="container">
            <h3>Select</h3>
            <form action="homework7.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-2" id="sbmt-2">Exibir Todos</button></div>
            </form>
        </div>
    </section>
    
    <section class="portfolio-block contact" style="display: none" id="update">
        <div class="container">
            <h3>Update</h3>
            <form action="homework7.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><label for="id_u">ID</label><input type="text" class="form-control item" id="id_u" name="id_u"/></div>                
                <div class="form-group"><label for="title_u">Título do filme</label><input type="text" class="form-control item" id="title_u" name="title_u"/></div>
                <div class="form-group"><label for="year_u">Ano de lançamento</label><input type="text" class="form-control item" id="year_u" name="year_u"/></div>
                <div class="form-group"><label for="director_u">Diretor</label><input type="text" class="form-control item" id="director_u" name="director_u"/></div>
                <div class="form-group"><label for="gender_u">Gênero</label><input type="text" class="form-control item" id="gender_u" name="gender_u"/></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-3" id="sbmt-3">Atualizar</button></div>
            </form>
        </div>
    </section>
    
    <section class="portfolio-block contact" style="display: none" id="delete">
        <div class="container">
            <h3>Delete</h3>
            <form action="homework7.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><label for="id_d">ID</label><input type="text" class="form-control item" id="id_d" name="id_d"/></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-4" id="sbmt-4">Deletar</button></div>
            </form>
        </div>
    </section>
    
    <br />
    
    <?php
        function insert($title, $year, $director, $gender){
            require('bd_connection.php');
            
            $stmt = $conn->prepare("INSERT INTO Filmes(titulo, ano, diretor, genero) VALUES (?, ?, ?, ?)");
            $stmt->bind_param('ssss', $title, $year, $director, $gender);
            $stmt->execute();
            
            $newID = $stmt->insert_id;
            
            echo "<script>alert('Filme $newID inserido com sucesso');</script>";
            $conn->close();
        }
        
        function select(){
            require('bd_connection.php');
            
            $results = $conn->query("SELECT id, titulo, ano, diretor, genero FROM Filmes ORDER BY id ASC");
            
            echo "<center><table>";
            
            echo '<tr>';
            echo ' <td> <b> ID </b> </td>';
            echo ' <td> <b> Título </b> </td>';
            echo ' <td> <b> Ano </b> </td>';
            echo ' <td> <b> Diretor </b> </td>';
            echo ' <td> <b> Gênero </b> </td>';
            
            while($row = $results->fetch_assoc()){
                echo '<tr>';
                echo ' <td>'.$row["id"].'</td>';
                echo ' <td>'.$row["titulo"].'</td>';
                echo ' <td>'.$row["ano"].'</td>';
                echo ' <td>'.$row["diretor"].'</td>';
                echo ' <td>'.$row["genero"].'</td>';
                echo "</tr>";
            }
            
            echo "</table></center>";
            
            $results->free();
            $conn->close();
        }
        
        function update($id, $title, $year, $director, $gender){
            require('bd_connection.php');
            
            $stmt = $conn->prepare("UPDATE Filmes SET titulo = ?, ano = ?, diretor = ?, genero = ? WHERE id = ?");
            $stmt->bind_param('ssssi', $title, $year, $director, $gender, $id);
            $stmt->execute();
            
            if($stmt)
                echo "<script>alert('Filme $id atualizado com sucesso');</script>";
            else
                echo "<script>alert('Filme $id não foi atualizado');</script>";
            
            $conn->close();
        }
        
        function delete($id){
            require('bd_connection.php');
            
            $stmt = $conn->prepare("DELETE FROM Filmes WHERE id = ?");
            $stmt->bind_param('i', $id);
            $stmt->execute();
            
            if($stmt)
                echo "<script>alert('Filme $id deletado com sucesso');</script>";
            else
                echo "<script>alert('Filme $id não foi deletado');</script>";
            
            $conn->close();
        }
        
        if(array_key_exists('sbmt-1',$_POST)){
            $title = $_POST['title_i'];
            $year = $_POST['year_i'];
            $director = $_POST['director_i'];
            $gender =$_POST['gender_i'];
            insert($title, $year, $director, $gender);
            
        } else if(array_key_exists('sbmt-2',$_POST)){
            select();
            
        } else if(array_key_exists('sbmt-3',$_POST)){
            $id = $_POST['id_u'];
            $title = $_POST['title_u'];
            $year = $_POST['year_u'];
            $director = $_POST['director_u'];
            $gender =$_POST['gender_u'];
            update($id, $title, $year, $director, $gender);
            
        } else if(array_key_exists('sbmt-4',$_POST)){
            $id = $_POST['id_d'];
            delete($id);
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
                    $("#insert").show();
                    $("#select").hide();
                    $("#update").hide();
                    $("#delete").hide();
                } else if(this.value == '2'){
                    $("#insert").hide();
                    $("#select").show();
                    $("#update").hide();
                    $("#delete").hide();
                } else if(this.value == '3'){
                    $("#insert").hide();
                    $("#select").hide();
                    $("#update").show();
                    $("#delete").hide();
                } else if(this.value == '4'){
                    $("#insert").hide();
                    $("#select").hide();
                    $("#update").hide();
                    $("#delete").show();
                }
            });
        });
    </script>
    
</body>

</html>
