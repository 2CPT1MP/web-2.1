<?php if (!class_exists('ScheduleRecord')):

class ScheduleRecord {
    private int $number;
    private string $title;
    private array $semesters = [];

    private static int $idCounter = 1;
    private static int $semesterCount = 0;
    private static int $fieldCount = 0;

    public function __construct(string $title) {
        $this->title = $title;
        $this->number = self::$idCounter++;

        for ($semester = 0; $semester < self::$semesterCount; $semester++)
            for ($field = 0; $field < self::$fieldCount; $field++)
                $this->semesters[$semester][$field] = "";
    }

    public function addFieldToSemester(int $semesterNumber, int $fieldNumber, int $hoursData) {
       $this->semesters[$semesterNumber-1][$fieldNumber-1] = $hoursData;
    }

    public static function getSemestersCount(): int {
        return self::$semesterCount;
    }

    public static function setSemestersCount(int $semesterCount): void {
        self::$semesterCount = $semesterCount;
    }

    public function getNumber(): int {
        return $this->number;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public static function getFieldCount(): int {
        return self::$fieldCount;
    }

    public function getSemesters(): array {
        return $this->semesters;
    }

    public static function setFieldCount(int $fieldCount): void {
        self::$fieldCount = $fieldCount;
    }
}

endif;