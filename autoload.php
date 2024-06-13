<?php

spl_autoload_register(function ($class) {
    // Chuyển đổi namespace thành đường dẫn file
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    
    // Nếu file tồn tại, include nó
    if (file_exists($file)) {
        require $file;
    }
});
?>
