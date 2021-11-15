<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- stylesheet link aus dem z.B. guest.blade.php nehmen -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- java script aus dem guest.blade.php nehmen -->
<!--Link für die Fonts // <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
    <title>CV</title>

<!-- Page Logo favicon -->
<link rel="icon" type="image/svg+xml" href="{{ asset('/images/faviconAll/favicon.svg') }}">
<link rel="icon" type="image/png" href="{{ asset('/images/faviconAll/favicon.png') }}">
<!-- Page Logo favicon Ende-->

</head>

<body>

    <header>
<!-- logo start --> <!-- hidden -->
        <div class="hidden flex py-3 justify-center bg-grey-medium">
            <!-- Logo --> <!-- erstellt die Variable opacity mit dem Wert 0-1 -->
            <a class=" place-self-center" href="{{ url('/') }}"><x-application-logo width="12rem" opacity="1" ></x-application-logo> </a>
        </div>
<!-- logo start ende-->

        <!-- Navbar Start-->
        <nav class="hidden">
            <div>
                <ul class="flex justify-evenly bg-red">
                    <a href="{{ url('/') }}"><li class="bg-red-light py-3 w-20 sm:w-36 text-center rounded-lg">Welcome</li></a>
                    <a href="{{ url('projekte') }}"><li class="bg-orange py-3 w-20 sm:w-36 text-center rounded-lg" >Projekte</li></a>
                    <a href="{{ route('CV') }}"><li class="bg-grey-dark py-3 w-20 sm:w-36 text-center rounded-lg">*o*</li></a>
                    <a href="{{ url('playground1') }}"><li class="bg-myGreen py-3 w-20 sm:w-36 text-center rounded-lg">Playground1</li></a>
                </ul>
            </div>
        </nav>
        <!-- Navbar Ende-->



<!-- Login start 
        @if (Route::has('login'))

    <!-- Desktop View Menu gedöngs oder so 
            <div class="hidden top-0 right-0 px-2 py-4 md:w-11/12 md:flex md:justify-end">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
            -->


    <!-- Mobile View Gedöngs oder so ussä hidden rausnehmen--> <!-- hidden -->
            <div class="hidden block  top-0 right-0 px-2 py-4 sm:hidden flex flex-col">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
<!-- Login Ende -->



        <!-- Zeit  desk vers
        <div class="hidden top-0 right-0 px-2 py-4 md:w-11/12 md:flex md:justify-end">
            <p class="text-2xl font-bold  ">{{ date('d-m-Y H:i') }} Uhr</p>    
        </div>
        -->

        <!-- Zeit  mob vers hidden raus nehmen--> <!-- hidden -->
        <div class="hidden  top-0 right-0 px-2 py-4 sm:hidden flex flex-col ">
            <p class="text-2xl font-bold  ">{{ date('d-m-Y H:i') }} Uhr</p>    
        </div>



       <!-- Banner -->
        
       <div class=" bg-bild1 ">
                <img class="w-screen static" src="{{ asset('/images/bannerSmallShiny.svg') }}" alt="BannerLogoYellow" >

            </div>

        <!-- Mitte Banner -->
            <div  class="relative md:-top-32 -top-12 flex h-20 md:m-12 sm:bg-gold-light sm:h-36 rounded-lg bg-pink justify-evenly">

                <div class="flex ring ring-grey ring-offset-4 h-16 w-auto md:h-28 sm:w-6/12  rounded-lg bg-grey-light self-center place-content-center">
                    <h1 class="flex bg-grey-light self-center md:text-7xl text-4xl">Hi, ich bin Urs</h1>
                </div>            

            </div>

        



    </header>


    
    <main>
    














<!-- 2 Cards auf einem Blech Start -->
    <div class="relative md:-top-32 -top-8 flex bg-white-medium  ">
        <!-- Container zum anpassen der cards -->
        <div class="flex flex-wrap  md:justify-around h-100 ">


            <!-- erste Card links Projekte -->
            <div class=" flex-wrap bg-grey-light    md:w-3/12 md:ml-72">

                <div class="flex bg-grey-light ">
                    <!-- Titel Textbox -->
                    <h2 class="flex-grow bg-gold-light p-2 m-2 hover:bg-gold rounded-lg text-center">Projekte</h2>

                </div>

                <div class="flex ">
                    <!-- Beschreibung / Textbox -->
                    <p class="flex bg-white-medium rounded-lg m-2 p-2 text-justify">Cotton candy muffin cookie powder carrot cake tart shortbread jelly beans pastry. Icing I love gingerbread I love wafer. Liquorice marzipan muffin bear claw pastry gingerbread icing. Ice cream candy canes chocolate gummies tiramisu. Bear claw shortbread icing toffee jelly gummi bears tootsie roll I love. Croissant pudding powder I love croissant. Tiramisu caramels cookie jelly chocolate cake bonbon biscuit bear claw sugar plum. Caramels cupcake pastry pudding pastry sesame snaps.

                    </p>

                </div>

            </div>
            <!-- erste Card links Projekte Ende-->




            <!-- zweite Card rechts CV -->
            <div class="bg-grey-light  md:w-3/12 md:mr-72">

                    <div class="flex bg-grey-light pt-12 md:pt-0">
                            <!-- Titel Textbox -->
                            <h2 class="flex-grow bg-gold-light p-2 m-2 hover:bg-gold rounded-lg text-center">CV</h2>

                    </div>

                        <div class="flex ">
                            <!-- Beschreibung / Textbox -->
                            <p class="flex bg-white-medium rounded-lg m-2 p-2 text-justify">Cotton candy muffin cookie powder carrot cake tart shortbread jelly beans pastry. Icing I love gingerbread I love wafer. Liquorice marzipan muffin bear claw pastry gingerbread icing. Ice cream candy canes chocolate gummies tiramisu. Bear claw shortbread icing toffee jelly gummi bears tootsie roll I love. Croissant pudding powder I love croissant. Tiramisu caramels cookie jelly chocolate cake bonbon biscuit bear claw sugar plum. Caramels cupcake pastry pudding pastry sesame snaps.

                            </p>

                        </div>

            </div>
            <!-- zweite Card rechts CV Ende-->

        </div>
 
            
 

    </div>
<!-- 2 Cards auf einem Blech Ende -->

             
        
        
    <!-- ein Kommentar fürs commiten -->
    <!-- ein Kommentar fürs commiten -->
    

    

   


    </main>



    <footer>
                        <!-- Box1 -->
        <div class="flex space-x-8 mx-2">
            <div class="box1 flex h-18" ><p class="bg-green rounded-lg">  Site & Concept<br>created by UC © {{ date('Y') }}</p></div>

                        <!-- Box2 mit Logo -->
            <div class="box2 flex-grow h-12 w-16 flex py-3 justify-center bg-red rounded-lg">
                <a class="text-grey place-self-center" href=""><x-application-logo width="2rem" opacity="1" ></x-application-logo></a>
            
            </div>
                        <!-- Box3 -->
            <div class="box3 flex-grow h-12">
                <address class="bg-green rounded-lg">More Info: <br> <a class="bg-green" href="mailto:ucamenzind@gmx.ch">ucamenzind@gmx.ch</a></address>
            </div>         
        </div>
        
    </footer>

    <div class="fixed z-30 bottom-0 right-0 mr-6 mb-6  ">
        <a id="back2Top" href="#" class="text-orange  rounded-md">
            <span class="hidden">Back to Top</span>
            <svg xmlns="http//www.w3.org/2000/svg" version="1.1" viewBox="0 0 24 24" class="h-10 w-10 bg-red">
                        <path fill="currentColor" d="M7.41,15.41L12,10.83L16.59,15.41L18,14L2,8L6,14L7.41,15.41Z" />
            </svg>
        </a>
    </div>
    <script src="./js/index.js"></script>

</body>

</html>




    
            

            
