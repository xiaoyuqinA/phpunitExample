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
    public function dataProvider()
    {
        return [
            'first' => [
                'uid' => 2019,
                'name' => 'to8to-2019'
            ],
        ];
    }

    /**
     * @param $uid
     * @param $userName
     * @dataProvider dataProvider
     */
    public function testGetUserInfo($uid,$userName)
    {
        $user = new User($uid);
        $userInfo = $user->getUserInfo();
        $this->assertArrayHasKey('uid', $userInfo);
        $this->assertArrayHasKey('userName', $userInfo);
        $this->assertEquals($uid, $userInfo['uid']);
        $this->assertEquals($userName, $userInfo['userName']);
    }

    /**
     * @param $uid
     * @param $userName
     * @test
     * @dataProvider dataProvider
     */
    public function getUid($uid,$userName)
    {
        $user = new User($uid);
        $expectUid = $user->getUid();
        $this->assertEquals($uid, $expectUid);

    }

    /**
     * @param $uid
     * @param $userName
     * @test
     * @dataProvider dataProvider
     */
    public function getUserName($uid,$userName)
    {
        $user = new User($uid);
        $expectUserName = $user->getUserName();
        $this->assertEquals($userName, $expectUserName);

    }

}