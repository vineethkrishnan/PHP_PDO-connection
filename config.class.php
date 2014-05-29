<?php
/*****************************************
 *  Configuration Script
 * ***************************************
 * @file   : config.class.php
 * @author : Vineeth N K(me@vineethkrisknan.in)
 * 
 * Description : 
 *      This script is the main configuration file for the entire site.
 * Make necessary edit on confifuration to work the site properly.
 * 
 */
class Config {

    protected $dbtype;
    protected $dbhost;
    protected $dbname;
    protected $dbuser;
    protected $dbpass;
    protected $dbpath;
    protected $settings;

    private function setDBAccess() {
        /* Change DBTYPE, HOST, DATABASE, USER, PASSWORD here*/
        $this->dbtype = "mysql";
        $this->dbhost = "localhost";
        $this->dbname = "root";
        $this->dbuser = "password";
        $this->dbpass = "c0d3ruy44105";
        $this->dbpath = "path to *.db"; // give path to db file if you are using postgreSQL  
    }

    public function __construct() {
        try {
            $this->setDBAccess();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getDBAccess() {
        $this->settings['db']['type'] = $this->dbtype;
        $this->settings['db']['host'] = $this->dbhost;
        $this->settings['db']['db_name'] = $this->dbname;
        $this->settings['db']['username'] = $this->dbuser;
        $this->settings['db']['password'] = $this->dbpass;
        $this->settings['db']['path'] = $this->dbpath;
        return $this->settings;
    }

}

?>
