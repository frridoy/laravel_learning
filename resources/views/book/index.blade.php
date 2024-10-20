
<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #007BFF;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Book List</h1>
    <table border="1">
        <thead>
            @if(count($books) > 0)
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Student Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->date }}</td>
                    <td>{{ $book->student->stu_name ?? 'N/A' }}</td>                
                </tr>
            @endforeach
       @else
       <h3> Not Found</h3>
       @endif
        </tbody>
    </table>
</body>
</html>
