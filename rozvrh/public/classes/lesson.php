<?php

class lesson {
    public string $name;
    public int $order;
    public string $room;
    public string $teacher;

    function __construct(string $name, string $room, string $teacher) {
        $this->name = $name;
        $this->room = $room;
        $this->teacher = $teacher;
    }

}


