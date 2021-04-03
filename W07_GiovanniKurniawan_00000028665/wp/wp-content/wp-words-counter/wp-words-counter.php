<?php
	/*
	Plugin Name: WP Words Counter Plugin
	Desc: Simple words counter WordPress plugin
	Version: 3.5.0
	Author: Reynardo Etantyo
	*/

	defined('ABSPATH') or die('No script kiddies pls!');

	function html_code($ctr=0, $ctr2=0, $ctr3=0){
		echo '<form action="'.esc_url($_SERVER['REQUEST_URI']).'" method="post">';
		echo "<p>";
		echo "Input String <br>";
		echo "<textarea rows='3' name='words'>".(isset($_POST["words"]) ? esc_attr($_POST["words"]) : '') . '</textarea>';
		echo "</p>";
		echo '<p><input type="submit" name="ctr_submit" value="Count!"></p>';
		echo "</form>";
		echo "<p>Words count : " . (isset($_POST["words"]) ? $ctr : "0") . "</p>";
		echo "<p>Words without space count : " . (isset($_POST["words"]) ? $ctr2 : "0") . "</p>";
		echo "<p>Space count : " . (isset($_POST["words"]) ? $ctr3 : "0") . "</p>";
	}

	function words_counter(){
		$ctr=0;
		if(isset($_POST['ctr_submit'])){
			$sentence = $_POST["words"];
			$words = explode(" ", $sentence);
			$ctr = count($words);
			return $ctr;
		}
	}

	function words_counter_without_space(){
		$ctr2=0;
		if(isset($_POST['ctr_submit'])){
			$sentence = $_POST["words"];
			$chars = str_replace(' ', '', $sentence);
			$ctr2 = strlen($chars);
			return $ctr2;
		}
	}

	function space_counter(){
		$ctr3 = 0;
		if(isset($_POST['ctr_submit'])){
			$sentence = $_POST["words"];
			$chars = str_replace(' ', '', $sentence);
			$ctr3 = strlen($sentence) - strlen($chars);
			return $ctr3;
		}
	}

	function wp_words_counter_main(){
		ob_start();
		$ctr = words_counter();
		$ctr2  = words_counter_without_space();
		$ctr3 = space_counter();
		html_code($ctr, $ctr2, $ctr3);
		return ob_get_clean();
	}

	add_shortcode('words_counter', 'wp_words_counter_main');
	add_shortcode('words_counter_without_space', 'wp_words_counter_main');
	add_shortcode('space_counter', 'wp_words_counter_main');
?>