<?php
/**
 * Created by PhpStorm.
 * User: Rodas
 * Date: 6/25/2016
 * Time: 4:03 PM
 */

namespace Contacts;
use Contacts\Model\Contact as ContactModel;


class Test_Contact extends \PHPUnit_Framework_TestCase
{
    public function test_MockObject()
    {
//        $contact = $this->createMock('\Contacts\Model\Contact');
        // Create a stub for the SomeClass class.
        $stub = $this->createMock(ContactModel::class);

        // Configure the stub.
        $stub->method('validateCreate')
            ->willReturn('foo');

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->validateCreate());
    }
}
