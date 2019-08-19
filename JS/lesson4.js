var app = new Vue({
  el: '#app',
  data: {
    product: 'Socks',
    image: 'IMG/vmSocks-green.jpg',
    inventory: 0,
    inStock: false,
    onSale: false,
    details: ["80% cotton","20% polyester", "Gender-neutral"],
    variants: [
      {
        variantId: 2234,
        variantColor: "green"
      },
      {
        variantId: 2235,
        variantColor: "blue"
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
  }
})
