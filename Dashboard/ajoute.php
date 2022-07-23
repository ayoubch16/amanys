<?php
include 'db-conn.php';
session_start();

$Ref=$_POST['Ref'];
$group=$_POST['group'];
$titre=$_POST['titre'];
$categorie=$_POST['categorie'];
$prix=$_POST['prix'];
$prixa=$_POST['prixa'];
$remis=$_POST['remis'];
$genre=$_POST['genre'];
$quantite=$_POST['quantite'];
$remis=$_POST['remis'];
$description=$_POST['description'];
$description = str_replace("'", "\'", $description);
$taille="";
$checkbox1 = $_POST['chkl'] ;
for ($i=0; $i<count($checkbox1); $i++)
$taille .= $checkbox1[$i]."-";

// File upload path
$targetDir = "./img/uploads/";
$fileName1 = basename($_FILES["img1"]["name"]);$fileName2 = basename($_FILES["img2"]["name"]);$fileName3 = basename($_FILES["img3"]["name"]);$fileName4 = basename($_FILES["img4"]["name"]);$fileName5 = basename($_FILES["img5"]["name"]);

$fileNameColor1 = basename($_FILES["imgColor1"]["name"]);$fileNameColor2 = basename($_FILES["imgColor2"]["name"]);$fileNameColor3 = basename($_FILES["imgColor3"]["name"]);$fileNameColor4 = basename($_FILES["imgColor4"]["name"]);$fileNameColor5 = basename($_FILES["imgColor5"]["name"]);

$targetFilePath1 = $targetDir . $fileName1;$targetFilePath2 = $targetDir . $fileName2;$targetFilePath3 = $targetDir . $fileName3;$targetFilePath4 = $targetDir . $fileName4;$targetFilePath5 = $targetDir . $fileName5;

$targetFilePathColor1 = $targetDir . $fileNameColor1;$targetFilePathColor2 = $targetDir . $fileNameColor2;$targetFilePathColor3 = $targetDir . $fileNameColor3;$targetFilePathColor4 = $targetDir . $fileNameColor4;$targetFilePathColor5 = $targetDir . $fileNameColor5;

$fileType1 = strtolower(pathinfo($targetFilePath1,PATHINFO_EXTENSION));$fileType2 = strtolower(pathinfo($targetFilePath2,PATHINFO_EXTENSION));$fileType3 = strtolower(pathinfo($targetFilePath3,PATHINFO_EXTENSION));$fileType4 = strtolower(pathinfo($targetFilePath4,PATHINFO_EXTENSION));$fileType5 = strtolower(pathinfo($targetFilePath5,PATHINFO_EXTENSION));

$fileTypeColor1 = strtolower(pathinfo($targetFilePathColor1,PATHINFO_EXTENSION));$fileTypeColor2 = strtolower(pathinfo($targetFilePathColor2,PATHINFO_EXTENSION));$fileTypeColor3 = strtolower(pathinfo($targetFilePathColor3,PATHINFO_EXTENSION));$fileTypeColor4 = strtolower(pathinfo($targetFilePathColor4,PATHINFO_EXTENSION));$fileTypeColor5 = strtolower(pathinfo($targetFilePathColor5,PATHINFO_EXTENSION));
 
$ReffImg1=uniqid('IMG1_').'.'.$fileType1; $ReffImg2=uniqid('IMG2_').'.'.$fileType2; $ReffImg3=uniqid('IMG3_').'.'.$fileType3; $ReffImg4=uniqid('IMG4_').'.'.$fileType4; $ReffImg5=uniqid('IMG5_').'.'.$fileType5; 

$ReffImgColor1=uniqid('IMGC1_').'.'.$fileTypeColor1; $ReffImgColor2=uniqid('IMGC2_').'.'.$fileTypeColor2; $ReffImgColor3=uniqid('IMGC3_').'.'.$fileTypeColor3; $ReffImgColor4=uniqid('IMG_').'.'.$fileTypeColor4; $ReffImgColor5=uniqid('IMGC4_').'.'.$fileTypeColor5; 

$targetFilePath1 = $targetDir . $ReffImg1;$targetFilePath2 = $targetDir . $ReffImg2;$targetFilePath3 = $targetDir . $ReffImg3;$targetFilePath4 = $targetDir . $ReffImg4;$targetFilePath5 = $targetDir . $ReffImg5;

$targetFilePathCor1 = $targetDir . $ReffImgColor1;$targetFilePathCor2 = $targetDir . $ReffImgColor2;$targetFilePathCor3 = $targetDir . $ReffImgColor3;$targetFilePathCor4 = $targetDir . $ReffImgColor4;$targetFilePathCor5 = $targetDir . $ReffImgColor5;

$couleur1=$_POST['couleur1'];$couleur2=$_POST['couleur2'];$couleur3=$_POST['couleur3'];$couleur4=$_POST['couleur4'];$couleur5=$_POST['couleur5'];
  $allowTypes = array('jpeg','png','gif','psd','jpg','JPEG','PNG','GIF','PSD','webp','WEBP'); 
  if(in_array($fileType1, $allowTypes)){ move_uploaded_file($_FILES['img1']['tmp_name'], $targetDir.$ReffImg1);}
  if(in_array($fileType2, $allowTypes)){ move_uploaded_file($_FILES['img2']['tmp_name'], $targetDir.$ReffImg2);}
  if(in_array($fileType3, $allowTypes)){ move_uploaded_file($_FILES['img3']['tmp_name'], $targetDir.$ReffImg3);}
  if(in_array($fileType4, $allowTypes)){ move_uploaded_file($_FILES['img4']['tmp_name'], $targetDir.$ReffImg4);}
  if(in_array($fileType5, $allowTypes)){ move_uploaded_file($_FILES['img5']['tmp_name'], $targetDir.$ReffImg5);}
  if(in_array($fileTypeColor1, $allowTypes)){ move_uploaded_file($_FILES['imgColor1']['tmp_name'], $targetDir.$ReffImgColor1);}
  if(in_array($fileTypeColor2, $allowTypes)){ move_uploaded_file($_FILES['imgColor2']['tmp_name'], $targetDir.$ReffImgColor2);}
  if(in_array($fileTypeColor3, $allowTypes)){ move_uploaded_file($_FILES['imgColor3']['tmp_name'], $targetDir.$ReffImgColor3);}
  if(in_array($fileTypeColor4, $allowTypes)){ move_uploaded_file($_FILES['imgColor4']['tmp_name'], $targetDir.$ReffImgColor4);}
  if(in_array($fileTypeColor5, $allowTypes)){ move_uploaded_file($_FILES['imgColor5']['tmp_name'], $targetDir.$ReffImgColor5);}




$sql="INSERT INTO `produits`( `group`,`Ref`,`titre`,`categorie`, `prixa`,`prix`,`remis`, `genre`,`quantite`,`date`, `description`, `taille`, `img1`, `img2`, `img3`, `img4`, `img5`
   ,`couleur1`,`Imgcouleur1`,`couleur2`,`Imgcouleur2`,`couleur3`,`Imgcouleur3`,`couleur4`,`Imgcouleur4`,`couleur5`,`Imgcouleur5`)
         VALUES ('$group','$Ref','$titre','$categorie','$prixa','$prix','$remis','$genre','$quantite',DATE_FORMAT(SYSDATE(), '%Y-%m-%d- %H-%i-%s') ,
         '$description','$taille','$ReffImg1','$ReffImg2','$ReffImg3','$ReffImg4','$ReffImg5'
         ,'$couleur1','$ReffImgColor1','$couleur2','$ReffImgColor2','$couleur3','$ReffImgColor3','$couleur4','$ReffImgColor4','$couleur5','$ReffImgColor5')"; 
          //  echo $sql;
if ($cnx->query($sql) === TRUE) { 
    $Reffuser=$_SESSION["Reffuser"];
    $action='Ajouter un article';
    $sqluser="INSERT INTO `history`( `Reffuser`, `Action`, `Product`) VALUES ('$Reffuser','$action','$Ref')";
    $cnx->query($sqluser);
    echo '<script>alert("le produit a ete ajoute avec succès")</script>';
    echo '<script>window.location.href = "Produits.php";</script>';
  } else {
      echo'<script>alert("Erreur : vérifier les informations")</script>';  
      echo '<script>
              window.location=history.go(-1);
          </script>';
  }  



?>

<?php 
// $statusMsg = '';


// // File upload path
// $targetDir = "./img/uploads/";
// $fileName1 = basename($_FILES["img1"]["name"]);$fileName2 = basename($_FILES["img2"]["name"]);$fileName3 = basename($_FILES["img3"]["name"]);$fileName4 = basename($_FILES["img4"]["name"]);$fileName5 = basename($_FILES["img5"]["name"]);

// $fileNameColor1 = basename($_FILES["imgColor1"]["name"]);$fileNameColor2 = basename($_FILES["imgColor2"]["name"]);$fileNameColor3 = basename($_FILES["imgColor3"]["name"]);$fileNameColor4 = basename($_FILES["imgColor4"]["name"]);$fileNameColor5 = basename($_FILES["imgColor5"]["name"]);

// $targetFilePath1 = $targetDir . $fileName1;$targetFilePath2 = $targetDir . $fileName2;$targetFilePath3 = $targetDir . $fileName3;$targetFilePath4 = $targetDir . $fileName4;$targetFilePath5 = $targetDir . $fileName5;

// $targetFilePathColor1 = $targetDir . $fileNameColor1;$targetFilePathColor2 = $targetDir . $fileNameColor2;$targetFilePathColor3 = $targetDir . $fileNameColor3;$targetFilePathColor4 = $targetDir . $fileNameColor4;$targetFilePathColor5 = $targetDir . $fileNameColor5;

// $fileType1 = strtolower(pathinfo($targetFilePath1,PATHINFO_EXTENSION));$fileType2 = strtolower(pathinfo($targetFilePath2,PATHINFO_EXTENSION));$fileType3 = strtolower(pathinfo($targetFilePath3,PATHINFO_EXTENSION));$fileType4 = strtolower(pathinfo($targetFilePath4,PATHINFO_EXTENSION));$fileType5 = strtolower(pathinfo($targetFilePath5,PATHINFO_EXTENSION));

// $fileTypeColor1 = strtolower(pathinfo($targetFilePathColor1,PATHINFO_EXTENSION));$fileTypeColor2 = strtolower(pathinfo($targetFilePathColor2,PATHINFO_EXTENSION));$fileTypeColor3 = strtolower(pathinfo($targetFilePathColor3,PATHINFO_EXTENSION));$fileTypeColor4 = strtolower(pathinfo($targetFilePathColor4,PATHINFO_EXTENSION));$fileTypeColor5 = strtolower(pathinfo($targetFilePathColor5,PATHINFO_EXTENSION));

 
// $ReffImg1=uniqid('IMG1_').'.'.$fileType1; $ReffImg2=uniqid('IMG2_').'.'.$fileType2; $ReffImg3=uniqid('IMG3_').'.'.$fileType3; $ReffImg4=uniqid('IMG4_').'.'.$fileType4; $ReffImg5=uniqid('IMG5_').'.'.$fileType5; 

// $ReffImgColor1=uniqid('IMGC1_').'.'.$fileTypeColor1; $ReffImgColor2=uniqid('IMGC2_').'.'.$fileTypeColor2; $ReffImgColor3=uniqid('IMGC3_').'.'.$fileTypeColor3; $ReffImgColor4=uniqid('IMG_').'.'.$fileTypeColor4; $ReffImgColor5=uniqid('IMGC4_').'.'.$fileTypeColor5; 

// $targetFilePath1 = $targetDir . $ReffImg1;$targetFilePath2 = $targetDir . $ReffImg2;$targetFilePath3 = $targetDir . $ReffImg3;$targetFilePath4 = $targetDir . $ReffImg4;$targetFilePath5 = $targetDir . $ReffImg5;

// $targetFilePathCor1 = $targetDir . $ReffImgColor1;$targetFilePathCor2 = $targetDir . $ReffImgColor2;$targetFilePathCor3 = $targetDir . $ReffImgColor3;$targetFilePathCor4 = $targetDir . $ReffImgColor4;$targetFilePathCor5 = $targetDir . $ReffImgColor5;


// if(!empty($_FILES["img1"]["name"])){
//     $allowTypes = array('jpeg','png','gif','psd','jpg','JPEG','PNG','GIF','PSD','webp','WEBP'); 
//     if(in_array($fileType1, $allowTypes)){ move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$ReffImg1);}
//     if(in_array($fileType2, $allowTypes)){ move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$ReffImg2);}
//     if(in_array($fileType3, $allowTypes)){ move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$ReffImg3);}
//     if(in_array($fileType4, $allowTypes)){ move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$ReffImg4);}
//     if(in_array($fileType5, $allowTypes)){ move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$ReffImg5);}
// }else{
//         echo '<br>file makaynach';
// }

// echo '<br>'.$statusMsg;

?>

