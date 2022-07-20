<?php

class Anggota
{
    private $table = 'Anggota';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
}