<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>My posts</title>
</head>

<body>

    {{-- nav bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">VCES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Chat Box</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Apply For prime Seller!</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Create selling post</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="#">Statements</a></li>
                            <li><a class="dropdown-item" href="#">Order Histroy</a></li>
                            <li><a class="dropdown-item" href="#">My posts</a></li>
                            <li><a class="dropdown-item" href="#">Contact support</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Announcement</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    {{-- cards --}}

    <div class="text-center mt-5">
        <h1>My posts</h1>
    </div>
    <div class="container " >

        {{-- row 1 --}}
        <div class="row ">

            <div class="col-sm-4">
            <div class="card" style="max-width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price : 760</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">Ratting : 4.3/5</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Go to post</a>
                    <a href="#" class="btn btn-info">go to shop</a>
                </div>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="card" style="max-width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price : 400</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">Ratting : 4.6/5</li>
                </ul>
                <div class="card-body">
                        <a href="#" class="btn btn-primary">Go to post</a>
                        <a href="#" class="btn btn-info">go to shop</a>
                </div>
            </div>
            </div>


            <div class="col-sm-4">
            <div class="card" style="max-width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price : 400</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">Ratting : 3.3/5</li>
                </ul>
                <div class="card-body">
                        <a href="#" class="btn btn-primary">Go to post</a>
                        <a href="#" class="btn btn-info">go to shop</a>
                </div>
            </div>

            </div>
        </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

</div>
</body>

</html>
