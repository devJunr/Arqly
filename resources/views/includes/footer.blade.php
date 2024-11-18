<footer class="container text-center bg-dark p-5 text-danger">
    <h2 id="connection-url">Conectado em:</h2>
</footer>

<script>
    // Coleta a URL atual
    const url_coneccao = window.location.href;

    // Atualiza o conteúdo do elemento h2 com a URL
    document.getElementById('connection-url').innerText += " " + url_coneccao;
</script>
