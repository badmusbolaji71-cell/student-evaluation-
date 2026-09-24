<?php
include ("task6.php");
?>
<?php if($isValid):?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        justify-content :center;
        align-items :center;
        display:grid;
        
        }
        h2,h3,#pp{
            color :white;
        }
        .bord{
             justify-content :center;
        align-items :center;
        display:grid;
        background-color:#dbce99;
        width :350px;
        }
        #pgp{
            color :white;
        }
        #pdp{
            color :black;
        }
        
h1 {
    font-family: 'Playfair Display', serif;
    font-size: 26px;
    color: var(--green);
    margin-bottom: 0.25rem;
}

 h1::after {
    content: '';
    display: block;
    width: 48px;
    height: 3px;
    background: var(--lime);
    border-radius: 2px;
    margin-top: 8px;
    margin-bottom: 1.5rem;
}

    </style>
</head>
<body>
    <div class = "bord">
        <h1>GET YOUR RESULT</h1>
      <h2><?php echo  "Name : ".$name?></h2>
          <h2><?php echo "Class : " .$class?></h2>
            <h2><?php echo "Gender : ".($_POST['gender'] ?? "")?></h2>
            <P id ="pp"><?php echo "Mathematics : " .$subject[0] ?></P>
             <P id ="pp"><?php echo "Physics : " .$subject[1] ?></P>
               <P id ="pp"><?php echo "Chemistry : " .$subject[2] ?></P>
               <h2><?php echo "Total-score : " .$total?></h2>
                <h3><?php echo "Average-score  : " .$average ."%"?></h3>
                <i id = "pdp"><?php echo " Overall Grade : " .$grade?></i>
                <p id = "pgp"><?php echo "Performance : " .$perf?></p>


          </div>
</body>
</html>
<?php endif; ?>