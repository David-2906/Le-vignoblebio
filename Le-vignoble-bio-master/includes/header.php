<header>
    <div class="header2 bg-success-gradiant">
      <div class="">

        <nav class="navbar navbar-expand-lg h2-nav">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header2" aria-controls="header2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-menu"></span>
          </button>
          <div class="collapse navbar-collapse hover-dropdown" id="header2">
            <ul class="navbar-nav">
              <li class="nav-item active"><a class="nav-link" href="#"><h1>Le Vignoble bio</h1></a></li>
              <img src="images/logo.png" alt="Une photo de notre logo">
              <li class="nav-item dropdown position-relative">
                <a class="nav-link dropdown-toggle" href="#" id="h2-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Découvrez nos vins français<i class="fa fa-angle-down ml-1 font-12"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="nos-vins-rouge.php">Nos vins rouges</a></li>
                  <li><a class="dropdown-item" href="nos-vins-blanc.php">Nos vins blancs</a></li>
                  <li><a class="dropdown-item" href="nos-vins-rose.php">Nos vins rosés</a></li>
                  <li class="divider" role="separator"></li>
                  <li><a class="dropdown-item" href="#">Nos coffrets</a></li>
                  <li class="divider" role="separator"></li>
                  <li><a class="dropdown-item" href="#">Nos promotions</a></li>

                  <li class="dropdown-submenu position-relative"> <a class="dropdown-toggle dropdown-item" data-toggle="dropdown" href="#">Dropdown <i class="fa fa-long-arrow-right float-right mt-1"></i></a>
                  </li>
                </ul>
               </li>
               <li class="nav-item"><a class="nav-link" href="Qui-sommes-nous.php">Qui sommes nous</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contactez-nous</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="btn rounded-pill btn-dark py-2 px-4" href="#">Espace professionnel</a></li>
              <li class="nav-item"><a class="btn rounded-pill btn-dark py-2 px-4" href="#">Mon Panier</a></li>
              <li class="nav-item"><a class="btn rounded-pill btn-dark py-2 px-4" href="#" data-toggle="modal" data-target="#exampleModal">Inscrivez-vous</a></li>
              <li class="nav-item"><a class="btn rounded-pill btn-dark py-2 px-4" href="account.php">Mon compte</a></li>
              
            </ul>
          </div>
        </nav>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="p-3" action="#" method="post">
                <div class="row mb-3">
                    <label class="col-12 col-md-3 pl-0" for="firstname">Prénom</label>
                    <input class="col-12 col-md-9" type="text" name="firstname" id="firstname" placeholder="Prénom">
                </div>
                <div class="row mb-3">
                    <label class="col-12 col-md-3 pl-0" for="name">Nom</label>
                    <input class="col-12 col-md-9" type="text" name="name" id="name" placeholder="Nom">
                </div>
                <div class="row mb-3">
                    <label class="col-12 col-md-3 pl-0" for="email">Email</label>
                    <input class="col-12 col-md-9" type="email" name="email" id="email" placeholder="Adresse email">
                </div>
                <div class="row mb-3">
                    <label class="col-12 col-md-3 pl-0" for="password">Mot de passe</label>
                    <input class="col-12 col-md-9" type="password" name="password" id="password" placeholder="Mot de passe">
                </div>
                <input type="hidden" name="action" value="signup">
                <div class="row mb-3 justify-content-end">
                    <input  class="" type="submit" value="Valider">
                </div>
            </form>
        </div>
        <div class="modal-footer h-0">
      </header>