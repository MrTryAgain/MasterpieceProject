<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- stylesheet link aus dem z.B. guest.blade.php nehmen -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- java script aus dem guest.blade.php nehmen -->
<!--Link für die Fonts // <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
    <title>mySites</title>
</head>

<body>

    <header>

        <div class="flex py-3 justify-center bg-myBlue">
            <!-- Logo --> <!-- erstellt die Variable opacity mit dem Wert 0-1 -->
            <a class="text-myGrey place-self-center" href=""><x-application-logo width="6rem" opacity="1" ></x-application-logo></a>
        </div>

        <!-- Navbar Start-->
        <nav>
            <div>
                <ul class="flex justify-evenly bg-red-500">
                    <a href=""><li class="bg-myGreen py-3 w-20 sm:w-36 text-center rounded-lg">Home</li></a>
                    <a href=""><li class="bg-myGreen py-3 w-20 sm:w-36 text-center rounded-lg">Projekt 1</li></a>
                    <a href=""><li class="bg-myGreen py-3 w-20 sm:w-36 text-center rounded-lg">Projekt 2</li></a>
                    <a href=""><li class="bg-myGreen py-3 w-20 sm:w-36 text-center rounded-lg">CV</li></a>
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


    
    <main><!-- original start -->
       
        <div class="sm:ml-0 flex flex-wrap mt-5 ">
             <!-- Projekt 1 -->
            <div class="md:w-11/12 flex flex-wrap mt-5 mb-15">

                <div class="md:w-3/12 w-full h-9/12 flex-grow pb-1"> <!-- linke Seite -->
                    <div class="entryTitle text-2xl font-bold mb-5 ml-2">Projekt Bla Bla 1  </div> <!-- Titel -->
                    <div class="description ml-2">Beschreibung des Projekts mit unglaublich viel Bla Bla</div> <!-- Beschreibung -->
                </div> 

                <div class="md:w-9/12 w-full flex-grow"> <!-- rechte Seite -->
                    <div class="iframe h-full w-full"><iframe style="width:100%; height:30rem; "src="https://www.leo.org"  frameborder="1"></iframe></div>
                </div>

            </div>
            
            <!-- Projekt 2 -->
            <div class="md:w-11/12 flex flex-wrap mt-10">

                <div class="md:w-3/12 w-full h-9/12 flex-grow pb-1"> <!-- linke Seite -->
                    <div class="entryTitle text-2xl font-bold mb-5 ml-2">Projekt Bla Bla 2</div> <!-- Titel -->
                    <div class="description ml-2">Beschreibung des Projekts mit unglaublich viel Bla Bla  </div> <!-- Beschreibung -->
                </div> 

                <div class="md:w-9/12 w-full flex-grow"> <!-- rechte Seite -->
                    <div class="iframe h-full w-full"><iframe style="width:100%; height:30rem; "src="https://coder-ipsum.tech/"  frameborder="1"></iframe></div>
                </div>

            </div>

            <!-- Projekt 3-->
            <div class="md:w-11/12 flex flex-wrap mb-10 mt-10">

                <div class="md:w-3/12 w-full h-9/12 flex-grow pb-1"> <!-- linke Seite -->
                    <div class="entryTitle text-2xl font-bold mb-5 ml-2">Projekt Bla Bla 3</div> <!-- Titel -->
                    <div class="description ml-2">Beschreibung des Projekts mit unglaublich viel Bla Bla  </div> <!-- Beschreibung -->
                </div> 

                <div class="md:w-9/12 w-full flex-grow"> <!-- rechte Seite -->
                    <div class="iframe h-full w-full"><iframe style="width:100%; height:30rem; "src="https://tailwindcss.com/docs/flex-wrap"  frameborder="1"></iframe></div>
                </div>

            </div>

        </div>
        <!-- original ende -->
    <!-- ein Kommentar fürs commiten -->
    <!-- ein Kommentar fürs commiten -->
    

    

   


    </main>



    <footer>
                        <!-- Box1 -->
        <div class="flex space-x-8 mx-2">
            <div class="box1 flex-grow h-12 bg-myGreen rounded-lg" ><p>Site & Concept<br>created by UC © {{ date('Y') }}</p></div>

                        <!-- Box2 mit Logo -->
            <div class="box2 flex-grow h-12 w-16 flex py-3 justify-center bg-myRed rounded-lg">
                <a class="text-myGrey place-self-center" href=""><x-application-logo width="2rem" opacity="1" ></x-application-logo></a>
            
            </div>
                        <!-- Box3 -->
            <div class="box3 flex-grow h-12 bg-myGreen rounded-lg">
                <address>More Info: <br> <a href="mailto:ucamenzind@gmx.ch">ucamenzind@gmx.ch</a></address>
            </div>         
        </div>
        
    </footer>

    <div class="fixed z-30 bottom-0 right-0 mr-6 mb-6">
        <a id="back2Top" href="#" class="bg-myGrey bg-opacity-50 rounded-md">
            <span class="hidden">Back to Top</span>
            <svg xmlns="http//www.w3.org/2000/svg" version="1.1" viewBox="0 0 24 24" class="h-10 w-10">
                        <path fill="currentColor" d="M7.41,15.41L12,10.83L16.59,15.41L18,14L2,8L6,14L7.41,15.41Z" />
            </svg>
        </a>
    </div>
    <!-- script für Back to Top Button -->
    <script src="./js/index.js"></script>

</body>

</html>




    
            

            
