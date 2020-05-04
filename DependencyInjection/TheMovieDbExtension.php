<?php

namespace MFD\TheMovieDbBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class TheMovieDbExtension extends Extension
{
    private const KEY_PARAMETER_NAME = 'the_movie_db.key';

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );

        $loader->load('services.yaml');

        $config = $this->processConfiguration(new Configuration(), $configs);
        $container->setParameter(self::KEY_PARAMETER_NAME, $config[Configuration::KEY_PARAMETER_NAME]);
    }
}