<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container p-3">
        <center>
            <h3 class="card-title">Send Application</h3>
            @if (Session::has('success'))
                <div class="alert alert-success p-2">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger p-2">{{ Session::get('error') }}</div>
            @endif
        </center>
    <form action="{{ route('send') }}" method="post">
        @csrf 
        <div class="row">
            <div class="col-md-4">
                <div class="form-group my-2">
                    <label for="">Name</label>
                    <input type="text" placeholder="Enter Full Name" name="name" class="form-control">
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group my-2">
                    <label for="">Mail ID</label>
                    <input type="email" placeholder="Enter Email ID" name="email" class="form-control">
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group my-2">
                    <label for="">Age</label>
                    <input type="number", name="age" class="form-control">
                    <span class="text-danger">@error('age'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        <div class="form-group my-2">
            <label for="gender">Gender</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="M">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="F">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <!-- Add more radio buttons as needed -->
            </div>
        </div>
        <div class="form-group my-2">
            <label for="education">Education</label>
            <select class="form-control" id="education" name="education">
                <option value="">Highest Level of Education</option>
                <option value="10th">10th</option>
                <option value="12th">12th</option>
                <option value="Bachelor's">Bachelor's</option>
                <option value="Masters">Masters</option>
                <option value="Diploma">Diploma</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="col-md-4">
            <div class="form-group my-2">
                <label for="">Mobile</label>
                <input type="tel", name="mobile" class="form-control">
                <span class="text-danger">@error('mobile'){{ $message }}@enderror</span>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary btn-sm mt-3 ">Send</button>
    </form>
</div>
</body>
</html>