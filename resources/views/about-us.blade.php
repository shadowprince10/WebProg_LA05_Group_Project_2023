<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       @include('layout_format.header')
    </head>
    <body>
        @include('layout_format.bg')
    </body>
    <h2><b><u>ABOUT US</u><b></h2>
    {{-- isi penjelasan About Us --}}
    {{-- h1 untuk judul --}}
    {{-- p untuk paragraf --}}
    <p>We provide a place for professional anime sellers who'll always be available to meet your needs related to anime goodies including novel, manga, clothes, figure, stationery, and keychain with affordable prices.</p>
</html>