<?php


namespace MFD\TheMovieDbBundle\Service;


class TheMovieDbClient
{
    private $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function getMovies(string $keyword): array
    {
        return [];
    }
}