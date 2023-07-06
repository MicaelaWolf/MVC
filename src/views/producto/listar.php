<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar</title>
  <link rel="stylesheet" href="public/css/producto/listar.css" type="text/css">
</head>

<body>

  <?php //var_dump($this->datos); 
  ?>

  <table>
    <tr>
      <th>Id</th>
      <th>Contact</th>
      <th>Country</th>
    </tr>
    <tr>
      <?php for ($i = 0; $i < count($this->datos); $i++) {; ?>
      <td><?= $this->datos[$i]->getId(); ?></td>
      <td>Maria Anders</td>
      <td>Germany</td>
    </tr>
    <?php }; ?>
  </table>

  <script src="public/js/producto/listar.js"></script>
</body>

</html>