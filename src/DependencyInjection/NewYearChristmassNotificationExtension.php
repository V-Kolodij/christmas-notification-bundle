<?php

namespace NewYear\ChristmassNotificationBundle\DependencyInjection;


use NewYear\ChristmassNotificationBundle\ChristmassNotificationTransportInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class NewYearChristmassNotificationExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);
        $definition = $container->getDefinition('new_year_christmass_notification.christmass_notification');
        $definition->setArgument(1, $config['message']);

        $container->registerForAutoconfiguration(ChristmassNotificationTransportInterface::class)
            ->addTag('christmas_notification_transport');
    }

    public function getAlias()
    {
        return 'christmas_notification';
    }
}