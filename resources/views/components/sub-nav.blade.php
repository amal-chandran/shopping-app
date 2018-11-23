<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary  mb-4">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> @foreach (array( "Mi", "Realme", "Samsung", "Lenovo", "OPPO", "Apple", "Vivo", "Honor" ) as $item)
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- Right nav -->
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">{{$item}}</a>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">A sub menu</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item disabled" href="#">Disabled item</a></li>
                                <li><a class="dropdown-item" href="#">One more link</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">A separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        @endforeach
    </div>
</nav>