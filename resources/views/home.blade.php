<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Home | PWA</title>
    <style>
        .bg-pattern {
            background: url('https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/ill_header_3.png') no-repeat center center;
            background-size: cover;
        }

        .custom-top {
            top: 320px;
            /* Ajusta este valor según lo necesites */
        }
    </style>
</head>

<body class="bg-pattern inset-0">
    <div class="container mx-auto px-6 py-12 text-center relative">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden absolute custom-top left-5 w-1/3 h-auto p-4">
            <div class="relative z-10 px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Comunidad de Aprendizaje y Discusión.</h1>
                <p class="text-lg text-gray-600 mb-6">
                  Explora, comparte y aprende en nuestra plataforma de posteos. Publica tus artículos, sé parte de una comunidad que valora el conocimiento y la colaboración.
                </p>
                <div class="flex justify-center">
                    <a href="{{ route('login') }}"
                        class="bg-pink-500 text-white font-bold py-2 px-4 rounded mr-4 hover:bg-pink-600">login</a>
                    <a href="{{ route('register') }}"
                        class="bg-gray-800 text-white font-bold py-2 px-4 rounded hover:bg-gray-900">Registrar</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
