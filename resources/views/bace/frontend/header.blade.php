<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        .gradient {
            background: linear-gradient(to bottom, rgba(255,0,0, 0), rgba(255, 255, 255, 2));
        }

        .option-card {
            display: none;
            /* Add styling for your option card */
            position: absolute;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 10px;
            width: 200px; /* Adjust the width as needed */
            top:7%;
            left: 50%;
        }

        .option-item {
            border-bottom: 1px solid #ddd;
            cursor: pointer;
        }

        
        .welcome-message {
        
        transform: translate(-50%, -50%);
            
        }
        


        .content-card {
            position: absolute;
            
            transform: translate(-50%, -50%);
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0);
             
            
            /* Adjust the width as needed */
        }

        
    </style>
</head>
<body class="">
    <div class="header mb-10">
        <div style="background-image: url('{{ asset('b_images/hero.jpeg') }}')" class="bg-cover bg-center h-[750px] w-full z-10">

        <header class="top-0 left-0 w-full h-20 lg:h-20 bg-black text-white flex items-center justify-between lg:justify-around px-2 lg:px-4">
            <!-- Logo and Title -->
            <div class="flex lg:items-center">
                <img src="{{ asset('b_images/iskcon-vadodara-logo.jpg') }}" alt="Logo" class="h-8 w-8 lg:h-12 lg:w-12 mr-2">
                <div>
                    <h1 class="text-sm lg:text-lg font-bold" style="font-family: 'Lora', serif;">Gauranga Bace</h1>
                    <p class="text-[.5em] lg:text-sm" style="font-family: 'Ubuntu', sans-serif;">International Society for krishna consiousness</p>
                </div>
            </div>
            <div>
                <x-fluentui-line-horizontal-3-20 class="w-10 lg:hidden cursor-pointer" />
            </div>

    
            <!-- Navigation Links -->
            <nav class="flex items-center gap-x-6 font-semibold hidden lg:block ">

                <a href="#" class="text-white hover:text-white hover:border-b pb-2 mx-2">Home</a>
                <a href="#" class="text-white hover:text-white hover:border-b pb-2 mx-2">Activites</a>
                <a href="#" class="text-white hover:text-white hover:border-b pb-2 mx-2" onmouseover="openOptionCard()" onmouseout="closeOptionCard()" >Activities</a>
                <a href="{{route('events')}}" class="text-white hover:text-white hover:border-b pb-2 mx-2">Upcoming Events</a>
                <a href="{{route('allbooks')}}" class="text-white hover:text-white hover:border-b pb-2 mx-2">Scrptures & books</a>
                <a href="{{route('yatras')}}" class="text-white hover:text-white hover:border-b pb-2 mx-2">Yatras</a>
                <a href="{{route('alumni')}}" class="text-white hover:text-white hover:border-b pb-2 mx-2">Alumni</a>
                <a href="#" class="text-white hover:text-white hover:border-b pb-2 mx-2">Login</a>
            </nav>
        </header>
        <div class="absolute bottom-0 left-0 right-0 h-[30rem] gradient"></div>
        
        <div class="welcome-message relative top-[35%] left-[50%] text-center text-white text-[24px] font-bold" style="font-family: 'Lora', serif;">
            <div class="font-semibold text-lg lg:text-xl">Welcome to</div>
            <div class=" font-semibold text-4xl lg:text-6xl">Gauranga Bace website</div>
        </div>
        
        <div class="content-card top-[80%] left-[50%] w-[90%] lg:w-[60%]  h-[23em] rounded-2xl text-center">
            <div class="text-2xl text-black  py-20" style="font-family: 'Ubuntu', sans-serif;">Events</div>
        </div>
        </div>

        <div class="option-card rounded-xl shadow-xl space-y-4" id="optionCard" onmouseover="keepOptionCardOpen()" onmouseout="closeOptionCard()">
            <div class="option-item pb-2 mx-2" onclick="switchOption(1)"><a href="{{route('sundayprogram')}}">Sunday Program</a></div>
            <div class="option-item pb-2 mx-2" onclick="switchOption(2)"><a href="{{route('seminars')}}">Seminar</a></div>
            <div class="pb-2 mx-2" onclick="switchOption(3)"><a href="{{route('youthtraining')}}">Youth Program</a></div>
        </div>

    
        <!-- Black Header on Scroll -->
        <script>
            let optionCard = document.getElementById('optionCard');

            function openOptionCard() {
                optionCard.style.display = 'block';
            }

            function keepOptionCardOpen() {
                optionCard.style.display = 'block';
            }

            function closeOptionCard() {
                optionCard.style.display = 'none';
            }
           
    
            
        </script>
    </div>

</body>
</html>