<!doctype html>
<html class="no-js" lang="pt">
  <head>
    <title>Pirâmide de Asterisk</title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/foundation.css" />
    <style>
        .card{background-color: #212121 !important;padding:20px;border-radius: 15px;margin-bottom: 30px;}
        h1{color:white;font-size:23px;}
        figure{padding-top:30px;padding-bottom:30px;}
        .button{background: #f5cf07 !important;}
        h2{font-size: 25px;color: #212121;background-color: #f5cf08;}
    </style>
  </head>
  <body>
    <div class="row">
        <div class="column large-5 large-centered ">
            <figure>
                <img src="imgs/logo-black-300x73"  class="float-center">
            </figure>
            <div class="card">
                <div class="card-section">
                    <h1>Pirâmide de Asterisk</h1>
                    <form action="" method="post" data-abide novalidate>
                        <input type="number" name="number" placeholder="Asterisk Amount*" required>
                        <span class="form-error">Por favor preencha o campo</span>
                        <input type="submit" class="button" value="Gerar">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php 
        if(isset($_POST['number'])):
     ?>
        <div class="row">
            <div class="column large-5 large-centered text-center">
                <h2>Resultado:</h2>
            </div>
        </div>
        <center>
            <?php
                $number = $_POST['number'];
                for($i=1;$i<=$number;$i++){
                    for($j=1;$j<=$i;$j++){
                        echo "*";
                    }
                    echo "<br />";
                }
            ?>
        </center>
    <?php
        endif;
    ?>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>


