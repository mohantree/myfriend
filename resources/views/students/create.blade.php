<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white p-3">
                        <h3 class="mb-0">Student Registration</h3>
                    </div>

                    <div class="card-body p-4">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Student Name</label>
                                <input type="text" name="name"
                                    value="{{ old('name') }}"
                                    class="form-control"
                                    placeholder="Enter student name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email"
                                    value="{{ old('email') }}"
                                    class="form-control"
                                    placeholder="Enter email address">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Course</label>
                                <input type="text" name="course"
                                    value="{{ old('course') }}"
                                    class="form-control"
                                    placeholder="Enter course">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone"
                                    value="{{ old('phone') }}"
                                    class="form-control"
                                    placeholder="Enter phone number">
                            </div>

                            <button type="submit" class="btn btn-success w-100">
                                Save Student
                            </button>

                            <a href="{{ route('students.index') }}"
                                class="btn btn-outline-secondary w-100 mt-2">
                                View Students
                            </a>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>

</body>
</html>