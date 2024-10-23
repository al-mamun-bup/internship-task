<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Picture</title>
</head>
<body>
    <h1>Upload Profile Picture</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('upload-profile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="profile_picture" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>

