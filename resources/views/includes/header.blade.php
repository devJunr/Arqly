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
    flex-wrap: wrap; /* Permite que os itens do menu se movam para a próxima linha */
    gap: 60px;
}

.cabecalho__menu__link {
    color: var(--cor-terciaria);
    text-decoration: none;
    font-family: var(--fonte-secundaria);
    font-weight: 600;
    font-size: 1.5rem; /* Usando rem para melhor responsividade */
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
        justify-content: center; /* Centraliza os itens do menu em telas menores */
    }
    .cabecalho__menu__link {
        font-size: 1.2rem; /* Ajuste do tamanho da fonte */
        margin: 10px; /* Reduzindo a margem para melhor ajuste */
    }
}

@media (max-width: 480px) {
    .cabecalho__menu {
        flex-direction: column; /* Muda a direção do menu para coluna em telas muito pequenas */
        align-items: center; /* Centraliza os itens do menu */
    }
    .cabecalho__menu__link {
        font-size: 1rem; /* Ajuste do tamanho da fonte para telas muito pequenas */
        margin: 5px; /* Reduzindo a margem ainda mais */
    }
}

  </style>
</head>
<body>
<header class="cabecalho">
  <nav class="cabecalho__menu">
      <a class="cabecalho__menu__link" href="/">Home</a>
      <a class="cabecalho__menu__link" href="/senhas">Senhas</a>
      <a class="cabecalho__menu__link" href="/newPass">Adicionar</a>
      <a class="cabecalho__menu__link" href="/config">Configurações</a>
  </nav>
</header>
</body>
</html>