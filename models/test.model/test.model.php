<?php if (!class_exists('Test')):
require('test-question.model.php');

class Test {
    private array $testQuestions = [];

    public function addTestQuestion(TestQuestion $testQuestion): void {
        $this->testQuestions[] = $testQuestion;
    }

    public function getTestQuestions(): array {
        return $this->testQuestions;
    }
}

endif;