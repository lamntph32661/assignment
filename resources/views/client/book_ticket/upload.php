<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Multiple Files</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple>
        <input type="submit" value="Upload">
    </form>
    <?php
// Kiểm tra nếu form đã được submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kiểm tra nếu đã có tệp được tải lên
    if (isset($_FILES['files'])) {
        $errors = [];
        $path = 'uploads/'; // Thư mục lưu trữ tệp tải lên
        $extensions = ['jpg', 'jpeg', 'png', 'gif']; // Các loại tệp được cho phép

        // Lấy thông tin các tệp đã tải lên
        $all_files = $_FILES['files'];

        $file_count = count($all_files['name']);
        for ($i = 0; $i < $file_count; $i++) {
            $file_name = $all_files['name'][$i];
            $file_tmp = $all_files['tmp_name'][$i];
            $file_type = $all_files['type'][$i];
            $file_size = $all_files['size'][$i];
            $file_ext = strtolower(end(explode('.', $file_name)));

            // Kiểm tra nếu phần mở rộng của tệp có được cho phép không
            if (!in_array($file_ext, $extensions)) {
                $errors[] = 'Extension not allowed: ' . $file_name;
            }

            // Kiểm tra nếu kích thước tệp có vượt quá giới hạn không (giới hạn là 2MB ở đây)
            if ($file_size > 2097152) {
                $errors[] = 'File size exceeds limit: ' . $file_name;
            }

            // Di chuyển tệp đến thư mục lưu trữ nếu không có lỗi
            if (empty($errors)) {
                move_uploaded_file($file_tmp, $path . $file_name);
            }
        }

        // Hiển thị thông báo lỗi nếu có
        if ($errors) {
            print_r($errors);
        }
    }
}
?>

</body>
</html>
