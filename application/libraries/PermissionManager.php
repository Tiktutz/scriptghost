<?php

Class PermissionManager {

    private $permissions_table = array();
    /**
     * 
     * @var CI_Config $config
     */
    private $config;


    public function __construct($config) {

        $this->config = $config[0]  ; //this way because of CI parttern

        $this->config->load('permissions_table', TRUE);

        $this->permissions_table = $this->config->item('permissons_table');
    }

    /**
     * 
     * @param array $permissions
     */
    function edit($permissions) {

        $this->permissions_table = $permissions;

        $this->write();
    }

    /**
     * 
     * @param string $group_name
     * @paramstring $module
     * @param string $mode r or w
     */
    function set($group_name, $module, $mode = 'r') {

        $this->permissions_table[$group_name][$module] = $mode;

        $this->write();
    }

    /**
     * 
     * @param mixed $groupNames
     * @return array
     */
    function getPermissions($groupNames = array()) {

        $groupNames = (array) $groupNames;

        $permissions = array();

        foreach ($groupNames as $groupName) {

            if (isset($this->permissions_table[$groupName])) {

                array_merge($permissions, $this->permissions_table[$groupName]);
            }
        }

        return $permissions;
    }

    /**
     * 
     *
     * @return array
     */
    function getAllPermissions() {

        return $this->permissions_table;
    }

    /**
     * 
     */
    private function write() {


        $this->config->set_item('permissions_table', $this->permissions_table);
    }

}

?>