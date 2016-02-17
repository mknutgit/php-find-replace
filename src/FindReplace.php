<?php
    class FindReplace
    {
    //     function find_and_replace($input_string, $inputFind, $inputReplace) {
    //         $array_of_words = explode(" ", $input_string);
    //         $output = array();
    //         foreach ($array_of_words as $word) {
    //           if ($word == $inputFind) {
    //             array_push($output, $inputReplace);
    //           }
    //           else {
    //             array_push($output, $word);
    //           }
    //         }
    //         return $output = implode(" ", $output);
    // }

        function find_and_replace($input_string, $inputFind, $inputReplace) {
            // $array_of_words = explode(" ", $input_string);
            $output = str_replace($inputFind, $inputReplace, $input_string);
            return $output;
    }
  }
?>
