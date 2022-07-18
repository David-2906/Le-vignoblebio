<!doctype <!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style3.css" rel="stylesheet">
        <link href="vins.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,400;1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
   
    </head>
    <body>
         <?php
        include 'includes/header.php';
    ?>
    
    <div class="wrapper">
            <div class="label">Rechercher dans notre catalogue</div>
            <div class="searchBar">
              <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Saisissez ici votre requête..." value="" />
              <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                </svg>
              </button>
            </div>
          </div>



          





          <?php
          include 'includes/footer.php';
          ?>


      </body>





        
    
</html>