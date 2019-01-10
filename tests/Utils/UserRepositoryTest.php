<?php
// +--------------------------------------------------------------------------
// | ProjectName :phpunitExample
// +--------------------------------------------------------------------------
// | Description :UserRepositoryTest.php 
//+--------------------------------------------------------------------------
// | Author: xiaoyuqin 
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2019/1/10 上午7:17
// +--------------------------------------------------------------------------


use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;
use org\bovigo\vfs\vfsStreamFile;
use PHPUnit\Framework\TestCase;
use phpunitExample\Utils\User;
use phpunitExample\Utils\UserRepository;

class UserRepositoryTest extends TestCase
{

    public function testAdd()
    {
        $user = $this->getMockBuilder(User::class)->disableOriginalConstructor()->setMethods([ 'getUserInfo' ])->getMock();
        $value = [ 'uid' => 2019, 'userName' => 'to8to-2019' ];
        $user->method('getUserInfo')->willReturn($value);
        $userRepository = new UserRepository();
        $bytes = $userRepository->addUser($user);
        $this->assertGreaterThan(0, $bytes);
    }

}