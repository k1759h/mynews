<!DOCTYPE html>
<html lang="ja">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title')</title>
     <script src="{{ secure_asset('js/app.js') }}" defer></script>
     <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
 </head>
   <body>
       
       <header>
           <nav>
               <ul>
                   <li><a href="/">ホーム</a></li>
                   <li><a href="/about">"About"</li>
               </ul>
           </nav>
       </header>
       <main>
           <div class="container">
               @yield('content')
           </div>
       </main>
       <footer>
           <p>© 2024 Laravel App</p>
       </footer>
       
       <script src="{{ secure_asset('js/app.js') }}" defer></script>
       <link href="{{secure_asset('css/app.css') }}" rel="stylesheet">
   </body>
</html>