<?php
namespace Hospital\Scheduling\Traits;

trait Available {
    public function isAvailable($day) {
        return in_array($day, $this->availableDays);
    }
}
