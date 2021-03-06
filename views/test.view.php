<?php if (!class_exists('TestView')):
require('header.view.php');
require('../models/test.model/test.model.php');

class TestView {
    public static function render(Test $test): string {
        $html = HeaderView::render('Тест');
        $html .= '<article class="flex-container card">
				  <form action="/test/verify" method=POST autocomplete="off">
						<label>Наименование дисциплины:
                            <input name="disc-name" type="text" value="Информатика" readonly>
						</label>
						<label id="fio-label">Ваше ФИО:
						    <input name="sender-name" type="text" required>
						</label>
						<label>Группа:
						    <input name="sender-group" type="text" required>
						</label>
						<label>Пол<br>
							<label>Мужской<input type="radio" name="sender-gender" value="Мужской" required></label>
							<label>Женский<input type="radio" name="sender-gender" value="Женский" required></label>
						</label><br>
						<label>Возраст
						    <input name="sender-age" type=number min=17 max=80 value="18" required>
						</label>
        ';



        foreach ($test->getTestQuestions() as $testQuestion) {
            $answers = array_merge($testQuestion->getRightAnswers(), $testQuestion->getWrongAnswers());

            $html .= match ($testQuestion->getType()) {
                "SINGLE_SELECT" => self::showSingleSelect($testQuestion->getQuestion(), $answers),
                "MULTIPLE_SELECT" => self::showMultipleSelect($testQuestion->getQuestion(), $answers),
                "TEXT" => self::showText($testQuestion->getQuestion()),
                "RADIO" => self::showRadio($testQuestion->getQuestion(), $answers),
            };
        }

        return $html . "	
	        <input type='submit'>
			</form>
			</article>";
    }

    public static function showSingleSelect(string $title, array $answers): string {
        $html = "<label>$title
                      <select required name=\"{$title}[]\">
                      <option value='none' selected disabled>-</option>
            ";

        foreach ($answers as $answer)
            $html .= "<option value=$answer>$answer</option>";

        return $html . "</select>";

    }

    public static function showMultipleSelect(string $title, array $answers): string {
        $html = "<label>$title
                      <select multiple required name=\"{$title}[]\">
                      <option value='none' disabled>-</option>
            ";

        foreach ($answers as $answer)
            $html .= "<option value=$answer>$answer</option>";

        return $html . "</select>";

    }

    public static function showText(string $title): string {
        return "<label>$title
                 <input required type='text' name=\"{$title}[]\">
                 </label>
            ";

    }

    public static function showRadio(string $title, array $answers): string {
        $html = "<label>$title<br>";

        foreach ($answers as $answer)
            $html .= "<input required type='radio' name=\"{$title}[]\" value=\"$answer\"> $answer<br>";

        return $html . "</label>";

    }
}

endif;