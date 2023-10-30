<?php
class Model
{
    private $students = [];

    public function addStudent($data)
    {
        // Proses untuk menyimpan data siswa ke dalam database atau array, sesuaikan dengan kebutuhan.
        $this->students[] = $data;
    }

    public function getStudents()
    {
        return $this->students;
    }
}
