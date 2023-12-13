<!-- home.blade.php -->
<!DOCTYPE html>
<html lang="en">
    @include('components.head')
    <body id="page-top">
        @include('components.navbar')
        <!-- Masthead-->
    
        <!-- About-->
        @yield('page')
        
        @include('components.footer')
        @include('components.script')
    </body>
</html>
