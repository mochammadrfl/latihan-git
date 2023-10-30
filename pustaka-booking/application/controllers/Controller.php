<?php
class Controller
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function addStudent($data)
    {
        $this->model->addStudent($data);
    }

    public function getStudents()
    {
        return $this->model->getStudents();
    }
}
