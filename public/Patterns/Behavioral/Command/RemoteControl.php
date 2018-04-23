<?php

namespace Patterns\Behavioral\Command;

class RemoteControl
{
    public function submit(Command $command): self
    {
        $command->execute();
        return $this;
    }
}