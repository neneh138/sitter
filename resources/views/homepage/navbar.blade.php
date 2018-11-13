<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div class="container">
                <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
                        <div class="container">
                            <a class="navbar-brand" href="/">{{config('app.name', 'Sitters')}}</a>
                            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/sitters">Babysitters</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/parents">Parents</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/posts">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class= "mr-2  btn btn-success btn-md" href="/login" role="button">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-primary btn-md" href="/register/index" role="button">Register</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
        </div>
</body>
</html>
