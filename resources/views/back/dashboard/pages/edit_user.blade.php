<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="text-center text-uppercase text-light mb-4 py-3 bg-warning">Edit User</h2>

                <!-- Form for editing user details -->
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Update</button>
                </form>

                <a href="{{ route('user.destroy', $user->id) }}"  style="margin-top: 20px;">
                   
                    <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Are you sure you want to delete this user?')">
                        Delete User
                    </button>
                </a>

            </div>
        </div>
    </div>

</body>

</html>