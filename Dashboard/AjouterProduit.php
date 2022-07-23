<?php include 'header.php';?>

<body>
    <style>
    .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%
    }

    input[type="text"],
    select {
        border: 0;
        background-color: #e6e6e6;
        border: 1px solid #111C2A;
        border-radius: 5px;
        width: 100%;
        height: 50px
    }

    .txtinput {
        width: 100%;
        background-color: #e6e6e6;
        border-radius: 10px;
        border: 0;
        padding: 10px;
        resize: none
    }


    input[type="checkbox"].tailleS {
        display: none
    }


    input[type="checkbox"].tailleS+label {
        text-align: center;
        color: gray;
        min-width: 50px;
        max-width: 100px;
        height: 20px;
        padding: 2px;
    }

    input[type="checkbox"].tailleS+label:hover {
        background-color: #111C2A;
        cursor: pointer;
        color: #fff;
    }

    input[type="checkbox"]#tailleS1:checked+label,
    input[type="checkbox"]#tailleS2:checked+label,
    input[type="checkbox"]#tailleS3:checked+label,
    input[type="checkbox"]#tailleS4:checked+label {
        color: #fff;
        background-color: #111C2A;
        border-radius: 3px;
        padding: 2px;
    }

    .barRech input[type="text"] {
        border: 0;
        background-color: #fff;
        border: 1px solid #111C2A;
        width: 400px;
        height: 50px;
        border-radius: 10px;
        box-shadow: 0 6px 44px -20px #000;
        margin-bottom: 20px;
        padding-left: 20px
    }

    .btnE {
        background-color: #fcea01;
        border-radius: 10px;
        border: 0;
        height: 50px;
        width: 100px
    }

    .btnE:hover {
        color: #fcea01;
        background-color: #000
    }

    .btnA {
        background-color: #fff;
        border: 1px solid #fffcdd;
        border-radius: 10px;
        color: #000;
        height: 50px;
        width: 100px
    }

    .btnA:hover {
        border-color: #000;
    }

    .inputfile {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px dashed #9d9d9d;
    }

    .inputfile:hover {
        cursor: pointer;
        border: 2px dashed #ebaa34;
    }

    #inputImg1,
    #inputImg2,
    #inputImg3,
    #inputImg4,
    #inputImg5,#inputImg6,#inputImg7,#inputImg8,#inputImg9,#inputImg10 {
        display: none
    }

    .inputfile1 {
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px dashed #9d9d9d;
    }
    .inputfile1 img{
        height: 100%;
    }

    .inputfile1:hover {
        cursor: pointer;
        border: 2px dashed #ebaa34;
    }
    .inputfile2 {
        height: 30px;
        width: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px dashed #9d9d9d
    }
    .inputfile2 img{
        height: 100%;
    }

    .inputfile2:hover {
        cursor: pointer;
        border: 2px dashed #111C2A;
    }
    </style>
    <script>
    document.title = "Ajouter Produits";
    </script>
    <div class="wrapper">
        <?php include 'menu.php';?>
        <div class="main">
            <?php include 'Top.php';?>
            <form action="ajoute.php" method="POST" enctype="multipart/form-data">
                <main class="content">
                    <div class="container-fluid p-0">
                        <h1 class="h3 mb-3"><strong>Ajouter Produits</strong></h1>
                        <div class="row">
                            <div class="col barRech">
                                <input class="" type="text" name="Ref" placeholder="Ref"  />
                            </div>
                            <div class="col-4 row"
                                style="display:flex;justify-content:end;align-items:center;margin-bottom:20px">
                                <div class="col"><input class="btnE" type="submit" value="Enregistrer" /></div>
                                <div class="col"><input class="btnA" type="reset" value="Annuler" /></div>
                            </div>
                        </div>
                        <div class="col-xl col-xxl">
                            <div class="w-100">
                                <div class="col-sm">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-sm">
                                                    <input id="group" type="text" name="group" style="display: none ;"/>
                                                    <h5 class="m-2">Catégorie :</h5>
                                                    <select name="categorie" id="categorie" >
                                                        
                                                            <option class="sac" value="Business">Business</option>
                                                            <option class="sac" value="Etudiant">Etudiant</option>
                                                            <option class="sac" value="Voyage">Voyage</option>
                                                            <option class="sac" value="Femme">Femme</option>
                                                            <option class="sac" value="Casquette">Casquette</option>
                                                            <option class="sac" value="Banane sac">Banane sac</option>
                                                            <option class="sac" value="Wallets">Wallets</option>
                                                            <option class="sac" value="Ceinture">Ceinture</option>
                                                            <option class="sac" value="Housses">Housses</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="col-sm">
                                                    <h5 class="m-2">Prix d'achat :</h5>
                                                    <input type="text" name="prixa" id=""  />
                                                </div>
                                                <div class="col-sm">
                                                    <h5 class="m-2">Prix de Vente:</h5>
                                                    <input type="text" name="prix" id=""  />
                                                </div>
                                                <div class="col-sm">
                                                    <h5 class="m-2">Remis :</h5>
                                                    <input type="text" name="remis" id="" value='0'  />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <h5 class="m-2">Titre :</h5>
                                                    <input type="text" name="titre" >
                                                    <h5 class="m-2">Description :</h5>
                                                    <textarea class="txtinput" name="description" id="" 
                                                        rows="10"></textarea>
                                                    <h5 class="m-2">Couleurs :</h5>
                                                <div class="row">      
                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" value="#f2f2f2" name="couleur1" style="width: 30px;height: 30px;">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile6(event)"
                                                                        accept="image/*" name="imgColor1" id="inputImg6">
                                                            <label class="mb-2 inputfile2" for="inputImg6">
                                                            <img src="img/icons/insertImg.jpeg" id="output6"  alt="">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" value="#f2f2f2" name="couleur2" style="width: 30px;height: 30px;">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile7(event)"
                                                                        accept="image/*" name="imgColor2" id="inputImg7">
                                                            <label class="mb-2 inputfile2" for="inputImg7">
                                                            <img src="img/icons/insertImg.jpeg" id="output7"  alt="">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" value="#f2f2f2" name="couleur3" style="width: 30px;height: 30px;">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile8(event)"
                                                                        accept="image/*" name="imgColor3" id="inputImg8">
                                                            <label class="mb-2 inputfile2" for="inputImg8">
                                                            <img src="img/icons/insertImg.jpeg" id="output8"  alt="">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" value="#f2f2f2" name="couleur4" style="width: 30px;height: 30px;">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile9(event)"
                                                                        accept="image/*" name="imgColor4" id="inputImg9">
                                                            <label class="mb-2 inputfile2" for="inputImg9">
                                                            <img src="img/icons/insertImg.jpeg" id="output9"  alt="">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" value="#f2f2f2" name="couleur5" style="width: 30px;height: 30px;">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile10(event)"
                                                                        accept="image/*" name="imgColor5" id="inputImg10">
                                                            <label class="mb-2 inputfile2" for="inputImg10">
                                                            <img src="img/icons/insertImg.jpeg" id="output10"  alt="">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                                    <div class="row">
                                                        <div id="Taillesac" class="col-sm">
                                                            <h5 class="m-2">Ajouter Taille</h5>
                                                            <input type="checkbox" name="chkl[ ]" value="Petite"
                                                                class="tailleS" id="tailleS1">
                                                            <label for="tailleS1">Petite</label>
                                                            <input type="checkbox" name="chkl[ ]" value="Moyenne"
                                                                class="tailleS" id="tailleS2">
                                                            <label for="tailleS2">Moyenne</label>
                                                            <input type="checkbox" name="chkl[ ]" value="Grande"
                                                                class="tailleS" id="tailleS3">
                                                            <label for="tailleS3">Grande</label>
                                                            <input type="checkbox" name="chkl[ ]" value="ST"
                                                                class="tailleS" id="tailleS4">
                                                            <label for="tailleS4">Standard</label>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="row mb-3">
                                                        <div class="col-sm">
                                                            <h5 class="m-2">Genre :</h5>
                                                            <select name="genre" id="">
                                                                <option value="Femme">Femme</option>
                                                                <option value="Homme" >Homme</option>
                                                                <option value="Enfant" >Enfant</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm">
                                                            <h5 class="m-2">Quantite :</h5>
                                                            <input class="text-center" type="text" name="quantite"
                                                                value='0'  />
                                                        </div>
                                                        <div class="col-sm">
                                                            <h5 class="m-2">Date :</h5>
                                                            <input class="text-center" type="text" name="date"
                                                                value="<?php echo date('d-m-Y H:i:s ', time());?>" />
                                                        </div>
                                                    </div>
                                                    <h5 class="m-2">Image de produit :</h5>
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile1(event)" name="img1"
                                                                 id="inputImg1">
                                                            <label class="inputfile" for="inputImg1"
                                                                style="min-height:200px">
                                                                <img src="img/icons/insertImg.jpeg" id="output1" alt="">
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="file" onchange="loadFile2(event)"
                                                                accept="image/*" name="img2"  id="inputImg2">
                                                            <label class="mb-2 inputfile1" for="inputImg2">
                                                                <img src="img/icons/insertImg.jpeg" id="output2"  alt="">
                                                            </label>
                                                            <input type="file" onchange="loadFile3(event)"
                                                                accept="image/*" name="img3" id="inputImg3">
                                                            <label class="mb-2 inputfile1" for="inputImg3">
                                                                <img src="img/icons/insertImg.jpeg" id="output3"  alt="">
                                                            </label>
                                                            <input type="file" onchange="loadFile4(event)"
                                                                accept="image/*" name="img4" id="inputImg4">
                                                            <label class="mb-2 inputfile1" for="inputImg4">
                                                                <img src="img/icons/insertImg.jpeg" id="output4"  alt="">
                                                            </label>
                                                            <input type="file" onchange="loadFile5(event)"
                                                                accept="image/*" name="img5" id="inputImg5">
                                                            <label class="inputfile1" for="inputImg5">
                                                                <img src="img/icons/insertImg.jpeg" id="output5"  alt="">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </form>
        </div>
    </div>
    <?php include 'script.php';?>
    <script>
    var loadFile1 = function(a) {
        var b = document.getElementById("output1");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile2 = function(a) {
        var b = document.getElementById("output2");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile3 = function(a) {
        var b = document.getElementById("output3");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile4 = function(a) {
        var b = document.getElementById("output4");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile5 = function(a) {
        var b = document.getElementById("output5");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile6 = function(a) {
        var b = document.getElementById("output6");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile7 = function(a) {
        var b = document.getElementById("output7");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile8 = function(a) {
        var b = document.getElementById("output8");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile9 = function(a) {
        var b = document.getElementById("output9");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile10 = function(a) {
        var b = document.getElementById("output10");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    </script>
</body>

</html>