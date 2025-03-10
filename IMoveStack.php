<?php

declare(strict_types=1);

namespace Chessboard;

interface IMoveStack
{
    public static function create(): MoveStack;

    public function getMoves(): array;

    public function add(Square $square): void;

    public function getFirstMove(): ?Square;

    public function getLastMove(): ?Square;

    public function getMovesCount(): int;

    public function delete(): void;
}