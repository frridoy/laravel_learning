<!DOCTYPE html>
<html>
<head>
    <title>Add Biography</title>
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

        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            appearance: none;
        }

        option[disabled] {
            color: #999;
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

        .success-message {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Add Student</h1>
    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif
    <form action="{{ route('biographies.store') }}" method="POST">
        @csrf
        <label for="content">Biography Content:</label>
        <input type="text" name="content" id="content" required>


        <label for="city_id">Author:</label>
        <select name="author_id" id="author_id">
            <option value="" disabled selected>Select Author </option>
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->id }}. {{ $author->author_name }}</option>
            @endforeach
        </select>

        <button type="submit">Add Biography</button>
    </form>
</body>
</html>
