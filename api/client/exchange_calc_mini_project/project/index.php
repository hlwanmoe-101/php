<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Primary Meta Tags -->
    <title>MMEx</title>
    <meta name="title" content="MMEx" />
    <meta name="description" content="My MMEx Practical" />
    <link rel="icon" href="img/logo.svg" type="image/icon type">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mms-it.com/" />
    <meta property="og:title" content="MMEx" />
    <meta property="og:description" content="My MMEx Practical" />
    <meta property="og:image" content="img/logo.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://mms-it.com/" />
    <meta property="twitter:title" content="MMEx" />
    <meta property="twitter:description" content="My MMEx Practical" />
    <meta property="twitter:image" content="img/logo.png" />
    <title>Exchange Calculator</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="vendor/animate_it/animate.min.css" />
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css" />
    <link rel="stylesheet" href="css/night-mode.css">
  </head>
  <body>
    <section class="app">
      <div class="output">
        <div class="logo-container">
          <img src="img/logo.svg" class="logo" alt="" />
          <p class="brand">MMEx</p>
        </div>
        <div class="result-container">
          <p class="result" id="result">0.00</p>
        </div>
      </div>
      <div class="line"></div>
      <form class="calc" id="calc">
        <div class="input-container container">
          <label for="">Input</label>
          <input
            type="number"
            class="input"
            id="input"
            placeholder="0.00"
            autofocus
            min="1"
            required
          />
        </div>
        <div class="from-container container">
          <label for="">From</label>
          <select name="" class="from" id="from" required>
            <option value="" selected>Select Currency</option>
          </select>
        </div>
        <div class="to-container container">
          <label for="">To</label>
          <select name="" class="to" id="to"></select>
        </div>
        <div class="calculate-container container">
          <button class="calc-btn" id="calc-btn">Calculator</button>
        </div>
      </form>
      <div class="history-container">
        <table class="history">
          <thead>
            <tr>
              <th>Currency</th>
              <th>From</th>
              <th>To</th>
              <th>Result</th>
            </tr>
            <tbody id="fill"></tbody>
          </thead>
        </table>
      </div>
    </section>
    <button class="mode-change" id="mode-change">
      <i class="fas fa-moon" id="day"></i>
    </button>
    <script>
        <?php
            $x= file_get_contents("http://forex.cbm.gov.mm/api/latest");
        ?>
        let data=<?php echo $x; ?>;
    </script>
    <script src="js/app.js"></script>
  </body>
</html>
