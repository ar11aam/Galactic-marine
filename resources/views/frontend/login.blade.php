<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galactic Marine</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('admin-panel/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') }}"
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
    <!--JS-->

    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ url('admin-panel/assets/css/styles.min.css') }}" />
</head>

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="{{ url('frontend/assets/imgs/logo1.png') }}" width="180" alt="">
                            </a>
                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session::get('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <p class="text-center">Note : This login is only for Admins.</p> <br>
                            <form action="{{ '/login' }}" method="post">
                                @if (Session::has('success'))
                                    <div class="alert alert-danger">{{Session::get('success')}}</div>
                                @endif
                                @if (Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        id="exampleInputPassword1">
                                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>

                                <input type="submit" value="Login"
                                    class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">No Account?</p>
                                    <a class="text-primary fw-bold ms-2" href="{{ '/register' }}">Create an
                                        account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ url('admin-panel/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('admin-panel/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('admin-panel/assets/js/sidebarmenu.js') }}"></script>
<script src="{{ url('admin-panel/assets/js/app.min.js') }}"></script>
<script src="{{ url('admin-panel/assets/libs/simplebar/dist/simplebar.js') }}"></script>
</body>

</html>
