if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $target_dir = 'images/';
    $target_file = $target_dir . basename($_FILES['image']['name']);
    
    // Проверяем, является ли файл изображением
    $image_info = getimagesize($_FILES['image']['tmp_name']);
    if ($image_info === false) {
        die('Ошибка: загруженный файл не является изображением.');
    }
    
    // Перемещаем загруженный файл в папку images
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        echo 'Файл успешно загружен.';
    } else {
        echo 'Произошла ошибка при загрузке файла.';
    }
}