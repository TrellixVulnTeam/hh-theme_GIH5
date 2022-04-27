module.exports = {
    content: [
        './*.js',
        './*.php',
        './templates/*.php',
        './template-parts/*.php',
        './template-parts/blocks/**/*.php',
        './blocks/**/*.php',
        './layouts/**/*.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                'primary': ['BebasNeue Pro Book, sans-serif'],
                'primary-bold': ['BebasNeue Pro Bold, sans-serif'],
                'secondary': ['Inter Light, sans-serif'],
                'secondary-bold': ['Inter Black, sans-serif'],
            },
            container: {
                center: true,
                padding: '1rem',
            },
            height: {
                '250': '250px',
                '350': '350px',
                '400': '400px',
                '500': '500px',
                '600': '600px',
                '700': '700px',
                '800': '800px',
                '1000': '1000px',
            },
            width: {
                '250': '250px',
                '350': '350px',
                '400': '400px',
                '500': '500px',
                '600': '600px',
                '700': '700px',
                '800': '800px',
                '1000': '1000px',
            },
            colors: {
                'gray-custom': '#f4f3f1',
                'black-custom': '#1d1d1b'
            },
            fontSize: {
                '9xl': '146px',
                '10xl': '189px'
            },
            scale: {
                '20': '.2',
                '40': '.4',
            },
            screens:{
                '3xl': '1792px'
            }
        },
    },
}
