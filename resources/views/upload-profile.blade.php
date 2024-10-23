<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Picture</title>
</head>
<body>
    <h1>Upload Your Profile Picture</h1>
    <form action="{{ route('upload-profile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="profile_picture" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
