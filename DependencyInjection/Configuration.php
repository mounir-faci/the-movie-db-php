<?php


namespace MFD\TheMovieDbBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public const KEY_PARAMETER_NAME = 'key';
    private const NAME = 'the_movie_db';

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(self::NAME);

        return $treeBuilder
            ->getRootNode()
            ->children()
            ->scalarNode(self::KEY_PARAMETER_NAME)
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->end();
    }
}