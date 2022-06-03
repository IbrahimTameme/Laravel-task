
<body>
<header>
    <div class="container-fluied">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">CHOCKOLATE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Candy') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/About') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/Contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-black" type="button" href="#" data-toggle="modal" data-target="#myModal">Sign In</a>                  
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-black" type="button" href="#" data-toggle="modal" data-target="#myModal">Register</a>
                </li>
            </ul>
        </div>

    </nav>
</div>
    </header>
    
