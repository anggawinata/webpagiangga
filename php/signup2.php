<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/bootstrap-grid.css"> 
    <link rel="stylesheet" href="../assets/css/bootstrap-grid.css.map"> 
    <link rel="stylesheet" href="../assets/css/bootstrap-grid.min.css"> 
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css.map"> 
    <!-- css for reboot -->
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.css"> 
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.css.map"> 
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.min.css"> 
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.min.css.map"> 
    <!-- css for bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css"> 
    <link rel="stylesheet" href="../assets/css/bootstrap.css.map"> 
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css.map">
    <title>Document</title>
    <link rel="stylesheet" href="../html/css/signup.css">

</head>

<body>
<section class="forms-section">
    <h1 class="section-title">delcoffee.com</h1>
    <div class="forms">
    <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
        </button>

        <!-- mulai proses login -->
        <form class="form form-login" action="signupproses.php" method="POST">
        <fieldset>
            <legend>Please, enter your username and password for login.</legend>
            <div class="input-block">
            <label for="username">Username</label>
            <input id="username" type="text" class="form-control" name="username"
                placeholder="masukkan username" required>
            </div>
            <div class="input-block">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" 
                placeholder="masukkan password" required>
            </div>
        </fieldset>
        <button type="submit" class="btn-login" name="login">Login</button>
        </form>
        <!-- close proses login -->

    </div>
    <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
        Sign Up
        <span class="underline"></span>
        </button>
        <form class="form form-signup" action="prosesregistrasi.php" method="POST">
        <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" class="form-control" name="email" 
                placeholder="masukkan email" required>
            </div>
            <div class="input-block">
            <label for="nama">Nama Lengkap</label>
            <input id="nama" type="text" class="form-control" name="nama_lengkap" 
                placeholder="Nama Lengkap" required>
            </div>
            <div class="input-block">
            <label for="username">Username</label>
            <input id="username" type="text" class="form-control" name="username" 
                placeholder="Username" required>
            <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-email" type="password" class="form-control" name="password" 
                placeholder="masukkan password" required>
            </div>
            <div class="input-block">
            <label for="signup-password-confirm">Confirm Password</label>
            <input id="signup-password-confirm" type="password" class="form-control" name="password" 
                placeholder="ulangi password"required>
            </div>
            <div class="input-block">
            <label for="signup-level">Level</label>
                <select name="level" id="signup-level">
                    <option value="Penjual">Penjual</option>
                    <option value="Pembeli">Pembeli</option>
                </select>
            </div>
            
        </fieldset>
        <button type="submit" class="btn-signup" name="regis">Continue</button>
        </form>
    </div>
    </div>
</section>

    <script src="../assets/js/signup.js"></script>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/bootstrap.bundle.js.map"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script> 
    <script src="../assets/js/bootstrap.bundle.min.js.map"></script>
    <!-- js for bootstrap -->
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/bootstrap.js.map"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.min.js.map"></script>
    <script src="signup.js"></script>
</body>
</html>