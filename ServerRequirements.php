<?php

class ServerRequirements
{
    private $systemVersion;

    private $laravelVersion;

    private $requirements;

    public function __construct($laravelVersion)
    {
        $this->systemVersion = phpversion();
        $this->laravelVersion = $laravelVersion;
        $this->setRequirements();
    }

    private function setRequirements()
    {
        $requirementsData = array(
            // Laravel 5.0 server requirements
            '5.0' => array(
                'php' => array(
                    'min-version' => '5.4',
                    'boundary-version' => '7.0',
                    'description' => 'PHP >= 5.4, PHP < 7',
                    'passed' => false,
                ),

                'extensions' => array(
                    'openssl' => array(
                        'name' => 'OpenSSL',
                        'description' => 'OpenSSL PHP Extension',
                        'passed' => false,
                    ),
                    'mbstring' => array(
                        'name' => 'Mbstring',
                        'description' => 'Mbstring PHP Extension',
                        'passed' => false,
                    ),
                    'tokenizer' => array(
                        'name' => 'Tokenizer',
                        'description' => 'Tokenizer PHP Extension',
                        'passed' => false,
                    ),
                    'mcrypt' => array(
                        'name' => 'Mcrypt',
                        'description' => 'Mcrypt PHP Extension',
                        'passed' => false,
                    ),
                ),
            ),

            // Laravel 5.1 server requirements
            '5.1' => array(
                'php' => array(
                    'min-version' => '5.5.9',
                    'description' => 'PHP >= 5.5.9',
                    'passed' => false,
                ),

                'extensions' => array(
                    'openssl' => array(
                        'name' => 'OpenSSL',
                        'description' => 'OpenSSL PHP Extension',
                        'passed' => false,
                    ),
                    'pdo' => array(
                        'name' => 'PDO',
                        'description' => 'PDO PHP Extension',
                        'passed' => false,
                    ),
                    'mbstring' => array(
                        'name' => 'Mbstring',
                        'description' => 'Mbstring PHP Extension',
                        'passed' => false,
                    ),
                    'tokenizer' => array(
                        'name' => 'Tokenizer',
                        'description' => 'Tokenizer PHP Extension',
                        'passed' => false,
                    ),
                ),
            ),

            // Laravel 5.2 server requirements
            '5.2' => array(
                'php' => array(
                    'min-version' => '5.5.9',
                    'boundary-version' => '7.2.0',
                    'description' => 'PHP version between 5.5.9 - 7.1.*',
                    'passed' => false,
                ),

                'extensions' => array(
                    'openssl' => array(
                        'name' => 'OpenSSL',
                        'description' => 'OpenSSL PHP Extension',
                        'passed' => false,
                    ),
                    'pdo' => array(
                        'name' => 'PDO',
                        'description' => 'PDO PHP Extension',
                        'passed' => false,
                    ),
                    'mbstring' => array(
                        'name' => 'Mbstring',
                        'description' => 'Mbstring PHP Extension',
                        'passed' => false,
                    ),
                    'tokenizer' => array(
                        'name' => 'Tokenizer',
                        'description' => 'Tokenizer PHP Extension',
                        'passed' => false,
                    ),
                ),
            ),

            // Laravel 5.3 server requirements
            '5.3' => array(
                'php' => array(
                    'min-version' => '5.6.4',
                    'boundary-version' => '7.2.0',
                    'description' => 'PHP between 5.6.4 & 7.1.*',
                    'passed' => false,
                ),

                'extensions' => array(
                    'openssl' => array(
                        'name' => 'OpenSSL',
                        'description' => 'OpenSSL PHP Extension',
                        'passed' => false,
                    ),
                    'pdo' => array(
                        'name' => 'PDO',
                        'description' => 'PDO PHP Extension',
                        'passed' => false,
                    ),
                    'mbstring' => array(
                        'name' => 'Mbstring',
                        'description' => 'Mbstring PHP Extension',
                        'passed' => false,
                    ),
                    'tokenizer' => array(
                        'name' => 'Tokenizer',
                        'description' => 'Tokenizer PHP Extension',
                        'passed' => false,
                    ),
                    'xml' => array(
                        'name' => 'XML',
                        'description' => 'XML PHP Extension',
                        'passed' => false,
                    ),
                ),
            ),

            // Laravel 5.4 server requirements
            '5.4' => array(
                'php' => array(
                    'min-version' => '5.6.4',
                    'description' => 'PHP >= 5.6.4',
                    'passed' => false,
                ),

                'extensions' => array(
                    'openssl' => array(
                        'name' => 'OpenSSL',
                        'description' => 'OpenSSL PHP Extension',
                        'passed' => false,
                    ),
                    'pdo' => array(
                        'name' => 'PDO',
                        'description' => 'PDO PHP Extension',
                        'passed' => false,
                    ),
                    'mbstring' => array(
                        'name' => 'Mbstring',
                        'description' => 'Mbstring PHP Extension',
                        'passed' => false,
                    ),
                    'tokenizer' => array(
                        'name' => 'Tokenizer',
                        'description' => 'Tokenizer PHP Extension',
                        'passed' => false,
                    ),
                    'xml' => array(
                        'name' => 'XML',
                        'description' => 'XML PHP Extension',
                        'passed' => false,
                    ),
                ),
            ),

            // Laravel 5.5 server requirements
            '5.5' => array(
                'php' => array(
                    'min-version' => '7.0.0',
                    'description' => 'PHP >= 7.0.0',
                    'passed' => false,
                ),

                'extensions' => array(
                    'openssl' => array(
                        'name' => 'OpenSSL',
                        'description' => 'OpenSSL PHP Extension',
                        'passed' => false,
                    ),
                    'pdo' => array(
                        'name' => 'PDO',
                        'description' => 'PDO PHP Extension',
                        'passed' => false,
                    ),
                    'mbstring' => array(
                        'name' => 'Mbstring',
                        'description' => 'Mbstring PHP Extension',
                        'passed' => false,
                    ),
                    'tokenizer' => array(
                        'name' => 'Tokenizer',
                        'description' => 'Tokenizer PHP Extension',
                        'passed' => false,
                    ),
                    'xml' => array(
                        'name' => 'XML',
                        'description' => 'XML PHP Extension',
                        'passed' => false,
                    ),
                ),
            ),

            // Laravel 5.6 server requirements
            '5.6' => array(
                'php' => array(
                    'min-version' => '7.1.3',
                    'description' => 'PHP >= 7.1.3',
                    'passed' => false,
                ),

                'extensions' => array(
                    'openssl' => array(
                        'name' => 'OpenSSL',
                        'description' => 'OpenSSL PHP Extension',
                        'passed' => false,
                    ),
                    'pdo' => array(
                        'name' => 'PDO',
                        'description' => 'PDO PHP Extension',
                        'passed' => false,
                    ),
                    'mbstring' => array(
                        'name' => 'Mbstring',
                        'description' => 'Mbstring PHP Extension',
                        'passed' => false,
                    ),
                    'tokenizer' => array(
                        'name' => 'Tokenizer',
                        'description' => 'Tokenizer PHP Extension',
                        'passed' => false,
                    ),
                    'xml' => array(
                        'name' => 'XML',
                        'description' => 'XML PHP Extension',
                        'passed' => false,
                    ),
                    'ctype' => array(
                        'name' => 'Ctype',
                        'description' => 'Ctype PHP Extension',
                        'passed' => false,
                    ),
                    'json' => array(
                        'name' => 'JSON',
                        'description' => 'JSON PHP Extension',
                        'passed' => false,
                    ),
                ),
            ),

            // Laravel 5.7 server requirements
            '5.7' => array(
                'php' => array(
                    'min-version' => '7.1.3',
                    'description' => 'PHP >= 7.1.3',
                    'passed' => false,
                ),

                'extensions' => array(
                    'openssl' => array(
                        'name' => 'OpenSSL',
                        'description' => 'OpenSSL PHP Extension',
                        'passed' => false,
                    ),
                    'pdo' => array(
                        'name' => 'PDO',
                        'description' => 'PDO PHP Extension',
                        'passed' => false,
                    ),
                    'mbstring' => array(
                        'name' => 'Mbstring',
                        'description' => 'Mbstring PHP Extension',
                        'passed' => false,
                    ),
                    'tokenizer' => array(
                        'name' => 'Tokenizer',
                        'description' => 'Tokenizer PHP Extension',
                        'passed' => false,
                    ),
                    'xml' => array(
                        'name' => 'XML',
                        'description' => 'XML PHP Extension',
                        'passed' => false,
                    ),
                    'ctype' => array(
                        'name' => 'Ctype',
                        'description' => 'Ctype PHP Extension',
                        'passed' => false,
                    ),
                    'json' => array(
                        'name' => 'JSON',
                        'description' => 'JSON PHP Extension',
                        'passed' => false,
                    ),
                ),
            ),

            // Laravel 5.8 server requirements
            '5.8' => array(
                'php' => array(
                    'min-version' => '7.1.3',
                    'description' => 'PHP >= 7.1.3',
                    'passed' => false,
                ),

                'extensions' => array(
                    'openssl' => array(
                        'name' => 'OpenSSL',
                        'description' => 'OpenSSL PHP Extension',
                        'passed' => false,
                    ),
                    'pdo' => array(
                        'name' => 'PDO',
                        'description' => 'PDO PHP Extension',
                        'passed' => false,
                    ),
                    'mbstring' => array(
                        'name' => 'Mbstring',
                        'description' => 'Mbstring PHP Extension',
                        'passed' => false,
                    ),
                    'tokenizer' => array(
                        'name' => 'Tokenizer',
                        'description' => 'Tokenizer PHP Extension',
                        'passed' => false,
                    ),
                    'xml' => array(
                        'name' => 'XML',
                        'description' => 'XML PHP Extension',
                        'passed' => false,
                    ),
                    'ctype' => array(
                        'name' => 'Ctype',
                        'description' => 'Ctype PHP Extension',
                        'passed' => false,
                    ),
                    'json' => array(
                        'name' => 'JSON',
                        'description' => 'JSON PHP Extension',
                        'passed' => false,
                    ),
                    'bcmath' => array(
                        'name' => 'BCMath',
                        'description' => 'BCMath PHP Extension',
                        'passed' => false,
                    ),
                ),
            ),
        );

        $this->requirements = $requirementsData[$this->laravelVersion];
    }

    public function getRequirements()
    {
        return $this->requirements;
    }

    public function satisfied()
    {
        $satisfied = true;

        // Checking PHP version requirement.
        if ($this->phpVersionCheck()) {
            $this->requirements['php']['passed'] = true;
        } else {
            $satisfied = false;
        }

        // Checking PHP extensions requirements.
        foreach ($this->requirements['extensions'] as &$extension) {
            if (extension_loaded($extension['name'])) {
                $extension['passed'] = true;
            } else {
                $satisfied = false;
            }
        }

        return $satisfied;
    }

    private function phpVersionCheck()
    {
        if (!isset($this->requirements['php']['min-version'])) {
            return false;
        }

        // Check "Between version" requirement.
        if (isset($this->requirements['php']['min-version']) &&
            isset($this->requirements['php']['boundary-version'])) {
            return (
                version_compare(
                    $this->systemVersion,
                    $this->requirements['php']['min-version'], '>='
                ) &&
                version_compare(
                    $this->systemVersion,
                    $this->requirements['php']['boundary-version'], '<'
                )
            ) ? true : false;
        }

        // Check "Minimum version" requirement.
        return version_compare(
            $this->systemVersion,
            $this->requirements['php']['min-version'], '>='
        ) ? true : false;
    }
}
