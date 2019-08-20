<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product App</title>
    <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body>

    <div class="nav-bar"></div>

    <div id="app">
      <div class="cart">
        <p>Cart({{ cart.length }})</p>
      </div>
      <product :premium="premium" @add-to-cart="updateCart"></product>
    </div>


    <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="JS/lesson11.js"></script>
  </body>
</html>
