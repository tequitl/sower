<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Sower</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .sower-header {
            background: #7799B7;
            background: linear-gradient(90deg,rgba(119, 153, 183, 1) 0%, rgba(197, 214, 218, 1) 47%, rgba(197, 214, 218, 1) 100%);
        }

        .sower-header .title-column h1 {
            margin: 0 0 0 15px; /* Added left margin for spacing from logo */
            font-size: 2rem;
            color:rgb(0, 0, 0) ; /* Or your preferred color */
        }
        .sower-header .nav-column {
            font-size: 1.1rem;
            text-align: right; /* Align text to the right for the nav links */
        }
        .login-box {
            background: #fff;
            border: 1px solid #ccc;
            margin: 40px auto;
            max-width: 800px;
            padding: 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .login-title {
            background: #f5f6fa;
            padding: 15px 30px;
            border-bottom: 1px solid #e0e0e0;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .login-content {
            padding: 30px;
        }
        .form-label {
            font-weight: 500;
        }
        .btn-primary, .btn-secondary {
            min-width: 100px;
        }
        .footer {
            text-align: center;
            font-size: 0.9rem;
            color: #888;
            margin-top: 40px;
        }
        .school-list {
            font-size: 0.95rem;
            margin-bottom: 20px;
        }
        .school-list strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="sower-header row">
        <div class="col-md-4 logo-column">
        </div>
        <div class="col-md-8 title-column">
            <h1>[ sower ]</h1>
            <div style="font-size:1.1rem;">login &nbsp; register &nbsp; about</div>
        </div>
    </div>
    <div class="login-box">
        <div class="login-title">Welcome to Sower!</div>
        <div class="login-content">
            <div class="row">
                <div class="col-md-4">
                    <form class="row g-3 mt-4">
                        <div class="col-12">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary me-2">Login</button>
                            <button type="button" class="btn btn-secondary">Register</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <h4 class="mb-3">[ Welcome to Sower ]</h4>
                    <p>Sower is an online directory that connects people through decentralized social networks.</p>
                    <div class="school-list mb-3">
                        <strong>We have planted seeds for popular consumption at:</strong><br>
                        <span class="text-secondary">CDMX-México &middot; Ecatepec-México </span>
                    </div>
                    <p>Your decide if your profile is public as normal Worpress page or  is limited to your owGeormmunity or network.</p>
                    <ul>
                        <li>Search for people in your network</li>
                        <li>Find out who is in your groups</li>
                        <li>Look up your friends' friends</li>
                        <li>See a visualization of your social network</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <a href="#">about</a> &middot; <a href="#">contact</a> &middot; <a href="#">jobs</a> &middot; <a href="#">faq</a> &middot; <a href="#">advertise</a> &middot; <a href="#">terms</a> &middot; <a href="#">privacy</a><br>
        <span class="text-muted">a Sower production<br>Sower &copy; 2024</span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>