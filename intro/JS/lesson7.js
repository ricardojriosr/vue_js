
var app = new Vue({
  el: '#app',
  data: {
    brand: 'Vue Mastery',
    product: 'Socks',
    selectedVariant: 0,
    inventory: 100,
    onSale: false,
    cart: 0,
    onSale: false,
    details: ["80% cotton","20% polyester", "Gender-neutral"],
    variants: [
      {
        variantId: 2234,
        variantColor: "green",
        variantImage: 'IMG/vmSocks-green.jpg',
        variantQuantity: 10
      },
      {
        variantId: 2235,
        variantColor: "blue",
        variantImage: 'IMG/vmSocks-blue.jpg',
        variantQuantity: 0
      }
    ],
    sizes: [
      {
          sizeId: "S",
          sizeName: "Short"
      },
      {
          sizeId: "M",
          sizeName: "Medium"
      },
      {
          sizeId: "L",
          sizeName: "Large"
      },
      {
          sizeId: "XL",
          sizeName: "Extra Large"
      }
    ]
  },
  methods: {
    addToCart: function() {
      this.cart += 1
    },
    updateProduct: function(index) {
        this.selectedVariant = index
        console.log(index)
    },
    removeFromCart: function() {
      this.cart -= 1
    }
  },
  computed: {
    title() {
      return this.brand + ' ' + this.product
    },
    image(){
        return this.variants[this.selectedVariant].variantImage
    },
    inStock(){
        return this.variants[this.selectedVariant].variantQuantity
    },
    sale() {
      if (this.onSale) {
        return this.brand + ' ' + this.product + ' are on sale!'
      }
        return  this.brand + ' ' + this.product + ' are not on sale'
    }
  }
})
