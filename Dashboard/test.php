<?php include 'header.php'; ?>
<?php 
    if($_GET['envoyer']!=''){
        $img=$_GET['file'];
        echo $img;
    }


?>

<body>

	<div class="wrapper">
		<?php include 'menu.php'; ?>
        <div class="main" style="display: flex;justify-content: center;align-items: center;">
                    <form action="upload_file.php" method="post" enctype="multipart/form-data">
                        <label for="file">Filename:</label><br>
                        <input type="file" name="file" id="file" required><br>
                        <input type="submit" name="submit" value="Submit">
                    </form>
                <!-- <form action="">
                    <input type="file" name="file">
                    <input type="submit" name="envoyer" value="Envoyer">
                </form> -->
    <div class="row">

  

    <?php include 'db-conn.php';
          $sql="SELECT * FROM `employee_details`";
          
          $result = $cnx->query($sql);
          while ($row = $result->fetch_assoc()) {
            
    ?> 
     <div class="col">
        <img src="<?php echo $row['emp_image'];?>" width="200px" height="200px" alt="">
        <!-- <img src="./img//uploads/panier.PNG" width="200px" height="200px" alt=""> -->
    </div>
    <?php } ?>

    </div>
    </div>
	</div>
    <?php include 'script.php'; ?>
</body>

</html>