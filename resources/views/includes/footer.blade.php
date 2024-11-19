<footer class="container text-center bg-dark p-5 text-danger">
    <h2 id="connection-url">Conectado em:</h2>
</footer>

<script>
    const url_coneccao = window.location.href;
    document.getElementById('connection-url').innerText += " " + url_coneccao;
</script>
