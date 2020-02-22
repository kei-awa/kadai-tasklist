<header class="mb-4">
    <nav class="navbar bavbar-expand-sm navbar-light" >
        <a class="navbar-brand" href="/">Tasklist</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
                
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class='navbar-nav mr-auto'></ul>
            <ul class="navbar-nav">
                <li class='nav-item'>{!! link_to_route('signup.get', 'sign up now', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
            </ul>
        </div> 
    </nav> 
</header>