<?php 
  include('includes/verify_install.php');
    include('includes/db.php');

    $sql = "SELECT* from usuarios";
    
    $result = DB::query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
        
</head>


<div class="container"><br><br><br>
  
    <h1> <u> Usuarios Registrados </u> </h1><br><br>
    </font>
    <div>
        <table border="2" >

            <thead>
            <tr>
                <th>ID</th>   <th>Nombres</th>
                <th>Apellidos</th>    <th>Email</th>
                <th>Estado</th>     <th colspan="2">Acciones</th>
            </tr>
            </thead>

           
            <?php while($mostrar=mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?= $mostrar['id'] ?></td>

                <td><?= $mostrar['nombres'] ?></td>

                <td><?= $mostrar['apellidos'] ?></td>

                <td><?= $mostrar['email'] ?></td>

                <td class="<?= $mostrar['estado'] ?>"><?= $mostrar['estado'] ?></td>
                <input type="hidden" name="estado" value="<?= $mostrar['estado']?>">
                <td>
                    <?php  if($mostrar['estado'] == "activo"){  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>"><b>&nbsp; Inactivar &nbsp;<b></a>
                    <?php  }else{  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>"><b>&nbsp; Activar &nbsp;<b></a>
                    <?php  }  ?>
                    
                </td>
                <td> <a href="editar.php?id=<?= $mostrar['id']?>"><b>&nbsp; Editar &nbsp;<b></a><br>  </td>
            </tr>
            <?php } ?>
    </div>
       
        </tbody>

        </table><br><br>
        <h2>
        <input type="button" onclick="location.href='crear.php'" value=" Agregar Usuario "/>
           
        </h2>
    </div>
</div>

</body>
</html>