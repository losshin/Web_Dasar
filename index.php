<?php
if (!empty($_GET['q'])) {
  switch ($_GET['q']) {
    case 'info':
      phpinfo();
      exit;
      break;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Pelatihan</title>

  <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

  <style>
    html,
    body {
      height: 100%;
    }
    
    body {
      margin: 0;
      padding: 0;
      width: 100%;
      display: table;
      font-weight: 100;
      font-family: 'Courier';
    }

    form {
      font-family: 'Courier New', Courier, monospace;
    }

  </style>
</head>

<body>
  <center>
    <h1>Simple Programming with PHP</h1>
    <form action="index.php" method="POST">
      <label for="total">Total Belanja</label>
      <input type="number" name="total" required><br><br>
      <input type="submit" name="submit" value="Hitung Diskon">
    </form>

    <?php
      if (isset($_POST['submit'])) {      

        $total_belanja = $_POST['total'];
        $diskon = 0;
        $total_diskon = $total_belanja;

        if ($total_belanja >= 100000) {
            $diskon = 0.10 * $total_belanja;
        } elseif ($total_belanja >= 50000) {
            $diskon = 0.05 * $total_belanja;
        }

        $total_diskon -= $diskon;

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Total Belanja: Rp " . number_format($total_belanja, 2, ',', '.') . "<br>";
        echo "Diskon: Rp " . number_format($diskon, 2, ',', '.') . "<br>";
        echo "Total Diskon: Rp " . number_format($total_diskon, 2, ',', '.') . "<br>";
      }
    ?>    
  </center>
</body>

</html>

