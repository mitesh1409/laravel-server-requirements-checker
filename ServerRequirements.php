<?php

class ServerRequirements
{
    private $laravelVersion;

    private $requirements;

    public function __construct($laravelVersion)
    {
        $this->laravelVersion = $laravelVersion;
        $this->setRequirements();
    }

    private function setRequirements()
    {
        $requirementsData = [
            // Laravel 5.5 server requirements
            "5.5" => [
                "php" => [
                    "min-version" => "7.0.0",
                    "description" => "PHP >= 7.0.0",
                    "passed" => false
                ],

                "extensions" => [
                    "openssl" => [
                        "name" => "OpenSSL",
                        "description" => "OpenSSL PHP Extension",
                        "passed" => false
                    ],
                    "pdo" => [
                        "name" => "PDO",
                        "description" => "PDO PHP Extension",
                        "passed" => false
                    ],
                    "mbstring" => [
                        "name" => "Mbstring",
                        "description" => "Mbstring PHP Extension",
                        "passed" => false
                    ],
                    "tokenizer" => [
                        "name" => "Tokenizer",
                        "description" => "Tokenizer PHP Extension",
                        "passed" => false
                    ],
                    "xml" => [
                        "name" => "XML",
                        "description" => "XML PHP Extension",
                        "passed" => false
                    ]
                ]
            ],
        
            // Laravel 5.6 server requirements
            "5.6" => [
                "php" => [
                    "min-version" => "7.1.3",
                    "description" => "PHP >= 7.1.3",
                    "passed" => false
                ],

                "extensions" => [
                    "openssl" => [
                        "name" => "OpenSSL",
                        "description" => "OpenSSL PHP Extension",
                        "passed" => false
                    ],
                    "pdo" => [
                        "name" => "PDO",
                        "description" => "PDO PHP Extension",
                        "passed" => false
                    ],
                    "mbstring" => [
                        "name" => "Mbstring",
                        "description" => "Mbstring PHP Extension",
                        "passed" => false
                    ],
                    "tokenizer" => [
                        "name" => "Tokenizer",
                        "description" => "Tokenizer PHP Extension",
                        "passed" => false
                    ],
                    "xml" => [
                        "name" => "XML",
                        "description" => "XML PHP Extension",
                        "passed" => false
                    ],
                    "ctype" => [
                        "name" => "Ctype",
                        "description" => "Ctype PHP Extension",
                        "passed" => false
                    ],
                    "json" => [
                        "name" => "JSON",
                        "description" => "JSON PHP Extension",
                        "passed" => false
                    ]
                ]
            ]
        ];

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
        $systemVersion = phpversion();
        if (version_compare($systemVersion, $this->requirements["php"]["min-version"], ">=")) {
            $this->requirements["php"]["passed"] = true;
        } else {
            $satisfied = false;
        }

        // Checking PHP extensions requirements.
        foreach ($this->requirements["extensions"] as &$extension) {
            if (extension_loaded($extension["name"])) {
                $extension["passed"] = true;
            } else {
                $satisfied = false;
            }
        }

        return $satisfied;
    }
}
