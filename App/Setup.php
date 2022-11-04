<?php

namespace App;

class Setup
{
    /**
     * Loads configuration variables from .php file as array
     *
     * @return void
     */
    public function loadConfig($configName)
    {
        $config = [];
        $configPath = __DIR__ . '/../configuration.php';
        $configPath = str_replace('\\', '/', $configPath);

        if (file_exists($configPath)) {
            $config = include $configPath;
        }

        return isset($config[$configName]) ? $config[$configName] : null;
    }
}
