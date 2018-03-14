<?php

namespace waiterphp\Composer;


class DrivesInstaller extends InstallerBase {

    protected $installType = 'waiterphp-drives';

    public function getInstallPath(PackageInterface $package ) {
        $prefix = substr($package->getPrettyName(), 0, 17);
        if ('waiterphp/drives-' !== $prefix) {
            throw new \InvalidArgumentException(
                'no waiterphp drives type package'
            );
        }

        $packageName = substr($package->getPrettyName(), 17);
        return 'drives/'. $this->getClassName($packageName);
    }
}
