<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Albayan</title>
    <style>
        @font-face {
            font-family: RB-bold;
            src: url('{{asset('fonts/RB-bold.ttf')}}');
        }

        @font-face {
            font-family: RB-light;
            src: url('{{asset('fonts/RB-light.ttf')}}');
        }

        @font-face {
            font-family: DroidKufi-Bold;
            src: url('{{asset('fonts/DroidKufi-Bold.ttf')}}');
        }

        @font-face {
            font-family: DroidKufi-Regular;
            src: url('{{asset('fonts/DroidKufi-Regular.ttf')}}');
        }

        @font-face {
            font-family: riyad-bank-Regular;
            src: url('{{asset('fonts/riyad-bank-Regular.ttf')}}');
        }

        .rb-light {
            font-family: RB-light;
        }

        .rb-bold {
            font-family: RB-bold;
        }

        .kufi-bold {
            font-family: DroidKufi-Bold;
        }

        .riyad-bank-Regular {
            font-family: riyad-bank-Regular;
        }
    </style>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{asset('fonts/4_F3.ttf')}}">
    <link rel="stylesheet" href="{{asset('fonts/4_F4.ttf')}}">
    <link rel="stylesheet" href="{{asset('fonts/DroidKufi-Bold.ttf')}}">
    <link rel="stylesheet" href="{{asset('fonts/DroidKufi-Regular.ttf')}}">
    <link rel="stylesheet" href="{{asset('fonts/riyad-bank-Regular.ttf')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
@include('front.components.header')
@yield('content')
@include('front.components.footer')


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
