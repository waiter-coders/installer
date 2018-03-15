<?php

namespace waiterphp\Composer;

use Composer\Package\PackageInterface;

class ServiceInstaller extends InstallerBase {

    protected $installType = 'waiterphp-service';

    public function getInstallPath(PackageInterface $package ) {
        $prefix = substr($package->getPrettyName(), 0, 18);
        if ('waiterphp/service-' !== $prefix) {
            throw new \InvalidArgumentException(
                'no waiterphp service type package'
            );
        }

        $packageName = substr($package->getPrettyName(), 18);
        return 'service/'. $this->getClassName($packageName);
    }
}
