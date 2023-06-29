<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
      <?php foreach ($this->datos as $i => $valor) {; ?>
      <td><?= $valor->getId(); ?></td>
      <td><?= $i; ?></td>
      <td>Germany</td>
    </tr>
    <?php }; ?>
  </table>


</body>

</html>