<?php

declare(strict_types=1);

namespace Chessboard;

abstract class Square implements ISquare
{
    public int $file {
        get {
            return $this->file;
        }
    }

    public int $rank {
        get {
            return $this->rank;
        }
    }

    public function __construct(int $file, int $rank)
    {
        $this->file = $file;
        $this->rank = $rank;
    }

    public function equals(self $anotherSquare): bool
    {
        return $this->file === $anotherSquare->file && $this->rank === $anotherSquare->rank;
    }

    public function getCoordinates(): string
    {
        return $this->getFileLetter() . $this->rank;
    }

    public static function create(int $file, int $rank): Square
    {
        return new static($file, $rank);
    }

    public function getFileLetter(): string
    {
        return match ($this->file) {
            1 => 'A',
            2 => 'B',
            3 => 'C',
            4 => 'D',
            5 => 'E',
            6 => 'F',
            7 => 'G',
            8 => 'H',
        };
    }

    public function getSquareColor(): SquareColor
    {
        return ($this->file + $this->rank) % 2 === 0 ? SquareColor::Dark : SquareColor::Light;
    }

    public function getRGBSquareColor(): string
    {
        return match ($this->getSquareColor()) {
            SquareColor::Light => 'FFFFFF',
            SquareColor::Dark => '000000',
        };
    }
}