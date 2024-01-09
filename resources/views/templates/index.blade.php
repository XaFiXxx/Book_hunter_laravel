<!DOCTYPE html>
<html lang="fr">
  <head>
    @include('templates.partials._head')
  </head>
  <body class="bg-gray-900 text-white font-sans leading-normal tracking-normal">
    <!-- Header -->
    @include('templates.partials._header')

    <!-- Main -->
    <div class="container mx-auto flex flex-wrap pt-4 pb-12 text-white">
      <!-- Aside -->
      @include('templates.partials._aside')

      <!-- Main content -->
      <main class="w-full md:w-3/4 p-3">
        @yield('content')
      </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-700 text-gray-400 shadow">
      @include('templates.partials._footer')
    </footer>
  </body>
</html>
