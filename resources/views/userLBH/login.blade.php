<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <style>
        .half-bg {
            height: 100vh;
        }

        .left-half {
            background-color: rgba(232, 123, 47, 0.4);
        }

        .right-half {
            background-color: #ffffff;
            /* Warna merah */
        }

        #background {
            position: absolute;
            z-index: 0;
        }

        #content {
            position: absolute;
            width: 99vw;
            z-index: 1;
        }

        #rowLogo {
            height: 10vh;
        }

        #logo {
            height: 50px;

            margin-left: -100px;
            margin-top: 30px;
        }

        .left-content {
            flex-direction: column;
            padding-right: 15vw;
        }

        .right-content {
            margin-left: -100px;
        }

        #kata-login {
            font-size: 70px;
        }

        #kata-desc {
            font-size: 20px;
            width: 25vw;
        }

        .boxLogin {
            background-color: rgba(232, 123, 47, 1);
            height: 80vh;
            /* width: 30vw; */
            border-radius: 30px;
            padding: 50px;
            flex-direction: column;
            display: flex;
            justify-content: space-around;
        }

        .custom-input {
            background-color: orange;
            /* Warna textfield */
            color: black;
            /* Warna teks */
            width: 200px;
            /* Lebar textfield diperkecil */
        }

        .custom-input::placeholder {
            color: blue;
            /* Warna placeholder */
        }

        .input-group-text {
            background-color: orange;
            /* Warna textfield bagian ikon */
            color: black;
            /* Warna ikon */
        }

        .form-row {
            width: 25vw;
        }

        .form-control {
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        #basic-addon1-profile {
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        #basic-addon1-lock {
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        #basic-addon1-eye {
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .input-group-text {
            height: 100%;
            border-radius: 0px;
            background-color: #ffd998;
            /* color: #ffffffc; */
            border-right: 0px;
            border: 0px;
        }

        .input-group .input-group-prepend .input-group-text {
            background-color: #ffd998;
            /* color: #ffffffcf; */
            border-right: 0px;
            border: 0px;
        }

        .input-group .form-control {
            background-color: #ffd998;
            /* color: #FFF; */
            border-left: 0px;
            border: 0px;
        }

        .input-group .form-control:focus {
            border: 0px;
        }

        #btn-login {
            width: 8vw;
            border-radius: 20px;
            /* height: 4vh; */
            background-color: white;
            color: rgba(232, 123, 47, 1);
            font-weight: bold;
        }

        .btn-login {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .belum-akun {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div id="background" class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-8 half-bg left-half d-flex align-items-center justify-content-center">
            </div>
            <div class="col-md-4 half-bg right-half d-flex align-items-center justify-content-center">
            </div>
        </div>
    </div>

    <div id="content">
        <div id="rowLogo" class="row">
            <div class="col-1">
            </div>
            <div id="logo" class="col-2">
                <img src="\assets\images\Logo Cari Adil 1.png" alt="" style="height: 50px; margin-left: 20px">
            </div>
            <div class="col-9"></div>
        </div>
        <div id="rowContent" class="row">
            <div class="col-2"></div>
            <div class="col-4 half-content left-content d-flex align-items-start justify-content-center">
                <div class="container-fluid d-grid gap-2">
                    <div class="row">
                        <div class="col-12">
                            <h1 id="kata-login">Login ke CariAdil</h1>
                        </div>
                        <div class="col-12">
                            <p id="kata-desc">Cari Adil siap membantu Anda memperjuangkan hak-hak dalam hukum. Jika Anda
                                mengalami masalah dengan hukum? Kami solusinya!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 half-content right-content d-flex align-items-start justify-content-center text-light">
                <div class="boxLogin">
                    <div>
                        <div class="mb-3">
                            <h2>Masuk sebagai <strong>LBH</strong></h2>
                        </div>
                        &nbsp;
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- Email --}}
                            <div class="form-row" id="row-email">
                                <label class="form-label" for="form3Example3">Email</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1-profile"><i
                                                class="fa fa-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Enter Email"
                                        aria-label="Email" aria-describedby="basic-addon1" name="email" required
                                        autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            {{-- Password --}}
                            <div class="form-row">
                                <label class="form-label" for="form3Example3">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1-lock"><i
                                                class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" id="password" class="form-control" placeholder="Enter Password"
                                        aria-label="password" aria-describedby="basic-addon1" name="password" required>
                        
                                    <div class="input-group-prepend"  id="togglePassword">
                                        <span style="border-top-right-radius: 15px; border-bottom-right-radius: 15px"  class="input-group-text">
                                            <i class="fa fa-eye" ></i>
                                        </span>
                                    </div>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        
                            <script>
                                document.getElementById('togglePassword').addEventListener('click', function () {
                                    const passwordInput = document.getElementById('password');
                                    const eyeIcon = this;
                                
                                    if (passwordInput.type === 'password') {
                                        passwordInput.type = 'text';
                                        // eyeIcon.classList.remove('fa-eye');
                                        // eyeIcon.classList.add('fa-eye-slash');
                                    } else {
                                        passwordInput.type = 'password';
                                        // eyeIcon.classList.remove('fa-eye-slash');
                                        // eyeIcon.classList.add('fa-eye');
                                    }
                                });
                            </script>

                            <div class="btn-login mt-5">
                                <button type="submit" class="btn" id="btn-login">Login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>
