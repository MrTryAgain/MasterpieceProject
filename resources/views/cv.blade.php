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
                    <a href="{{ url('/') }}"><li class="bg-red-light py-3 w-20 sm:w-36 text-center rounded-lg">Welcome</li></a>
                    <a href="{{ url('projekte') }}"><li class="bg-orange py-3 w-20 sm:w-36 text-center rounded-lg" >Projekte</li></a>
                    <a href="{{ url('cv') }}"><li class="bg-grey-dark py-3 w-20 sm:w-36 text-center rounded-lg">*o*</li></a>
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
            <div  class="relative md:-top-32  -top-6 flex md:m-12  h-24 sm:h-40 md:rounded-lg rounded-t-lg md:bg-gold-light bg-gold-light justify-evenly"> <!-- goldener Balken -->

                <div class="space-x-4 flex ring ring-grey-medium md:ring-grey-medium md:ring-offset-4 ring-offset-2 md:mt-0 mt-2  mx-2 mb-2 md:-mb-0  h-16 md:h-28 md:w-7/12 w-11/12 rounded-lg bg-grey-light self-center place-content-center">
                    <img  src="{{ asset('/images/logos/UCthings.svg') }}" alt="Logo UC things">
                    <h1 class="flex self-center text-2xl   md:text-5xl font-bold text-base" >Hi, ich bin Urs</h1>
                </div>            

            </div>

       
            

    </header>

    

    
    <main>
    
<!-- 6 Cards auf einem Blech Start -->
<div class="relative md:-top-32 -top-6 flex bg-white-medium  "> <!-- Hintergrund Farbe setzen -->
        <!-- Container zum anpassen der cards -->
        <div class="flex flex-wrap  md:justify-around h-100">


            <!-- erste Card links Foto -->
            <div class=" flex-wrap bg-grey-light    md:w-3/12  md:ml-72">

                <div class="flex bg-grey-light  ">
                    <!-- Titel Textbox -->
                    <h2 class="flex-grow bg-gold-light p-2 m-2 mt-8 md:mt-2 hover:bg-gold rounded-lg md:text-2xl text-center">Me</h2>

                </div>

                <div class="flex-grow ">
                    <!-- Beschreibung / Textbox -->
                    <img class="flex object-contain p-2 " src="{{ asset('/images/profilePic1.JPG') }}" alt="Profile Image">
                   


                </div>

            </div>
            <!-- erste Card links Foto Ende-->




            <!-- zweite Card rechts this is me -->
            <div class="bg-grey-light  md:w-3/12 md:mr-72 ">

                    <div class="flex bg-grey-light pt-4 md:pt-0">
                            <!-- Titel Textbox -->
                            <h2 class="flex-grow bg-gold-light p-2 m-2 hover:bg-gold rounded-lg md:text-2xl text-center ">this is me</h2>

                    </div>

                        <div class="flex ">
                            <!-- Beschreibung / Textbox -->
                            
                            <p class="flex bg-white-medium rounded-lg m-2 p-2 md:text-lg text-justify ">Cotton candy muffin cookie powder carrot cake tart shortbread jelly beans pastry. Icing I love gingerbread I love wafer. Liquorice marzipan muffin bear claw pastry gingerbread icing. Ice cream candy canes chocolate gummies tiramisu. Bear claw shortbread icing toffee jelly gummi bears tootsie roll I love. Croissant pudding powder I love croissant.

                            </p>

                        </div>

            </div>
            <!-- zweite Card rechts this is me Ende-->


            <!-- dritte Card links Skills -->
            <div class=" flex-wrap bg-grey-light    md:w-3/12 md:ml-72">

                <div class="flex bg-grey-light ">
                    <!-- Titel Textbox -->
                    <h2 class="flex-grow bg-gold-light p-2 m-2 mt-8 md:mt-2 hover:bg-gold rounded-lg md:text-2xl text-center">Skills</h2>

                </div>

                <div class="flex bg-white-medium rounded-lg m-2 p-2 md:text-lg text-justify ">
                    <!-- Inhalt / Icons -->
                    
                    <img class=" object-scale-down md:h-10 h-10 mx-2 " src="{{ asset('/images/svgCards/mail.svg') }}" alt="Mail">
                    <img class=" object-scale-down md:h-10 h-10 mx-2 " src="{{ asset('/images/svgCards/mail.svg') }}" alt="Mail">
                    <img class=" object-scale-down md:h-10 h-10 mx-2 " src="{{ asset('/images/svgCards/mail.svg') }}" alt="Mail">
                    <img class=" object-scale-down md:h-10 h-10 mx-2 " src="{{ asset('/images/svgCards/mail.svg') }}" alt="Mail">
                    <img class=" object-scale-down md:h-10 h-10 mx-2 " src="{{ asset('/images/svgCards/mail.svg') }}" alt="Mail">
                    <img class=" object-scale-down md:h-10 h-10 mx-2 " src="{{ asset('/images/svgCards/mail.svg') }}" alt="Mail">
                    
                </div>

            </div>
            <!-- dritte Card links Skills Ende-->




            <!-- vierte Card rechts Perlenschnur -->
            <div class="bg-grey-light  md:w-3/12 md:mr-72 ">

                    <div class="flex bg-grey-light pt-4 md:pt-0">
                            <!-- Titel Textbox -->
                            <h2 class="flex-grow bg-gold-light p-2 m-2 hover:bg-gold rounded-lg md:text-2xl text-center ">Infos</h2>

                    </div>

                        <div class="flex ">
                            <!-- Beschreibung / Textbox -->
                            <p class="flex bg-white-medium rounded-lg m-2 p-2 md:text-lg text-justify ">Cotton candy muffin cookie powder carrot cake tart shortbread jelly beans pastry. Icing I love gingerbread I love wafer. Liquorice marzipan muffin bear claw pastry gingerbread icing. Ice cream candy canes chocolate gummies tiramisu. Bear claw shortbread icing toffee jelly gummi bears tootsie roll I love. Croissant pudding powder I love croissant.

                            </p>

                        </div>

            </div>
            <!-- vierte Card rechts Perlenschnur Ende-->

            <!--fünfte Card links offtime -->
            <div class=" flex-wrap bg-grey-light    md:w-3/12 md:ml-72">

                <div class="flex bg-grey-light ">
                    <!-- Titel Textbox -->
                    <h2 class="flex-grow bg-gold-light p-2 m-2 mt-8 md:mt-2 hover:bg-gold rounded-lg md:text-2xl text-center">Offtime</h2>

                </div>

                <div class="flex ">
                    <!-- Beschreibung / Textbox -->
                    <p class="flex bg-white-medium rounded-lg m-2 p-2 md:text-lg text-justify ">Cotton candy muffin cookie powder carrot cake tart shortbread jelly beans pastry. Icing I love gingerbread I love wafer. Liquorice marzipan muffin bear claw pastry gingerbread icing. Ice cream candy canes chocolate gummies tiramisu. Bear claw shortbread icing toffee jelly gummi bears tootsie roll I love. Croissant pudding powder I love croissant. 

                    </p>

                </div>

            </div>
            <!-- fünfte Card rechts offtime Ende-->




            <!-- sechste Card rechts Stuff -->
            <div class="bg-grey-light  md:w-3/12 md:mr-72 ">

                    <div class="flex bg-grey-light pt-4 md:pt-0">
                            <!-- Titel Textbox -->
                            <h2 class="flex-grow bg-gold-light p-2 m-2 hover:bg-gold rounded-lg md:text-2xl text-center ">Stuff</h2>

                    </div>

                        <div class="flex ">
                            <!-- Beschreibung / Textbox -->
                            <p class="flex bg-white-medium rounded-lg m-2 p-2 md:text-lg text-justify ">Cotton candy muffin cookie powder carrot cake tart shortbread jelly beans pastry. Icing I love gingerbread I love wafer. Liquorice marzipan muffin bear claw pastry gingerbread icing. Ice cream candy canes chocolate gummies tiramisu. Bear claw shortbread icing toffee jelly gummi bears tootsie roll I love. Croissant pudding powder I love croissant.

                            </p>

                        </div>

            </div>
            <!-- sechste Card rechts Stuff Ende-->


        </div>

    </div>       
    
    </main>

    
    <footer class="md:flex-row  rounded-t-lg space-x-32">
        
        <div class="flex place-content-center ">
            <div class="flex bg-grey-light sm:w-46  rounded-lg md:-mt-24 -mt-2 md:mb-4 mb-2 self-center" >
                <!-- linke Info Box -->
                <div class="  flex-grow bg-gold-light p-2 m-2 hover:bg-gold rounded-lg   ">
                    
                    <div class="">
                        <img class="flex-grow object-scale-down md:h-10 h-10 " src="{{ asset('/images/svgCards/mail.svg') }}" alt="Mail">
                        <a href="mailto:ucamenzind@gmx.ch"></a>                        
                    </div>                   
                    
                </div>                
            </div>
        </div>        
    </footer>

    

</body>

</html>




    
            

            
