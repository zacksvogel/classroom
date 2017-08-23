<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body>


        <div class="container">

            @yield ('content')
            
        </div>


        @include('includes.scripts')

    </body>
</html>
