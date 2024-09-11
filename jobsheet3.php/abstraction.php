<?php
// Kelas abstrak Course buat representasi kursus
abstract class Course {
    protected $courseName;

    // Constructor buat inisialisasi nama kursus
    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    // Metode abstrak buat dapetin detail kursus
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang nurunin dari Course
class OnlineCourse extends Course {
    private $duration;
    private $platform;

    // Constructor buat inisialisasi nama kursus, durasi, dan platform
    public function __construct($courseName, $duration, $platform) {
        parent::__construct($courseName); // Panggil constructor dari parent
        $this->duration = $duration;
        $this->platform = $platform;
    }

    // Implementasi metode getCourseDetails buat kursus online
    public function getCourseDetails() {
        return "Online Course: $this->courseName, Duration: $this->duration, Platform: $this->platform";
    }
}

// Kelas OfflineCourse yang nurunin dari Course
class OfflineCourse extends Course {
    // Atribut tambahan buat lokasi dan jadwal
    private $location;
    private $schedule;

    // Constructor buat inisialisasi nama kursus, lokasi, dan jadwal
    public function __construct($courseName, $location, $schedule) {
        parent::__construct($courseName); // Panggil constructor dari parent
        $this->location = $location;
        $this->schedule = $schedule;
    }

    // Implementasi metode getCourseDetails buat kursus offline
    public function getCourseDetails() {
        return "Offline Course: $this->courseName, Location: $this->location, Schedule: $this->schedule";
    }
}

// Bikin objek OnlineCourse
$onlineCourse = new OnlineCourse("Basis data", "2 bulan", "instagram");

// Bikin objek OfflineCourse
$offlineCourse = new OfflineCourse("Aplikom", "perpustakaan", "09.10 - 12.30");

// Nampilin detail OnlineCourse
echo $onlineCourse->getCourseDetails(); // Output: Online Course: Basis data, Duration: 2 bulan, Platform: Instagram
echo "<br>";

// Nampilin detail OfflineCourse
echo $offlineCourse->getCourseDetails(); // Output: Offline Course: Aplikom, Location: perpustakaan, Schedule: 09.10 - 12.30
?>
