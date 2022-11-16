<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <!-- <main>
                {{ $slot }}
            </main> -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur debitis quisquam culpa autem molestiae temporibus necessitatibus quis in architecto laboriosam ad sed harum facilis eveniet iste dicta nobis voluptate doloremque maiores dolor omnis, deserunt eligendi? Maxime quo voluptatum esse deleniti delectus reprehenderit architecto dolore consectetur impedit mollitia provident laboriosam excepturi maiores, voluptates accusamus officia, cum nostrum quae, ut quasi ab. Ullam illum perspiciatis esse exercitationem beatae eius tempora aliquid facilis voluptatem minus corporis inventore quisquam, fugiat aspernatur modi alias saepe.</p>
                    </div>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
