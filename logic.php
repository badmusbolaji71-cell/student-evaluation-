<?php
$class = $name = $subject[] =$subject[1] = $subject[] = $gender = $fillpagees =$fillpages = $genderrr= $namerr = $classrr  =  $filled= $grade= $isValid = $total = $average =$perf = "";
$subjectrr = [];
$isValid = true;
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $name = $_POST["name"];
    $class = $_POST["class"] ?? "";
    $subject = $_POST["subject"];
    $gender = $_POST['gender'] ?? "";
    //  echo count($subject);
   if(
        empty ($name) || empty($class) || empty($gender) || empty($subject)
    ){
        $fillpages = "All pages must be filled";
    }
                 else{
                    $fillpagees = "sucessful";
    }
        if(empty($name)){
            $namerr = "Input name ";
             $isValid = false;  
        }
            if(empty($class)){
            $classrr = "choose class ";
             $isValid = false;  
        }
        
            if(!isset($_POST["gender"])){
            $genderrr = "Select a gender";
             $isValid = false;  
            }
 
  

       foreach($subject as $subjects){
        if(empty($subjects) && $subjects !== "0"){
            $subjectrr[] = "Input score";
            $isValid = false;                          
        } else if(!is_numeric($subjects) || $subjects < 0 || $subjects > 100) {
            $subjectrr[] = "Invalid score";
            $isValid = false;                          
        } else {
            $subjectrr[] = "";
        }
    }
    if($isValid){
   $total = array_sum($subject);
  $average = $total/count($subject);
  if($average >= 70 && $average<= 100){
    $grade = "A";
  }
  elseif($average >=60 && $average<= 69){
    $grade = "B";
  }
   elseif($average >=50 && $average<= 59){
    $grade = "C";
  }
   elseif($average >=45 && $average<= 49){
    $grade = "D";
  }
   elseif($average >=40 && $average<= 44){
    $grade = "E";
  }
  else{
    $grade = "F";
  }
  };
  switch($grade){
    case "A":
        $perf = "EXCELLENT";
        break;
    case "B":
        $perf = "VERY GOOD";
        break;
    case "C":
        $perf = "GOOD";
        break;
    case "D":
        $perf = "FAIR";
        break;
    case "E":
        $perf = "POOR";
        break;
    case "F":
        $perf = "FAIL";
        break;
        
  };

}
?>