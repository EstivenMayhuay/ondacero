<!DOCTYPE html>
<html lang="es">
<head>
    @include('layout.head')
    <title>Radio Onda Cero</title>
<body>
    @include('layout.header')

    @include('layout.navigation')

    <main class="content">
        <div class="bannerContent bannercontent--160x600">
            <div class="banner-left-160x600">
                <h1>Banner</h1>
            </div>
        </div>

        <div class="main">
            @yield('content')

            @include('layout.footer')
        </div>

        <div class="bannerContent bannercontent--160x600">
            <div class="banner-left-160x600">
                <h1>Banner</h1>
            </div>
        </div>
    </main>

    @yield('customScripts')
</body>
</html>
