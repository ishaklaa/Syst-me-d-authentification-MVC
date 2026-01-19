<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureCore - Accueil</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-container {
            background: white;
            padding: 40px 60px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }

        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .subtitle {
            color: #666;
            font-size: 1.1em;
            margin-bottom: 40px;
            line-height: 1.5;
        }

        .button-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            flex: 1;
            min-width: 140px;
            padding: 16px 30px;
            border: none;
            border-radius: 12px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-login {
            background-color: #04AA6D;
            color: white;
        }

        .btn-login:hover {
            background-color: #03a062;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(4, 170, 109, 0.3);
        }

        .btn-register {
            background-color: transparent;
            color: #04AA6D;
            border: 2px solid #04AA6D;
        }

        .btn-register:hover {
            background-color: #04AA6D;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(4, 170, 109, 0.3);
        }

        @media (max-width: 480px) {
            .header-container {
                padding: 30px 40px;
                margin: 20px;
            }
            
            h1 {
                font-size: 2em;
            }
            
            .button-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="header-container">
        <h1>Bienvenue sur SecureCore</h1>
        <p class="subtitle">Plateforme sécurisée pour candidats et entreprises</p>
        <div class="button-group">
            <a href="login" class="btn btn-login">Se connecter</a>
            <a href="register" class="btn btn-register">S'inscrire</a>
        </div>
    </div>
</body>
</html>
