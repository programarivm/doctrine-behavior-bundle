<?php

namespace Programarivm\DoctrineBehaviorBundle;

use Programarivm\DoctrineBehaviorBundle\DependencyInjection\ProgramarivmDoctrineBehaviorExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DoctrineBehaviorBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new ProgramarivmDoctrineBehaviorExtension();
        }

        return $this->extension;
    }
}
