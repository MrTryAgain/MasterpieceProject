<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- stylesheet link aus dem z.B. guest.blade.php nehmen -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- java script aus dem guest.blade.php nehmen -->
<!--Link für die Fonts // <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
    <title>Playground1</title>
</head>

<body>

    <header>

        <div class="flex py-3 justify-center bg-grey-medium">
            <!-- Logo --> <!-- erstellt die Variable opacity mit dem Wert 0-1 -->
            <a class=" place-self-center" href="{{ url('/') }}"><x-application-logo width="20rem" opacity="1" ></x-application-logo> </a>
        </div>

        <!-- Navbar Start-->
        <nav>
            <div>
                <ul class="flex justify-evenly bg-red">
                    <a href="{{ url('/') }}"><li class="bg-red-light py-3 w-20 sm:w-36 text-center rounded-lg">Projekte</li></a>
                    <a href=""><li class="bg-orange py-3 w-20 sm:w-36 text-center rounded-lg" >*o*</li></a>
                    <a href="{{ url('hiPage') }}"><li class="bg-grey-dark py-3 w-20 sm:w-36 text-center rounded-lg">Hi Page</li></a>
                    <a href="{{ route('dashboard') }}"><li class="bg-green py-3 w-20 sm:w-36 text-center rounded-lg">CV</li></a>
                </ul>
            </div>
        </nav>
        <!-- Navbar Ende-->


<!-- Login start -->
        @if (Route::has('login'))

    <!-- Desktop View Menu gedöngs oder so  -->
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

    <!-- Mobile View Gedöngs oder so ussä -->
            <div class="block  top-0 right-0 px-2 py-4 sm:hidden flex flex-col">
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

<!-- Zeit  desk vers-->
<div class="hidden top-0 right-0 px-2 py-4 md:w-11/12 md:flex md:justify-end">
    <p class="text-2xl font-bold  ">{{ date('d-m-Y H:i') }} Uhr</p>    
</div>

<!-- Zeit  mob vers-->
<div class="block  top-0 right-0 px-2 py-4 sm:hidden flex flex-col ">
    <p class="text-2xl font-bold  ">{{ date('d-m-Y H:i') }} Uhr</p>    
</div>


    </header>


    
    <main>
       
        <div class="sm:ml-0 flex flex-wrap mt-5 ">
             <!-- Projekt 1 -->
            <div class="md:w-11/12 flex flex-wrap mt-5 mb-15">

                <div class="md:w-3/12 w-full h-9/12 flex-grow pb-1 "> <!-- linke Seite -->
                    <div class="entryTitle text-2xl font-bold mb-5 ml-2 rounded-lg ">Projekt Bla Bla 1  </div> <!-- Titel -->
                    <div class="description ml-2">Beschreibung des Projekts mit unglaublich viel Bla Bla</div> <!-- Beschreibung -->
                </div> 

                <div class="md:w-9/12 w-full flex-grow"> <!-- rechte Seite -->
                    <div class="iframe h-full w-full"><iframe style="width:100%; height:30rem; "src="https://welcomescreen-by-uc.netlify.app"  frameborder="1"></iframe></div>
                </div>

            </div>




        <div class="flex flex-col bg-white-medium  ">
            <div class="flex-col bg-grey-light">

                <div class="flex flex-grow bg-grey-light">

                    <h2 class="flex flex-grow bg-gold-light p-2 m-2 hover:bg-gold rounded-lg">
                        skills
                    </h2>

                </div>

                <div class=" flex ">

                    <p class="flex flex-wrap bg-white-medium rounded-lg m-2 p-2">Cotton candy muffin cookie powder carrot cake tart shortbread jelly beans pastry. Icing I love gingerbread I love wafer. Liquorice marzipan muffin bear claw pastry gingerbread icing. Ice cream candy canes chocolate gummies tiramisu. Bear claw shortbread icing toffee jelly gummi bears tootsie roll I love. Croissant pudding powder I love croissant. Tiramisu caramels cookie jelly chocolate cake bonbon biscuit bear claw sugar plum. Caramels cupcake pastry pudding pastry sesame snaps.

                    </p>

                </div>

            </div>

        </div>




                <!-- Logo B-Ball -->
                <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 371.419 371.419" style="enable-background:new 0 0 371.419 371.419;" xml:space="preserve" width="128" height="128">
            
                
                    <g>
                        <path style="fill:#00B3E3;" d="M371.419,30.979c0-11-9-20-20-20H20c-11,0-20,9-20,20V240.94c0,11,9,20,20,20h331.419   c11,0,20-9,20-20V30.979z"/>
                        <path style="fill:#FFFFFF;" d="M312.71,225.539h-254c-4.142,0-7.5-3.358-7.5-7.5V53.88c0-4.142,3.358-7.5,7.5-7.5h254   c4.142,0,7.5,3.358,7.5,7.5v164.158C320.21,222.181,316.852,225.539,312.71,225.539z M66.21,210.539h239V61.38h-239V210.539z"/>
                        <g>
                            <g>
                                <circle style="fill:#A77F73;" cx="208.279" cy="144.965" r="69.922"/>
                                <path style="fill:#454F58;" d="M277.359,134.485l-1.447-7.306c-0.646-2.462-1.431-4.865-2.331-7.213     c-16.613,3.543-30.936,13.836-39.593,28.216l-15.81-7.025l25.181-56.668c-4.299-2.499-8.884-4.559-13.702-6.104l-25.187,56.681     l-15.81-7.025c4.871-16.062,2.911-33.588-5.592-48.294c-2.434,0.942-4.802,2.014-7.095,3.211l-6.213,3.715     c6.378,10.668,8.107,23.383,5.041,35.209l-26.998-11.997c-2.5,4.299-4.559,8.884-6.104,13.702l27.011,12.002     c-6.722,10.202-17.319,17.441-29.511,19.857l1.446,7.297c0.646,2.465,1.433,4.871,2.333,7.222     c16.614-3.545,30.935-13.837,39.592-28.217l15.809,7.025l-25.181,56.667c4.299,2.5,8.884,4.559,13.702,6.104l25.187-56.681     l15.81,7.025c-4.87,16.062-2.911,33.588,5.593,48.293c2.434-0.941,4.8-2.014,7.094-3.21l6.215-3.716     c-6.378-10.667-8.107-23.383-5.042-35.208l26.998,11.997c2.499-4.299,4.559-8.884,6.105-13.702l-27.012-12.003     C254.571,144.14,265.168,136.901,277.359,134.485z"/>
                            </g>
                        </g>
                        <g>
                            <path style="fill:#454F58;" d="M108.71,360.44c-4.142,0-7.5-3.358-7.5-7.5c0-4.027,0.086-9.287,0.187-15.378    c0.308-18.768,0.73-44.471-0.679-67.706c-2.148-35.403-7.477-44.323-9.668-46.514c-2.929-2.929-2.929-7.678,0-10.606    c2.929-2.929,7.678-2.93,10.606,0c13.759,13.759,15.84,58.057,14.739,125.072c-0.099,6.025-0.185,11.229-0.185,15.132    C116.21,357.082,112.852,360.44,108.71,360.44z"/>
                            <path style="fill:#454F58;" d="M262.71,360.44c-4.142,0-7.5-3.358-7.5-7.5c0-3.903-0.085-9.107-0.185-15.132    c-1.101-67.015,0.98-111.313,14.739-125.072c2.929-2.929,7.678-2.93,10.606,0c2.929,2.929,2.929,7.677,0,10.606    c-2.191,2.191-7.521,11.111-9.668,46.514c-1.41,23.234-0.987,48.938-0.679,67.706c0.1,6.091,0.186,11.351,0.186,15.378    C270.21,357.082,266.852,360.44,262.71,360.44z"/>
                            <path style="fill:#454F58;" d="M158.71,360.44c-4.142,0-7.5-3.358-7.5-7.5V218.039c0-4.142,3.358-7.5,7.5-7.5    c4.142,0,7.5,3.358,7.5,7.5V352.94C166.21,357.082,162.852,360.44,158.71,360.44z"/>
                            <path style="fill:#454F58;" d="M212.71,360.44c-4.142,0-7.5-3.358-7.5-7.5V218.039c0-4.142,3.358-7.5,7.5-7.5    c4.142,0,7.5,3.358,7.5,7.5V352.94C220.21,357.082,216.852,360.44,212.71,360.44z"/>
                            <path style="fill:#454F58;" d="M262.217,339.444H109.032c-4.142,0-7.5-3.358-7.5-7.5s3.358-7.5,7.5-7.5h153.185    c4.142,0,7.5,3.358,7.5,7.5S266.359,339.444,262.217,339.444z"/>
                            <path style="fill:#454F58;" d="M262.217,303.942H109.032c-4.142,0-7.5-3.358-7.5-7.5c0-4.142,3.358-7.5,7.5-7.5h153.185    c4.142,0,7.5,3.358,7.5,7.5C269.717,300.584,266.359,303.942,262.217,303.942z"/>
                            <path style="fill:#454F58;" d="M262.217,268.44H109.032c-4.142,0-7.5-3.358-7.5-7.5s3.358-7.5,7.5-7.5h153.185    c4.142,0,7.5,3.358,7.5,7.5S266.359,268.44,262.217,268.44z"/>
                        </g>
                        <g>
                            <path style="fill:#0071CE;" d="M283.848,237.039H87.571c-10.493,0-19-8.506-19-19s8.507-19,19-19h196.277c10.493,0,19,8.506,19,19    S294.341,237.039,283.848,237.039z"/>
                        </g>
                        <g>
                            <path style="fill:#0071CE;" d="M283.848,237.039H87.571c-10.493,0-19-8.506-19-19s8.507-19,19-19h196.277c10.493,0,19,8.506,19,19    S294.341,237.039,283.848,237.039z"/>
                        </g>
                    </g>
                </svg>
            </div>

        </div>
        <!-- original ende -->
    <!-- ein Kommentar fürs commiten -->
    <!-- ein Kommentar fürs commiten -->
    

    

   


    </main>



    <footer>
                        <!-- Box1 -->
        <div class="flex space-x-8 mx-2">
            <div class="box1 flex-grow h-12" ><p class="bg-green rounded-lg">  Site & Concept<br>created by UC © {{ date('Y') }}</p></div>

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




    
            

            
