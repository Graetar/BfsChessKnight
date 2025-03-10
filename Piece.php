<?php

declare(strict_types=1);

namespace Chessboard;

abstract class Piece implements IPiece
{
    public Square $square {
        get {
            return $this->square;
        }
    }

    public ?PieceColor $pieceColor {
        set(?PieceColor $pieceColor) {
            $this->pieceColor = $pieceColor;
        }

        get {
            return $this->pieceColor;
        }
    }

    public MoveStack $moveStack;

    public function __construct(Square $square, ?PieceColor $pieceColor = null)
    {
        $this->square = $square;
        $this->pieceColor = $pieceColor;

        $this->moveStack = MoveStack::create();
        $this->moveStack->add($square);
    }

    public static function create(Square $square, ?PieceColor $pieceColor = null): Piece
    {
        return new static($square, $pieceColor);
    }

    public function move(Square $newSquare): void
    {
        $this->square = $newSquare;
    }

    public function getRGBPieceColor(): string
    {
        return match ($this->pieceColor) {
            PieceColor::White => 'FFFFFF',
            PieceColor::Black => '000000',
        };
    }
}