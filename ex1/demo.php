<!DOCTYPE html>
<html lang="en">

<head> </head>

<body>
  <h3>Digite a abreviação para a moeda</h3>
  <form action="" method="POST">
    Moeda:
    <input type="text" name="currency-name" />

    <button type="submit" name="submit">Consumir API</button>
  </form>
  <p>
    <?php
    if (isset($_POST['submit'])) {
      $currency_name = $_POST['currency-name'];
      $url = "http://localhost/p2/ex1/api/" . $currency_name;
      $client = curl_init($url);
      curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($client);

      echo $response;
    } ?>
  </p>
</body>

</html>