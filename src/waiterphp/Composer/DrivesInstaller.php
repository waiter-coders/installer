<?php

namespace waiterphp\Composer;

use Composer\Config;
use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class DrivesInstaller extends LibraryInstaller {

    const TYPE = 'waiterphp-drives';

    public function getInstallPath(PackageInterface $package ) {
        $prefix = substr($package->getPrettyName(), 0, 17);
        if ('waiterphp/drives-' !== $prefix) {
            throw new \InvalidArgumentException(
                'no waiterphp drives type package'
            );
        }

        $packageName = substr($package->getPrettyName(), 17);
        return 'drives/'. str_replace('-', DIRECTORY_SEPARATOR, $packageName);
    }

    public function supports( $packageType ) {
        return self::TYPE === $packageType;
    }
}
