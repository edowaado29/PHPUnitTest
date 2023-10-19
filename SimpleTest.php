<?php 

// import class TestCase dari PHPUnit
use PHPUnit\Framework\TestCase;

// import file php WordCount.php
require_once "WordCount.php";

// deklarasi class SimpleTest yang merupakan turunan dari class TestCase
class Simpletest extends TestCase {

    // deklarasi fungsi testCountWords()
    public function testCountWords(){
        
        // buat objek dari class Wordcount() dengan menggunakan variable $Wc sebagai penampungnya
        $Wc = new Wordcount();

        // deklarasi variable $TestSentence berisi kalimat yang akan diuji
        $TestSentence = "My name is Edo";

        // panggil fungsi countWords() dari objek $Wc dengan mengirimkan argumen yaitu $TestSentence
        $WordCount = $Wc->countWords($TestSentence);

        // membandingkan hasil yang diterima dari variable $WordCount dengan nilai yang ditetapkan yaitu 4
        $this->assertEquals(4, $WordCount);
    }
}

?>