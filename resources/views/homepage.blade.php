<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-indigo-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class>
                    @auth
                   {{-- Logged in as USER --}}

                    <!DOCTYPE html>
                    <html lang="en" dir="ltr">
                    <head>
                        <meta charset="utf-8">
                        <link rel="stylesheet" href="style.css">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <title>Home | Computer Parts for Beginners</title>
                    </head>
                    <body>

                        <h1 class="webTitle">Computer Parts for Beginners</h1>
                        <p class="introText">
                          Your one stop informational website for anything computer part related!
                        </p>
                        <hr class="hrbawhcomppartfornewbies">

                    <!--*************************************************************************-->
                        <!-- Introduction -->
                        <div class="textBox"
                        style="float: left; left: 121px; padding: 130px 20px 10px 0px;">
                            <h3>Planning to buy or</h3>
                            <h3>build your own</h3>
                            <h3>computer parts?</h3>
                            <br>
                            <p>No fear.</p>
                            <p>We got your backs covered!</p>
                            <p>All the information you need</p>
                            <p>is already in our website.</p>
                            <p>😊</p>
                            </p>
                        </div>
                        <div>

                            <img src="{{ asset('Images/Corsair_RGB_case.png') }}" alt="An RGB case."
                            style="display:block; float:right; position:relative;
                            margin: 50px auto; right: 121px;">
                        </div>

                    </body>
                    </html>

                    @else
                    {{-- Logged in as Guest --}}

                    <!DOCTYPE html>
                    <html lang="en" dir="ltr">
                    <head>
                        <meta charset="utf-8">
                        <link rel="stylesheet" href="style.css">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <title>Home | Computer Parts for Beginners</title>
                    </head>
                    <body>

                        <h1 class="webTitle">Computer Parts for Beginners</h1>
                        <p class="introText">
                          Your one stop informational website for anything computer part related!
                        </p>
                        <hr class="hrbawhcomppartfornewbies">

                    <!--*************************************************************************-->
                        <!-- Introduction -->
                        <div class="textBox"
                        style="float: left; left: 121px; padding: 130px 20px 10px 0px;">
                            <h3>Planning to buy or</h3>
                            <h3>build your own</h3>
                            <h3>computer parts?</h3>
                            <br>
                            <p>No fear.</p>
                            <p>We got your backs covered!</p>
                            <p>All the information you need</p>
                            <p>is already in our website.</p>
                            <p>😊</p>
                            </p>
                        </div>
                        <div>

                            <img src="{{ asset('Images/Corsair_RGB_case.png') }}" alt="An RGB case."
                            style="display:block; float:right; position:relative;
                            margin: 50px auto; right: 121px;">
                        </div>

                    </body>
                    </html>

                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
