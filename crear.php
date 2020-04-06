<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>

  
</head>

   
<div class="container">
    <div>
   
    <h1>  Agregar usuarios  </h1><br><br>
    </font>
        
    </div>

    <div>
    <form action="guardar.php" method="post">
        
            <thead>
            <tr>
                <tb><b>nombres<b></tb> <br> <td><input type="text" name="nombre" size="40" required placeholder="nombre"></td>  <br><br>
                <th>apellidos</th> <br> <td><input type="text" name="apellido" size="40" required placeholder="aellido"></td>  <br> <br>
                <th>email</th> <br> <td><input type="text" name="email" size="40" required placeholder="email"></td> <br> <br>
                <th>password</th> <br> <td><input type="password" name="password" size="40" required placeholder="contraseña"></td><br> <br>
            </tr>
            </thead>
            <tr>
                <td colspan="4"><br><button type="submit"><b>Guardar<b></button></td>
                <input type="button" onclick="location.href='index.php'" value=" Ver Registros "/>
            </tr>
            
            </tbody>
        
    </form>
    </div>
</div>


</body>
</html>