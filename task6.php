<?php include("logic.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="&7.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
    
    </style>
</head>
<body>
   
    <form action="result_slip.php" method="post" id="form">
        <br><br>
        <div class = "div">
             <h1>RESULT SLIP <i class = "fa-solid fa-graduation-cap"></i></h1>
        <h2>Provide the following details</h2>
        <br>
        <label for="">
          <b>  Name <i class = "fa-solid fa-user"></i> </b> :
            <input type="text" name = "name" placeholder = "Student Name "  value = "<?= $name ?? ''?>">   <p><?php echo $namerr?></p><br> <br><br>
            </label>
     <label for="">
        <b>Class <i class = "fa-solid fa-book"></i></b>
        <select name="class" id="" >
            <option value="">Chose class</option>
            <option value="jss1" <?= (($class ?? '') ==="jss1") ?'selected' :''?>>Jss1</option>
            <option value="jss2" <?= (($class?? '') == "jss2" )?'selected':''?>>Jss2</option>
            <option value="jss3" <?= (($class ?? '') == "jss3")?'selected':''?>>Jss3</option>
            <option value="Sss1" <?= (($class ?? '') == "Sss1")?'selected':''?>>Sss1</option>
            <option value="Sss2"<?= (($class ?? '') == "Sss2")?'selected':''?>>Sss2</option>
            <option value="Sss3" <?= (($class ?? '') == "Sss3")?'selected':''?>>Sss3</option>
        </select>
        <p><?php echo $classrr?></p>
       </label>
        <section class = "gender">
        <!-- (($gender) == 'male')? 'checked':'' -->
        <b id="dp">Male </b><input type="radio" name="gender" id="m" value ="male" <?php if($gender == "male"){
            echo "checked";
        }else{
           echo "";
        } ?>>
        
        <!-- (($gender) == 'female')? 'checked':''?> -->
       <b id="dp">Female </b> <input type="radio" name="gender" id="m" value ="female" <?php if($gender == "female"){
            echo "checked";
        }else{
           echo "";
        }  ?>>
        <p><?php echo $genderrr ?></p><br>
        </section><br>
        <br>
        <b>Mathematics <i class = "fa-solid fa-calculator"></i> : </b><input type="number" name="subject[]" id="" placeholder = "Mathematics score" value = "<?= $subject[0] ?? ''?>">  <p><?= $subjectrr[0] ?? '';?></p><br><br><br><br>
        
         <b>Physics <i class = "fa-solid fa-ruler"></i> :  </b><input type="number" name="subject[]" id="" placeholder = "Physics score" value = "<?= $subject[1] ?? ''?>"> <p><?php echo $subjectrr[1] ?? '';?></p><br><br><br><br>

          <b>Chemistry <i class= "fa-solid fa-flask"></i> :  </b><input type="number" name="subject[]" id="" placeholder = "Chemistry score" value="<?= $subject[2] ?? ''?>">   <p><?php echo $subjectrr[2] ?? '';?></p><br><br><br><br>
        
          <input type="submit" value="Submit" id = "submit">
          <h4><?php echo $fillpages?></h4><h3 id="gg"><?php echo $fillpagees?></h3>
        
</div>
       

    </form>
</body>
</html>
