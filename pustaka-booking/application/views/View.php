<!DOCTYPE html>
<html>

<head>
    <title>Input Data Siswa</title>
</head>

<body>
    <h1>Input Data Siswa</h1>
    <form action="submit.php" method="post">
        <label for="nama">Nama Siswa:</label>
        <input type="text" name="nama" id="nama"><br>

        <label for="nis">NIS:</label>
        <input type="text" name="nis" id="nis"><br>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas"><br>

        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir"><br>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir"><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat"><br>

        <label>Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>

        <label for="agama">Agama:</label>
        <select name="agama" id="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Protestan">Protestan</option>
            <option value="Khonghucu">Khonghucu</option>
        </select><br>

        <input type="submit" value="Submit">
    </form>

    <a href="view.php">Kembali ke Form Input</a>

    <!-- Tampilkan hasil input di bawah ini -->
    <h2>Hasil Input Data Siswa</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
        </tr>
        <?php
        $controller = new Controller(new Model());
        $students = $controller->getStudents();
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student['nama'] . "</td>";
            echo "<td>" . $student['nis'] . "</td>";
            echo "<td>" . $student['kelas'] . "</td>";
            echo "<td>" . $student['tgl_lahir'] . "</td>";
            echo "<td>" . $student['tempat_lahir'] . "</td>";
            echo "<td>" . $student['alamat'] . "</td>";
            echo "<td>" . $student['jenis_kelamin'] . "</td>";
            echo "<td>" . $student['agama'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>