<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAMP STACK</title>
    <link rel="shortcut icon" href="/assets/images/php.svg" type="image/svg+xml">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/bulma.min.css">
</head>

<body>
    <section class="hero is-medium is-bold" id="fondo">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title has-text-white">
                    LAMP STACK
                </h1>
                <h2 class="subtitle has-text-white">
                    Tu entorno de desarrollo local
                </h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h3 class="title is-3 has-text-centered">Servicios</h3>
                    <hr>
                    <div class="content">
                        <ul>
                            <li><?= apache_get_version(); ?></li>
                            <li>PHP <?= phpversion(); ?></li>
                            <li>
                                <?php
                                $link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

                                /* check connection */
                                if (mysqli_connect_errno()) {
                                    printf("MySQL connecttion failed: %s", mysqli_connect_error());
                                } else {
                                    /* print server version */
                                    printf("MySQL Server %s", mysqli_get_server_info($link));
                                }
                                /* close connection */
                                mysqli_close($link);
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <h3 class="title is-3 has-text-centered">Enlaces rápidos</h3>
                    <hr>
                    <div class="content">
                        <ul>
                            <li><a href="/phpinfo.php" style="color: #852CD5;" target="_blank">phpinfo()</a></li>
                            <li><a href="http://localhost:<? print $_ENV['PMA_PORT']; ?>" style="color: #852CD5;" target="_blank">phpMyAdmin</a></li>
                            <li><a href="/test_db.php" style="color: #852CD5;" target="_blank">Test DB Connection with mysqli</a></li>
                            <li><a href="/test_db_pdo.php" style="color: #852CD5;" target="_blank">Test DB Connection with PDO</a></li>
                            <?php
                            // Ruta del directorio home/jeroalbusto/www
                            $rutaDirectorio = __DIR__;

                            // Obtengo la lista de archivos y carpetas del directorio www
                            $archivos = scandir($rutaDirectorio);

                            // Filtro las carpetas y obtengo solo los nombres
                            $carpetas = array_filter($archivos, function ($archivo) use ($rutaDirectorio) {
                                return is_dir($rutaDirectorio . '/' . $archivo) && $archivo != '.' && $archivo != '..';
                            });

                            // Muestro los enlaces con dirección a la carpeta
                            foreach ($carpetas as $carpeta) {
                                // ignoro la carpeta assets
                                if ($carpeta === 'assets') {
                                    continue;
                                }
                                echo "<li><a href='/$carpeta' style='color: #852CD5;' target='_blank'>$carpeta</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong><a href="" style="color: #852CD5;" target="_blank">Github</a></strong><br>
                Desarrollado por <a href="https://portfolio-jeroalbusto.netlify.app" style="color: #852CD5;" target="_blank">Jeronimo Albusto</a>.
            </p>
        </div>
    </footer>
</body>

</html>