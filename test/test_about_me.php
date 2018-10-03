<?php

require_once('../admin_functions.php');

use PHPUnit\Framework\TestCase;

class admin extends TestCase {
//
//    public function testfetchUrlsSuccess() {
//        $expected = "Pilot shop/pilotshop.html";
//        $testarray = ["text"=>"My name is Dan and I am a Trainee Full Stack Developer"];
//        $case = fetchUrls($testarray);
//        $this->assertEquals($case, $expected);
//    }
//
    public function testfetchContentSuccess() {
        $expected = "My name is Dan and I am a Trainee Full Stack Developer";
        $testarray = ["text"=>"My name is Dan and I am a Trainee Full Stack Developer"];
        $key = "text";
        $case = fetchContent($key, $testarray);
        $this->assertEquals($case, $expected);
    }

    public function testfetchContentFailures() {
        $expected = "Error incorrect input";
        $testarray = ["text"=>"My name is Dan and I am a Trainee Full Stack Developer"];
        $case = fetchContent('poop', $testarray);
        $this->assertEquals($case, $expected);

    }

//    public function testfetchUrlsFailures() {
//        $expected = "Error incorrect input";
//        $testarray = ["text"=>"Pilot shop/pilotshop.html"];
//        $case = fetchUrls($testarray);
//        $this->assertEquals($case, $expected);
//
//    }
}