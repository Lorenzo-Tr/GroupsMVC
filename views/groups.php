<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>homepage</title>
</head>
<body>
  <h1>Depose your file</h1>
  <?php if(!empty($students)): ?>
    <table>
      <thead>
        <tr>
          <th>Civility</th>
          <th>LastName</th>
          <th>FirstName</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
              <td><?= $student->civility?></td>
              <td><?= $student->last_name?></td>
              <td><?= $student->first_name?></td>
            </tr>
        <?php endforeach?>
      </tbody>
    </table>
  <?php endif ?>
</body>
</html>