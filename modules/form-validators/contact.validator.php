<?php if (!class_exists('ContactValidator')):

class ContactValidator {
    private array $validators = [], $errors = [];

    public function __construct($formData) {
        $this->validators["sender-name"] = isset($formData["sender-name"]) && $this->isValidName($formData["sender-name"]);
        $this->errors["sender-name"] = "Неверное имя";

        $this->validators["sender-gender"] = isset($formData["sender-gender"]) && $this->isValidGender($formData["sender-gender"]);
        $this->errors["sender-gender"] = "Неверный пол";

        $this->validators["sender-date"] = isset($formData["sender-day"]) && isset($formData["sender-month"]) && isset($formData["sender-year"]) &&
                                           $this->isValidDate($formData["sender-day"], $formData["sender-month"] + 1, $formData["sender-year"]);
        $this->errors["sender-date"] = "Неверная дата рождения";

        $this->validators["sender-email"] = isset($formData["sender-email"]) && $this->isValidEmail($formData["sender-email"]);
        $this->errors["sender-email"] = "Неверный email";

        $this->validators["sender-phone"] = isset($formData["sender-phone"]) && $this->isValidPhoneNumber($formData["sender-phone"]);
        $this->errors["sender-phone"] = "Неверный телефон";
    }

    public function validate(): array {
        $msg = "";
        $valid = true;

        foreach ($this->validators as $field => $validator) {
            if (!$validator) {
                $valid = false;
                $msg .= "{$this->errors[$field]}<br/>";
            }
        }
        return [$valid, $msg];
    }


    public function isValidName(string $name): bool {
        $validNamePattern = '/^[А-ЯA-Z]([а-яa-z])+\s[А-ЯA-Z]([а-яa-z])+\s[А-ЯA-Z]([а-яa-z])+$/u';
        return preg_match($validNamePattern, $name);
    }

    public function isValidEmail(string $email): bool {
        $validEmailPattern = '/^[A-Za-z0-9_]+[@][A-Za-z0-9_]+[.][A-Za-z0-9_]+$/';
        return preg_match($validEmailPattern, $email);
    }

    public function isValidPhoneNumber(string $phoneNumber): bool {
        $validPhoneNumberPattern = '/^[+][7|3][0-9]{9,11}$/';
        return preg_match($validPhoneNumberPattern, $phoneNumber);
    }

    public function isValidDate($day, $month, $year): bool {
        if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year))
            return false;
        return checkdate($month, $day, $year);
    }

    public function isValidGender(string $gender): bool {
        return $gender === 'Мужской' || $gender === 'Женский';
    }
}

endif;