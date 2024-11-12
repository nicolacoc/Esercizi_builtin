<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imageName = (array_key_exists('image', $_FILES))? $_FILES["image"]["name"]:null;
    $Nome = (array_key_exists('Nome', $_POST))? $_POST["Nome"]:null;
    $Cognome = (array_key_exists('Cognome', $_POST))? $_POST["Cognome"]:null;
    $Societa = (array_key_exists('Societa', $_POST))? $_POST["Societa"]:null;
    $Qualifica = (array_key_exists('Qualifica', $_POST))? $_POST["Qualifica"]:null;
    $Email = (array_key_exists('Email', $_POST))? $_POST["Email"]:null;
    $Telefono = (array_key_exists('Telefono', $_POST))? $_POST["Telefono"]:null;
    $Data_di_Nascita = (array_key_exists('Data_di_Nascita', $_POST))? $_POST["Data_di_Nascita"]:null;
   if (array_key_exists('image', $_FILES)&& is_uploaded_file($_FILES['image']['tmp_name'])) {
     $notify= "Caricato con successo il file";
     $imageSRC="img/$imageName";
     move_uploaded_file($_FILES['image']['tmp_name'], $imageSRC);

   }else{
       $notify= "File non caricato";
   }

}else{
    $imageName = null;
    $Nome = null;
    $Cognome = null;
    $Societa = null;
    $Qualifica = null;
    $Email = null;
    $Telefono = null;
    $Data_di_Nascita = null;
    $notify= null;
}

var_dump($_FILES);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moduli</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <span class="text-danger font-weight-bold"><?php echo (!empty($notify))?$notify:""?></span>
        </div>
    </div>
    <?php if(!empty($imageSRC)):?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $imageSRC?>" class="card-img-top" alt="your image">
    </div>
    <?php endif?>
    <form method="post" enctype="multipart/form-data">
    <div class="input-group mb-3 mt-5">
        <input type="hidden" name="MAX_FILE_SIZE" value="10240">
        <input type="file" class="form-control" id="image" name="image" value="<?php echo $imageName?>" required>
        <label class="input-group-text" for="image">Upload</label>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="Nome">Nome</span>
        <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1" name="Nome" value="<?php echo $Nome?>" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="Cognome">Cognome</span>
        <input type="text" class="form-control" placeholder="Cognome" aria-label="Cognome" aria-describedby="basic-addon1" name="Cognome" value="<?php echo $Cognome?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="Societa">Società</span>
        <input type="text" class="form-control" placeholder="Societa" aria-label="Societa" aria-describedby="basic-addon1" name="Societa" value="<?php echo $Societa?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="Qualifica">Qualifica</span>
        <input type="text" class="form-control" placeholder="Qualifica" aria-label="Qualifica" aria-describedby="basic-addon1" name="Qualifica" value="<?php echo $Qualifica?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="Email">Email</span>
        <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" name="Email" value="<?php echo $Email?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="Telefono">Telefono</span>
        <input type="number" class="form-control" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1" name="Telefono" value="<?php echo $Telefono?>" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="Data_di_Nascita">Data di Nascita</span>
        <input type="text" class="form-control" placeholder="Data_di_Nascita" aria-label="Data_di_Nascita" aria-describedby="basic-addon1" name="Data_di_Nascita" value="<?php echo $Data_di_Nascita?>">
    </div>
        <div class="input-group my-3">
            <button type="submit" class="btn btn-secondary m-auto my-2">Salva</button>
        </div>
    </form>
</div>
</body>
</html>