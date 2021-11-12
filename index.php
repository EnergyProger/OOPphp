<?php include('setting.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskPHP4</title>
</head>
<body>
  
    <?php foreach($figures as $figure):?>
        <p><?php echo $figure->Print();?></p>
    <?php endforeach;?>
</body>
</html>
