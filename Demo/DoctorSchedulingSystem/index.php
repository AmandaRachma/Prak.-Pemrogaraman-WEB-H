<?php
require_once 'src/Doctor.php';
require_once 'src/FullTimeDoctor.php';
require_once 'src/PartTimeDoctor.php';
require_once 'src/Schedule.php';
require_once 'src/traits/Available.php';

use Hospital\Scheduling\Schedule;
use Hospital\Scheduling\FullTimeDoctor;
use Hospital\Scheduling\PartTimeDoctor;

$schedule = new Schedule();

$doctor1 = new FullTimeDoctor("Alice", "Cardiology", ["Monday", "Wednesday", "Friday"]);
$doctor2 = new PartTimeDoctor("Bob", "Dermatology", ["Tuesday", "Thursday"]);

$schedule->addDoctor($doctor1);
$schedule->addDoctor($doctor2);

$schedule->showSchedules();

$serializedDoctor = serialize($doctor1);
echo "Serialized Data: " . $serializedDoctor . "\n";

$restoredDoctor = unserialize($serializedDoctor);
echo $restoredDoctor->getSchedule();
