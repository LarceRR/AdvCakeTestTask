<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase {
    public function test_change_case_at_index() {
        require '../vendor/test.php';
        $reversed_text_unit_test = new TextReversWithoutRegister();
        $this->assertIsString(true, $reversed_text_unit_test->reverse_text('Adv.Cake Top'));
        $this->assertEquals('Pot Ekac.Vda', $reversed_text_unit_test->reverse_text('Adv.Cake Top'));
    }
}