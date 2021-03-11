<?php
	class Student{
		private $data;
		
		public function getData(){
			$this->data = getStudent();
			return $this->data;
		}
	}
?>