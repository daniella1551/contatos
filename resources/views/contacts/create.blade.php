<!DOCTYPE html>
<html>
<head>

    <title>Novo Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h1>Novo Contato</h1>

    <form action="/contacts/store" method="POST">

        @csrf

        <input
            type="text"
            name="nome"
            placeholder="Nome"
            class="form-control mb-3"
        >

        <input
            type="text"
            name="telefone"
            placeholder="Telefone"
            class="form-control mb-3"
        >

        <input
            type="email"
            name="email"
            placeholder="Email"
            class="form-control mb-3"
        >

        <button class="btn btn-success">
            Salvar
        </button>

    </form>

</div>

</body>
</html>