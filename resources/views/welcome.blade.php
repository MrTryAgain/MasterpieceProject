<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- stylesheet link aus dem z.B. guest.blade.php nehmen -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- java script aus dem guest.blade.php nehmen -->
<!--Link für die Fonts // <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
    <title>mySite</title>
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
            <div class="hidden  top-0 right-0 px-6 py-4 md:w-11/12 md:flex md:justify-end">
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
            <div class="block  top-0 right-0 px-6 py-4 sm:hidden flex flex-col">
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



    </header>


    
    <main>
        <!-- Projekt 1 -->
        <div class="md:w-11/12 flex flex-wrap m-auto mt-5">

            <div class="md:w-3/12 w-full h-9/12 flex-grow pb"> <!-- linke Seite -->
                <div class="entryTitle">Projekt Bla Bla 1</div>
                <div class="description">Beschreibung des Projekts mit unglaublich viel Bla Bla  </div>
            </div> 

            <div class="md:w-9/12 w-full flex-grow"> <!-- rechte Seite -->
                <div class="iframe h-full w-full"><iframe style="width:100%; height:30rem; "src="https://www.leo.org"  frameborder="1"></iframe></div>
        </div>

        <!-- Projekt 2 -->
        <div class="md:w-11/12 flex flex-wrap m-auto mt-5">

            <div class="md:w-3/12 w-full h-9/12 flex-grow pb"> <!-- linke Seite -->
                <div class="entryTitle">Projekt Bla Bla 2</div>
                <div class="description">Beschreibung des Projekts mit unglaublich viel Bla Bla  </div>
            </div> 

            <div class="md:w-9/12 w-full flex-grow"> <!-- rechte Seite -->
                <div class="iframe h-full w-full"><iframe style="width:100%; height:30rem; "src="https://coder-ipsum.tech/"  frameborder="1"></iframe></div>
        </div>

        <!-- Projekt 3-->
        <div class="md:w-11/12 flex flex-wrap m-auto mt-5">

            <div class="md:w-3/12 w-full h-9/12 flex-grow pb"> <!-- linke Seite -->
                <div class="entryTitle">Projekt Bla Bla 3</div>
                <div class="description">Beschreibung des Projekts mit unglaublich viel Bla Bla  </div>
            </div> 

            <div class="md:w-9/12 w-full flex-grow"> <!-- rechte Seite -->
                <div class="iframe h-full w-full"><iframe style="width:100%; height:30rem; "src="https://tailwindcss.com/docs/flex-wrap"  frameborder="1"></iframe></div>
        </div>

    <!-- ein Kommentar fürs commiten -->

    

   


    </main>



    <footer>

        
    </footer>



</body>

</html>




    
            

            
