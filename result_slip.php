<?php
include("logic.php");
?>
<?php if($isValid): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="&77.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="bord">
        <h1>GET YOUR RESULT <i class = "fa-solid fa-graduation-cap"></i></h1>
        <h2><?php echo "Name : " . $name ?></h2>
        <h2><?php echo "Class : " . $class ?></h2>
        <h2><?php echo "Gender : " . $gender ?></h2>
        <h2>Mathematics <i class = "fa-solid fa-calculator"></i> : <?php echo  $subject[0] ?></h2>
        <h2>Physics <i class ="fa-solid fa-ruler"></i> : <?php echo  $subject[1] ?></h2>
        <h2>Chemistry <i class = "fa-solid fa-flask"></i> : <?php echo $subject[2] ?></h2>
        <h2><?php echo "Total-score : " . $total ?></h2>
        <h3><?php echo "Average-score : " . $ave . "%" ?></h3>
        <h2 class = "grade">Grade<i class = "fa-solid fa-trophy"></i> : <?php echo  $grade ?></h2>
        <h2 class = "perf">Performance <i class = "fa-solid fa-medal"></i> :<?php echo  $perf ?></h2>
    </div>
</body>
</html>
<?php endif; ?>
