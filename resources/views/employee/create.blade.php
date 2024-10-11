<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            border: 1px solid #dee2e6;
        }
        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background: linear-gradient(to right, #007bff, #0056b3);
        }
        .form-label {
            font-weight: bold;
            color: #343a40;
        }
        .btn-custom {
            background-color: #28a745; 
            color: white;
            border-radius: 5px;
        }
        .btn-custom:hover {
            background-color: #218838; 
            color: white;
        }
        .form-control, .form-select {
            border-radius: 5px;
            border: 1px solid #ced4da;
        }
        .form-control:focus, .form-select:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .error {
            color: red;
            font-size: 0.875em;
            margin-top: 0.25rem; 
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card shadow">
        <div class="card-header text-white">
            <h3 class="card-title">Add New Employee</h3>
        </div>
        <div class="card-body">
            <form id="employeeForm" action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Employee Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter employee name">
                    <label id="name-error" class="error" for="name"></label>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter employee email">
                    <label id="email-error" class="error" for="email"></label>
                </div>
                <div class="form-group mb-3">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="Enter department">
                    <label id="department-error" class="error" for="department"></label>
                </div>
                <div class="form-group mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
                    <label id="city-error" class="error" for="city"></label>
                </div>
                <div class="form-group mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter age">
                    <label id="age-error" class="error" for="age"></label>
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Employee Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <label id="image-error" class="error" for="image"></label>
                </div>
                <div class="form-group mb-3">
                    <label for="sex" class="form-label">Sex</label>
                    <select class="form-select" id="sex" name="sex">
                        <option value="" selected disabled>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <label id="sex-error" class="error" for="sex"></label>
                </div>
             
                <button type="submit" class="btn btn-custom">Submit</button>
                {{-- Uncomment the button below to allow cancelling --}}
                {{-- <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a> --}}
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>





</body>
</html>
