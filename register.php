<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Sower</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .sower-header {
            background: #7799B7;
            background: linear-gradient(90deg,rgba(119, 153, 183, 1) 0%, rgba(197, 214, 218, 1) 47%, rgba(197, 214, 218, 1) 100%);
        }

        .sower-header .title-column h1 {
            margin: 0 0 0 15px; 
            font-size: 2rem;
            color:rgb(0, 0, 0) ; 
        }
        .sower-header .nav-column {
            font-size: 1.1rem;
            text-align: right; 
        }
        .register-box { /* Changed from login-box */
            background: #fff;
            border: 1px solid #ccc;
            margin: 40px auto;
            max-width: 800px;
            padding: 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .register-title { /* Changed from login-title */
            background: #f5f6fa;
            padding: 15px 30px;
            border-bottom: 1px solid #e0e0e0;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .register-content { /* Changed from login-content */
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
    <div class="register-box"> <!-- Changed from login-box -->
        <div class="register-title">Create your Sower Account</div> <!-- Changed from login-title -->
        <div class="register-content"> <!-- Changed from login-content -->
            <div class="row">
                <div class="col-md-4">
                    <form class="row g-3 mt-4">
                        <div class="col-12">
                            <label for="fullName" class="form-label">Full Name:</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Create a password">
                        </div>
                        <div class="col-12">
                            <label for="confirmPassword" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password">
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary me-2">Register</button>
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='login.php'">Login</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <h4 class="mb-3">[ Join Sower Today! ]</h4>
                    <p>Sower is an online directory that connects people through decentralized social networks.</p>
                    <div class="school-list mb-3">
                        <strong>We have planted seeds for popular consumption at:</strong><br>
                        <span class="text-secondary">CDMX-México &middot; Ecatepec-México </span>
                    </div>
                    <p>Sower empowers you by making your profile fully exportable. This means you own your data and can take it with you, offering true control and portability for your online identity.</p>
                    <ul>
                        <li>Own and control your personal data.</li>
                        <li>Easily export your profile and move it as you wish.</li>
                        <li>Connect with others in a decentralized manner.</li>
                        <li>Build your unique online presence on your terms.</li>
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