<!DOCTYPE html>
<html>
<head>

    <title>Agenda de Contatos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h1 class="mb-4">Agenda de Contatos</h1>

    <a href="/contacts/create" class="btn btn-primary mb-3">
        Novo Contato
    </a>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        @foreach($contacts as $contact)

        <tr>

            <td>{{ $contact->id }}</td>

            <td>{{ $contact->nome }}</td>

            <td>{{ $contact->telefone }}</td>

            <td>{{ $contact->email }}</td>

            <td>

                <a href="/contacts/edit/{{ $contact->id }}" class="btn btn-warning">
                    Editar
                </a>

                <a href="/contacts/delete/{{ $contact->id }}" class="btn btn-danger">
                    Excluir
                </a>

            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>