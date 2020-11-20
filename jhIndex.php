<?php
$name = "Jesus";
$lastname = "Sepulveda";
$cadena = "Hola mi nombre es " . " " . $name . " " . $lastname;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    
</head>

<body>
    <h1>
        <?= $cadena; ?>
    </h1>

    <div class="registerForm">
        <fieldset>
            <form method="POST" action="./assets/app/test.php">
                <legend>
                    <!-- Formulario de Registro -->
                    Operaciones Basicas
                </legend>
                <div class="input-control">
                    <label for="">
                        <!-- Nombre(s) -->
                        Valor 1
                    </label>
                    <!-- <input type="text" name="name" placeholder="Juan"> -->
                    <input type="text" name="value1" placeholder="Valor">

                </div>
                <br>
                <div class="input-control">
                    <label for="">
                       <!--  Apellido(s) -->
                       Valor 2
                    </label>
                   <!--  <input type="text" name="lastname" placeholder="Estrada"> -->
                    <input type="text" name="value2" placeholder="Valor">
                </div>
                <br>
                <div class="input-control">
                    <label for="">
                        <!-- Genero -->
                        Operaciones
                    </label>
                    <br>
                    <!-- Mujer<input type="radio" name="gender" value="M" checked=""> -->
                    Suma<input type="radio" name="operacion" value="suma" > 
                    <br>
                    <!-- Hombre<input type="radio" name="gender" value="H" checked=""> -->
                    Resta<input type="radio" name="operacion" value="resta" >
                    <br> 
                    Multiplicacion<input type="radio" name="operacion" value="multiplicacion" > 
                    <br> 
                    Division<input type="radio" name="operacion" value="division" > 
                </div> 
                <!-- <br> -->
                <!-- <div class="input-control">
                    <label for="">
                        Preferencias:
                    </label>
                    Guitarra
                    <input type="checkbox" name="preferences[]" value="Guitarra">
                    Bateria
                    <input type="checkbox" name="preferences[]" value="Bateria">
                    Bajo
                    <input type="checkbox" name="preferences[]" value="Bajo">
                    Teclado
                    <input type="checkbox" name="preferences[]" value="Teclado">
                    Armónica
                    <input type="checkbox" name="preferences[]" value="Armonica">
                </div> -->
               <!--  <br> -->
               <!--  <div class="input-control">
                    <label for="">
                        Ciudad:
                    </label>
                    <select name="city" id="">
                        <option value="1">
                            La Paz
                        </option>
                        <option value="2">
                            Los Cabos
                        </option>
                    </select>
                </div> -->
                <!-- <br>
                <div class="input-control">
                    <label for="">
                        Contraseña
                    </label>
                    <br>
                    <input type="password" name="password" placeholder="* * * *">
                </div> -->
                <br>
                <button type="submit" class="btn">
                    Guardar Informacion
                </button>
            </form>
        </fieldset>
    </div>
</body>

</html>