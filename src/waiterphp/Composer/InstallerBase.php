<?php

namespace waiterphp\Composer;

use Composer\Config;
use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class InstallerBase extends LibraryInstaller {

    protected $installType = 'waiterphp-core';


    public function supports( $packageType ) {
        return $this->installType === $packageType;
    }

    protected function getClassName($packageName)
    {
        $class = array();
        $packageName = explode('-', $packageName);
        foreach ($packageName as $packageTag) {
            $class[] = ucfirst($packageTag);
        }
        return implode(DIRECTORY_SEPARATOR, $class);
    }
}
