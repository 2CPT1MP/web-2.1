<?php if (!class_exists('FormValidator')):

class FormValidator {
    public static function isValidName(string $name): bool {
        $validNamePattern = '/^[А-ЯA-Z]([а-яa-z])+\s[А-ЯA-Z]([а-яa-z])+\s[А-ЯA-Z]([а-яa-z])+$/u';
        return preg_match($validNamePattern, $name) === 1;
    }

    public static function isValidEmail(string $email): bool {
        $validEmailPattern = '/^[A-Za-z0-9_]+[@][A-Za-z0-9_]+[.][A-Za-z0-9_]+$/';
        return preg_match($validEmailPattern, $email) === 1;
    }

    public static function isValidPhoneNumber(string $phoneNumber): bool {
        $validPhoneNumberPattern = '/^[A-Za-z0-9_]+[@][A-Za-z0-9_]+[.][A-Za-z0-9_]+$/';
        return preg_match($validPhoneNumberPattern, $phoneNumber) === 1;
    }

    public static function isValidDate(int $day, int $month, int $year): bool {
        return checkdate($month, $day, $year);
    }

    public static function isValidGender(string $gender): bool {
        return $gender === 'Мужской' || $gender === 'Женский';
    }
}

endif;