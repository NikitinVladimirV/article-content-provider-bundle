<?php

namespace CatCasCarSkillboxSymfony\ArticleContentProviderBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class ArticleContentProviderExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(dirname(__DIR__) . '/Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);

        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('catcascar_skillbox_symfony.article_content_provider');

        if ($config['article_word_decorator'] !== null) {
            $container->setAlias('catcascar_skillbox_symfony.word_decorator', $config['article_word_decorator']);
        }

        $definition->setArgument(2, $config['is_bold']);
    }

    public function getAlias()
    {
        return 'catcascar_article_content_provider';
    }
}