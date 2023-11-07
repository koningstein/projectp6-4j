<?php

namespace Projectp6;

class Play
{
    private Player $player;
    private Category $category;
    private int $questionIndex = 0;

    public function __construct(Player $player, Category $category)
    {
        $this->player = $player;
        $this->category = $category;
    }

    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function getQuestions(): array
    {
        return $this->category->getQuestions();
    }

    public function getQuestion(): Question
    {
        return $this->category->getQuestions()[$this->questionIndex];
    }

    public function nextQuestion(): void
    {
        $this->questionIndex++;
    }
}