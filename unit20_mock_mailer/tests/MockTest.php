<?php

use PHPUnit\Framework\TestCase;
/*bất cứ khi nào test code mà phụ thuộc vào class khác, ta hãy tạo Mock object của
các class đó để xóa các class liên quan*/
class MockTest extends TestCase
{
    public function testMock()
    {
    	//define class Mailer with creatMock
        $mock = $this->createMock(Mailer::class);

        $mock->method('sendMessage')  //call method sendMessage
             ->willReturn(true);  //return true
        
        $result = $mock->sendMessage('dave@example.com', 'Hello');
        
        $this->assertTrue($result);
    }
}