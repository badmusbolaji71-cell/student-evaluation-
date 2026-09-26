<?php
include ("task6.php");
?>
<?php if($isValid): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Slip</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        :root{
            --green: #2b1055;
            --lime: #ffd166;
        }

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
            align-items: center;
            padding: 40px 15px;
        }

        .bord{
            background: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 400px;
            border-radius: 20px;
            padding: 35px 30px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.35);
            text-align: center;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            color: var(--green);
            margin-bottom: 0.25rem;
        }

        h1 i{
            color: var(--lime);
            margin-right: 8px;
        }

        h1::after {
            content: '';
            display: block;
            width: 48px;
            height: 3px;
            background: var(--lime);
            border-radius: 2px;
            margin: 8px auto 1.5rem;
        }

        .info-row{
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            background: #f8fafc;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 10px 14px;
            margin-bottom: 10px;
            color: #2b1055;
            font-weight: 500;
            font-size: 15px;
        }

        .info-row i{
            color: #7597de;
            width: 18px;
            text-align: center;
        }

        .section-title{
            width: 100%;
            text-align: left;
            color: #3a3a5c;
            font-weight: 600;
            font-size: 14px;
            margin: 18px 0 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section-title i{
            color: #7597de;
        }

        .subject-row{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 9px 14px;
            border-bottom: 1px dashed #e2e8f0;
            font-size: 14px;
            color: #3a3a5c;
        }

        .subject-row span:first-child{
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .subject-row i{
            color: #7597de;
            width: 16px;
            text-align: center;
        }

        .subject-row span:last-child{
            font-weight: 600;
            color: #2b1055;
        }

        .summary{
            width: 100%;
            margin-top: 20px;
            padding-top: 18px;
            border-top: 2px solid #e2e8f0;
        }

        .summary-row{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 6px 4px;
            font-size: 15px;
            color: #3a3a5c;
        }

        .summary-row i{
            color: #7597de;
            margin-right: 8px;
        }

        .summary-row span:last-child{
            font-weight: 700;
            color: #2b1055;
        }

        .grade-badge{
            margin-top: 16px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 22px;
            border-radius: 14px;
            background: linear-gradient(135deg, #ffd166, #ff9a3c);
            color: #2b1055;
            font-weight: 700;
            font-size: 16px;
            box-shadow: 0 8px 20px rgba(255,154,60,0.4);
        }

        .grade-badge i{
            font-size: 20px;
        }

        .performance{
            margin-top: 12px;
            color: #06d6a0;
            font-weight: 600;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
    </style>
</head>
<body>
    <div class="bord">
        <h1><i class="fa-solid fa-graduation-cap"></i>GET YOUR RESULT</h1>

        <div class="info-row"><i class="fa-solid fa-user"></i> Name : <?php echo $name ?></div>
        <div class="info-row"><i class="fa-solid fa-school"></i> Class : <?php echo $class ?></div>
        <div class="info-row"><i class="fa-solid fa-venus-mars"></i> Gender : <?php echo $_POST['gender'] ?? "" ?></div>

        <div class="section-title"><i class="fa-solid fa-book-open"></i> Subject Scores</div>

        <div class="subject-row"><span><i class="fa-solid fa-calculator"></i> Mathematics</span><span><?= $subject[0] ?></span></div>
        <div class="subject-row"><span><i class="fa-solid fa-flask"></i> Physics</span><span><?= $subject[1] ?></span></div>
        <div class="subject-row"><span><i class="fa-solid fa-flask-vial"></i> Chemistry</span><span><?= $subject[2] ?></span></div>

        <div class="summary">
            <div class="summary-row"><span><i class="fa-solid fa-sigma"></i>Total Score</span><span><?php echo $total ?></span></div>
            <div class="summary-row"><span><i class="fa-solid fa-percent"></i>Average Score</span><span><?php echo $ave ?>%</span></div>
        </div>

        <div class="grade-badge"><i class="fa-solid fa-award"></i> Overall Grade : <?php echo $grade ?></div>
        <div class="performance"><i class="fa-solid fa-chart-line"></i> Performance : <?php echo $perf ?></div>
    </div>
</body>
</html>
<?php endif; ?>
