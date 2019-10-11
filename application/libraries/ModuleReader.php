<?php

class ModuleReader {

    private $moduleDir = '';
    private $fileExtension = 'php';
    private $classType = 'Secured_CI_Controller';
    private $filter = array(
        'prefix' => array('_'),
        'suffix' => array('_'),
        'names' => array('__construct', 'get_instance', 'index')
    );

    public function __construct() {

        $this->moduleDir = APPPATH . '_controllers' . DIRECTORY_SEPARATOR;

        $this->filter['suffix'] = array_merge($this->filter['suffix'], Secured_CI_Controller::$modulesSuffixList);
    }

    function getList() {

        return $this->readDirectory(false);
    }

    private function readDirectory() {

        if (is_dir($this->moduleDir) === false) {

            return array();
        }

        $modules = array();

        foreach (glob($this->moduleDir . '*.' . $this->fileExtension, GLOB_BRACE) as $filename) {

            $classname = ucfirst(basename($filename, '.' . $this->fileExtension));

            require_once($filename);

            if (class_exists($classname)) {

                $reflector = new ReflectionClass($classname);
       
                if ($reflector->isSubclassOf($this->classType)) {

                    foreach ($reflector->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {

                        $valid_name = $this->hasValidName($method->name);
                        $valid_prefix = $this->hasValidPrefix($method->name);
                        $valid_suffix = $this->hasValidSuffix($method->name);
 
                        if ($valid_name && $valid_prefix && $valid_suffix) {

                            $methodInfo = $this->parseMethodComment($method->getDocComment());

                            $methodInfo['name'] = strtolower($classname) . '/' . strtolower($method->name);

                            $modules[] = $methodInfo;
                        }
                    }
                }
            }
        }


        return $modules;
    }

    /**
     * Parse each line in the docblock
     * and store the params in `$this->all_params`
     * and the rest in `$this->description`
     */
    private function parseMethodComment($methodComments) {

        $description = '';
        $tags = array();
        // split at each line
        foreach (preg_split("/(\r?\n)/", $methodComments) as $line) {

            // if starts with an asterisk
            if (preg_match('/^(?=\s+?\*[^\/])(.+)/', $line, $matches)) {

                $info = $matches[1];

                // remove wrapping whitespace
                $info = trim($info);

                // remove leading asterisk
                $info = preg_replace('/^(\*\s+?)/', '', $info);

                // if it doesn't start with an "@" symbol
                // then add to the description
                if ($info[0] !== "@") {
                    $description .= "\n$info";
                    continue;
                } else {
                    // get the name of the param
                    preg_match('/@(\w+)/', $info, $matches);
                    $tag = $matches[1];

                    // remove the param from the string
                    $value = str_replace("@$tag ", '', $info);

                    // if the param hasn't been added yet, create a key for it
                    if (!isset($tags[$tag])) {
                        $tags[$tag] = array();
                    }

                    // push the param value into place
                    $tags[$tag][] = $value;

                    continue;
                }
            }
        }

        return array('description' => $description, 'tags' => $tags);
    }

    private function hasValidName($name) {

        return !in_array($name, $this->filter['names']);
    }

    private function hasValidPrefix($name) {

        foreach ($this->filter['prefix'] as $prefix) {

            if ($this->startsWith($name, $prefix)) {

                return false;
            }
        }

        return true;
    }

    private function hasValidSuffix($name) {
        
        foreach ($this->filter['suffix'] as $prefix) {

            if ($this->endsWith($name, $prefix)) {

                return false;
            }
        }

        return true;
    }

    private function startsWith($haystack, $needle) {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    private function endsWith($haystack, $needle) {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }

}
