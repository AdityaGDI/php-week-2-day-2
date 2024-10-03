<?php 

class Variable {
    public $name = "Aditya";
    public $age = 20;
    public $sex = "male";
    public $gpa = 3.77;
    public $isStudent = true;

    public $date;

    public function __construct($nama = "Aditya", $age = 20, $sex = "male", $gpa = 3.77, $isStudent = true, $date = null) {
        $this->name = $nama;
        $this->age = $age;
        $this->sex = $sex;
        $this->gpa = $gpa;
        $this->isStudent = $isStudent; 
        $this->date = $date;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSex() {
        return $this->sex;
    }

    public function getGpa() {
        return $this->gpa;
    }

    public function getIsStudent() {
        return $this->isStudent;
    }

    public function getDate() {
        return $this->date;
    }

    public function calculateAge() {
        if (!$this->date) {
            return "Tanggal Lahir Tidak Ada";
        }

        $birthDate = new DateTime($this->date);
        $currentDate = new DateTime();
        $ageDifference = $currentDate->diff($birthDate);

        return sprintf(
            "Kamu Sudah Hidup Selama %d tahun, %d Bulan, and %d Hari.",
            $ageDifference->y,
            $ageDifference->m,
            $ageDifference->d
        );
    }
}

