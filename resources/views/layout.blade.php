<html>
    <head>
        <script src="{{asset('js/app.js')}}">

        </script>
    </head>
    <body>

        <div class="header">
            @section('header')
            <h1>
           
            </h1>
            @show
        </div>

        @section('content')
        <div class="content">
           @show
        </div>

        <div class="footer">
            @section('footer')
            <h1></h1>
        </div>
        @show

        
    </body>
</html>