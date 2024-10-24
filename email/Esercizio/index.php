<?php
$return = $_GET;
if (!empty($return['error'])) {
    $error= $return['error'];
}else{
    $error = "";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Esercizio</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form action="esercizio1.php" method="post">
    <div class="card" style="width: 30rem;">
        <?php if (!empty($error)): ?>
        <h4 class="text-center text-danger"><?php echo $error?></h4>
        <?php endif; ?>
        <div class="card-body">
            <h5 class="card-title">Send module</h5>
            <div class="input-group mb-3">
                <span class="input-group-text" id="email">Email</span>
                <input type="email" class="form-control" aria-label="email" aria-describedby="email" name="email">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="Nome">Nome</span>
                <input type="text" class="form-control" aria-label="nome" aria-describedby="nome" name="nome">
            </div>
            <div class="input-group">
                <span class="input-group-text">Testo email</span>
                <textarea class="form-control" aria-label="Testo" name="text" style="height: 15rem"></textarea>
            </div>
            <div class="input-group mb-3 my-3 align-content-center">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Invia</button>
            </div>
        </div>
    </div>
    </form>
</div>

</body>
</html>