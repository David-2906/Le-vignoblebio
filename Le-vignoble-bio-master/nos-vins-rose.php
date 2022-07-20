<!doctype <!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,400;1,500&display=swap" rel="stylesheet">  -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="vins.css"> 
        <!-- <link rel="stylesheet" href="style3.css"> -->



   
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


 <!-- </div><div class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
    <h3 class="text-uppercase font-weight-bold mb-3">Trier Par</h3>
    <div class="mt-2 mb-2 pl-2">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="category-1">
        <label class="custom-control-label" for="category-1">Regions</label>
      </div>
    </div>
    <div class="mt-2 mb-2 pl-2">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="category-2">
        <label class="custom-control-label" for="category-2">Vins Biologique</label>
      </div>
    </div>
    <div class="mt-2 mb-2 pl-2">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="category-3">
        <label class="custom-control-label" for="category-3">Vins Biodynamique</label>
      </div>
    </div>
   
    <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
    <h3 class="text-uppercase mt-5 mb-3 font-weight-bold">Contenance</h3>
    <div class="mt-2 mb-2 pl-2">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="filter-size-1">
        <label class="custom-control-label" for="filter-size-1">0.75cl</label>
      </div>
    </div>
    <div class="mt-2 mb-2 pl-2">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="filter-size-2">
        <label class="custom-control-label" for="filter-size-2">1.5l</label>
      </div>
    </div>
    <div class="mt-2 mb-2 pl-2">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="filter-size-3">
        <label class="custom-control-label" for="filter-size-3">3l</label>
      </div>
    </div>
    <div class="mt-2 mb-2 pl-2">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="filter-size-4">
        <label class="custom-control-label" for="filter-size-4">5l</label>
      </div>
    </div>
    <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
    <h3 class="text-uppercase mt-5 mb-3 font-weight-bold">Price</h3>
    <div class="price-filter-control">
        <input type="number" class="form-control w-50 pull-left mb-2" value="0" id="price-min-control">
        <input type="number" class="form-control w-50 pull-right" value="50" id="price-max-control">
      </div>
      <input id="ex2" type="text" class="slider " value="0,50" data-slider-min="10" data-slider-max="50" data-slider-step="5" data-slider-value="[0,50]" data-value="0,50" style="display: none;">
      <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
   

</div>
</div> --> 
<!-- -------------Articles-------------- -->
    <section>
        <div class="row ">
    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="images/Vin 1.png" alt="Vin rosé">
            <figcaption>
                <h3>bouteille de vin rosé</h3>
                <p>13.99€</p>
            </figcaption>
        </figure>
        <div>
            <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
        </div>
    </article>
    
    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="images/Vin 2.png" alt="Vin rosé">
            <figcaption>
                <h3>bouteille de vin rosé</h3>
                <p>11.58€</p>
            </figcaption>
            <div>
                <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="images/Vin 3.png" alt="Vin rosé">
            <figcaption>
                <h3>bouteille de vin rosé</h3>
                <p>9.56€</p>
            </figcaption>
            <div>
                <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="images/Vin 4.png" alt="Vin rosé">
            <figcaption>
                <h3>bouteille de vin rosé</h3>
                <p>15€</p>
            </figcaption>
            <div>
                <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>
</div>
    
        <div class="row">
    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="images/Vin 5.png" alt="Vin rosé">
            <figcaption>
                <h3>bouteille de vin rosé</h3>
                <p>12.25€</p>
            </figcaption>
            <div>
                <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="images/Vin 6.png" alt="Vin rosé">
            <figcaption>
                <h3>bouteille de vin rosé</h3>
                <p>19.20€</p>
            </figcaption>
            <div>
                <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="images/Vin 7.png" alt="Vin rosé">
            <figcaption>
                <h3>bouteille de vin rosé</h3>
                <p>13.22€</p>
            </figcaption>
            <div>
                <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-3 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="images/Vin 8.png" alt="Vin rosé">
            <figcaption>
                <h3>bouteille de vin rosé</h3>
                <p>8.82€</p>
            </figcaption>
            <div>
                <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>
    </div>

    <div class="row">
        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/Vin 9.png" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>14.36€</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/Vin 10.png" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>11.08€</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/Vin 11.png" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>12.12€</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/Vin 12.png" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>14.87€</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>
    <div class="row">
        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/Vin 13.png" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>18.22€</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/Vin 14.png" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>14.89€</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/Vin 15.png" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>17.59€</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/saint-roux-cuvee-pigeonnier-vin- (1).jpg" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>15€</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>
    </div>

    <div class="row">
        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/domaine-esteve-rose-bio (2).png" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>11.22€</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/arnaude-rose-provence (1).png" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>9.36</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/chatillon-en-diois-vin-rose-bio  (1).jpg" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>20.42€</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

        <article class="col-3 col-md-6 col-xl-3 mb-3">
            <figure>
                <img src="images/02_rose_du_var-1499963705 (2).jpg" alt="Vin rosé">
                <figcaption>
                    <h3>bouteille de vin rosé</h3>
                    <p>10.09€</p>
                </figcaption>
                <div>
                    <button class="btn w-100 rounded my-2">Ajouter au panier</button>      
                </div>
            </figure>
        </article>

    </div>
    </section>
        </div>

          
          <?php
          include 'includes/footer.php';
          ?>


      </body>
     
    
</html>