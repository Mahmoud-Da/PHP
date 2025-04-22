<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $pageTitle = "PHP is amazing";
  ?>

  <?php
   if (!empty($pageTitle)) {
    echo "<h1>{$pageTitle}<h1/>";
    }
  ?>
  
  <?php if (!empty($pageTitle)): ?>
    <h1><?php echo $pageTitle;?></h1>
  <?php endif; ?>
</body>
</html>