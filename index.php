<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Halaman Templeate Sama Dengan Dosen</title>
</head>
<body>

    <!-- Halaman Templeate Yang Sama Dengan Dosen -->

    <div class="row">
        <div class="box col-30">

            <!-- Formulir -->
            <form action="./php/Auth.php?route=login" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="username">Username</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="username" placeholder="admin">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="username">Password</label>
                    </div>
                    <div class="col-75">
                        <input type="password" name="password" placeholder="admin123">
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-25">
                    </div>
                    <div class="col-75">
                        <button type="submit" class="button">Login</button>
                    </div>
                </div>

            </form>


            <!-- Tabel -->

            <div style="margin-top: 90%;">
                <table border="1px">
                    <thead>
                        <th>Team</th>
                        <th>Years</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dinamo Zagrep</td>
                            <td>2001-2004</td>
                        </tr>
                        <tr>
                            <td>Hadjuk Split</td>
                            <td>2004-2006</td>
                        </tr>
                        <tr>
                            <td>Portsmounth</td>
                            <td>2006-2009</td>
                        </tr>
                        <tr>
                            <td>Tottenham Hotspurs</td>
                            <td>2009-2011</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <br>
            <small>
                <center>
                    Copyright @ Digital Master Studio
                </center>
            </small>



        </div>

        <div class="box col-70">
            <div class="container">
                <h1>Niko Kranjchar</h1>
                <div class="col">   
                    <img src="./assets/img/1.jpg" alt="" srcset="" width="250">
                    <img src="./assets/img/2.jpg" alt="" srcset="" width="250">
                    <img src="./assets/img/3.jpg" alt="" srcset="" width="250">
                    <img src="./assets/img/4.jpg" alt="" srcset="" width="250">
                </div>
                <br>
                <p>
                    <b><a href="halaman_custom.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></b> <i>Alias quidem delectus voluptatem aliquid provident laborum</i>, dignissimos ducimus ut fugiat magni eum ea cumque sunt doloremque. Deserunt corporis dolorum iusto. Illum!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sint quam magnam atque quod dicta, labore ipsum amet fugiat at nemo numquam maxime in, quia natus eveniet ad provident animi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima expedita animi nam provident. <u>Accusantium libero veniam accusamus</u> dignissimos consequatur animi assumenda laborum cupiditate. Ullam porro, dicta fuga sequi maxime sed!
                </p>
                <p>
                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b> <i>Alias quidem delectus voluptatem aliquid provident laborum</i>, dignissimos ducimus ut fugiat magni eum ea cumque sunt doloremque. Deserunt corporis dolorum iusto. Illum!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sint quam magnam atque quod dicta, labore ipsum amet fugiat at nemo numquam maxime in, quia natus eveniet ad provident animi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima expedita animi nam provident. <u>Accusantium libero veniam accusamus</u> dignissimos consequatur animi assumenda laborum cupiditate. Ullam porro, dicta fuga sequi maxime sed!
                </p>
                <div class="col">   
                    <img src="./assets/img/1.jpg" alt="" srcset="" width="250">
                    <img src="./assets/img/2.jpg" alt="" srcset="" width="250">
                    <img src="./assets/img/3.jpg" alt="" srcset="" width="250">
                    <img src="./assets/img/4.jpg" alt="" srcset="" width="250">
                </div>
            </div>
        </div>
    </div>
    
</body>
    <?php if(isset($_GET['username_fails']) || isset($_GET['password_fails'])): ?>
        <script>alert('Username atau Password Salah')</script>
    <?php endif; ?>

    <?php if(isset($_GET['logout'])): ?>
        <script>alert('Logout Berhasil')</script>
    <?php endif; ?>
</html>