<footer class="container-fluid text-center p-3 mt-2 text-danger footer">
    <h2 id="connection-url">Conectado em:</h2>
</footer>

<script>
    const url_coneccao = window.location.href;
    document.getElementById('connection-url').innerText += " " + url_coneccao;
</script>
