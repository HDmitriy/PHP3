<?php

class Application {
    protected $dbConnection;
    protected $dbRecord;
    protected $dbQueryBuiler;

    public function __construct(DBFactoryInterface $DBFactory)
    {
        $this->dbConnection = $DBFactory->createDBConnection();
        $this->dbRecord = $DBFactory->createDBRecord();
        $this->dbQueryBuiler = $DBFactory->createDBQueryBuiler();
    }
    
    public function run() {}
}

interface DBConnectionInterface {};
interface DBRecordInterface {};
interface DBQueryBuilerInterface {};

class MySqlConnection implements DBConnectionInterface {}

class MySqlRecord implements DBRecordInterface {}

class MySqlQueryBuiler implements DBQueryBuilerInterface {}


class PostgreSQLConnection implements DBConnectionInterface {}

class PostgreSQLRecord implements DBRecordInterface {}

class PostgreSQLQueryBuiler implements DBQueryBuilerInterface {}


class OracleConnection implements DBConnectionInterface {}

class OracleRecord implements DBRecordInterface {}

class OracleQueryBuiler implements DBQueryBuilerInterface {}

interface DBFactoryInterface {

    public function createDBConnection(): DBConnectionInterface;
    public function createDBRecord(): DBRecordInterface;
    public function createDBQueryBuiler(): DBQueryBuilerInterface;

}

Class MySQLFactory implements DBFactoryInterface {

    public function createDBConnection(): DBConnectionInterface {

        return new MySqlConnection();
    }
    public function createDBRecord(): DBRecordInterface {

        return new MySqlRecord();

    }
    public function createDBQueryBuiler(): DBQueryBuilerInterface {

        return new MySqlQueryBuiler();

    }
}

class PostgreSQLFactory implements DBFactoryInterface {

    public function createDBConnection(): DBConnectionInterface {

        return new PostgreSQLConnection();
    }
    public function createDBRecord(): DBRecordInterface {

        return new PostgreSQLRecord();

    }
    public function createDBQueryBuiler(): DBQueryBuilerInterface {

        return new PostgreSQLQueryBuiler();

    }
}

class OracleFactory implements DBFactoryInterface {

    public function createDBConnection(): DBConnectionInterface {

        return new OracleConnection();
    }
    public function createDBRecord(): DBRecordInterface {

        return new OracleRecord();

    }
    public function createDBQueryBuiler(): DBQueryBuilerInterface {

        return new OracleQueryBuiler();

    }
}

$application = new Application(
    new PostgreSQLFactory()
);