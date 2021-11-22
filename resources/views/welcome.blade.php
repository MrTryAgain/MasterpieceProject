<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- stylesheet link aus dem z.B. guest.blade.php nehmen -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- java script aus dem guest.blade.php nehmen -->
<!--Link für die Fonts // <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
    <title>Welcome</title>

<!-- Page Logo favicon -->
<link rel="icon" type="image/svg+xml" href="{{ asset('/images/faviconAll/favicon.svg') }}">
<link rel="icon" type="image/png" href="{{ asset('/images/faviconAll/favicon.png') }}">
<!-- Page Logo favicon Ende-->

</head>

<body class="bg-white-medium">

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
                    <a href="{{ url('/') }}"><li class="bg-red-light py-3 w-20 sm:w-36 text-center rounded-lg">*o*</li></a>
                    <a href="{{ url('projekte') }}"><li class="bg-orange py-3 w-20 sm:w-36 text-center rounded-lg" >Projekte</li></a>
                    <a href="{{ url('hiPage') }}"><li class="bg-grey-dark py-3 w-20 sm:w-36 text-center rounded-lg">HiPage</li></a>
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
        
            <div>
                <img class="w-screen static" src="{{ asset('/images/bannerSmallShiny.svg') }}" alt="Banner" >

            </div>

        <!-- Mitte Banner -->
            <div  class="relative md:-top-32 mb-2 -top-6 flex h-12  md:m-12 sm:bg-gold-light sm:h-36 md:rounded-lg rounded-t-lg bg-white-medium justify-evenly">

                <div class="space-x-4 flex ring ring-grey-medium md:ring-grey-medium md:ring-offset-4 ring-offset-2 md:mt-0 mt-2 h-10 md:h-28 md:w-96 w-68 rounded-lg bg-grey-light self-center place-content-center">
                    <img  src="{{ asset('/images/logos/UCthings.svg') }}" alt="Logo UC things">
                    <h1 class="flex self-center   md:text-4xl font-bold text-base" >Hi, ich bin Urs</h1>
                </div>            

            </div>

        <!-- Mitte Banner mobile View --> 
            

    </header>

    

    
    <main>
    














<!-- 2 Cards auf einem Blech Start -->
    <div class="relative md:-top-32 -top-6 flex bg-white-medium  "> <!-- Hintergrund Farbe setzen -->
        <!-- Container zum anpassen der cards -->
        <div class="flex flex-wrap  md:justify-around h-100">


            <!-- erste Card links Projekte -->
            <div class=" flex-wrap bg-grey-light    md:w-3/12 md:ml-72">

                <div class="flex bg-grey-light ">
                    <!-- Titel Textbox -->
                    <h2 class="flex-grow bg-gold-light p-2 m-2 mt-8 md:mt-2 hover:bg-gold rounded-lg md:text-2xl text-center">Projekte</h2>

                </div>

                <div class="flex ">
                    <!-- Beschreibung / Textbox -->
                    <p class="flex bg-white-medium rounded-lg m-2 p-2 md:text-lg text-justify ">Cotton candy muffin cookie powder carrot cake tart shortbread jelly beans pastry. Icing I love gingerbread I love wafer. Liquorice marzipan muffin bear claw pastry gingerbread icing. Ice cream candy canes chocolate gummies tiramisu. Bear claw shortbread icing toffee jelly gummi bears tootsie roll I love. Croissant pudding powder I love croissant. 

                    </p>

                </div>

            </div>
            <!-- erste Card links Projekte Ende-->




            <!-- zweite Card rechts CV -->
            <div class="bg-grey-light  md:w-3/12 md:mr-72 ">

                    <div class="flex bg-grey-light pt-4 md:pt-0">
                            <!-- Titel Textbox -->
                            <h2 class="flex-grow bg-gold-light p-2 m-2 hover:bg-gold rounded-lg md:text-2xl text-center ">CV</h2>

                    </div>

                        <div class="flex ">
                            <!-- Beschreibung / Textbox -->
                            <p class="flex bg-white-medium rounded-lg m-2 p-2 md:text-lg text-justify ">Cotton candy muffin cookie powder carrot cake tart shortbread jelly beans pastry. Icing I love gingerbread I love wafer. Liquorice marzipan muffin bear claw pastry gingerbread icing. Ice cream candy canes chocolate gummies tiramisu. Bear claw shortbread icing toffee jelly gummi bears tootsie roll I love. Croissant pudding powder I love croissant.

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

    
    <footer class="md:flex-row  rounded-t-lg space-x-32">
        <div class="flex place-content-center ">
            <div class="flex bg-grey-light sm:w-46  rounded-lg md:-mt-24 -mt-2 md:mb-4 mb-2 self-center" >
                <!-- linke Info Box -->
                <div class="  flex-grow bg-gold-light p-2 m-2 hover:bg-gold rounded-lg   ">
                    <div>
                        <address>
                            <img class="flex object-scale-down md:h-16 h-12 " src="{{ asset('/images/logos/emailCopyComb.svg') }}" alt="Mail">
                            <a href="mailto:ucamenzind@gmx.ch"></a> 
                        </adress>
                         
                        
                    </div>
                    
                    
                    
                </div>
                
                
                 
            </div>
        </div>

        
    </footer>

    

</body>

</html>




    
            

            
