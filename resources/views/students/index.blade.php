<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold">Student Management</h2>
                <p class="text-muted mb-0">Manage your student records</p>
            </div>

            <a href="{{ route('students.create') }}" class="btn btn-success">
                + Add Student
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white py-3">
                <h5 class="mb-0">Student List</h5>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td class="fw-semibold">{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                                        <span class="badge bg-info text-dark">
                                            {{ $student->course }}
                                        </span>
                                    </td>
                                    <td>{{ $student->phone }}</td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <a href="{{ route('students.edit', $student->id) }}"
                                               class="btn btn-primary btn-sm">
                                                Edit
                                            </a>

                                            <form action="{{ route('students.destroy', $student->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Are you sure you want to delete this student?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Delete
                                                </button>

                                            </form>

                                        </div>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-muted">
                                        No students found. Add your first student!
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>
        </div>

        <p class="text-center text-muted mt-4">
            Student Management System | Laravel 12 & MySQL
        </p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>