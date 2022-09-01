<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/session.php');

    function emptyInputs($fname, $lname, $username, $email, $role, $pwd, $cwd) {
        $result;
        if(empty($fname) || empty($lname) || empty($username) || empty($email) || empty($pwd) || empty($cwd) ||empty($role) ) {
            $result = true;
        }
        else {
            $result = false;
        }

        return $result;
    }

    function invalidUsername($username) {
        $result;
        if(preg_match("'/^[a-z\d_]{2,20}$/i'", $username)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email) {
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function pwdMatch($pwd, $cwd) {
        $result;
        if($pwd !== $cwd) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function uidExist($db, $username, $email) {
        $sql = "SELECT * FROM user WHERE username = ? or email = ?;";
        $stmt = $db->stmt_init();

        if(!$stmt = $db->prepare($sql)) {
            header("location:../addUser.php?error=stmtfailed");
            exit();
        }
        $stmt->bind_param ("ss", $username, $email);
        $stmt->execute();
        $resultsdata = $stmt->get_result();

        if($row = $resultsdata -> fetch_assoc()) {
            return $row;
        }
        else {
            $result = false;
            return $result;
        }

        $stmt->close();
    }

    function createUser($db, $username, $fname, $lname, $email, $pwd, $role) {
        $sql = "INSERT INTO user (username, firstname, lastname, email, password, role) VALUES( ?, ?, ?, ?, ? ,?);";
        $stmt = $db->stmt_init();

        if(!$stmt = $db->prepare($sql)) {
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

    // empty inputs for ptoduct form
    function emptyForm($fileName, $name, $details, $price, $sale) {
        if(empty($fileName) || empty($name) || empty($details) || empty($price) || empty($sale)) {
            return true;
        }
        return false;
    }

    // all inputs for ptoduct form are empty
    function allEmpty($fileName, $name, $details, $price, $sale) {
        if(empty($fileName) && empty($name) && empty($details) && empty($price) && empty($sale)) {
            return true;
        }
        return false;
    }

    // all inputs for user form are empty
    function isempty($uid, $fname, $lname, $email, $oldpwd, $newpwd, $cpwd) {
        if(empty($uid) && empty($fname) && empty($lame) && empty($email) && empty($oldpwd) && empty($newpwd) && empty($cpwd)) {
            return true;
        }
        return false;
    }

    // empty input for subscription form
    function eInputs($fname, $email, $phone, $msg) {
        if(empty($fname) || empty($email) || empty($phone) || empty($msg)) {
            return true;
        }
        return false;
    }