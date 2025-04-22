<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <?php 
      echo "isset() Method: ";
      $pageTitle = "PHP is amazing";
      
      // isset()
      // if variable is exist and not null it returns True
      var_dump(isset($pageTitle));

      $pageTitle = null;
      var_dump(isset($pageTitle));
      
      echo "<br>";
      // empty()
      // if variable not set/exist or falsy ("", 0, null)
      echo "empty() Method: ";
      $pageTitle = "";
      var_dump(empty($pageTitle));

      $pageTitle = "not Empty";
      var_dump(empty($pageTitle));
    ?>
    <br>
     <?php 
     if (isset($pageTitle) && $pageTitle !== "") {
       echo "<h1>{$pageTitle}<h1/>";
      }
     
      if (!empty($pageTitle)) {
        echo "<h1>{$pageTitle}<h1/>";
        }
     ?>

     <br>
     
     <?php
     $pageTitle = "Hello World";
     // unset() destroys the specified variables.
     
     
     unset($pageTitle);
    //  echo "$pageTitle"
     ?>
  </div>
</body>
</html>
