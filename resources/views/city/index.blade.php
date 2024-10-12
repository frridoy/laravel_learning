
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
        }
        h1 {
            color: #343a40; /* Dark color for the title */
        }
        h3 {
            color: #007bff; /* Primary color for the section heading */
        }
        table {
            margin-top: 20px; /* Spacing for the table */
        }
        .text-danger {
            color: #dc3545; /* Red color for "Not Found" message */
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h1 class="text-center">City List</h1>

    @if(count($cities) > 0)
        <h3 class="mt-4">Employee List</h3>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>         
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                    <tr>
                        <td>{{ $city->id }}</td>
                        <td>{{ $city->city_name }}</td>          
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h5 class="mt-4 text-danger text-center">Not Found!</h5>
    @endif
    <div class="mt-5">
     {{$cities->links()}}
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

