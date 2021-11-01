<?php

class Auth{

    private $hostname = 'localhost';
    private $database = 'mobile_prak';
    private $username = 'root';
    private $password = null;

    private $db;

    public function __construct(){

        $this->db = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        
    }

    public function proses_login(){

        $res = $this->db->query("SELECT *FROM users WHERE username = '".$_POST['username']."'");

        # Cek record tabel users
        # Jika return > 0 maka username nya benar, dilanjut validasi password
        $count = $res->num_rows;
        $result = $res->fetch_object();

        if($count > 0){

            # Cek Password hash pakai fungsi password_veritfy
            if(password_verify($_POST['password'], $result->password)){

                # Password Benar
                # Create Session
                $session = [
                    'name' => $result->name,
                    'username' => $result->username
                ];

                # Mulai Session
                session_start();
                $_SESSION['login'] = $session;

                header('location:../views/dashboard.php');

            }else{

                # Password salah
                header('location:../index.php?password_fails');

            }

        }else{

            # Username salah
            header('location:../index.php?username_fails');

        }

    }

    public function logout(){

        session_start();
        session_destroy();

        header('location:../index.php?logout');

    }

}

$auth = new Auth;

if($_GET['route'] == 'login'){

    $auth->proses_login();

}else if($_GET['route'] == 'logout'){

    $auth->logout();

}

