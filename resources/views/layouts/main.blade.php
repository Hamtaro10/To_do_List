<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Serif:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>@yield('title', 'Default title')</title>
</head>
<body>
    @include('layouts.header')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('Sukses'))
                showToast('success', "{{ session('Sukses') }}");
            @endif

            @if(session('Error'))
                showToast('error', "{{ session('Error') }}");
            @endif

            @if(session('Warning'))
                showToast('warning', "{{ session('Warning') }}");
            @endif
        });
    </script>
    <main>
    
        







    </main>
@include('layouts.footer')       
</body>
</html>