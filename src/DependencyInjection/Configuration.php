<?php

namespace NewYear\ChristmassNotificationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('christmass_notification');
        $rootNode = $treeBuilder->getRootNode();
        $rootNode
            ->children()
            ->variableNode('message')->defaultValue('Merry Christmas!')
            ->info('Message which be send.')
            ->end()
            ->end();
        return $treeBuilder;
    }
}