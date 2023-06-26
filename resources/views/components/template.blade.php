<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf">
    <meta name="msapplication-TileColor" content="#0ed3cf">
    <meta name="theme-color" content="#0ed3cf">

    <meta property="og:image"
          content="http://tailwindcomponents.com/storage/7592/conversions/temp61843-ogimage.jpg?v=2023-06-26 01:02:48"/>
    <meta property="og:image:width" content="1280"/>
    <meta property="og:image:height" content="640"/>
    <meta property="og:image:type" content="image/png"/>

    <meta property="og:url" content="https://tailwindcomponents.com/component/grid-blog-page/landing"/>
    <meta property="og:title" content="Grid Blog Page by khatabwedaa"/>
    <meta property="og:description"
          content="Grid Blog Page from Meraki UI - https://merakiui.com/components/blog#Grid"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@TwComponents"/>
    <meta name="twitter:title" content="Grid Blog Page by khatabwedaa"/>
    <meta name="twitter:description"
          content="Grid Blog Page from Meraki UI - https://merakiui.com/components/blog#Grid"/>
    <meta name="twitter:image"
          content="http://tailwindcomponents.com/storage/7592/conversions/temp61843-ogimage.jpg?v=2023-06-26 01:02:48"/>

    <title>{{$pageTitle ?? 'Meu site Portifolio'}}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white dark:bg-gray-900">
<header class="bg-white dark:bg-gray-900">
    <div class="bg-white dark:bg-gray-900">
        <div class="h-16 mx-auto px-5 flex items-center justify-between">
            <a class="text-2xl hover:text-indigo-800 text-white transition-colors cursor-pointer">MDM</a>

            <ul class="flex items-center gap-5">
                <li><a class="hover:text-indigo-800 transition-colors text-white" href="{{route('index')}}">Home</a></li>
                <li><a class="hover:text-indigo-800 transition-colors text-white" href="{{route('projects')}}">Projetos</a></li>
                <li><a class="hover:text-indigo-800 transition-colors text-white" href="">Sobre Mim</a></li>
                <li><a class="hover:text-indigo-800 transition-colors text-white" href="">Contato</a></li>
            </ul>
        </div>
    </div>
</header>
{{$slot}}
</body>
<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
          © 2023
          <a href="#"  class="hover:underline">
              Mizael Douglas™
          </a>. All Rights Reserved.
    </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</footer>
</html>
