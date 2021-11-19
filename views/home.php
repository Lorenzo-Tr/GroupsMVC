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
  <?php if(!empty($error)): ?>
    <p><?= $error?></p>
  <?php endif ?>
  <form action="Etudiant/result" method="post" enctype="multipart/form-data">
    <input type="file" accept=".csv, .json" name="file" id="file">
    <input type="submit" value="send">
  </form>
</body>
</html>