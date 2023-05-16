<!DOCTYPE html>
<html lang="es">
<head>
    @include('layout.head')
    <title>Radio Onda Cero</title>
<body>
    @include('layout.header')

    @include('layout.navigation')

    <div class="appLoader justify-content-center align-items-center" id="appLoader">
        <div class="spinner-border m-5 color-text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <h6 class="fs-4 text-white">Cargando...</h6>
    </div>

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
