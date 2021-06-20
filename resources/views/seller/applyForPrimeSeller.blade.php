<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Apply for Prime Seller</title>
</head>

<body>
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


    <div class="text-center mt-5">
        <h1>Apply for Prime Seller</h1>
    </div>
    <div class="container">

    <form class="row g-3">


        <div class="col-12">
            <label for="exampleInputEmail1" class="form-label">Select Package</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>none</option>
                <option value="1">1 Month   900   Taka</option>
                <option value="2">3 Month   2500  Taka</option>
                <option value="3">6 Month   4700  Taka</option>
                <option value="3">1 Year    9000  Taka</option>
              </select>
        </div>

        <div class="col-12">
            <label for="exampleInputEmail1" class="form-label">Select Payment method</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>none</option>
                <option value="1">Bikash</option>
                <option value="2">Rocket</option>
                <option value="3">Credit card</option>
              </select>
        </div>


        <div class="col-12">
            <label for="exampleInputEmail1" class="form-label">Pay money to 010443*****</label><br>
            <label for="exampleInputEmail1" class="form-label">Input Transection Number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Apply</button>
        </div>
    </form>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

</div>
</body>

</html>
