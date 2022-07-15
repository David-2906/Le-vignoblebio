<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Mon compte</title>
</head>
<body>
    <main>
        <h1 class="text-center">Mon Compte</h1>
        <form class="p-2 p-lg-4" action="" method="post">
            <div class="form-group row justify-content-start align-items-center mx-1 mx-lg-0">
                <label class="col-12 col-lg-2 mb-lg-0" for="firstname">Prénom</label>
                <input class="form-control col-12 col-lg-4" type="text" name="firstname" id="firstname">
            </div>
            <div class="form-group row justify-content-start align-items-center mx-1 mx-lg-0">
                <label class="col-12 col-lg-2 mb-lg-0" for="name">Nom</label>
                <input class="form-control col-12 col-lg-4" type="text" name="name" id="name">
            </div>
            <div class="form-group row justify-content-start align-items-center mx-1 mx-lg-0">
                <label class="col-12 col-lg-2 mb-lg-0" for="address">Adresse</label>
                <input class="form-control col-12 col-lg-4" type="text" name="address" id="address">
            </div>
            <div class="form-group row justify-content-start align-items-center mx-1 mx-lg-0">
                <label class="col-12 col-lg-2 mb-lg-0" for="email">Adresse email</label>
                <input class="form-control col-12 col-lg-4" type="email" name="email" id="email">
            </div>
            <button type="submit">Enregistrer</button>
        </form>
    </main>

    <?php
    include 'includes/footer.php';
    ?>
</body>
</html>