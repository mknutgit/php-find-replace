<?php

    require_once "src/FindReplace.php";  // This tells PHPUnit to open the class we're going to test. To do this we use the keyword require_once to tell PHP where to find the TitleCaseGenerator.php file in relation to the project folder.

    class FindReplaceTest extends PHPUnit_Framework_TestCase
    {       // This is the class declaration.
            // extends PHPUnit_Framework_TestCase means that this is a special kind of class that handles testing.We will always declare our test classes like this, using upper camel case, ending the file name with Test.php.

        function test_replace_one_word()  //we declare a method to run our first test.
        {
            $test_findReplace = new FindReplace;
            $inputPhrase = "Hello World";
            $inputWordFind = "World";
            $inputReplaceWord = "Universe";


            //Act: runs the actual method that we are testing.
            $result = $test_findReplace->find_and_replace($inputPhrase, $inputWordFind, $inputReplaceWord);


            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals("Hello Universe", $result);
        }  // we will declare a method to run our first test. When we run PHPUnit, our test cla

        function test_replace_multiple_words()  //we declare a method to run our first test.
        {
            $test_findReplace = new FindReplace;
            $inputPhrase = "Hello World it's a great World";
            $inputWordFind = "World";
            $inputReplaceWord = "Universe";


            //Act: runs the actual method that we are testing.
            $result = $test_findReplace->find_and_replace($inputPhrase, $inputWordFind, $inputReplaceWord);


            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals("Hello Universe it's a great Universe", $result);
        }

        function test_replace_partial_match()  //we declare a method to run our first test.
        {
            $test_findReplace = new FindReplace;
            $inputPhrase = "Cathedral";
            $inputWordFind = "Cat";
            $inputReplaceWord = "Dog";


            //Act: runs the actual method that we are testing.
            $result = $test_findReplace->find_and_replace($inputPhrase, $inputWordFind, $inputReplaceWord);


            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals("Doghedral", $result);
        }  // we will
    }



?>
