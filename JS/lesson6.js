
var app = new Vue({
  el: '#app',
  data: {
    product: 'Socks',
    image: 'IMG/vmSocks-green.jpg',
    inventory: 100,
    inStock: false,
    onSale: false,
    cart: 0,
    details: ["80% cotton","20% polyester", "Gender-neutral"],
    variants: [
      {
        variantId: 2234,
        variantColor: "green",
        variantImage: 'IMG/vmSocks-green.jpg'
      },
      {
        variantId: 2235,
        variantColor: "blue",
        variantImage: 'IMG/vmSocks-blue.jpg'
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
    updateProduct: function(variantImage) {
        this.image = variantImage
    },
    removeFromCart: function() {
      this.cart -= 1
    }
  }
})
