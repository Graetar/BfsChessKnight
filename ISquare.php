<?php

declare(strict_types=1);

namespace Chessboard;

interface ISquare
{
    public int $file {
        get;
    }

    public int $rank {
        get;
    }

    public static function create(int $file, int $rank): Square;

    public function equals(Square $anotherSquare): bool;

    public function getCoordinates(): string;

    public function getFileLetter(): string;

    public function getSquareColor(): SquareColor;

    public function getRGBSquareColor(): string;
}

enum SquareColor: string
{
    case Light = 'Light';
    case Dark = 'Dark';
}