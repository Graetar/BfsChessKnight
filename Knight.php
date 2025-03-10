<?php

declare(strict_types=1);

namespace Chessboard;

final class Knight extends Piece
{
    /**
     * @return Square[]
     */
    public function getShortestWayToSquare(Square $squareFrom, Square $squareTo): array
    {
        $possibleDirections = [[-2, -1], [-1, -2], [1, -2], [2, -1], [2, 1], [1, 2], [-1, 2], [-2, 1]];
        $cycle = true;
        $visited = [];

        $moveStack = MoveStack::create();
        $moveStack->add($squareFrom);

        while ($cycle) {
            $cycle = false;
            $lastSquare = $moveStack->getLastMove();

            if ($lastSquare->equals($squareTo)) {
                return $moveStack->getMoves();
            }

            foreach ($possibleDirections as [$deltaFile, $deltaRank]) {
                $newFile = $lastSquare->file + $deltaFile;
                $newRank = $lastSquare->rank + $deltaRank;

                $newSquare = Square::create($newFile, $newRank);
                $key = $newSquare->getCoordinates();

                if ($newFile >= 0 && $newFile < 8 && $newRank >= 0 && $newRank < 8 && !isset($visited[$key])) {
                    $visited[$key] = true;
                    $cycle = true;
                    $moveStack->add($newSquare);
                }
            }
        }

        return [];
    }
}
