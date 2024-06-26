/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/*.{html,js,php}",
    "./users/*.{html,js,php}",
    "./adminfiles/*.{html,js,php}",
    "./modals/*.{html,js,php}",
    "./PDFs-Output/*.{html,js,php}",
    "./extra/*.{html,js,php}",
    "./extras/*.{html,js,php}",
    "./operations/*.{html,js,php}",
  ],
  theme: {
    extend: {
      gap: {
        98: "26rem",
        100: "28rem",
        102: "30rem",
        104: "32rem",
        106: "34rem",
        108: "36rem",
        110: "38rem",
        112: "40rem",
        114: "42rem",
        116: "44rem",
        118: "46rem",
        120: "48rem",
        122: "50rem",
        124: "52rem",
        126: "54rem",
      },

      height: {
        
        33: "9rem",
        34: "10rem",
        35: "11rem",
        36: "12rem",
        37: "13rem",
        38: "14rem",
        39: "15rem",
        40: "16rem",
        98: "26rem",
        100: "28rem",
        102: "30rem",
        104: "32rem",
        106: "34rem",
        108: "36rem",
        108.5: "36.5rem",
        109: "37rem",
        110: "38rem",
        111: "39rem",
        112: "40rem",
        114: "42rem",
        116: "44rem",
        118: "46rem",
        120: "48rem",
        122: "50rem",
        124: "52rem",
        126: "54rem",
      },

      width: {
        33: "9rem",
        34: "10rem",
        35: "11rem",
        36: "12rem",
        37: "13rem",
        38: "14rem",
        39: "15rem",
        40: "16rem",
        98: "26rem",
        100: "28rem",
        102: "30rem",
        104: "32rem",
        106: "34rem",
        108: "36rem",
        108.5: "36.5rem",
        109: "37rem",
        110: "38rem",
        112: "40rem",
        114: "42rem",
        116: "44rem",
        118: "46rem",
        120: "48rem",
        122: "50rem",
        124: "52rem",
        126: "54rem",
      },

      maxWidth: {
        98: "26rem",
        100: "28rem",
        102: "30rem",
        104: "32rem",
        106: "34rem",
        108: "36rem",
        108.5: "36.5rem",
        109: "37rem",
        110: "38rem",
        112: "40rem",
        114: "42rem",
        116: "44rem",
        118: "46rem",
        120: "48rem",
        122: "50rem",
        124: "52rem",
        126: "54rem",
        128: "36rem",
        128.5: "36.5rem",
        129: "37rem",
        130: "38rem",
        132: "40rem",
        134: "42rem",
        136: "44rem",
        138: "46rem",
        140: "48rem",
        142: "50rem",
        144: "52rem",
        146: "54rem",
        148: "36rem",
        148.5: "36.5rem",
        149: "37rem",
        150: "38rem",
        152: "40rem",
        154: "42rem",
        156: "44rem",
        158: "46rem",
        160: "48rem",
        162: "50rem",
        164: "52rem",
        166: "54rem",
      },

      gap: {
        98: "26rem",
        100: "28rem",
        102: "30rem",
        104: "32rem",
        106: "34rem",
        108: "36rem",
        108.5: "36.5rem",
        109: "37rem",
        110: "38rem",
        112: "40rem",
        114: "42rem",
        116: "44rem",
        118: "46rem",
        120: "48rem",
        122: "50rem",
        124: "52rem",
        126: "54rem",
        128: "55rem",
        128.5: "55.5rem",
        129: "57rem",
        130: "58rem",
        132: "50rem",
        134: "52rem",
        136: "54rem",
        138: "56rem",
        140: "58rem",
        142: "60rem",
        144: "62rem",
        146: "64rem",
        148: "66rem",
        148.5: "66.5rem",
        149: "67rem",
        150: "68rem",
        152: "70rem",
        154: "72rem",
        156: "74rem",
        158: "76rem",
        160: "78rem",
        162: "80rem",
        164: "82rem",
        166: "84rem",
      },
      inset: {
        98: "26rem",
        100: "28rem",
        102: "30rem",
        104: "32rem",
        106: "34rem",
        108: "36rem",
        108.5: "36.5rem",
        109: "37rem",
        110: "38rem",
        112: "40rem",
        114: "42rem",
        116: "44rem",
        118: "46rem",
        120: "48rem",
        122: "50rem",
        124: "52rem",
        126: "54rem",
        128: "55rem",
        128.5: "55.5rem",
        129: "57rem",
        130: "58rem",
        132: "50rem",
        134: "52rem",
        136: "54rem",
        138: "56rem",
        140: "58rem",
        142: "60rem",
        144: "62rem",
        146: "64rem",
        148: "66rem",
        148.5: "66.5rem",
        149: "67rem",
        150: "68rem",
        152: "70rem",
        154: "72rem",
        156: "74rem",
        158: "76rem",
        160: "78rem",
        162: "80rem",
        164: "82rem",
        166: "84rem",
      },

      colors: {
        primary: "#0298aa",
       
        dark: "#333",
        gb: "#5e6e70",
      },

      fontFamily: {
        Poppins: ['"Poppins"', "sans-serif"],
        Nunito: ['"Nunito"', "sans-serif"]
      },

      screens: {
        'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      }
    },
  },
  plugins: [],
};
