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
            <h1>{{ title }} <span style="color:red" v-show="onSale">On Sale!</span></h1>
            <p v-if="inStock">In Stock</p>
            <p v-else :class="{ outOfStock: !inStock }">Out of Stock</p>
            <p>{{ sale }}</p>
            <ul>
              <li v-for="detail in details">{{ detail }}</li>
            </ul>

            <h3>Colors:</h3>
            <div v-for="(variant, index) in variants"
            :key="variant.variantId"
            class="color-box"
            :style="{ backgroundColor: variant.variantColor }"
            @mouseover="updateProduct(index)">

            </div>

            <h3>Sizes:</h3>
            <div v-for="size in sizes" :key="size.sizeId">
                <p>{{ size.sizeName }}</p>
            </div>

            <button @click="addToCart"
              :disabled="!inStock"
              :class="{ disabledButton: !inStock }">Add to cart</button>
            <button @click="removeFromCart"
              :disabled="!inStock"
              :class="{ disabledButton: !inStock }">Remove from cart</button>

            <div class="cart">
                <p>Cart({{cart}})</p>
            </div>

            </div>
        </div>

      </div>

    </div>

    <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="JS/lesson7.js"></script>
  </body>
</html>
