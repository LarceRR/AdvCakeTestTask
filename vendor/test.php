<?php
	class TextReversWithoutRegister {
		// Изменяет регистр указанного с помощью индекса символа на вернхий
		private function change_case_at_index($string, $index) {
			$char = substr($string, $index, 1);
			$changed_string = substr($string, 0, $index) . strtoupper($char) . substr($string, $index + 1);
			return $changed_string;
		}

		public function reverse_text($string) {
		    $reversed_stroke = '';
		    $uppercase_letters_id = [];
			// Узнает номер позиции символа с верхним регистром
			for ($i = 0; $i < strlen($string); $i++) {
				if (ctype_upper($string[$i])) {
					array_push($uppercase_letters_id, $i);
				}
			}

			//переверачивание оригинальной строки
			$reversed_stroke = strrev(strtolower($string));

			//установка верхнего регистра на места, где был верхний регистр в старой строке
			foreach ($uppercase_letters_id as $id) {
				$reversed_stroke = $this->change_case_at_index($reversed_stroke, $id);
			}
			return $reversed_stroke;
		}
	}
	$reversed_text = new TextReversWithoutRegister();
	echo $reversed_text->reverse_text('Adv.Cake-Super');