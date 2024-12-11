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

    --cor-fundo-modal: rgba(0, 0, 0, 0.7); 
    --cor-modal-fundo: #fff; 
    --cor-modal-texto: #000; 
    --cor-botao-fundo: var(--cor-terciaria);
    --cor-botao-hover: var(--cor-hover-botao);
}

@media (prefers-color-scheme: dark) {
    :root {
        --cor-fundo-modal: rgba(0, 0, 0, 0.9); 
        --cor-modal-fundo: #333; 
        --cor-modal-texto: #fff; 
        --cor-botao-fundo: #fd2222; 
        --cor-botao-hover: #ff6666;
    }
}

.cabecalho {
    padding: 2% 0 0 10%;
}

.cabecalho__menu {
    display: flex;
    flex-wrap: wrap;
    gap: 60px;
    align-items: center;
    justify-content: flex-start;
    position: relative;
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

.cabecalho__menu__button {
    color: white;
    background-color: var(--cor-terciaria);
    padding: 5px 15px;
    border: none;
    border-radius: 5px;
    font-family: var(--fonte-secundaria);
    font-weight: 600;
    font-size: 1.2rem;
    position: absolute;
    right: 50px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.cabecalho__menu__button:hover {
    background-color: var(--cor-hover-botao);
}

/* Estilo para o Modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: var(--cor-fundo-modal);
    padding-top: 100px;
    animation: fadeIn 0.5s ease-in-out;
}

.modal-content {
    background-color: var(--cor-modal-fundo);
    margin: auto;
    padding: 20px;
    border-radius: 8px;
    width: 50%;
    max-width: 500px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.modal-header, .modal-body {
    padding: 10px 0;
}

.modal-header {
    font-size: 1.8rem;
    font-family: var(--fonte-secundaria);
    text-align: center;
    color: var(--cor-modal-texto);
}

.modal-body input, .modal-body textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.modal-footer {
    display: flex;
    justify-content: space-between;
}

.modal-footer button {
    background-color: var(--cor-botao-fundo);
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    font-family: var(--fonte-secundaria);
    cursor: pointer;
    transition: background-color 0.3s;
}

.modal-footer button:hover {
    background-color: var(--cor-botao-hover);
}

@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(-50px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
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
    .cabecalho__menu__button {
        font-size: 1rem;
        right: 20px;
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
    .cabecalho__menu__button {
        font-size: 1rem;
        margin-top: 15px;
        position: relative;
        right: auto;
        transform: none;
    }
}

  </style>
</head>
<body>
<header class="cabecalho">
  <nav class="cabecalho__menu">
      <a class="cabecalho__menu__link" href="/cursos">Artigos</a>
      <a class="cabecalho__menu__link" href="/config">Configurações</a>
      <a class="cabecalho__menu__link" href="#">Sair</a>
      <button class="cabecalho__menu__button" id="openModal">Subir Artigo</button>
  </nav>
</header>


<div id="myModal" class="modal">
    <div class="modal-content">
        <div>
            <h2 class="display-6">Subir Artigo</h2>
            <p>A submissão de um artigo é uma oportunidade para compartilhar conhecimento com outros estudantes, ao mesmo tempo em que você se beneficia dessa ação. A cada 20 artigos submetidos, você receberá uma semana de acesso premium. Além disso, se seus artigos alcançarem um número significativo de visualizações, você poderá monetizá-los, recebendo uma parte da receita gerada.</p>        </div>
        
        <div class="modal-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="title">Título do Artigo:</label>
                <input type="text" id="title" name="title" placeholder="Digite o título do artigo" required>

                <label for="file">Escolha o arquivo (.md):</label>
                <input type="file" id="file" name="file" accept=".md" required>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" id="closeModal">Fechar</button>
            <button type="submit">Subir Artigo</button>
        </div>
    </div>
</div>

<script>
  var modal = document.getElementById("myModal");
  
  var btn = document.getElementById("openModal");
  
  var closeBtn = document.getElementById("closeModal");

  btn.onclick = function() {
    modal.style.display = "block";
  }

  closeBtn.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>

</body>
</html>
