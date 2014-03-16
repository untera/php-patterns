<?php

class Logger implements \SplObserver
{
    private $events = [];

    public function update(SplSubject $subject)
    {
        $this->events[] = "subject has changed!";
    }

    public function getEvents()
    {
        return $this->events;
    }
}