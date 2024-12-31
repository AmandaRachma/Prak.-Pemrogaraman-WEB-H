<?php
namespace Hospital\Scheduling;

require_once 'Doctor.php';
require_once 'traits/Available.php';

use Hospital\Scheduling\Traits\Available;

class FullTimeDoctor extends Doctor {
    use Available;

    public function getSchedule() {
        return "Dr. {$this->name} (Specialty: {$this->specialty}) is a full-time doctor, available on " . implode(', ', $this->availableDays) . ".";
    }
}
