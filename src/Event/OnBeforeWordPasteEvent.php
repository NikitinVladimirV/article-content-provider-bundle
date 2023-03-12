<?php

namespace CatCasCarSkillboxSymfony\ArticleContentProviderBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

class OnBeforeWordPasteEvent extends Event
{
    /**
     * @var string
     */
    private $word;
    /**
     * @var int
     */
    private $position;

    public function __construct(string $word, int $position)
    {
        $this->word = $word;
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getWord(): string
    {
        return $this->word;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param string $word
     */
    public function setWord(string $word): void
    {
        $this->word = $word;
    }

}