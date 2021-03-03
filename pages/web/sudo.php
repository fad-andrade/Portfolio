<!DOCTYPE html>
<html class="text-left">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Super Admin</title>
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
            <form action="sudo.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><label for="uc_i">Nome da UC</label><input type="text" class="form-control item" id="uc_i" name="uc_i"/></div>
                <div class="form-group"><label for="link_i">Embed do vídeo</label><input type="text" class="form-control item" id="link_i" name="link_i"/></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-1" id="sbmt-1">Inserir</button></div>
            </form>
        </div>
    </section>
    
    <section class="portfolio-block contact" style="display: none" id="update">
        <div class="container">
            <h3>Update</h3>
            <form action="sudo.php" method="post">
                <label class="text-right d-sm-flex justify-content-sm-end">
                    <input type="reset" value="Limpar" style="color: rgb(29,128,159);font-size: 13px; background: white; border: 0px;  outline: none;";>
                </label>
                <div class="form-group"><label for="id_u">ID</label><input type="text" class="form-control item" id="id_u" name="id_u"/></div>
                <div class="form-group"><label for="uc_u">Nome da UC</label><input type="text" class="form-control item" id="uc_u" name="uc_u"/></div>                
                <div class="form-group"><label for="link_u">Embed do vídeo</label><input type="text" class="form-control item" id="link_u" name="link_u"/></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(29,128,159);" name="sbmt-3" id="sbmt-3">Atualizar</button></div>
            </form>
        </div>
    </section>
    
    <section class="portfolio-block contact" style="display: none" id="delete">
        <div class="container">
            <h3>Delete</h3>
            <form action="sudo.php" method="post">
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
        function insert($uc, $link){
            require('bd_connection.php');
            
            $stmt = $conn->prepare("INSERT INTO Videos(uc, link) VALUES (?, ?)");
            $stmt->bind_param('ss', $uc, $link);
            $stmt->execute();
            
            $newID = $stmt->insert_id;
            
            echo "<script>alert('Vídeo $newID inserido com sucesso');</script>";
            $conn->close();
        }
        
        function update($id, $uc, $link){
            require('bd_connection.php');
            
            $stmt = $conn->prepare("UPDATE Videos SET uc = ?, link = ? WHERE id = ?");
            $stmt->bind_param('ssi', $uc, $link, $id);
            $stmt->execute();
            
            if($stmt)
                echo "<script>alert('Vídeo $id atualizado com sucesso');</script>";
            else
                echo "<script>alert('Vídeo $id não foi atualizado');</script>";
            
            $conn->close();
        }
        
        function delete($id){
            require('bd_connection.php');
            
            $stmt = $conn->prepare("DELETE FROM Videos WHERE id = ?");
            $stmt->bind_param('i', $id);
            $stmt->execute();
            
            if($stmt)
                echo "<script>alert('Vídeo $id deletado com sucesso');</script>";
            else
                echo "<script>alert('Vídeo $id não foi deletado');</script>";
            
            $conn->close();
        }
        
        if(array_key_exists('sbmt-1',$_POST)){
            $uc = $_POST['uc_i'];
            $link = $_POST['link_i'];
            insert($uc, $link);
            
        } else if(array_key_exists('sbmt-3',$_POST)){
            $id = $_POST['id_u'];
            $uc = $_POST['uc_u'];
            $link = $_POST['link_u'];
            update($id, $uc, $link);
            
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
                    $("#update").hide();
                    $("#delete").hide();
                } else if(this.value == '3'){
                    $("#insert").hide();
                    $("#update").show();
                    $("#delete").hide();
                } else if(this.value == '4'){
                    $("#insert").hide();
                    $("#update").hide();
                    $("#delete").show();
                }
            });
        });
    </script>
    
</body>

</html>
