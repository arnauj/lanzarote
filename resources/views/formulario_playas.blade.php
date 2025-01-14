<form action="/procesar-datos" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nombre">
    <input type="text" name="edad" placeholder="Edad">

    <button type="submit">Enviar</button>
</form>