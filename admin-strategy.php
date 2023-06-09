<?php
include "connect.php";
session_start();
$query = mysqli_query($con, "SELECT * FROM zayavki");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!--Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <!--Fonts -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body >
        <div class="col-12 pt-3 pb-3 header-color">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="row">
                       <div class="col-1">
                            <div class="row">
                                <div class="col-1 mt-3">
                                    <img src="img/vector.svg" alt="" srcset="">
                                </div>
                                <div class="col-8 ">
                                    <div class="row mt-4 mr-auto">
                                        <a class="text back" href="admin.php">
                                            НАЗАД
                                        </a>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <div class ="col-2 mt-1">
                            <img class="w-100" src="img/logo3.svg" alt="" srcset="">
                       </div>
                       <div class ="col-2 ml-auto">
                            <form action="admin-strategy.php" method="get">
                                <button class="btn-kons text">
                                    все заявки
                                    <img src="img/list.svg" alt="" srcset="">
                                </button>
                            </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        for($i=0;$i<mysqli_num_rows($query);$i++){
             $stroka = $query->fetch_assoc();
             
    ?>
     <div class="col-12 bg-input">
            <div class="row">
                <div class="col bg-input2">
                    <div class="row">
                        <div class="col-8 mx-auto">
                            <div class="row">
                                <div class="col-11 mx-auto mt-2">
                                    <div class="row">
                                        <div class="col-12 pt-5 pb-5 box-input">
                                            <h1 class="text-center text h1-input">СТРАТЕГИЧЕСКИЕ</h1>
                                            <form action="pol.php" method="post">
                                                <div class="row mt-3">
                                                    <div class="col-10 mx-auto">
                                                        <div class="row">
                                                            <div class="col-10 mx-auto">
                                                                <input value="<?php echo $stroka['imya']?>" type="text" name="imya" class="form-control login text" placeholder="Фамилия Имя Отчество">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3 pt-3">
                                                    <div class="col-10 mx-auto">
                                                        <div class="row">
                                                            <div class="col-10 mx-auto">
                                                                <input value="<?php echo $stroka['phone']?>" type="number" name="phone" class="form-control login text" placeholder="номер телефона">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3 pt-3">
                                                    <div class="col-10 mx-auto">
                                                        <div class="row">
                                                            <div class="col-10 mx-auto">
                                                                <textarea value="" type="text" name="problem" class="form-control txt-area text" placeholder="Опишите вашу проблему"><?php echo $stroka['problem']?>
                                                                </textarea>
                                                                <input style="display: none" type="" name="useriid" value="<?php echo $stroka['useriid']?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 mx-auto mt-3 pt-3">
                                                <button class="form-control text btn-log-reg">
                                                    Подробнее
                                                </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <?php } ?>
        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>