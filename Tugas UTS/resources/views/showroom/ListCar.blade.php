<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
        .toast {
            position: absolute;
            bottom: 3rem;
            right: 3rem;
        }
        </style>
    </head>
      <?php

use App\Models\Showroom;

?>
    </style>
  </head>

  <body>
        <nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="pages/ListCarmobil.php">Mycar</a>
                        </li>
                    </ul>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="/showroom/create" class="btn btn-primary me-md-2" type="button">Add Car</a>
                        <a href="../pages/Editprofile.php" class="btn btn-primary" type="button">Profile</a>
                    </div>
                </div>
            </div>
        </nav>
    <!-- Nav End -->

    <!-- Content -->
    <div class="container py-5">
            <h1>My Show Room</h1>
            <p>List Show Room Daniel - 1202204014</p>
            <div class="row mb-5">
          @foreach($showrooms as $showroom)
              <div class="col-lg-4">
                  <div class="card">
                      <div class="card-body">
                        <img src='/image/{{$showroom->image}}' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
                        <h4 class='card-title'>{{$showroom->name}}</h5>
                        <p class='card-text'>{{$showroom->description}}</p>
                        <span class='d-flex'>
                          <a href='Detail-Daniel.php?id=" . $row["id_mobil"] . "' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                          <a href='../config/delete.php?id=" . $row["id_mobil"] . "' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
                        </span>
                      </div>
                  </div>
                </div>
                @endforeach
                </div>
              </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    <footer class="fixed-bottom" style="padding-bottom: 50px;">
      <div class="container">
        <p style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">Jumlah Mobil : <?php echo(Showroom::all()->count()) ?></p>
      </div>
    </footer>
    <!-- footer end -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

  </html>