<?php

namespace CatCasCarSkillboxSymfony\ArticleContentProviderBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('catcascar_article_content_provider');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->booleanNode('is_bold')->defaultTrue()->info('Bold or Italic word style')->end()
                ->scalarNode('article_word_decorator')->defaultNull()->info('Content Decorator class')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}