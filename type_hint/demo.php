<?php
declare(strict_types=1);

require_once 'A.php';
require_once 'B.php';
require_once 'C.php';
require_once 'I.php';

class Demo {
    // A 
    public function typeAReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeAReturnB(): A {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeAReturnC(): A {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeAReturnI(): A {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeAReturnNull(): A {
        echo __FUNCTION__ . "<br>";
        return null; 
    }
    
    // B 
    public function typeBReturnA(): B {
        echo __FUNCTION__ . "<br>";
        return new A();  
    }

    public function typeBReturnB(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeBReturnC(): B {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeBReturnI(): B {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeBReturnNull(): B {
        echo __FUNCTION__ . "<br>";
        return null; 
    }


    // C 
    public function typeCReturnA(): C {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeCReturnB(): C {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeCReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnI(): C {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeCReturnNull(): C {
        echo __FUNCTION__ . "<br>";
        return null;  
    }

    // I 
    public function typeIReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeIReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeIReturnC(): I {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeIReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeIReturnNull(): I {
        echo __FUNCTION__ . "<br>";
        return null;  
    }

    // NULL

    public function typeNullReturnA(): null {
        echo __FUNCTION__ . "<br>";
        return new A();  
    }

    public function typeNullReturnB(): null {
        echo __FUNCTION__ . "<br>";
        return new B();  
    }
    public function typeNullReturnC(): null {
        echo __FUNCTION__ . "<br>";
        return new C(); 
    }
    public function typeNullReturnI(): null {
        echo __FUNCTION__ . "<br>";
        return new I(); 
    }
    public function typeNullReturnNull(): null {
        echo __FUNCTION__ . "<br>";
        return null;
    }
}

// Khởi tạo đối tượng Demo
$demo = new Demo();

// Gọi các phương thức
//A
$demo->typeAReturnA();
$demo->typeAReturnB();
$demo->typeAReturnC();
$demo->typeAReturnI();
$demo->typeAReturnNull();

//B
$demo->typeBReturnA();
$demo->typeBReturnB();
$demo->typeBReturnC();
$demo->typeBReturnI();
$demo->typeBReturnNull();


//C
$demo->typeCReturnA();
$demo->typeCReturnB();
$demo->typeCReturnC();
$demo->typeCReturnI();
$demo->typeCReturnNull();

//I
$demo->typeIReturnA();
$demo->typeIReturnB();
$demo->typeIReturnC();
$demo->typeIReturnI();
$demo->typeIReturnNull();

//NULL
$demo->typeNullReturnA();
$demo->typeNullReturnB();
$demo->typeNullReturnC();
$demo->typeNullReturnI();
$demo->typeNullReturnNull();