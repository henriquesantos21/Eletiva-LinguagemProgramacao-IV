<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Resposta 2</title>
  </head>
  <body>
  <?php
        $num = $_POST["num"];

        for ($i=1; $i <= 20; $i++){
            $vetor[$i] = rand(1,10);
          }
    ?>
    <div class="container rounded-3 p-3">
      <div class="row rounded-3 p-3 shadow mb-5 bg-light">
          <div class="col">
            <?php
              foreach($vetor as $chave => $i){
                if($num == $i){
                  echo "O maior numero é $i e a chave é $chave";
                  echo "<br>";
                }
              }
                  
            ?>
          </div>
        </div>

        <div class="row rounded-3 p-3 shadow bg-light">
          <h4>Vetor:</h4>
          <div class="col">
            <?php
              foreach($vetor as $chave => $i){
                if($num == $i){
                  echo "<b>Posição do vetor: $chave e seu valor é $i</b>";
                  echo "<br>";
                }
                else{
                  echo "Posição do vetor: $chave e seu valor é $i";
                  echo "<br>";
                }
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