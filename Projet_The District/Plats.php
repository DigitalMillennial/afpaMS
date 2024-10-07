<?php include 'header.php'; ?>

<section class="search-section">
  <div class="search-container">
    <input type="text" placeholder="Recherche...">
    <button>Rechercher</button>
  </div>
</section>

<main class="main-content">
  <section class="categories-section">      
    <div class="categories-container">
      <!-- Beverages -->
      <div class="category">
        <img src="/img/food/Beverages/1.png" alt="Pepsi">
        <p>Pepsi</p>
        <p class="price">1,60 €</p>
        <p class="weight">50 cl</p>
        <div class="order-controls">
          <button class="minus-btn" disabled>-</button>
          <span class="quantity">0</span>
          <button class="plus-btn">+</button>
        </div>
      </div>
      <div class="category">
        <img src="/img/food/Beverages/2.png" alt="Jus">
        <p>Jus</p>
        <p class="price">2,40 €</p>
        <p class="weight">25 cl</p>
        <div class="order-controls">
          <button class="minus-btn" disabled>-</button>
          <span class="quantity">0</span>
          <button class="plus-btn">+</button>
        </div>
      </div>
      <div class="category">
        <img src="/img/food/Beverages/3.png" alt="Café">
        <p>Café</p>
        <p class="price">5,00 €</p>
        <p class="weight">35 cl</p>
        <div class="order-controls">
          <button class="minus-btn" disabled>-</button>
          <span class="quantity">0</span>
          <button class="plus-btn">+</button>
        </div>
      </div>
      <div class="category">
        <img src="/img/food/Beverages/4.png" alt="Bière">
        <p>Bière</p>
        <p class="price">4,35 €</p>
        <p class="weight">50 cl</p>
        <div class="order-controls">
          <button class="minus-btn" disabled>-</button>
          <span class="quantity">0</span>
          <button class="plus-btn">+</button>
        </div>
      </div>
      <div class="category">
        <img src="/img/food/Beverages/5.png" alt="Vin">
        <p>Vin</p>
        <p class="price">13,75 €</p>
        <p class="weight">50 cl</p>
        <div class="order-controls">
          <button class="minus-btn" disabled>-</button>
          <span class="quantity">0</span>
          <button class="plus-btn">+</button>
        </div>
      </div>
      <div class="category">
        <img src="/img/food/Beverages/6.png" alt="Whisky">
        <p>Whisky</p>
        <p class="price">38,55 €</p>
        <p class="weight">50 cl</p>
        <div class="order-controls">
          <button class="minus-btn" disabled>-</button>
          <span class="quantity">0</span>
          <button class="plus-btn">+</button>
        </div>
      </div>
      <!-- Main Courses -->
      <!-- Добавьте другие блюда, как и в оригинале, используя тот же формат -->
    </div>      
  </section>
</main>

<?php include 'footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/js/script.js"></script>
