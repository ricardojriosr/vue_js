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
      <div class="product">

        <div class="product-image">
            <img v-bind:src="image">
        </div>

        <div class="product-info">
            <h1>{{ product }} <span style="color:red" v-show="onSale">On Sale!</span></h1>
            <p v-if="inventory > 10">In Stock</p>
            <p v-else-if="inventory <= 10 && inventory > 0">Almost sold out</p>
            <p v-else>Out of Stock</p>
            <p v-show="inStock">Out of Stock</p>
        </div>

      </div>

    </div>

    <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="JS/lesson3.js"></script>
  </body>
</html>
