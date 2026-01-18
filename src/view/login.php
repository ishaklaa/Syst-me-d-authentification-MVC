<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - SecureCore</title>
    <style>
        form { border: 3px solid #f1f1f1; max-width: 400px; margin: 0 auto; padding: 20px; }
        input[type=email], input[type=password] { 
            width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; 
            border: 1px solid #ccc; box-sizing: border-box; 
        }
        button { background-color: #04AA6D; color: white; padding: 14px 20px; 
                 margin: 8px 0; border: none; cursor: pointer; width: 100%; }
        button:hover { opacity: 0.8; }
        .cancelbtn { width: auto; padding: 10px 18px; background-color: #f44336; }
        .imgcontainer { text-align: center; margin: 24px 0 12px 0; }
        .container { padding: 16px; }
        span.psw { float: right; padding-top: 16px; }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <div class="imgcontainer">
            <span style="font-size: 80px;">🔒</span> <!-- Icône sécurisée -->
        </div>
        <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Entrez votre email" name="email" id="email" required autocomplete="username">
            
            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mot de passe" name="psw" id="psw" required autocomplete="current-password">
            
            <button type="submit">Se connecter</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
            </label>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn" onclick="window.location.href='index.html'">Annuler</button>
            <span class="psw"><a href="#">Mot de passe oublié ?</a></span>
        </div>
    </form>
</body>
</html>