<?php

	class DB {
		private $dbms;
		private $host;
		private $dbname;
		private $charset;
		private $dns;
		private $id;
		private $pw;

		function __construct($dbms, $host, $dbname, $charset, $id, $pw){
			$this->dbms = $dbms;
			$this->host = $host;
			$this->dbname = $dbname;
			$this->charset = $charset;
			$this->id = $id;
			$this->pw = $pw;
			$this->dns = $this->dbms.':host='.$this->host.';dbname='.$this->dbname.';charset='.$this->charset;
		}

		function open() {
			$this->pdo = new PDO($this->dns, $this->id, $this->pw);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			// echo 'PDO 클래스를 통해 접속이 성공하였습니다.';
		}

		function close() {
			$this->pdo = null; // 접속 끊음
		}

		function query($sql) {
		
			try {
				$this->open();

				$stmh = $this->pdo->prepare($sql);
				$stmh->execute();

				$this->close();
				return true; // 성공시 리턴 

			} catch( PDOException $e ) {
			    echo '에러 '.$e->getMessage();
			    return false; // 실패시 리턴 
			}
		}

		function fetch($sql) {

			try {
				$this->open();

				$stmh = $this->pdo->prepare($sql);
				$stmh->execute();
				$result = [];
				while( $row = $stmh->fetch(PDO::FETCH_ASSOC) ) {
					$result[] = $row;
				};

				$this->close();
				return true; // 성공시 리턴 

			} catch( PDOException $e ) {

				echo '에러 '.$e->getMessage();
				return false; // 실패시 리턴 
			}

			return $result;
		}
	}


?>