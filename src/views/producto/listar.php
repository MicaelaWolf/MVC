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
      <?php for ($i = 0; $i < count($this->datos); $i++) {; ?>
      <td><?= $this->datos[$i]->getId(); ?></td>
      <td>Maria Anders</td>
      <td>Germany</td>
    </tr>
    <?php }; ?>
  </table>


</body>

</html>