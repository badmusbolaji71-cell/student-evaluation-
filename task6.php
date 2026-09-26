<?php include("logic.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Slip</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body{
            margin: 0;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #2b1055 0%, #7597de 100%);
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            padding: 40px 15px;
        }

        h1{
            text-align: center;
            color: #fff;
            letter-spacing: 2px;
            text-shadow: 0 3px 10px rgba(0,0,0,0.3);
            margin-bottom: 5px;
        }

        h1 i{
            color: #ffd166;
            margin-right: 10px;
        }

        .subtitle{
            text-align: center;
            color: #e0d9ff;
            margin-bottom: 25px;
            font-weight: 300;
        }

        form{
            width: 100%;
            max-width: 520px;
        }

        option{
            color: #1b5e20;
        }

        p{
            color: #ff4d6d;
            font-size: 13px;
            margin: 4px 2px 0;
            min-height: 16px;
        }

        h4, h3{
            text-align: center;
            font-size: 15px;
        }

        h4{
            color: #ff4d6d;
        }

        h3#gg{
            color: #06d6a0;
        }

        b{
            color: #3a3a5c;
            font-weight: 600;
        }

        .div{
            background: #ffffff;
            display: flex;
            flex-direction: column;
            width: 100%;
            border-radius: 20px;
            padding: 35px 30px 25px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.35);
            margin-bottom: 15px;
        }

        .div h2{
            text-align: center;
            color: #2b1055;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .field{
            position: relative;
            margin-bottom: 6px;
        }

        .field i.icon-left{
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #7597de;
            font-size: 15px;
        }

        .div input[type="text"],
        .div input[type="number"],
        .div select{
            width: 100%;
            padding: 13px 15px 13px 42px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            outline: none;
            background: #f8fafc;
            color: #2a2aa8;
            font-family: inherit;
            font-size: 14px;
            transition: 0.2s ease;
        }

        .div input:focus,
        .div select:focus{
            border-color: #7597de;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(117,151,222,0.2);
        }

        .subject-row{
            display: flex;
            align-items: center;
            gap: 6px;
            color: #3a3a5c;
            margin-top: 4px;
        }

        .subject-row i{
            color: #7597de;
            width: 18px;
            text-align: center;
        }

        .gender-group{
            display: flex;
            gap: 25px;
            align-items: center;
            justify-content: center;
            background: #f8fafc;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 12px;
            margin: 6px 0 4px;
        }

        .gender-option{
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
            color: #3a3a5c;
        }

        .gender-option i{
            color: #7597de;
        }

        .gender-option input[type="radio"]{
            width: 18px;
            height: 18px;
            accent-color: #7597de;
            cursor: pointer;
        }

        input[type="submit"]{
            width: 100%;
            margin-top: 10px;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #ffd166, #ff9a3c);
            color: #2b1055;
            font-weight: 700;
            font-size: 15px;
            letter-spacing: 1px;
            cursor: pointer;
            transition: 0.2s ease;
            box-shadow: 0 8px 20px rgba(255,154,60,0.4);
        }

        input[type="submit"]:hover{
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(255,154,60,0.55);
        }

        .field-label{
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 14px 0 2px;
        }

        .field-label i{
            color: #7597de;
        }
    </style>
</head>
<body>
    <form action="result_slip.php" method="post" id="form">
        <h1><i class="fa-solid fa-graduation-cap"></i>Result Slip</h1>
        <p class="subtitle">Fill in the details below to generate your result</p>

        <div class="div">
            <h2><i class="fa-solid fa-book-open"></i> Student Details</h2>

            <div class="field">
                <i class="fa-solid fa-user icon-left"></i>
                <input type="text" name="name" placeholder="Student Name" value="<?= $name ?? '' ?>">
            </div>
            <p><?php echo $namerr ?? '' ?></p>

            <div class="field">
                <i class="fa-solid fa-school icon-left"></i>
                <select name="class" id="">
                    <option value="">Choose class</option>
                    <option value="jss1" <?= (($class ?? '') === "jss1") ? 'selected' : '' ?>>Jss1</option>
                    <option value="jss2" <?= (($class ?? '') == "jss2") ? 'selected' : '' ?>>Jss2</option>
                    <option value="jss3" <?= (($class ?? '') == "jss3") ? 'selected' : '' ?>>Jss3</option>
                    <option value="Sss1" <?= (($class ?? '') == "Sss1") ? 'selected' : '' ?>>Sss1</option>
                    <option value="Sss2" <?= (($class ?? '') == "Sss2") ? 'selected' : '' ?>>Sss2</option>
                    <option value="Sss3" <?= (($class ?? '') == "Sss3") ? 'selected' : '' ?>>Sss3</option>
                </select>
            </div>
            <p><?php echo $classrr ?? '' ?></p>

            <div class="gender-group">
                <label class="gender-option">
                    <i class="fa-solid fa-mars"></i> Male
                    <input type="radio" name="gender" id="" value="male" <?php echo ($gender ?? '') == "male" ? "checked" : ""; ?>>
                </label>
                <label class="gender-option">
                    <i class="fa-solid fa-venus"></i> Female
                    <input type="radio" name="gender" id="" value="female" <?php echo ($gender ?? '') == "female" ? "checked" : ""; ?>>
                </label>
            </div>
            <p><?php echo $genderrr ?? '' ?></p>

            <div class="field-label"><i class="fa-solid fa-square-root-variable"></i><b>Mathematics</b></div>
            <div class="field">
                <i class="fa-solid fa-calculator icon-left"></i>
                <input type="number" name="subject[]" id="" placeholder="Mathematics score" value="<?= $subject[0] ?? '' ?>">
            </div>
            <p><?= $subjectrr[0] ?? '' ?></p>

            <div class="field-label"><i class="fa-solid fa-atom"></i><b>Physics</b></div>
            <div class="field">
                <i class="fa-solid fa-flask icon-left"></i>
                <input type="number" name="subject[]" id="" placeholder="Physics score" value="<?= $subject[1] ?? '' ?>">
            </div>
            <p><?php echo $subjectrr[1] ?? '' ?></p>

            <div class="field-label"><i class="fa-solid fa-vial"></i><b>Chemistry</b></div>
            <div class="field">
                <i class="fa-solid fa-flask-vial icon-left"></i>
                <input type="number" name="subject[]" id="" placeholder="Chemistry score" value="<?= $subject[2] ?? '' ?>">
            </div>
            <p><?php echo $subjectrr[2] ?? '' ?></p>


            <input type="submit" value="Submit">

            <h4><?php echo $fillpages ?? '' ?></h4>
            <h3 id="gg"><?php echo $fillpagees ?? '' ?></h3>
        </div>
    </form>
</body>
</html>
