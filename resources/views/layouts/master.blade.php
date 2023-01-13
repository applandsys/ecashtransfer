<!DOCTYPE html>
<html lang="zxx">
  @include('layouts.partials.head')
   <body>
      <div class="loader js-preloader">
         <div></div>
         <div></div>
         <div></div>
      </div>
      <div class="page-wrapper">
         @include('layouts.partials.header')
         @yield('content')
 
      @include('layouts.partials.footer')
      </div>
      <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
      @include('layouts.partials.script')
   </body>
</html>