
<!DOCTYPE html>

<html>
     <Head>
          <meta charset= "utf-8"> 
          <title> E commerce  </title>
          @include('partials.styles')
     </Head>


     <body> 
          
          <div class="wrpper">
             
                @include('partials.nav')

                @yield('content')


                @include('partials.footer')
  
           </div>

           @include('partials.scripts')
        
     </body>
   
</html>