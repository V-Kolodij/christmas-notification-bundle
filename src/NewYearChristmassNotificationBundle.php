<?php

namespace NewYear\ChristmassNotificationBundle;

use NewYear\ChristmassNotificationBundle\DependencyInjection\Compiler\NotificationTransportCompilerPass;
use NewYear\ChristmassNotificationBundle\DependencyInjection\NewYearChristmassNotificationExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class NewYearChristmassNotificationBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new NotificationTransportCompilerPass());
    }
    /**
     * Overridden to allow for the custom extension alias.
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new NewYearChristmassNotificationExtension();
        }
        return $this->extension;
    }
}