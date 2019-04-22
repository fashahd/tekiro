<?php
	class ModelUsers extends CI_Model {

		function validation($username,$password){
            $sql    = " SELECT * FROM `tekiro_users` WHERE username = ? and `password` = ?";
            // return $sql;
            $query  = $this->db->query($sql,array($username,$password));
            if($query->num_rows()>0){
                $row    = $query->row();
                $id     = $row->id;
                $username  = $row->username;
                $email  = $row->email;
                $name   = $row->fullname;
                $data = array(
                    "status"    => "sukses",
                    "username"  => $username,
                    "name"      => $name,
                    "email"     => $email,
                    "message"   => "Login Success"
                );
                $this->session->set_userdata("userlogin",$data);
            }else{
                $data = array(
                    "status"    => "error",
                    "message"   => "Username / password is not match"
                );
            }
            return json_encode($data);
        }
	}
?>