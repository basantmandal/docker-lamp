<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>LAMP Docker Development Environment</title>
    </head>

    <body>
        <div class="container d-flex align-items-center justify-content-center mt-4">
            <div class="row">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">LAMP Environment</h5>
                        <p class="card-text">
                        <ul class="list-group">
                            <li class="list-group-item"><?php echo apache_get_version(); ?></li>
                            <li class="list-group-item">PHP <?php echo phpversion(); ?></li>
                            <li class="list-group-item">
                                <?php
                                 $link = mysqli_connect("mysql", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

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
                        </p>
                        <br>

                        <h5 class="card-title text-center">Virtual Host</h5>
                        <p class="card-text">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="http://www.magento.test" class="card-link text-decoration-none"
                                    target="_blank">http://www.magento.test</a>
                            </li>
                            <li class="list-group-item">
                                <a href="http://www.wordpress.test" class="card-link text-decoration-none"
                                    target="_blank">http://www.wordpress.test</a>
                            </li>

                        </ul>
                        </p>

                        <br>

                        <h5 class="card-title text-center">Other Links</h5>
                        <p class="card-text">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="/phpinfo.php" class="card-link text-decoration-none"
                                    target="_blank">phpinfo()</a>
                            </li>
                            <li class="list-group-item">
                                <a href="http://localhost:<?php echo $_ENV['PMA_PORT']; ?>"
                                    class="card-link text-decoration-none" target="_blank">PHPMyAdmin</a>
                            </li>

                        </ul>
                        </p>
                        <br>
                        <h5 class="card-title text-center">Database Connection Result</h5>
                        <p class="card-text">
                        <ul class="list-group">
                            <li class="list-group-item">

                                <?php
                                 $link = mysqli_connect("mysql", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);
                                 if (!$link) {
                                  echo "MySqli Error: Unable to connect to MySQL." . PHP_EOL;
                                  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                                  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                                  exit;
                                 }
                                 echo "<b>MySqli Connection</b>: A proper connection to MySQL was made!";
                                 mysqli_close($link);
                                ?>

                            </li>

                            <li class="list-group-item">

                                <?php

                                 $DBuser = 'root';
                                 $DBpass = $_ENV['MYSQL_ROOT_PASSWORD'];
                                 $pdo    = null;

                                 try {
                                  $database = 'mysql:host=mysql:3306';
                                  $pdo      = new PDO($database, $DBuser, $DBpass);
                                  echo "<b>PDO Connection</b>: A proper connection to MySQL was made!";
                                 } catch (PDOException $e) {
                                  echo "PDO Error: Unable to connect to MySQL. Error:\n $e";
                                 }

                                 $pdo = null;
                                ?>

                            </li>
                        </ul>
                        </p>

                    </div>
                </div>

            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>