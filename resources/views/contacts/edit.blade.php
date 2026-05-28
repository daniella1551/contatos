<!DOCTYPE html>
<html>
<head>

    <title>Editar Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h1>Editar Contato</h1>

    <form action="/contacts/update/{{ $contact->id }}" method="POST">

        @csrf

        <input
            type="text"
            name="nome"
            value="{{ $contact->nome }}"
            class="form-control mb-3"
        >

        <input
            type="text"
            name="telefone"
            value="{{ $contact->telefone }}"
            class="form-control mb-3"
        >

        <input
            type="email"
            name="email"
            value="{{ $contact->email }}"
            class="form-control mb-3"
        >

        <button class="btn btn-primary">
            Atualizar
        </button>

    </form>

</div>

</body>
</html>