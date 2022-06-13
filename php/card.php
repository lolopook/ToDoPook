<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do pook!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">A faire</a>
                        <a class="dropdown-item" href="#">Réalisé</a>
                        <a class="dropdown-item" href="#">Cloturée</a>
                        <a class="dropdown-item" href="#">Archivée</a>
                    </div>
                    </li>
                </ul>
            </div>
          </nav>
    </header>

    <div class="container col-12 d-flex flex-wrap justify-content-around">
       
        <section class=" col-12 mx-auto mt-4" style="max-width: 23rem;">
            <div class="card booking-card shadow p-1 mb-5 bg-body rounded">
                    <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light rounded" data-mdb-ripple-color="light">
                        <img src="https://mdbootstrap.com/img/Photos/Others/water-lily.jpg" class="img-fluid rounded" alt="image de la card">

                    </div>
                    <div class="card-body">

                        <h4 class="card-title font-weight-bold mt-2">
                            <a>Titre de to do</a>
                        </h4>

                        <ul class="list-unstyled list-inline mb-2">
                            <li class="list-inline-item me-0">tag<i class="fa fa-star fa-xs"> </i></li>
                            <li class="list-inline-item me-0">A<i class="fa fa-star fa-xs"></i></li>
                            <li class="list-inline-item me-0">inclure<i class="fa fa-star fa-xs"></i></li>
                            <li class="list-inline-item me-0"><i class="fa fa-star fa-xs"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-half-alt fa-xs"></i></li>
                        </ul>

                        <p class="card-text">
                            description de la card to do.
                        </p>
                        <hr class="my-4">

                        <div class="col-12 d-flex flex-wrap">
                            <ul class="list-unstyled m-auto col-6 p-0 m-1 text-center">
                                <li>date de début:</li>
                            
                                <li>
                                    <div class="chip">6:00PM</div>
                                </li>
    
                            </ul>
                            <ul class="list-unstyled m-auto col-6 p-0 m-1 text-center">
                                <li>date de fin:</li>
    
                                <li>
                                    <div class="chip">7:00PM</div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-12 m-1 mt-5">
                            <button type="submit" class="btn btn-danger col-12">delete</button>
                        </div>
                        <div class="col-12 m-1 mt-3">
                            <button type="submit" class="btn btn-warning col-12 archive">Archivre</button>
                        </div>
                        <div class="col-12 m-1 mt-3">
                            <button type="submit" class="btn btn-outline-success col-12 btnDone">Fait !</button>
                        </div>

                    </div>
            </div>
        </section>
        
      </div>

      
    
</body>
</html>