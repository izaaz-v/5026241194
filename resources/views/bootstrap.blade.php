<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Tooltip - Interactive Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container-fluid {
            padding: 0;
            margin: 0;
            min-height: 100vh;
        }

        .left-panel {
            background-color: #02203e;
            padding: 20px;
            color: white;
            display: flex;
            align-items: center;
            min-height: 100vh;
        }

        .right-panel {
            background-color: #e9ecef;
            padding: 40px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .welcome {
            font-size: 45px;
            font-weight: bold;
        }

        .navigation-buttons {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.3);
        }

        .navigation-buttons a {
            display: block;
            margin-top: 10px;
            color: white;
            text-decoration: none;
            padding: 10px;
            background: rgba(255,255,255,0.1);
            border-radius: 5px;
            transition: all 0.3s;
        }

        .navigation-buttons a:hover {
            background: rgba(255,255,255,0.2);
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid row">
        <div class="col-md-6 left-panel">
            <div>
                <h1 class="welcome">Welcome to Our Website</h1>
                <p>Log in to your account to access exclusive features.</p>

                <div class="navigation-buttons">
                    <a href="/blog">← Back to Blog</a>
                    <a href="/menu">📋 View Menu</a>
                    <a href="/blog/kontak">📧 Contact Us</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 right-panel">
            <div class="login-box border border-dark rounded p-4 w-100">
                <h2 class="mb-4">Login Demo</h2>
                <p class="text-muted mb-4">Hover over fields to see tooltips</p>
                <div class="row mb-3">
                    <div class="col">
                        <label>Email</label>
                        <input type="email" class="w-100 p-2 border rounded" placeholder="Enter email"
                            data-toggle="tooltip" data-placement="bottom" title="Masukkan email yang valid">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label>Password</label>
                        <input type="password" class="w-100 p-2 border rounded" data-toggle="tooltip"
                            data-placement="bottom" title="Minimal 8 karakter" placeholder="Enter password">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <button class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom"
                            title="Tekan untuk login">
                            Login
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>
