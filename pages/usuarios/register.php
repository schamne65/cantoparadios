<form action="./functions.php" method="POST" >
    <input type="hidden" name="tipo" value="register_user">
        <label for="user_name">Nombre Usuario</label>
        <input type="text" id="user_name" name="user_name" required >
        
        <label for="user_password">Contraseña</label>
        <input type="password" id="user_password"  name="user_password" required> 

        <label for="user_email">E-mail para recuperar contrasenia</label>
        <input type="e-mail" id="user_email"  name="user_email" >     
       
         
        <input type="submit" value="Guardar">
</form>