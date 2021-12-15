<?php

namespace Medine\GJ8486\Manga\Domain;

class Manga
{
    public function __construct(
        private $id,
        private $nombre,
        private $autor
    ) {
    }

    public static function create(string $id, string $nombre, string $autor)
    {
        return new self($id, $nombre, $autor);
    }

    public function id()
    {
        return $this->id;
    }

    public function autor()
    {
        return $this->autor;
    }

    public function nombre()
    {
        return $this->nombre;
    }
}
