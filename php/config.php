<?php
// PHP configuration for uploads directory and file validation

define('UPLOAD_DIR', 'uploads/');

define('ALLOWED_FILE_TYPES', ['image/jpeg', 'image/png', 'application/pdf']);

define('MAX_FILE_SIZE', 2097152); // 2 MB in bytes

function validateUpload($file) {
    if ($file['size'] > MAX_FILE_SIZE) {
        return "File size exceeds the maximum limit";
    }
    if (!in_array($file['type'], ALLOWED_FILE_TYPES)) {
        return "File type is not allowed";
    }
    return true;
}