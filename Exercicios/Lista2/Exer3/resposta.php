<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Resposta</title>
  </head>
  <body class="p-3 bg-danger bg-gradient">
      <div class="contaimer rounded-3 p-3 shadow bg-dark text-light">
          <?php
            for ($i=1; $i <= 10; $i++){
                $vetor[$i] = $_POST["num$i"];
              }
              for($i=1; $i <= 10; $i++){
                for($j = $i+1; $j <= 10; $j++){
                  if ($vetor[$i] == $vetor[$j]){
                    $vetor[$i] = "-";
                    
                  }
                }
              }
            ?>
      
            <div class="row">
              <h4>Vetor:</h4>
              <div class="col">
                <?php
                  foreach($vetor as $chave => $num){
                    echo "Posição do vetor: $chave e seu valor é $num";
                    echo "<br>";
                  }
                ?>
              </div>
            </div>
      
          </div>
          
          
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>