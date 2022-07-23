<?php
include 'db-conn.php';
session_start();

$txtimg1=" ";$txtimg2=" ";$txtimg3=" ";$txtimg4=" ";$txtimg5=" ";
$txtimgcolor1=" ";$txtimgcolor2=" ";$txtimgcolor3=" ";$txtimgcolor4=" ";$txtimgcolor5=" ";


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
$couleur1=$_POST['couleur1'];$couleur2=$_POST['couleur2'];$couleur3=$_POST['couleur3'];$couleur4=$_POST['couleur4'];$couleur5=$_POST['couleur5'];


$targetDir = "./img/uploads/";
$allowTypes = array('jpeg','png','gif','psd','jpg','JPEG','PNG','GIF','PSD','webp','WEBP'); 

//image 1
$fileName1 = basename($_FILES["img1"]["name"]);
if( $fileName1 != null ){
$targetFilePath1 = $targetDir . $fileName1;
$fileType1 = strtolower(pathinfo($targetFilePath1,PATHINFO_EXTENSION));
$ReffImg1=uniqid('IMG1_').'.'.$fileType1;
$targetFilePath1 = $targetDir . $ReffImg1;
    if(in_array($fileType1, $allowTypes)){ 
       move_uploaded_file($_FILES['img1']['tmp_name'], $targetDir.$ReffImg1);
        $txtimg1=" `img1`='$ReffImg1' , ";}
}

//image 2
$fileName2 = basename($_FILES["img2"]["name"]);
if( $fileName2 != null ){
    $targetFilePath2 = $targetDir . $fileName2;
    $fileType2 = strtolower(pathinfo($targetFilePath2,PATHINFO_EXTENSION));
    $ReffImg2=uniqid('IMG2_').'.'.$fileType2;
    $targetFilePath2 = $targetDir . $ReffImg2;
        if(in_array($fileType2, $allowTypes)){ 
           move_uploaded_file($_FILES['img2']['tmp_name'], $targetDir.$ReffImg2);
            $txtimg2=" `img2`='$ReffImg2' , ";}
}


//image 3
$fileName3 = basename($_FILES["img3"]["name"]);
if( $fileName3 != null ){
    $targetFilePath3 = $targetDir . $fileName3;
    $fileType3 = strtolower(pathinfo($targetFilePath3,PATHINFO_EXTENSION));
    $ReffImg3=uniqid('IMG3_').'.'.$fileType3;
    $targetFilePath3 = $targetDir . $ReffImg3;
        if(in_array($fileType3, $allowTypes)){ 
           move_uploaded_file($_FILES['img3']['tmp_name'], $targetDir.$ReffImg3);
            $txtimg3=" `img3`='$ReffImg3' , ";}
}

//image 4
$fileName4 = basename($_FILES["img4"]["name"]);
if( $fileName4 != null ){
    $targetFilePath4 = $targetDir . $fileName4;
    $fileType4 = strtolower(pathinfo($targetFilePath4,PATHINFO_EXTENSION));
    $ReffImg4=uniqid('IMG4_').'.'.$fileType4;
    $targetFilePath4 = $targetDir . $ReffImg4;
        if(in_array($fileType4, $allowTypes)){ 
           move_uploaded_file($_FILES['img4']['tmp_name'], $targetDir.$ReffImg4);
            $txtimg4=" `img4`='$ReffImg4' , ";}
}

//image 5
$fileName5 = basename($_FILES["img5"]["name"]);
if( $fileName5 != null ){
    $targetFilePath5 = $targetDir . $fileName5;
    $fileType5 = strtolower(pathinfo($targetFilePath5,PATHINFO_EXTENSION));
    $ReffImg5=uniqid('IMG5_').'.'.$fileType5;
    $targetFilePath5 = $targetDir . $ReffImg5;
        if(in_array($fileType5, $allowTypes)){ 
           move_uploaded_file($_FILES['img5']['tmp_name'], $targetDir.$ReffImg5);
            $txtimg5=" `img5`='$ReffImg5' , ";}
}

//image color 1
$fileNameColor1 = basename($_FILES["imgColor1"]["name"]);
if( $fileNameColor1 != null ){
    $targetFilePathColor1 = $targetDir . $fileNameColor1;
    $fileTypeColor1 = strtolower(pathinfo($targetFilePathColor1,PATHINFO_EXTENSION));
    $ReffImgColor1=uniqid('IMGC1_').'.'.$fileTypeColor1;
    $targetFilePathColor1 = $targetDir . $ReffImgColor1;
        if(in_array($fileTypeColor1, $allowTypes)){ 
           move_uploaded_file($_FILES['imgColor1']['tmp_name'], $targetDir.$ReffImgColor1);
            $txtimgcolor1=" `img1`='$ReffImgColor1' , ";}
}

//image color 2
$fileNameColor2 = basename($_FILES["imgColor2"]["name"]);
if( $fileNameColor2 != null ){
    $targetFilePathColor2 = $targetDir . $fileNameColor2;
    $fileTypeColor2 = strtolower(pathinfo($targetFilePathColor2,PATHINFO_EXTENSION));
    $ReffImgColor2=uniqid('IMGC2_').'.'.$fileTypeColor2;
    $targetFilePathColor2 = $targetDir . $ReffImgColor2;
        if(in_array($fileTypeColor2, $allowTypes)){ 
           move_uploaded_file($_FILES['imgColor2']['tmp_name'], $targetDir.$ReffImgColor2);
            $txtimgcolor2=" `img2`='$ReffImgColor2' , ";}
}

//image color 3
$fileNameColor3 = basename($_FILES["imgColor3"]["name"]);
if( $fileNameColor3 != null ){
    $targetFilePathColor3 = $targetDir . $fileNameColor3;
    $fileTypeColor3 = strtolower(pathinfo($targetFilePathColor3,PATHINFO_EXTENSION));
    $ReffImgColor3=uniqid('IMGC3_').'.'.$fileTypeColor3;
    $targetFilePathColor3 = $targetDir . $ReffImgColor3;
        if(in_array($fileTypeColor3, $allowTypes)){ 
           move_uploaded_file($_FILES['imgColor3']['tmp_name'], $targetDir.$ReffImgColor3);
            $txtimgcolor3=" `img3`='$ReffImgColor3' , ";}
}

//image color 4
$fileNameColor4 = basename($_FILES["imgColor4"]["name"]);
if( $fileNameColor4 != null ){
    $targetFilePathColor4 = $targetDir . $fileNameColor4;
    $fileTypeColor4 = strtolower(pathinfo($targetFilePathColor4,PATHINFO_EXTENSION));
    $ReffImgColor4=uniqid('IMGC4_').'.'.$fileTypeColor4;
    $targetFilePathColor4 = $targetDir . $ReffImgColor4;
        if(in_array($fileTypeColor4, $allowTypes)){ 
           move_uploaded_file($_FILES['imgColor4']['tmp_name'], $targetDir.$ReffImgColor4);
            $txtimgcolor4=" `img4`='$ReffImgColor4' , ";
        }
}


//image color 5
$fileNameColor5 = basename($_FILES["imgColor5"]["name"]);
if( $fileNameColor5 != null ){
    $targetFilePathColor5 = $targetDir . $fileNameColor5;
    $fileTypeColor5 = strtolower(pathinfo($targetFilePathColor5,PATHINFO_EXTENSION));
    $ReffImgColor5=uniqid('IMGC5_').'.'.$fileTypeColor5;
    $targetFilePathColor5 = $targetDir . $ReffImgColor5;
        if(in_array($fileTypeColor5, $allowTypes)){
           move_uploaded_file($_FILES['imgColor5']['tmp_name'], $targetDir.$ReffImgColor5);
            $txtimgcolor5=" `img5`='$ReffImgColor5' , ";
        }
}



$sql="UPDATE `produits` SET  `group`='$group' , `titre`='$titre',`categorie`='$categorie',`prixa`='$prixa',`prix`='$prix',`remis`='$remis',
`genre`='$genre',`quantite`='$quantite',`description`='$description',".$txtimg1."  ".$txtimg2."  ".$txtimg3."  ".$txtimg4."  ".$txtimg5." 
`couleur1`='$couleur1', `couleur2`='$couleur2' , `couleur3`='$couleur3' , `couleur4`='$couleur4' , `couleur5`='$couleur5' ,
".$txtimgcolor1."  ".$txtimgcolor2."  ".$txtimgcolor3."  ".$txtimgcolor4."  ".$txtimgcolor5."  `taille`='$taille' WHERE `Ref`='$Ref' ";


        //   echo $sql;
        if ($cnx->query($sql) === TRUE) { 
            $Reffuser=$_SESSION["Reffuser"];
            $action='Modifier un article';
            $sqluser="INSERT INTO `history`( `Reffuser`, `Action`, `Product`) VALUES ('$Reffuser','$action','$Ref')";
            $cnx->query($sqluser);
            echo '<script>alert("le produit a ete modifier avec succès")</script>';
            echo '<script>window.location.href = "Produits.php";</script>';
        }else{
            echo '<script>alert("Erreur : vérifier les informations")</script>';
            echo '<script>
                window.location=history.go(-1);
                </script>';
       }

?>



<?php
// include 'db-conn.php';
// session_start();

// $txtimg1=" ";$txtimg2=" ";$txtimg3=" ";$txtimg4=" ";$txtimg5=" ";$txtimg6=" ";$txtimgcolor1=" ";$txtimgcolor2=" ";$txtimgcolor3=" ";$txtimgcolor4=" ";$txtimgcolor5=" ";$txtimgcolor6=" ";
// $txtimgcolor7=" ";$txtimgcolor8=" ";$txtimgcolor9=" ";$txtimgcolor10=" ";

// $group=$_POST['group'];

// $Ref=$_POST['Ref'];

// $titre=$_POST['titre'];

// $categorie=$_POST['categorie'];

// $prixa=$_POST['prixa'];

// $prix=$_POST['prix'];

// $remis=$_POST['remis'];

// $genre=$_POST['genre'];

// $quantite=$_POST['quantite'];

// $remis=$_POST['remis'];

// $description=$_POST['description'];

// $description = str_replace("'", "\'", $description);

// $taille="";
// $checkbox1 = $_POST['chkl'] ;
// for ($i=0; $i<count($checkbox1); $i++)
// $taille .= $checkbox1[$i]."-";




// $imgData1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
// if( $imgData1 != null ){  $txtimg1=" `img1`='$imgData1' , ";}

// $imgData2 = addslashes(file_get_contents($_FILES['img2']['tmp_name']));
// if( $imgData2 != null ){  $txtimg2=" `img2`='$imgData2' , ";}

// $imgData3 = addslashes(file_get_contents($_FILES['img3']['tmp_name']));
// if( $imgData3 != null ){  $txtimg3=" `img3`='$imgData3' , ";}

// $imgData4 = addslashes(file_get_contents($_FILES['img4']['tmp_name']));
// if( $imgData4 != null ){  $txtimg4=" `img4`='$imgData4' , ";}

// $imgData5 = addslashes(file_get_contents($_FILES['img5']['tmp_name']));
// if( $imgData5 != null ){  $txtimg5=" `img5`='$imgData5'  ";}

// // echo $imgData2;
// $couleur1=$_POST['couleur1'];
// $imgColor1 = addslashes(file_get_contents($_FILES['imgColor1']['tmp_name']));
// if( $imgColor1 != null ){  $txtimgcolor1=" `Imgcouleur1`='$imgColor1' , ";}
// $couleur2=$_POST['couleur2'];
// $imgColor2 = addslashes(file_get_contents($_FILES['imgColor2']['tmp_name']));
// if( $imgColor2 != null ){  $txtimgcolor2=" `Imgcouleur2`='$imgColor2' , ";}
// $couleur3=$_POST['couleur3'];
// $imgColor3 = addslashes(file_get_contents($_FILES['imgColor3']['tmp_name']));
// if( $imgColor3 != null ){  $txtimgcolor3=" `Imgcouleur3`='$imgColor3' , ";}
// $couleur4=$_POST['couleur4'];
// $imgColor4 = addslashes(file_get_contents($_FILES['imgColor4']['tmp_name']));
// if( $imgColor4 != null ){  $txtimgcolor4=" `Imgcouleur4`='$imgColor4' , ";}
// $couleur5=$_POST['couleur5'];
// $imgColor5 = addslashes(file_get_contents($_FILES['imgColor5']['tmp_name']));
// if( $imgColor5 != null ){  $txtimgcolor5=" `Imgcouleur5`='$imgColor5' , ";}
// $couleur6=$_POST['couleur6'];
// $imgColor6 = addslashes(file_get_contents($_FILES['imgColor6']['tmp_name']));
// if( $imgColor6 != null ){  $txtimgcolor6=" `Imgcouleur6`='$imgColor6' , ";}
// $couleur7=$_POST['couleur7'];
// $imgColor7 = addslashes(file_get_contents($_FILES['imgColor7']['tmp_name']));
// if( $imgColor7 != null ){  $txtimgcolor7=" `Imgcouleur7`='$imgColor7' , ";}
// $couleur8=$_POST['couleur8'];
// $imgColor8 = addslashes(file_get_contents($_FILES['imgColor8']['tmp_name']));
// if( $imgColor8 != null ){  $txtimgcolor8=" `Imgcouleur8`='$imgColor8' , ";}
// $couleur9=$_POST['couleur9'];
// $imgColor9 = addslashes(file_get_contents($_FILES['imgColor9']['tmp_name']));
// if( $imgColor9 != null ){  $txtimgcolor9=" `Imgcouleur9`='$imgColor9' , ";}
// $couleur10=$_POST['couleur10'];
// $imgColor10 = addslashes(file_get_contents($_FILES['imgColor10']['tmp_name']));
// if( $imgColor10 != null ){  $txtimgcolor10=" `Imgcouleur10`='$imgColor10' , ";}




// $sql="UPDATE `produits` SET  `group`='$group' , `titre`='$titre',`categorie`='$categorie',`prixa`='$prixa',`prix`='$prix',`remis`='$remis',
// `genre`='$genre',`quantite`='$quantite',`description`='$description',".$txtimg1."  ".$txtimg2."  ".$txtimg3."  ".$txtimg4."  ".$txtimg5." 
// `couleur1`='$couleur1', `couleur2`='$couleur2' , `couleur3`='$couleur3' , `couleur4`='$couleur4' , `couleur5`='$couleur5' , `couleur6`='$couleur6' ,
// `couleur7`='$couleur7' , `couleur8`='$couleur8' , `couleur9`='$couleur9' , `couleur10`='$couleur10' , 
// ".$txtimgcolor1."  ".$txtimgcolor2."  ".$txtimgcolor3."  ".$txtimgcolor4."  ".$txtimgcolor5." 
// ".$txtimgcolor6."  ".$txtimgcolor7."  ".$txtimgcolor8."  ".$txtimgcolor9."  ".$txtimgcolor10." `taille`='$taille' WHERE `Ref`='$Ref' ";


//         //   echo $sql;
//         if ($cnx->query($sql) === TRUE) { 
//             $Reffuser=$_SESSION["Reffuser"];
//             $action='Modifier un article';
//             $sqluser="INSERT INTO `history`( `Reffuser`, `Action`, `Product`) VALUES ('$Reffuser','$action','$Ref')";
//             $cnx->query($sqluser);
//             echo '<script>alert("le produit a ete modifier avec succès")</script>';
//             echo '<script>window.location.href = "Produits.php";</script>';
//         }else{
//             echo '<script>alert("Erreur : vérifier les informations")</script>';
//             echo '<script>
//                 window.location=history.go(-1);
//                 </script>';
//        }


?>