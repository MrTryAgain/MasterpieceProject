const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin')
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },


    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',

            white: {
                DEFAULT: '#ffffff',
                light: '#fafafa',
                medium: '#f6f6f6',
                dark: '#f0f0f0',

            },

            grey: {
                DEFAULT:'#7d7d7d',
                dark: '#545454',            /* new palette  */
                medium: '#737373',
                bright: '#E0E0E0',          /* zweiter Layer */
                light: '#EAEAEA',           /* erster Layer */
                TextLightBox: '#EEEEEE',
                BackLight: '#F1EFEF',        
            },                                                                         /*  */
            
            pink: {
                DEFAULT: '#750d85',
                medium: '#e039fa',
                light: '#f29eff',
            },

            red: {
                DEFAULT: '#6e1b0d',
                medium: '#b31923',
                light: '#ff2937',
            },

            orange: {            
                DEFAULT: '#e9c985',
            },

            blue: {
                DEFAULT: '#6187ad',

            },

            green: {
                DEFAULT: '#99ff99',

            },

            gold: {
                DEFAULT: '#ada782',
                light: '#dbd6b9',
            }
        },
    
    
        variants: {
            extend: {
            backgroundColor: ['active'],
            opacity: ['disabled'],
            }
        },
      
    theme: {
        extend: {
            backgroundImage: {
               'bild1': "url('/High_HDR.jpg')",
               
              }
            }

            
    

    /*  plugins: [require('@tailwindcss/forms')],
      plugin(function({ addBase, theme }) {
        addBase({
        'h1': { fontSize: theme('fontSize.2xl') },
        'h2': { fontSize: theme('fontSize.xl') },
        'h3': { fontSize: theme('fontSize.lg') },
        })
    }) 
    */

    },   
}
