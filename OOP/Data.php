<?php
include_once "Student.php";

class Data
{
    private $path;

    public function __construct()
    {
        $this->path = "data.json";
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->path, $dataJson);
    }

    public function loadData()
    {
        $dataJson = file_get_contents($this->path);
        return json_decode($dataJson);
    }

    public function addNewStudent($student)
    {
        $data = [
            "name" => $student->getName(),
            "age" => $student->getAge(),
            "address" => $student->getAddress()
        ];
        $students = $this->loadData();
        $students[] = $data;
        $this->saveData($students);
    }

    public function convertToStudent($arr)
    {
        $data = json_decode($arr);
        $students = [];
        foreach ($data as $item) {
            $student = new Student($item->name, $item->age);
            $student->setAddress($item->address);
       $students[] = $student;
        }
        return $students;
    }
    public function delete($id)
    {
        $students= $this->loadData();
        array_splice($students, $id, 1);
        $this->saveData($students);

    }
    public function update($id, $student)
    {
        $data = [
            "name" => $student->getName(),
            "age" => $student->getAge(),
            "address" => $student->getAddress()
        ];
        $students = $this->loadData();
        $students[$id] = $data;
        $this->saveData($students);
    }

}