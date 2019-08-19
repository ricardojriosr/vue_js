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
            <h1>{{ product }}</h1>
        </div>

      </div>

    </div>

    <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="JS/lesson2.js"></script>
  </body>
</html>
