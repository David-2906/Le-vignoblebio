<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vins_francais.css">
    <!-- <link rel="shortcut icon" href="images/logo1.png" type="image/png"> -->
    <title>Nos Vins Français</title>
</head>
<body>
<?php
        include 'includes/header.php';
    ?>
    
<!-- Sidebar filter section -->

<section id="sidebar">
    <p> Home | <b>Tous nos vins</b></p>
    <div class="border-bottom pb-2 ml-2">
        <h4 id="burgundy">Filtres</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group">
                <input type="checkbox" id="artisan">
                <label for="artisan">Rouges</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="breakfast">
                <label for="breakfast">Blancs</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="healthy">
                <label for="healthy">Rosés</label>
            </div> 
            <div class="form-group">
                <input type="checkbox" id="breakfast">
                <label for="breakfast">Mousseux</label>
            </div>    
            <div class="form-group">
                <input type="checkbox" id="breakfast">
                <label for="breakfast">Petillant</label>
            </div>   
            <div class="form-group">
                <input type="checkbox" id="breakfast">
                <label for="breakfast">Perlant</label>
            </div>                          
        </form>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Regions</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group">
                <input type="checkbox" id="tea">
                <label for="tea">Bourgogne</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="cookies">
                <label for="cookies">Vallée de la Loire</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="pastries">
                <label for="pastries">Bordeaux</label>
            </div>                                
            <div class="form-group">
                <input type="checkbox" id="dough">
                <label for="dough">Provence</label>
            </div>                                
            <div class="form-group">
                <input type="checkbox" id="choco">
                <label for="choco">Languedoc</label>
            </div>     
            <div class="form-group">
                <input type="checkbox" id="choco">
                <label for="choco">Roussillon</label>
            </div>   
            <div class="form-group">
                <input type="checkbox" id="choco">
                <label for="choco">Vallée du Rhônes</label>
            </div>  
            <div class="form-group">
                <input type="checkbox" id="choco">
                <label for="choco">Sud Ouest</label>
            </div>                            
        </form>
    </div>
    <div class="py-2 ml-3">
        <h6 class="font-weight-bold">Type de Culture</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group">
                <input type="checkbox" id="25off">
                <label for="25">Biologique</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="5off">
                <label for="5off" id="off">Biodynamique</label>
            </div>                                           
        </form>
    </div>
</section> 
 
      <!-- -------------Articles-------------- -->
    <section>
        <div class="row ">
    <article class="col-12 col-md-6 col-xl-3 mb-10">
        <figure>
            <img src="image/vin1.jpg" alt="Vin rosé">
            <figcaption>
                <h3>Vin Mousseux Moscato</h3>
                <p>13.99€</p>
            </figcaption>
        </figure>
        <div>
            <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
        </div>
    </article>
    
    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/vin2.jpg" alt="Vin rosé">
            <figcaption>
                <h3>Vin Rouge oé</h3>
                <p>11.58€</p>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/vin3.jpg" alt="Vin rosé">
            <figcaption>
                <h3>Vin Mousseux rosé Kriter</h3>
                <p>9.56€</p>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/vin4.jpg" alt="Vin rosé">
            <figcaption>
                <h3>Vin Rouge Marigny</h3>
                <p>15€</p>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>
</div>
    
        <div class="row">
    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/vin5.png" alt="Vin rosé">
            <figcaption>
                <h3>Vin Pétillant rosé Cante</h3>
                <p>12.25€</p>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/vin6.jpg" alt="Vin rosé">
            <figcaption>
                <h3>Vin Rouge Le Terme Blanc</h3>
                <p>19.20€</p>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/vin7.jpg" alt="Vin rosé">
            <figcaption>
                <h3>Vin Rosé Cuve des Oliviers</h3>
                <p>13.22€</p>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/vin8.jpg" alt="Vin rosé">
            <figcaption>
                <h3>Vin Blanc Un coup de dés</h3>
                <p>8.82€</p>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>
    </div>

    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin9.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc UBY </h3>
                    <p>15.38€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/Vin10.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Joy</h3>
                    <p>11.08€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/Vin11.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé La Minuette</h3>
                    <p>12.12€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin12.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Oé</h3>
                    <p>11.58€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>
    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin13.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge Cotes DU Rhône</h3>
                    <p>18.22€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin14.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Petillant JP CHENET</h3>
                    <p>14.89€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin15.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Mouseux Symbiose</h3>
                    <p>17.59€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin16.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Léoube</h3>
                    <p>15€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>

    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin17.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge Cuvée Plaisir</h3>
                    <p>10€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin18.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Petillant Ecologica</h3>
                    <p>14.23€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin19.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Bellini</h3>
                    <p>12.42€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin20.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Mas De Longchamp</h3>
                    <p>17€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>

    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin21.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Amountanage</h3>
                    <p>11.02€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin22.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé UBY</h3>
                    <p>15.38€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin23.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge Hartense </h3>
                    <p>14.87€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin24.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Petillant Colin</h3>
                    <p>9.05€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>

    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin25.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Les Beatines</h3>
                    <p>11€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin26.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Petillant Les Valenines</h3>
                    <p>17.20€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin27.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge Les Sens du Fruit</h3>
                    <p>15.02€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin28.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc SauvTerre</h3>
                    <p>12€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>


    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin29.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé SauvTerre</h3>
                    <p>12€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin30.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Mousseux Luisa</h3>
                    <p>18.21€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin31.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Roge Tour Couverte</h3>
                    <p>13.58€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin32.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Cuvée Plaisir</h3>
                    <p>10€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>

    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin33.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Siorac</h3>
                    <p>12.11€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin34.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Graves</h3>
                    <p>8.36€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin35.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge Fouquettes</h3>
                    <p>15.08€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin36.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Mousseux L'Etincelle </h3>
                    <p>9.99€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>

    

    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin37.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Perlant Domaine de Muzy</h3>
                    <p>10.58€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin38.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Les Cardounettes</h3>
                    <p>14.05€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin39.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Mouton Cadet</h3>
                    <p>16.74€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin40.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Autrement</h3>
                    <p>11.22€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>

    

    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin41.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Bordeaux Sec</h3>
                    <p>12.35€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin42.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge J & G Musso</h3>
                    <p>9.10€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin43.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge Autrement</h3>
                    <p>11.22€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin44.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé La Roveria</h3>
                    <p>10.99€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>



    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin45.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Mousseux Les Charmettes</h3>
                    <p>13.25€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin46.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Monbazillac</h3>
                    <p>11€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin47.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Mousseux </h3>
                    <p>24.42€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin48.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge Morey St Denis</h3>
                    <p>9.10€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>

    

    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin49.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Autrement</h3>
                    <p>11.22€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin50.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Chatillon en Diois</h3>
                    <p>11.58€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin51.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Pecorino</h3>
                    <p>12.54€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin52.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge Sangiovese Marche </h3>
                    <p>8.32€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>

    

    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin53.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge Evasion Nature</h3>
                    <p>9.97€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin54.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Mousseux Kriter</h3>
                    <p>10.06€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin55.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Pinchinat</h3>
                    <p>10.42€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin56.jpg" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge Les 3 Riviéres</h3>
                    <p>10.09€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>

    

    <div class="row" id="raisin">
        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin57.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Blanc Autrement</h3>
                    <p>11.22€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin58.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Mousseux Bulles de Petanques</h3>
                    <p>7.36€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin59.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rouge Grange aux pies</h3>
                    <p>20.42€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-12 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="image/vin60.png" alt="Vin rosé">
                <figcaption>
                    <h3>Vin Rosé Saint Esteve</h3>
                    <p>10.09€</p>
                </figcaption>
                <div>
                    <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>
    <a href="accueil.php"><h3>Retour à l'accueil</h3></a>

    </section>
        </div> 

    <?php
          include 'includes/footer.php';
          ?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>