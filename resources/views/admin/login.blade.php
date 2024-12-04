<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LockPass - Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/icons/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">
    *,
    *:before,
    *:after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }


    :root {
        --background-color: #080710;
        --form-bg-color: rgba(255, 255, 255, 0.13);
        --text-color: #ffffff;
        --input-bg-color: rgba(255, 255, 255, 0.07);
        --placeholder-color: #e5e5e5;
        --button-bg-color: #ffffff;
        --button-text-color: #080710;
        --box-shadow-color: rgba(8, 7, 16, 0.6);
        --border-color: rgba(255, 255, 255, 0.1);
    }


    @media (prefers-color-scheme: light) {
        :root {
            --background-color: #ffffff;
            --form-bg-color: rgba(0, 0, 0, 0.13);
            --text-color: #080710;
            --input-bg-color: rgba(0, 0, 0, 0.07);
            --placeholder-color: #606060;
            --button-bg-color: #fd2222;
            --button-text-color: #ffffff;
            --box-shadow-color: rgba(0, 0, 0, 0.2);
            --border-color: rgba(0, 0, 0, 0.1);
        }
    }

    body {
        background-color: var(--background-color);
    }

    .background {
        width: 430px;
        height: 520px;
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
    }

    form {
        height: 520px;
        width: 400px;
        background-color: var(--form-bg-color);
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid var(--border-color);
        box-shadow: 0 0 40px var(--box-shadow-color);
        padding: 50px 35px;
    }

    form * {
        font-family: 'Poppins', sans-serif;
        color: var(--text-color);
        letter-spacing: 0.5px;
        outline: none;
        border: none;
    }

    form h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
    }

    label {
        display: block;
        margin-top: 30px;
        font-size: 16px;
        font-weight: 500;
    }

    input {
        display: block;
        height: 50px;
        width: 100%;
        background-color: var(--input-bg-color);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 300;
    }

    ::placeholder {
        color: var(--placeholder-color);
    }

    button {
        margin-top: 50px;
        width: 100%;
        background-color: var(--button-bg-color);
        color: var(--button-text-color);
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

    
</head>
<body>
    <form>
        <h3> LockPass - Login</h3>
        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username">
        <label for="password">Senha</label>
        <input type="password" placeholder="Senha" id="senha">

        <button>Entrar</button>
    </form>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>