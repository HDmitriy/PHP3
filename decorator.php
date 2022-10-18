<?php

interface QueryInterface {
    public function query($sql);
}

class Db implements QueryInterface {
    public function query($sql) {}
}

class PushNotify implements QueryInterface {
    protected $db;
    public function __construct(QueryInterface $db){
        $this->db=$db;
    }
    // push function
    public function query($sql){
        webPush();
        return $this->db->query($sql);
    }
}

class EmailNotify implements QueryInterface {
    protected $db;
    public function __construct(QueryInterface $db){
        $this->db=$db;
    }
    public function query($sql){
        mail();
        return $this->db->query($sql);
    
    }
}
$db = new EmailNotify(new PushNotify(new Db()));
$db->query();