<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header">

        <a href="#" class="logo">
            <img src="img/ense.png" alt="Logo" style="width: 75px;">
        </a>
        <input type="checkbox" id="check">

        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>

        <ul class="navbar">
            <li><a href="#">Inicio</a></li>
            <li>
                <a href="#">Capacitaciones</a>
                <ul class="dropdown">
                    <li><a href="#">Educativa</a></li>
                    <li><a href="#">Competencias</a></li>
                    <li><a href="#">Empresarial</a></li>
                </ul>
            </li>
            <li><a href="#">Contactanos</a></li>
            <li><a href="#">Iniciar sesión</a></li>
        </ul>


    </header>

    <section class="sec-1 show-animate">
        <h1 class="animate">This is an example</h1>
        <p>for the animated scroll</p> 
    </section>
    <section class="sec-2">
        <h1 class="animate">This is another example</h1>
        <p>for the animated scroll</p> 
    </section>
    <section class="sec-3">
        <h1 class="animate">This the last example example</h1>
        <p>for the animated scroll</p> 
    </section>

    <script src="scripts/script.js"></script>

</body>

</html>