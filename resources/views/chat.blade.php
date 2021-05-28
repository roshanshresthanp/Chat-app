<html>
    <head><title>ChatApp</title>

        {{-- <meta name="csrf-token" content="{{csrf_token() }}" > --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    
    </head>
    <body>
        <div class="container">
            <div class="row" id="app">
                <div class="offset-4 col-4">
                    <li class="list-group-item active">Chat room</li>
                      <input type="text" class="form-control" placeholder="Type your message here..." @keyup.enter='send'>
                </div>
                

            </div>
        </div>

        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>