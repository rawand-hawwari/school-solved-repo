<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');

    function emptyInputs($fname, $lname, $username, $email, $role, $pwd, $cwd){
        $result;


        if(empty($fname) || empty($lname) || empty($username) || empty($email) || empty($pwd) || empty($cwd) ||empty($role) ){
            $result = true;
        }
        else{
            $result = false;
        }

        return $result;
    }

    function invalidUsername($username){
        $result;

        if(preg_match("'/^[a-z\d_]{2,20}$/i'", $username)){
            $result = true;
        }
        else{
            $result = false;
        }
        
        return $result;
    }

    function invalidEmail($email){
        $result;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        
        return $result;
    }

    function pwdMatch($pwd, $cwd){
        $result;

        if($pwd !== $cwd){
            $result = true;
        }
        else{
            $result = false;
        }
        
        return $result;
    }

    function uidExist($db, $username, $email){
        $sql = "SELECT * FROM user WHERE username = ? or email = ?;";
        $stmt = $db->stmt_init();

        if(!$stmt = $db->prepare($sql)){
            header("location:../addUser.php?error=stmtfailed");
            exit();
        }

        $stmt->bind_param ("ss", $username, $email);
        $stmt->execute();

        $resultsdata = $stmt->get_result();

        if($row = $resultsdata -> fetch_assoc()){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        $stmt->close();
    }

    function createUser($db, $username, $fname, $lname, $email, $pwd, $role){
        
        $sql = "INSERT INTO user (username, firstname, lastname, email, password, role) VALUES( ?, ?, ?, ?, ? ,?);";
        $stmt = $db->stmt_init();

        if(!$stmt = $db->prepare($sql)){
            var_dump("wrong");die;
            header("location:../addUser.php?error=stmtfailed");
            exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $stmt->bind_param("ssssss", $username,$fname, $lname, $email, $hashedPwd, $role);
        $stmt->execute();
        $stmt->close();

        header("location:../userlist.php?Message=successfullyadded");
        exit();
    }



    function emptyForm($targetFilePath, $name, $details, $price){
        if(empty($targetFilePath) || empty($name) || empty($details) || empty($price)){
            return true;
        }
        return false;
    }