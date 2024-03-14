<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5 w-25">
        <h1 class="text-center text-primary mb-3">
            LOGIN
            <i class="fa-solid fa-right-to-bracket"></i>
        </h1>
        <form action="actions/login.php" method="post">
            <div class="row mb-3">
                <div class="col-3 text-end">
                    <label for="username" class="form-label">Username</label>
                </div>
                <div class="col-9">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3 text-end">
                    <label for="password" class="form-label">Password</label>
                </div>
                <div class="col-9">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3"></div>
                <div class="col-9">
                    <button type="submit" name="btn" class="col-12 btn btn-primary px-5">Login</button>
                </div>
            </div>
        </form>
            <div class="row">
                <div class="col-3"></div>
                <!-- Modal trigger button -->
                <div class="col-9 text-center">
                    <button type="button" class="btn btn-danger px-5" data-bs-toggle="modal" data-bs-target="#modalId">Create an Account</button>
                </div>
                <!-- Modal Body -->
                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <a href="login.php" class="text-end text-secondary h5 m-3">
                                <i class="fa-solid fa-xmark"></i>
                            </a>
                            <div class="pb-5 px-5">
                                <h1 class="text-danger text-center mb-3">
                                    <i class="fa-solid fa-user-plus"></i>
                                    Registration
                                </h1>
                                <form action="actions/create.php" method="post">
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <button type="submit" name="btn" class="col-12 btn btn-danger px-5">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>