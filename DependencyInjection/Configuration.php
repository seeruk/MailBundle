<?php

namespace Cyclone\Component\MailBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('cyclone_component_mail');

        $rootNode->children()
            ->arrayNode('parser')
                ->children()
                    ->booleanNode('debug')->defaultValue(false)->end()
                ->end()
                ->children()
                    ->scalarNode('max_size')->defaultValue(10485760)->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
