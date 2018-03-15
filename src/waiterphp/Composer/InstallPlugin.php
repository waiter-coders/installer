<?php

namespace waiterphp\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class InstallPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io) {
        $devicesInstaller = new DrivesInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($devicesInstaller);

        $serviceInstaller = new ServiceInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($serviceInstaller);
    }

}
