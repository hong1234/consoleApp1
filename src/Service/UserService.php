<?php
namespace Hong\Service;

use Hong\Entity\User;
// use Hong\Dao\UserDao;
use Hong\Dao\BaseDao;

class UserService {
    
    public $userDao;

    public function __construct(BaseDao $userDao) {     
        $this->userDao = $userDao;
    }

    public function addUser(User $user) {
        $userArr = $this->userDao->toArray($user);
        return $this->userDao->insert($userArr);
    }
}