<?php

class UserSession {

    /**
     *
     * @var string
     */
    private $userId;

    /**
     *
     * @var string 
     */
    private $userLogin;

    /**
     *
     * @var string
     */
    private $userName;

    /**
     *
     * @var string 
     */
    private $userEmail;

    /**
     *
     * @var array
     */
    private $userGroups;
 

    /**
     *
     * @var array
     */
    private $userPermissions;

    public function __construct() {

        if (!(bool) session_id()) {

            session_start();
        }

        if (isset($_SESSION['user'])) {

            $this->userId = $_SESSION['user']['userId'];
            $this->userName = $_SESSION['user']['userName'];
            $this->userLogin = $_SESSION['user']['userLogin'];
            $this->userEmail = $_SESSION['user']['userEmail'];
            $this->userGroups = $_SESSION['user']['userGroups'];
            $this->userPermissions = $_SESSION['user']['userPermissions'];
        }
    }

    /**
     * 
     * @return string
     */
    function getUserLogin() {
        return $this->userLogin;
    }

    /**
     * 
     * @return string
     */
    function getUserEmail() {
        return $this->userEmail;
    }

    /**
     * 
     * @return string
     */
    function getUserId() {
        return $this->userId;
    }

    /**
     * 
     * @return string
     */
    function getUserName() {

        return $this->userName;
    }

    /**
     * 
     * @return string
     */
    function getUserFirstName() {

        return substr($this->userName, 0, strpos($this->userName, ' ') - 1);
    }

    /**
     * 
     * @return boolean
     */
    function isLogged() {
        return boolval($this->userId);
    }

    /**
     * 
     * @param array $user
     * @param array $permissions
     */
    function create($user, $permissions) {

        $_SESSION['user'] = array();

        $_SESSION['user']['userId'] = isset($user['userId']) ? $user['userId'] : md5($user['userLogin']);
        $_SESSION['user']['userLogin'] = $user['userLogin'];
        $_SESSION['user']['userName'] = $user['userName'];
        $_SESSION['user']['userGroups'] = (array) $user['userGroups'];
        $_SESSION['user']['userEmail'] = $user['userEmail'];
        $_SESSION['user']['userPermissions'] = $permissions;
    }

    /**
     * 
     * @param string $group_name
     * @return boolean
     */
    function isMemberOf($group_name) {

        return in_array($group_name, $this->userGroups);
    }

    /**
     * 
     * @return boolean
     */
    function isAdmin() {

        return !empty(array_intersect($this->userGroups, $this->adminGroups));
    }

    /**
     * 
     * @param string $module
     * @return boolean
     */
    function hasAccess($module) {

        if ($this->isAdmin()) {

            return true;
        }

        return isset($this->userPermissions[$module]) && ($this->userPermissions[$module] === 'r' || $this->userPermissions[$module] === 'w');
    }

    /**
     * 
     * @param string $module
     * @return boolean
     */
    function hasWriteAccess($module) {

        if ($this->isAdmin()) {

            return true;
        }
        return isset($this->userPermissions[$module]) && $this->userPermissions[$module] === 'w';
    }

}
