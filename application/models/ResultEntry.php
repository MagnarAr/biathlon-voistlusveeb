<?php

/**
 * Created by PhpStorm.
 * User: Magnar
 * Date: 19.03.2016
 * Time: 23:01
 */
class ResultEntry extends MY_Model{

    const DB_TABLE = 'Result';
    const DB_TABLE_PK = 'id';

    public $id;
    public $raceid;
    public $place;
    public $bib;
    public $firstname;
    public $lastname;
    public $club;
    public $prone1;
    public $prone2;
    public $standing1;
    public $standing2;
    public $total;
    public $start;
    public $end;

    /**
     * Create record.
     */
    private function insert() {
        //$this->db->insert($this::DB_TABLE, $this);
        $this->db->query("call AddNewResultEntry('".
            strip_tags($this->raceid)."', '".
            strip_tags($this->place)."', '".
            strip_tags($this->bib)."', '".
            strip_tags($this->firstname)."', '".
            strip_tags($this->lastname)."', '".
            strip_tags($this->club)."', '".
            strip_tags($this->prone1)."', '".
            strip_tags($this->prone2)."', '".
            strip_tags($this->standing1)."', '".
            strip_tags($this->standing2)."', '".
            strip_tags($this->total)."', '".
            strip_tags($this->start)."', '".
            strip_tags($this->end).
            "')");
        //$this->{$this::DB_TABLE_PK} = $this->db->insert_id();
    }
    public function save() {
        $this->insert();
    }

}