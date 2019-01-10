<?php
// +--------------------------------------------------------------------------
// | ProjectName :phpunitExample
// +--------------------------------------------------------------------------
// | Description :UserRepository.php 
//+--------------------------------------------------------------------------
// | Author: xiaoyuqin 
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2019/1/10 上午7:03
// +--------------------------------------------------------------------------


namespace phpunitExample\Utils;


class UserRepository
{

    /**
     * @param User $user
     * @return int
     */
    public function addUser($user)
    {
        return count($user->getUserInfo());
    }
}