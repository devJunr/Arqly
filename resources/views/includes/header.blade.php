<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <style>
@import url('https://fonts.googleapis.com/css2?family=Krona+One&family=Montserrat:wght@400;600&display=swap');

:root {
    --cor-primaria: #000000;
    --cor-secundaria: #F6F6F6;
    --cor-terciaria: #fd2222;
    --cor-hover-botao: #f0484875;
    --cor-hover-cabecario: #ff6666;
    --fonte-primaria: 'Krona One', sans-serif;
    --fonte-secundaria: 'Montserrat', sans-serif;
}

.cabecalho {
    padding: 2% 0 0 10%;
}

.cabecalho__menu {
    display: flex;
    flex-wrap: wrap;
    gap: 60px;
}

.cabecalho__menu__link {
    color: var(--cor-terciaria);
    text-decoration: none;
    font-family: var(--fonte-secundaria);
    font-weight: 600;
    font-size: 1.5rem;
    margin: 20px;
}

.cabecalho__menu__link:hover {
    color: var(--cor-hover-cabecario);
}

@media (max-width: 782px) {
    .cabecalho {
        padding: 2% 0 0 2%;
    }
    .cabecalho__menu {
        gap: 10px;
        justify-content: center; 
    }
    .cabecalho__menu__link {
        font-size: 1.2rem; 
        margin: 10px;
    }
}

@media (max-width: 480px) {
    .cabecalho__menu {
        flex-direction: column; 
        align-items: center;
    }
    .cabecalho__menu__link {
        font-size: 1rem;
        margin: 5px;
    }
}

  </style>
</head>
<body>
<header class="cabecalho">
  <nav class="cabecalho__menu">
      <a class="cabecalho__menu__link" href="/senhas">Senhas</a>
      <a class="cabecalho__menu__link" href="/config">Configurações</a>
      <a class="cabecalho__menu__link" href="#">Sair</a>
  </nav>
</header>
</body>
</html>