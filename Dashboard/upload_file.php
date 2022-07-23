<?php
// Include the database configuration file
include 'db-conn.php';
$statusMsg = '';


// File upload path
$targetDir = "./img/uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));
// $ReffImg=uniqid('IMG_').'.'.strstr($fileName,'.'); 
$ReffImg=uniqid('IMG_').'.'.$fileType; 
$targetFilePath = $targetDir . $ReffImg;
echo '<br>name:'.$fileName;
echo '<br>target :'.$targetFilePath;
echo '<br>type :'.$fileType;
echo '<br>info1 :'.$_FILES['file']['tmp_name'];
echo '<br>info2 :'.$_FILES['file']['name'];
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    echo '<br>file kayne';
    $allowTypes = array('jpeg','png','gif','psd','jpg','JPEG','PNG','GIF','PSD');
    $cpt=1;
    if(in_array($fileType, $allowTypes)){
            echo '<br>type del file kayne';        
            if(move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$ReffImg)) {
                echo '<br>fichier dakhel';
                echo '<br>--> Name :'.$ReffImg.'<br>';
                $sql="INSERT into employee_details(`emp_image`, `employee_name`, `employee_address`,`employee_designation`, `employee_salary`) 
                VALUE ('".$targetFilePath."', 'AYOUB', 'RABAT','TEST',4000)";
                $insert = $cnx->query($sql);
                  if($insert){
                      $statusMsg = "The file ".$ReffImg. " has been uploaded successfully.";
                  }else{
                      $statusMsg = "File upload failed, please try again.";
                      echo '<br>'.$sql;
                  } 

            }else{
                echo '<br>fichier madakhelche';
            }
    }else{
        echo '<br>type del file makaynech';
    }
}else{
        echo '<br>file makaynach';
}




echo '<br>'.$statusMsg;
?>

