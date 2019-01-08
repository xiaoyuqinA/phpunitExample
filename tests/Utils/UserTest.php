<?php
// +--------------------------------------------------------------------------
// | ProjectName :phpunitExample
// +--------------------------------------------------------------------------
// | Description :UserTest.php 
//+--------------------------------------------------------------------------
// | Author: xiaoyuqin 
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2019/1/9 上午1:02
// +--------------------------------------------------------------------------


use phpunitExample\Utils\User;

class UserTest extends PHPUnit\Framework\TestCase
{
    public function testGetUserInfo()
    {
        $uid = 2019;
        $userName = "to8to-{$uid}";
        $user = new User($uid);
        $userInfo = $user->getUserInfo();
        $this->assertArrayHasKey('uid', $userInfo);
        $this->assertArrayHasKey('userName', $userInfo);
        $this->assertEquals($uid, $userInfo['uid']);
        $this->assertEquals($userName, $userInfo['userName']);
    }

    /**
     * @test
     */
    public function getUid()
    {
        $uid = 2019;
        $user = new User($uid);
        $expectUid = $user->getUid();
        $this->assertEquals($uid, $expectUid);

    }

    /**
     * @test
     */
    public function getUserName()
    {
        $uid = 2019;
        $userName = "to8to-{$uid}";
        $user = new User($uid);
        $expectUserName = $user->getUserName();
        $this->assertEquals($userName, $expectUserName);

    }

}