<?php
// +--------------------------------------------------------------------------
// | ProjectName :phpunitExample
// +--------------------------------------------------------------------------
// | Description :User.php 
//+--------------------------------------------------------------------------
// | Author: xiaoyuqin 
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2019/1/7 下午11:10
// +--------------------------------------------------------------------------


namespace phpunitExample;


class User
{
    protected $uid = 0;
    protected $userInfo = [
        'uid' => 0,
        'userName' => ''
    ];

    public function __construct($uid)
    {
        $this->uid = $uid;
        $this->initUserInfo();
    }

    protected function initUserInfo()
    {
        $this->userInfo = [
            'uid' => $this->uid,
            'userName' => "to8to{$this->uid}"
        ];
    }

    public function getUserInfo()
    {
        return $this->userInfo;
    }

}