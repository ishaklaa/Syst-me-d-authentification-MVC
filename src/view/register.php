<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - SecureCore</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .container {
            padding: 16px;
            max-width: 500px;
            margin: 0 auto;
        }

        input[type=text],
        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=email]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        a {
            color: dodgerblue;
        }

        .signin {
            background-color: #f1f1f1;
            text-align: center;
            padding: 16px;
        }
    </style>
</head>

<body>
    <form action="AddUser" method="post">
        <div class="container">
            <h1>Inscription</h1>
            <p>Veuillez remplir ce formulaire pour créer un compte SecureCore.</p>
            <hr>
            <label for="nom"><b>Nom</b></label>
            <input type="text" placeholder="Entrez votre nom" name="nom" id="nom" required autocomplete="name">

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Entrez votre email" name="email" id="email" required autocomplete="email">

            <label><b>Rôle</b></label>
            <select name="role" id="role" required>
                <option value="">Choisissez un rôle</option>
                <option value="candidat">Candidat</option>
                <option value="company">company</option>
            </select>

            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrez un mot de passe" name="psw" id="psw" required autocomplete="new-password" minlength="8">

            <hr>

            <button type="submit" name="inscription" class="registerbtn">S'inscrire</button>
        </div>

        <div class="container signin">
            <p>Déjà un compte ? <a href="login.html">Se connecter</a>.</p>
        </div>
    </form>
</body>

</html>