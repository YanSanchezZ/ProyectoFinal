<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros - Usuarios</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icon@1.7.2/front/boostrap-icons.css">
</head>
<body>



    <div id="carrusel" class="carousel slide" dara-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carrusel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carrusel" data-bs-slide-to="1"  aria-current="true"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carrusel" data-bs-slide-to="2"  aria-current="true"
                aria-label="Slide 3"></button>
                

                
        </div>
        

        
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="./imagenn.jpg" class="d-dblock w-100">
                <div class="carousel-caption">
                    

                </div>
            </div>
            <div class="carousel-item">
                <img src="./clima-laboral.webp" class="d-dblock w-100">
                <div class="carousel-caption">
                   

                </div>
            </div>
            <div class="carousel-item">
                <img src="./Diseño-sin-título-45.png" class="d-dblock w-100">
                <div class="carousel-caption">
                    

                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button"
           data-bs-target="#carrusel"
           data-bs-slide="prev"           
        >
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button"
           data-bs-target="#carrusel"
           data-bs-slide="next"           
        >
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
    </button>

    </div>







    
    <div class="panel_registro">

        <div class="fondo_registro">
            <div class="fondo_registro-login">
                <h3>Iniciar Sesion</h3>
                <button id="btn__iniciar_sesion">Inicio</button>                
            </div>
            <div class="fondo_registro-registro">
                <h3>Registrate Ahora</h3>
                <button id="btn__registrarse">Registrate</button>
            </div>            
        </div>

        <div class="contenedor_formularios">
            <form action="login_usuario.php" method="POST" class="formulario_inicio">
                <h2>Iniciar Sesion</h2> 
                <input type="text" placeholder="Correo Electronico" name="correo">     
                <input type="text" placeholder="Clave" name="clave">          
                <button>Inicio</button>
            </form>

            <form action="registros.php" method="POST" class="formulario_registro">
                <h2>Registrate</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre">
                <input type="text" placeholder="Clave" name="clave">
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="text" placeholder="Telefono" name="telefono">
                <button>Registro</button>
            </form>


        </div>   


    </div>

    <script src="efecto.js"></script>


   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    
</body>
</html>