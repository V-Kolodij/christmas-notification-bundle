<?php

namespace NewYear\ChristmassNotificationBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class NotificationTransportCompilerPass implements CompilerPassInterface
{

    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('new_year_christmass_notification.christmass_notification');
        $references = [];
        foreach ($container->findTaggedServiceIds('christmas_notification_transport') as $id => $tags) {
            $references[] = new Reference($id);
        }
        $definition->setArgument(0, $references);
    }
}