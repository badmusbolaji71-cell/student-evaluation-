<?php include("logic.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:tan;
        }
        option{
            color :green;
        }
        p,h4,g{
            color:red;
            font-size:15px;
        }
        #gg,h3,b,#p{
            color:green;
            font-family:inherit;
        }
.div{
         justify-content :center;
        align-items :center;
        display:grid;
        background-color:black;
        margin-bottom:15px;
        width:100%;
}

.div input,.div select {
    width: 100%;
    box-sizing: border-box;

    padding: 14px 15px;

    border: 3px solid tan;
    border-radius: 12px;

    outline: none;

    background: #f8fafc;

    color: #2a2aa8;

    font-family: inherit;
    font-size: 14px;

    transition: 0.2s ease;
}

    </style>
</head>
<body>
    <h1>RESULT SLIP</h1>
    <form action="result_slip.php" method="post" id="form">
        <br><br>
        <div class = "div">
        <h2>Provide the following details</h2>
        <br>
        
        <input type="text" name = "name" placeholder = "Student Name" value = "<?= $name ?? ''?>">    <p><?php echo $namerr?></p><br> <br><br>
    
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

        <b><p id="p">male</p></b>
        <!-- (($gender) == 'male')? 'checked':'' -->
        <input type="radio" name="gender" id="" value ="male" <?php if($gender == "male"){
            echo "checked";
        }else{
           echo "";
        } ?>>
        <b><p id="p">female</p></b>
        <!-- (($gender) == 'female')? 'checked':''?> -->
        <input type="radio" name="gender" id="" value ="female" <?php if($gender == "female"){
            echo "checked";
        }else{
           echo "";
        }  ?>>
        <p><?php echo $genderrr ?></p><br>
        
        <b>Mathematics  :  </b><input type="number" name="subject[]" id="" placeholder = "Mathematics score" value = "<?= $subject[0] ?? ''?>">  <p><?= $subjectrr[0] ?? '';?></p><br><br><br><br>
        
         <b>Physics  :  </b><input type="number" name="subject[]" id="" placeholder = "Physics score" value = "<?= $subject[1] ?? ''?>"> <p><?php echo $subjectrr[1] ?? '';?></p><br><br><br><br>

          <b>Chemistry :  </b><input type="number" name="subject[]" id="" placeholder = "Chemistry score" value="<?= $subject[2] ?? ''?>">   <p><?php echo $subjectrr[2] ?? '';?></p><br><br><br><br>
        
          <input type="submit" value="submit">
          <h4><?php echo $fillpages?></h4><h3 id="gg"><?php echo $fillpagees?></h3>
        
</div>
       

    </form>
</body>
</html>
