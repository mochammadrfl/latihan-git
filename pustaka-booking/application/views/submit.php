<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nama' => $_POST['nama'],
        'nis' => $_POST['nis'],
        'kelas' => $_POST['kelas'],
        'tgl_lahir' => $_POST['tgl_lahir'],
        'tempat_lahir' => $_POST['tempat_lahir'],
        'alamat' => $_POST['alamat'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'agama' => $_POST['agama']
    ];

    $controller = new Controller(new Model());
    $controller->addStudent($data);
}

header("Location: view.php");
