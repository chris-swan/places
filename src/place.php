<?php
class Place
{
    private $description;
    private $duration;

    function __construct($description, $duration)
    {
        $this->description = $description;
        $this->duration = $duration;
    }

    function setDescription($new_description)
    {
        $this->description = (string) $new_description;
    }

    function getDescription()
    {
        return $this->description;
    }

    function setDuration()
    {
        $this->duration = (string) $new_duration;
    }

    function getDuration()
    {
        return $this->duration;
    }

    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_places'] = array();
    }
}
?>
