<?php

class VOD
{
    private array $movies = [
        "Leon",
        "Yamakasi",
        "Rasta Rocket",
        "Fast and Furious",
        "Pretty Woman",
    ];
    private int $price = 30;

    private static int $totalNumbersSubscribes = 0;

    /**
     * @return array|string[]
     */
    public function getMovies(): array
    {
        return $this->movies;
    }

    /**
     * @param array|string[] $movies
     */
    public function setMovies(array $movies): void
    {
        $this->movies = $movies;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public static function getTotalNumbersSubscribes(): int
    {
        return self::$totalNumbersSubscribes;
    }

    /**
     * @param int $totalNumbersSubscribes
     */
    public static function setTotalNumbersSubscribes(int $totalNumbersSubscribes): void
    {
        self::$totalNumbersSubscribes = $totalNumbersSubscribes;
    }

    /**
     * @param $abo
     */
    public static function addAbo($abo) :void
    {
        self::$totalNumbersSubscribes += $abo;
    }
}