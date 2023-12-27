<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-[#203D39] antialiased">
    <div class="flex flex-col" x-data="{ isOpen: false }">
        <div class="h-lvh relative">
            <!-- Halbtransparenter Hintergrund über dem Video -->
            <div class="absolute inset-0 z-10 bg-black bg-opacity-80"></div>

            <!-- Video-Element -->
            <video class="object-cover w-full h-full absolute z-0 p-0" autoplay muted loop>
                <source src="/test.mp4" type="video/mp4">
                Ihr Browser unterstützt das Video-Tag nicht.
            </video>

            <div class="absolute z-20 top-0 left-0 right-0 bottom-0 flex justify-center items-center flex-col">
                <div class="-mt-20">
                    <img class="h-40" src="/img/Heart_LogoTransparent_1.png">
                </div>
                <span class="text-white text-4xl mt-20">Text über dem Video big</span>
                <span class="text-white text-2xl mt-2">Text über dem Video small</span>

                <div class="flex space-x-4 mt-4">
                    <div class="border border-white text-[#D3975E] text-2xl py-3 px-6 mt-4">Events</div>

                    <div class="border border-white text-[#D3975E] text-2xl py-3 px-6 mt-4">Tickets</div>
                </div>
            </div>

            <div class="absolute top-8 right-8 text-white z-20">
                <!-- Menu Button, öffnet die Sidebar -->
                <button @click="isOpen = true">
                    <x-eos-menu class="h-12 w-12 fill-white" />
                </button>

                <!-- Sidebar -->
                <div x-show="isOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="transform opacity-0 translate-x-full" x-transition:enter-end="transform opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="transform opacity-100 translate-x-0" x-transition:leave-end="transform opacity-0 translate-x-full" class="fixed top-0 right-0 h-screen text-white z-20 w-96">
                    <div class="bg-[#D3975E] text-black h-screen">
                        <!-- Close Button, schließt die Sidebar -->
                        <button @click="isOpen = false" class="absolute top-9 right-8">
                            <x-eos-close class="h-12 w-12 fill-white" />
                        </button>

                        <!-- Sidebar Inhalt -->
                        <div class="p-12 text-4xl pt-40 space-y-4 text-[#CBD1C2]">
                            <div>Events</div>
                            <div>Tickets</div>
                            <div>Impressions</div>
                            <div>About</div>
                        </div>
                        <div class="p-12 text-4xl pt-40 space-y-4 text-[#CBD1C2]">
                            Social icons
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <div class="absolute bottom-4 left-8 z-50 ">
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/2400Ubrr1gKyLEHXfLgQzn?utm_source=generator&theme=0" width="400" height="100" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    </div>

    <div class="p-8 text-[#CBD1C2] mt-24">
        <div class="mx-auto max-w-4xl">
            <div class="text-4xl">Title</div>
            <div class="text-xl mt-2">
                Oviditem si dunt poressitibus eum volor alitat am ipis dolorei qui ut pratectae vernam apidus eations equiandis vid que es num illacipicat ma dolenihillam fugitat que non enis ped qui repro dolum, nosaperspera voluptatem esti ullo odit et arios
            </div>
        </div>
    </div>

    <div class="grid grid-cols-3 mt-24">
        <div>
            <img src="/img/Heart_PostBeispiel_01.png">
        </div>
        <div>
            <img src="/img/Heart_PostBeispiel_02.png">
        </div>
        <div>
            <img src="/img/Heart_PostBeispiel_03.png">
        </div>
    </div>

    <div class="p-8 text-[#CBD1C2] mt-24">
        <div class="mx-auto max-w-4xl">
            <div class="text-4xl">Title</div>
            <div class="text-xl mt-2">
                Oviditem si dunt poressitibus eum volor alitat am ipis dolorei qui ut pratectae vernam apidus eations equiandis vid que es num illacipicat ma dolenihillam fugitat que non enis ped qui repro dolum, nosaperspera voluptatem esti ullo odit et arios
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-4xl">
        <div class="grid grid-cols-3 gap-4 mt-24">
            <div>
                <img src="/img/Heart_PostBeispiel_01.png">
            </div>
            <div>
                <img src="/img/Heart_PostBeispiel_02.png">
            </div>
            <div>
                <img src="/img/Heart_PostBeispiel_03.png">
            </div>
        </div>
    </div>

    <div class="p-8 text-[#CBD1C2] mt-24">
        <div class="mx-auto max-w-4xl">
            <div class="text-4xl">Title</div>
            <div class="text-xl mt-2">
                Oviditem si dunt poressitibus eum volor alitat am ipis dolorei qui ut pratectae vernam apidus eations equiandis vid que es num illacipicat ma dolenihillam fugitat que non enis ped qui repro dolum, nosaperspera voluptatem esti ullo odit et arios
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-6xl">
        <div class="grid grid-cols-4 gap-4 mt-24">
            <div>
                <img src="/img/Heart_PostBeispiel_01.png">
            </div>
            <div>
                <img src="/img/Heart_PostBeispiel_02.png">
            </div>
            <div>
                <img src="/img/Heart_PostBeispiel_03.png">
            </div>
            <div>
                <img src="/img/Heart_PostBeispiel_04.png">
            </div>
        </div>
    </div>

    <div class="p-8 text-[#CBD1C2] mt-24">
        <div class="mx-auto max-w-4xl">
            <div class="text-4xl">Title</div>
            <div class="text-xl mt-2">
                Oviditem si dunt poressitibus eum volor alitat am ipis dolorei qui ut pratectae vernam apidus eations equiandis vid que es num illacipicat ma dolenihillam fugitat que non enis ped qui repro dolum, nosaperspera voluptatem esti ullo odit et arios
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-4xl">
        <div class="grid grid-cols-2 gap-4 mt-24">
            <div>
                <img src="/img/Heart_PostBeispiel_01.png">
            </div>
            <div>
                <img src="/img/Heart_PostBeispiel_02.png">
            </div>
            <div>
                <img src="/img/Heart_PostBeispiel_03.png">
            </div>
            <div>
                <img src="/img/Heart_PostBeispiel_04.png">
            </div>
        </div>
    </div>

    <footer class="p-8 bg-[#F8F2E4] text-[#203D39] mt-24 py-24">
        <div class="mx-auto max-w-6xl">
            <div class="text-4xl">Footer</div>
            <div>
                <img class="h-24" src="/img/Heart_Icon_Transparent2.gif">
            </div>
            <div class="text-xl mt-12">
                Events, Tickets, Impressions, About
            </div>
            <div class="text-xl mt-12">
                Resident Advisor, Instagram, Youtube, TikTok, (Facebook), Mail
            </div>
            <div class="text-xl mt-12">
                BE PART OF THE FAMILY - REGISTER NOW AND NEVER MISS ANY NEWS: enter your mail here (das kann auch oben noch irgendwo präsent platziert sein).
            </div>
            <div class="text-xl mt-12">
                Datenschutz, Impressum
            </div>
        </div>
    </footer>

</body>

</html>