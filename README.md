<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

<!-- 
tailwind.config.js

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
        backgroundColor: theme => ({
        ...theme('colors'),
        'pinky': '#BA3BDE',
        'secondary': '#ffed4a',
        'danger': '#e3342f',
        })
    },
    
    
    variants: {
        extend: {
        'pinky': '#BA3BDE',
        backgroundColor: ['active'],
        opacity: ['disabled'],
        }
    },
      



    

    /*  plugins: [require('@tailwindcss/forms')],
      plugin(function({ addBase, theme }) {
        addBase({
        'h1': { fontSize: theme('fontSize.2xl') },
        'h2': { fontSize: theme('fontSize.xl') },
        'h3': { fontSize: theme('fontSize.lg') },
        })
    })
    */
};


 -->


<!-- alte Farben im app.css

 --myBackground-color: #f6f6f6; /* Hintergrund Farbe der ganzen Seite */
    --greyDark-color: #545454;  /* new palette  */
    --greyMed-color: #737373;
    --greyBri-color: #E0E0E0;   /* zweiter Layer */
    --greyLight-color: #EAEAEA; /* erster Layer */
    --greyTextLightBox-color: #EEEEEE;
    --greyBackLight-color:#F1EFEF; 
    --redDark-color: #6e1b0d;  /* new palette end */
    --goldLight-color: #DBD6B9;
    

    --green-color: #99ff99;
    --blue-color: #6187ad;
    --orange-color:#e9c985;
    --red-color:#f59f9f;
    --grey-color: #abaaa7;

 -->


<!-- Anfang Card copy original

<div class="flex bg-white-medium md:gap-40  ">

            <!-- erste Card links Projekte -->
            <div class=" flex-wrap bg-grey-light md:h-auto md:w-3/12">

                <div class="flex bg-grey-light ">
                    <!-- Titel Textbox -->
                    <h2 class="flex-grow bg-gold-light p-2 m-2 hover:bg-gold rounded-lg">Projekte</h2>

                </div>

                <div class="flex ">
                    <!-- Beschreibung / Textbox -->
                    <p class="flex bg-white-medium rounded-lg m-2 p-2">Cotton candy muffin cookie powder carrot cake tart shortbread jelly beans pastry. Icing I love gingerbread I love wafer. Liquorice marzipan muffin bear claw pastry gingerbread icing. Ice cream candy canes chocolate gummies tiramisu. Bear claw shortbread icing toffee jelly gummi bears tootsie roll I love. Croissant pudding powder I love croissant. Tiramisu caramels cookie jelly chocolate cake bonbon biscuit bear claw sugar plum. Caramels cupcake pastry pudding pastry sesame snaps.

                    </p>

                </div>

            </div>
            <!-- erste Card links Projekte Ende-->




        <!-- zweite Card rechts CV -->
        <div class="bg-grey-light md:h-auto md:w-3/12">

                <div class="flex bg-grey-light ">
                        <!-- Titel Textbox -->
                        <h2 class="flex-grow bg-gold-light p-2 m-2 hover:bg-gold rounded-lg">Projekte</h2>

                </div>

                    <div class="flex ">
                        <!-- Beschreibung / Textbox -->
                        <p class="flex bg-white-medium rounded-lg m-2 p-2">Cotton candy muffin cookie powder carrot cake tart shortbread jelly beans pastry. Icing I love gingerbread I love wafer. Liquorice marzipan muffin bear claw pastry gingerbread icing. Ice cream candy canes chocolate gummies tiramisu. Bear claw shortbread icing toffee jelly gummi bears tootsie roll I love. Croissant pudding powder I love croissant. Tiramisu caramels cookie jelly chocolate cake bonbon biscuit bear claw sugar plum. Caramels cupcake pastry pudding pastry sesame snaps.

                        </p>

                    </div>

        </div>
        <!-- zweite Card rechts CV Ende-->


 
            
 

    </div>
<!-- 2 Cards auf einem Blech Ende -->



 --><!-- Ende copy cards original -->



Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
