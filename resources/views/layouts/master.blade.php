<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- <head> -->
    @include('partials._head')

    <body>

        <div id="app" class="page @if ( Route::current()->uri != '/' ) sub-page @endif">
            <!-- <header> -->
            @include('partials._header')

            <section class="content">
                <!-- page content -->
                @yield('content')
            </section>

            <!-- <footer> -->
            @include('partials._footer')
        </div>
            <!-- js libraries -->
            @include('partials._js_libraries')
            <!-- page level js -->
            @yield('pageScript')

    </body>
</html>
