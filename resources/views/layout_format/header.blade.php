<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src = "{{ asset('assets/anime-market-items/logo/logo-pasar-anime.png') }}">
            <a class = "navbar-brand" href = "/homepage">Pasar Anime</a>
            <button class = "navbar-toggler" type = "button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class = "navbar-toggler-icon"></span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarNav">
                <ul class = "navbar-nav">
                    <li class = "nav-item">
                        <a class = "nav-link" href = "/homepage">Home</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "/order/{orderID}">Order</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "/about-us">About Us</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "/product/{productID}/cart">Cart</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "/wishlist">Wishlist</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "/register">Register/Login</a>
                    </li>
                    <form class = "d-flex" role = "search" action = "{{ route('search') }}">
                        <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                      <li class = "nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false" style="color: darkcyan;">
                              Profile
                          </a>
                          <ul class="dropdown-menu" aria-labelledby = "navbarDropdown">
                              <li>
                                  <a class="dropdown-item" href="{{ route('cart.view') }}" style="color: darkcyan;">View Cart</a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="{{ route('homepage') }}" style="color: darkcyan;">Logout</a>
                              </li>
                          </ul>
                      </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>

{{-- References --}}
{{-- a. https://buayastore.com/ --}}
{{-- b. https://www.quora.com/How-can-I-add-a-background-color-main-page-with-the-use-of-PHP --}}
{{-- c. https://www.youtube.com/watch?v=uqsbtFkgHPs --}}
{{-- d. https://www.youtube.com/watch?v=lxRs36V0EOk --}}
