<?php
    if(isset($_GET["v"]))
    {
        $it=".";
    }
    else{
        $it="";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facultad de ciencias puras y naturales</title>
<?php
    echo "<link rel='stylesheet' href='".$it."./assets/css/main.css' type='text/css'/>";
?>
    </head>
    <body class="is-preload">

<!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
            <div id="main">
                <div class="inner">

                    <!-- Header -->
                        <header id="header">
                            <?php
                                echo "<a href='".$it."./' class='logo'><strong>INICIO</strong> 'FACULTAD DE CIENCIAS PURAS Y NATURALES'</a>";
                            ?>
                            <ul class="icons">
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                            </ul>
                        </header>