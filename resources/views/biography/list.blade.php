<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            border-radius: 10px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem;
            color: #343a40;
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .no-biography {
            color: #dc3545;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Biography</h1>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Biography Content </th>
                    <th> Author Name </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($biographies as $biography)
                <tr>
                    <td>{{ $biography->id }}</td>
                    <td>{{ $biography->content }}</td>
                    <td>{{ $biography->author->author_name }}</td>
                    <td>
                        <a href="{{ route('biographies.edit', $biography->id) }}" class="btn btn-primary">Edit</a>

                        <form action="{{ route('biographies.destroy', $biography->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this biography?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
