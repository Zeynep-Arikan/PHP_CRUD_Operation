<!-- home.blade.php -->
<!DOCTYPE html>
<html lang="en">
    @include('livewire.head')
    <body id="page-top">
        @include('livewire.navbar')
        <!-- Masthead-->
    
            <!-- About-->
        @yield('page')
        
        @include('livewire.footer')
        @include('livewire.script')
    </body>
</html>
