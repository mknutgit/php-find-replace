<?php
    class FindReplace
    {
    //     function find_and_replace($input_string, $inputFind, $inputReplace){
    //         $array_of_words = explode(" ", $input_string);
    //         $key = array_search($inputFind, $array_of_words);
    //         $replacement = array($key => $inputReplace);
    //         $array_of_words = array_replace($array_of_words, $replacement);
    //         return $array_of_words = implode(" ", $array_of_words);
    //
    //     }

        function find_and_replace($input_string, $inputFind, $inputReplace) {
            $array_of_words = explode(" ", $input_string);
            $output = array();
            foreach ($array_of_words as $word) {
              if ($word == $inputFind) {
                array_push($output, $inputReplace);
              }
              else {
                array_push($output, $word);
              }
            }
            return $output = implode(" ", $output);
    }
  }
?>
