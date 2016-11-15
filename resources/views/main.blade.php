<!DOCTYPE html>
<html lang="en">

    @include('partials._head')

    <body>
        <div id="app">
            @include('partials._navbar')
            @include('partials._messages')
            @yield('content')
        </div>
        @include('partials._footer')
    </body>

</html>
