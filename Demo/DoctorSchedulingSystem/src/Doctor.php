<?php
namespace Hospital\Scheduling;

abstract class Doctor {
    protected $name;
    protected $specialty;
    protected $availableDays = [];

    public function __construct($name, $specialty, $availableDays) {
        $this->name = $name;
        $this->specialty = $specialty;
        $this->availableDays = $availableDays;
    }

   
    abstract public function getSchedule();

    
    public function __sleep() {
        return ['name', 'specialty', 'availableDays'];
    }

    public function __wakeup() {
        echo "Data for Dr. {$this->name} has been restored.\n";
    }
}
