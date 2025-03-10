<?php

declare(strict_types=1);

namespace Chessboard;

interface IPiece
{
    public Square $square {
        get;
    }

    public ?PieceColor $pieceColor {
        set;
        get;
    }

    public static function create(Square $square, ?PieceColor $pieceColor = null): Piece;

    public function move(Square $newSquare): void;

    public function getRGBPieceColor(): string;
}

enum PieceColor
{
    case White;
    case Black;
}