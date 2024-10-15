
<!DOCTYPE html>
<html>
<head>
    <title>Add Author</title>
    <style>
       
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

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head> 
<body>
    <h1>Add Author</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <label for="author_name">Author Name:</label>
        <input type="text" name="author_name" id="author_name" required>

        <label for=" author_email">Author Email:</label>
        <input type="text" name=" author_email" id=" author_email" required>

        <button type="submit">Add Author</button>
    </form>
</body>
</html>
