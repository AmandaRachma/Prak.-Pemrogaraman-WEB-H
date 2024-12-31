<?php
namespace Hospital\Scheduling;

class Schedule {
    private $doctors = [];

    public function addDoctor(Doctor $doctor) {
        $this->doctors[] = $doctor;
    }

    public function showSchedules() {
        foreach ($this->doctors as $doctor) {
            echo $doctor->getSchedule() . "\n";
        }
    }
}
