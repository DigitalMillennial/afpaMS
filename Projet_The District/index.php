<?php include 'header.php'; ?>

<section class="search-section">
  <div class="search-container">
    <input type="text" placeholder="Recherche...">
    <button>Rechercher</button>
  </div>
</section>

<main class="premier">
  <!-- This div is intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay main-content"></div>  
  
  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="/img/economiseur.mp4" type="video/mp4">
  </video>
  
  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white categories-section">
        <h1>Bienvenue dans notre restaurant!</h1>      
        <a href="Catégorie.php" class="btn btn-primary m-5">Voir les catégories</a>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
