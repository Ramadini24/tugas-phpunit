<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Wordcount.php";

// Class untuk run Testing.
class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        // Kita pakai class yang mau kita test.
        $Wc = new WordCount();

        $TestSentence = "Hai Nama saya Dini, umur saya 22 tahun"; // Kata ..
        $WordCount = $Wc->countWords($TestSentence);

        // Kita assert equal, ekspektasi nya harus 8, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals(8, $WordCount); 
    }
    public function testAbsolutMath()
    {
        $am = new WordCount();
        $a = 7;
        $b = 3;
        $absMath = $am->absolutMath($a, $b);
        $this->assertEquals(4, $absMath);
    }

    public function testAkarMath()
    {
        $akm = new WordCount();
        $a = 64;
        $akrMath = $akm->akarMath($a);
        $this->assertEquals(8, $akrMath);
    }

    public function testPembulatanMath()
    {
        $pbm = new WordCount();
        $a = 7.8951;
        $pbmMath = $pbm->pembulatanMath($a);
        $this->assertEquals(8, $pbmMath);
    }

    public function testLuasPersegi()
    {
        $lp = new WordCount();
        $a = 7;
        $lpMath = $lp->luasPersegi($a);
        $this->assertEquals(49, $lpMath);
    }

    public function testKelilingPersegi()
    {
        $klp = new WordCount();
        $a = 4;
        $klpMath = $klp->kelilingPersegi($a);
        $this->assertEquals(16, $klpMath);
    }

    public function testLuasPersegiPanjang()
    {
        $lpp = new WordCount();
        $a = 2;
        $b = 6;
        $lppMath = $lpp->luasPersegiPanjang($a, $b);
        $this->assertEquals(18, $lppMath);
    }

    public function testKelilingPersegiPanjang()
    {
        $klpp = new WordCount();
        $a = 2;
        $b = 4;
        $klppMath = $klpp->kelilingPersegiPanjang($a, $b);
        $this->assertEquals(12, $klppMath);
    }

    public function testKelilingSegitiga()
    {
        $kls = new WordCount();
        $a = 5;
        $b = 6;
        $c = 9;
        $klsMath = $kls->kelilingSegitiga($a, $b, $c);
        $this->assertEquals(20, $klsMath);
    }
}