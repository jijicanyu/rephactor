<?php

namespace AQ\Rephactor\Refactoring;

class FileRenamer implements RefactorInterface
{
    public function addCandidate($item)
    {

    }
    public function doRefactor()
    {
        foreach ($this->getValidCandidates() as $candidate) {

        }
    }
}