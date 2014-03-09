<?php

use PHPO\String;

class StringTest extends PHPUnit_Framework_TestCase{
    public function testToString(){
        $string = 'test string';
        $stringObject = new String($string);

        $this->assertEquals($string, sprintf('%s', $stringObject));
        $this->assertEquals($string, $stringObject->getValue());

        $string .= 'asdf';
        $stringObject->setValue($string);
        $this->assertEquals($string, $stringObject->getValue());
    }

    public function testIndexoOf(){
        $input = 'asdf foo';
        $string = new String($input);

        $this->assertSame(-1, $string->indexOf('test'));
        $this->assertSame(0, $string->indexOf('asdf'));
        $this->assertSame(5, $string->indexOf('foo'));
    }

    public function testSubstring(){
        $input = 'asdf foo';
        $string = new String($input);

        $this->assertEquals('foo', $string->substring(5));
        $this->assertEquals('asdf', $string->substring(0,4));
    }
}
