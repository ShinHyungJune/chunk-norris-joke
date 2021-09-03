<?php

use June\ChunkNorrisJokes\JokeFactory;

class JokeFactoryTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $items = [
            "This is a joke",
            "Thank you"
        ];

        $jokes = new JokeFactory($items);

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $items);
    }
}