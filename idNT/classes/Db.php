<?php

class Db
{

    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/../config/db.php';
        $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['host'];
        $this->dbh = new PDO($dsn, $config['user'], $config['password']);
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function getLastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

    public function getAll($class, $sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        $res = $sth->fetchAll(PDO::FETCH_CLASS, $class);
        return $res;
    }

    public function getOne($class, $sql, $params = [])
    {
        return $this->findAll($class, $sql, $params)[0];
    }

}