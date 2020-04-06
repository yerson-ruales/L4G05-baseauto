<?php
    include('includes/db.php');

    if(isset($_GET['id']) == false){
            echo "DEBE DE ENVIAR UN ID";
        die;
    }

    $id = $_GET['id'];
    $sql = "SELECT * from usuarios where id= $id";
    $persona = DB::query($sql);
    $persona = mysqli_fetch_object($persona);
    if($persona == false){
            echo "USUARIO NO EXISTENTE";
        die;
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="style.css">
</head>

 
<div class="container">
    <div>
    
    <h1> <u> Editar Usuarios </u> </h1><br><br>
    </font>
        
    </div>

    <div>
    <form action="guardar.php" method="post">
    <input type="hidden" name="id" value="<?= $persona->id ?>">
        
            <thead>
            <tr>
                <th><b>nombres<b></th> <br> <td><input type="text" name="nombre" size="40" required="" value="<?= $persona->nombres ?>"></td><br><br>
                <th>apellidos</th> <br> <td><input type="text" name="apellido" size="40" required="" value="<?= $persona->apellidos ?>"></td><br><br>
                <th>email</th> <br> <td><input type="text" name="email" size="40" required="" value="<?= $persona->email?>"></td><br><br>
                <th>password</th><br> <td><input type="password" name="password" size="40" value=""></td><br><br>
                <!--<th><u> estado <u></th><br>-->
            </tr>
           
            </thead>
            <tbody class="center">
            <tr>                
                <td>
                <?php  if($persona->estado == "activo"){  ?>
                        <input type="radio" name="estado" value="activo" checked>Activo<br>
                        <input type="radio" name="estado" value="inactivo">Inactivo
                    <?php  }else{  ?>
                        <input type="radio" name="estado" value="activo" >Activo<br>
                        <input type="radio" name="estado" value="inactivo" checked>Inactivo<br>
                    <?php  }  ?>
                </td>
            </tr><br>
            <tr>
                <button type="submit">Guardar</button></td>
                <input type="button" onclick="location.href='index.php'" value=" Ver Registros "/>
            </tr>
               
            </tbody>
    </form>
    </div>
</div>

</body>
</html>