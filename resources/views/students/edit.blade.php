<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>

    <h2>Edit Student Details</h2>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name"
               value="{{ old('name', $student->name) }}">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email"
               value="{{ old('email', $student->email) }}">
        <br><br>

        <label>Course:</label>
        <input type="text" name="course"
               value="{{ old('course', $student->course) }}">
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone"
               value="{{ old('phone', $student->phone) }}">
        <br><br>

        <button type="submit">Update Student</button>
    </form>

</body>
</html>