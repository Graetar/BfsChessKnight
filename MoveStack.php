<?php

declare(strict_types=1);

namespace Chessboard;

final class MoveStack implements IMoveStack
{

    /** @var Square[] */
    private array $moves;

    public static function create(): MoveStack
    {
        return new self;
    }

    /**
     * @return Square[]
     */
    public function getMoves(): array
    {
        return $this->moves;
    }

    public function add(Square $square): void
    {
        $this->moves[] = $square;
    }

    public function getFirstMove(): ?Square
    {
        return reset($this->moves);
    }

    public function getLastMove(): ?Square
    {
        return end($this->moves);
    }

    public function delete(): void
    {
        $this->moves = [];
    }

    public function getMovesCount(): int
    {
        return count($this->moves);
    }
}