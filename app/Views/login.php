<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style>
        body {
            background-color: #A7E6FF;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 50px;
            max-width: 500px;
            width: 100%;
        }
        .btn-primary {
            background-color: #4caf50;
            border-color: #4caf50;
        }
        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }
        .card-title {
            color: #4caf50;
        }
        .alert-warning {
            background-color: #ffcc00;
            border-color: #ffcc00;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <?php if(session() -> getFlashdata('pesan')): ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif?>

            <?php if(session() -> getFlashdata('error')): ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif?>

            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                    <form action="<?= base_url('/login')?>" method="POST" class="needs-validation" novalidate="" autocomplete="off">
                        <div class="mb-3">
                            <div class="mb-2 w-120">
                                <label class="text-muted" for="user_name">User Name</label>
                            </div>
                            <input id="user_name" type="text" class="form-control" name="username" required>
                            <div class="invalid-feedback">
                                Username is required
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted w-120" for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                            <div class="invalid-feedback">
                                Email is invalid
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="mb-2 w-120">
                                <label class="text-muted" for="password">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn btn-primary ms-auto">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
