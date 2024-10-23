<form id="uploadForm" enctype="multipart/form-data">
    <input type="file" name="profile_picture" id="profile_picture" required>
    <button type="submit">Upload</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#uploadForm').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: '/upload-profile-picture', // Define this route later
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                alert('Profile picture uploaded successfully.');
            },
            error: function(xhr) {
                alert('Error uploading profile picture.');
            }
        });
    });
</script>
