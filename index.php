<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAMP Stack Successfully Installed</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #1d2671, #c33764);
            color: #ffffff;
        }
        .container {
            max-width: 900px;
            margin: 80px auto;
            background: rgba(0, 0, 0, 0.35);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        }
        h1 {
            text-align: center;
            font-size: 40px;
            margin-bottom: 10px;
        }
        h2 {
            text-align: center;
            font-weight: normal;
            color: #ffdd57;
            margin-bottom: 30px;
        }
        .stack {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .card {
            background: rgba(255, 255, 255, 0.12);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s, background 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.2);
        }
        .card h3 {
            margin-bottom: 10px;
            color: #00ffd5;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            color: #dddddd;
        }
        .success {
            text-align: center;
            margin-top: 25px;
            font-size: 18px;
            color: #7CFC00;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>🚀 lemp Installed Successfully</h1>
    <h2>Amazon Linux | Ansible Automation</h2>

    <p>
        Congratulations! Your <strong>LAMP stack</strong> has been successfully installed and configured
        using <strong>Ansible</strong> on an <strong>Amazon Linux</strong> server.
    </p>

    <div class="stack">
        <div class="card">
            <h3>Linux</h3>
            <p>Amazon Linux is running and serving as the base operating system.</p>
        </div>
        <div class="card">
            <h3>Apache</h3>
            <p>The Apache (httpd) web server is installed and running.</p>
        </div>
        <div class="card">
            <h3>MariaDB</h3>
            <p>MariaDB database server is installed and active.</p>
        </div>
        <div class="card">
            <h3>PHP</h3>
            <p>PHP and PHP-FPM are installed and working correctly.</p>
        </div>
    </div>

    <div class="success">
        ✅ Automation Completed Successfully Using Ansible
    </div>

    <div class="footer">
        <p>Deployed via Ansible | LAMP Stack | Amazon Linux</p>
    </div>
</div>

</body>
</html>
