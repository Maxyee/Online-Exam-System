<?php
    
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../lib/Session.php');
    include_once ($filepath.'/../helpers/Format.php');

    class User{
        
        private $db;
        private $fm;
        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }
        
        public function userRegistration($username,$password,$firstname,$lastname,$email){
            $username = $this->fm->validation($username);
            $password = $this->fm->validation($password);
            $firstname = $this->fm->validation($firstname);
            $lastname = $this->fm->validation($lastname);
            $email = $this->fm->validation($email);
            
            $username = mysqli_real_escape_string($this->db->link,$username);
            $password = mysqli_real_escape_string($this->db->link,md5($password));
            $firstname = mysqli_real_escape_string($this->db->link,$firstname);
            $lastname = mysqli_real_escape_string($this->db->link,$lastname);
            $email = mysqli_real_escape_string($this->db->link,$email);
            
            if($username == "" || $password == "" || $firstname == "" || $lastname == "" || $email == ""){
                echo "<span style='color:red'>Field Must not be empty</span>";
                exit();
            }
            elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                echo "<span style='color:red'>Invalid email Address</span>";
                exit();
            }
            else{
                $chkquery = "SELECT * FROM tbl_user WHERE email='$email'";
                $chkresult = $this->db->select($chkquery);
                if($chkresult != false){
                    echo "<span style='color:red'>Email Address Already Exist !</span>";
                    exit();
                }
                else{
                    $query = "INSERT INTO tbl_user(username, password, firstname, lastname, email) VALUES('$username','$password','$firstname','$lastname','$email')";
                    $insert_row = $this->db->insert($query);
                    if($insert_row){
                        echo "<span style='color:green'>Registration Successful!!</span>";
                    }
                    else{
                        echo "<span style='color:red'>Error..Not Register.!</span>";
                    }
                }
            }
            
        }
        
        
        public function userLogin($email,$password){
            $email = $this->fm->validation($email);
            $password = $this->fm->validation($password);
            
            $email = mysqli_real_escape_string($this->db->link,$email);
            $password = mysqli_real_escape_string($this->db->link,$password);
            
            if($email == "" || $password == ""){
                echo "empty";
                exit();
            }
            else{
                $query = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
                $result = $this->db->select($query);
                if($result != false){
                    $value = $result->fetch_assoc();
                    if($value['status'] == '1'){
                        echo "disable";
                        exit();
                    }
                    else{
                        Session::init();
                        Session::set("login", true);
                        Session::set("userid", $value['userid']);
                        Session::set("username", $value['username']);
                    }
                }
                else{
                    echo "error";
                    exit();
                }
            }
        }
        
        
        
        public function getAdminData($data){
            $adminUser = $this->fm->validation($data['adminUser']);
            $adminPass = $this->fm->validation($data['adminPass']);
            $adminUser = mysqli_real_escape_string($this->db->link,$adminUser);
            $adminPass = mysqli_real_escape_string($this->db->link,md5($adminPass));
        }
        
        public function getUserData($userid){
            $query = "SELECT * FROM tbl_user WHERE userid = '$userid'";
            $result = $this->db->select($query);
            return $result;
        }
        
        
        
        public function getAllUser(){
            $query = "SELECT * FROM tbl_user ORDER BY userid DESC";
            $result = $this->db->select($query);
            return $result;
        }
        
        public function disableUser($userid){
            $query = "UPDATE tbl_user
                    SET
                    status = '1'
                    WHERE userid = '$userid'";
                    
            $updated_row = $this->db->update($query);
            if($updated_row){
                $msg = "<span style='color:red'>User Disabled!</span>";
                return $msg;
            }
            else{
                $msg = "<span style='color:green'>User Not Disabled!</span>";
                return $msg;
            }
        }
        
        public function enableUser($userid){
            $query = "UPDATE tbl_user
                    SET
                    status = '0'
                    WHERE userid = '$userid'";
                    
            $updated_row = $this->db->update($query);
            if($updated_row){
                $msg = "<span style='color:green'>User Enabled !</span>";
                return $msg;
            }
            else{
                $msg = "<span style='color:red'>User Not Enabled !</span>";
                return $msg;
            }
        }
        
        
        public function deleteUser($userid){
            $query      = "DELETE FROM tbl_user WHERE userid = '$userid'";
            $deldata    = $this->db->delete($query);
                    
            
            if($deldata){
                $msg = "<span style='color:green'>User Removed !</span>";
                return $msg;
            }
            else{
                $msg = "<span style='color:red'>Error...User Not Removed !</span>";
                return $msg;
            }
        }
        
        
        public function updateUserData($userid, $data){
            $username = $this->fm->validation($data['username']);
            $firstname = $this->fm->validation($data['firstname']);
            $lastname = $this->fm->validation($data['lastname']);
            $email = $this->fm->validation($data['email']);
            
            $username = mysqli_real_escape_string($this->db->link,$username);
            $firstname = mysqli_real_escape_string($this->db->link,$firstname);
            $lastname = mysqli_real_escape_string($this->db->link,$lastname);
            $email = mysqli_real_escape_string($this->db->link,$email);
            
            
            $query = "UPDATE tbl_user
                    SET
                    username = '$username',
                    firstname = '$firstname',
                    lastname = '$lastname',
                    email = '$email'
                    WHERE userid = '$userid'";
                    
            $updated_row = $this->db->update($query);
            if($updated_row){
                $msg = "<span style='color:green'>User Data Updated !</span>";
                return $msg;
            }
            else{
                $msg = "<span style='color:red'>User Data Not Updated !</span>";
                return $msg;
            }
        }
        
    }

?>