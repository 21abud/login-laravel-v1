<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">

                @if (session()->has('LoginFailed'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span>{{ session('LoginFailed') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                <h2>Please Login</h2>
                <form action="/login" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
                    <label for="username">Username</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
                    <label for="password">Password</label>
                  </div>

                  <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>