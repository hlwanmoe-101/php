<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fetch</title>
    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      .news {
        width: 80%;
        margin: 100px auto;
        columns: 3 250px;
      }
      .card {
        width: 100%;
        padding: 5px 5px;
        margin: 5px;
        border: 2px solid green;
      }
      .card-img {
        width: 100%;
      }
      .tit {
        margin: 90px;
        text-decoration: solid;
        text-align: center;
      }
      .auther {
        text-decoration-style: double;
      }
    </style>
  </head>

  <body>
      <?php
      $f= file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=b6df0ccb3d314cdcb032dec79d569bcb");
      ?>
    <h1 class="tit">API NEWS</h1>
    <div class="news">
        <div class="card">
            <div class="card-body">

            </div>
        </div>
    </div>
    <script>
      <?php
        $f= file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=b6df0ccb3d314cdcb032dec79d569bcb");
      ?>
        let data=<?php echo $f; ?>;

    </script>
  </body>
</html>
