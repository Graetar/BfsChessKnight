<?php

declare(strict_types=1);

namespace Chessboard;

final class Knight extends Piece
{
    /**
     * @return Square[]
     */
    public function getShortestWayToSquare(Square $squareTo): array
    {
        $possibleDirections = [[-2, -1], [-2, 1], [-1, -2], [-1, 2], [1, -2], [1, 2], [2, -1], [2, 1]];
        $cycle = true;
        $visited = [];

        while ($cycle) {
            $cycle = false;
            $lastSquare = $this->moveStack->getLastMove();

            if ($lastSquare->equals($squareTo)) {
                return $this->moveStack->getMoves();
            }

            foreach ($possibleDirections as [$deltaFile, $deltaRank]) {
                $newFile = $lastSquare->file + $deltaFile;
                $newRank = $lastSquare->rank + $deltaRank;

                $newSquare = Square::create($newFile, $newRank);
                $key = $newSquare->getCoordinates();

                if ($newFile >= 0 && $newFile < 8 && $newRank >= 0 && $newRank < 8 && !isset($visited[$key])) {
                    $visited[$key] = true;
                    $cycle = true;
                    $this->moveStack->add($newSquare);
                }
            }
        }

        return [];
    }
}