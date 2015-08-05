<?php
class Place
{
    private $description;
    private $duration;
    private $image;

    function __construct($description, $duration, $image)
    {
        $this->description = $description;
        $this->duration = $duration;
        $this->image = $image;
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

    function setImage()
    {
        $this->image = (string) $new_image;
    }

    function getImage()
    {
        return $this->image;
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
