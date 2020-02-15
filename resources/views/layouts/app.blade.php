<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Tasklist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>
    
    <body>
        <header class="mb-4">
            <nav class="navbar bavbar-expand-sm navbar-light bg-white boder-bottom" >
                <a class="navbar-brand" href="/">Tasklist</a>
                
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class='navbar-nav mr-auto'></ul>
                    <ul class="navbar-nav">
                        <li class='nav-bar'>{!! link_to_route('tasks.create', '新規タスクの追加 ', [], ['class' => 'btn btn-primary']) !!}</li>
                    </ul>
                </div> 
            </nav> 
        </header>
        
            <div class="container">
                
                @include('commons.error_messages')
                
                @yield('content')
            </div>
            
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>
    