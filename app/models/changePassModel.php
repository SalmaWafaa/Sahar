<?php
require_once 'UserModel.php';
class changePassModel extends UserModel
{
    public  $title = 'Change Password Page';
    protected $oldPassword;
    protected $oldPasswordErr;
    protected $NewPassword;
    protected $NewPasswordErr;
    protected $NewCPassword;
    protected $NewCPasswordErr;


    public function getOldPass()
    {
        return $this->oldPassword;
    }
    public function setOldPass($oldPassword)
    {
        $this->oldPassword = $oldPassword;
    }

    public function getOldPassErr()
    {
        return $this->oldPasswordErr;
    }
    public function setOldPassErr($oldPasswordErr)
    {
        $this->oldPasswordErr = $oldPasswordErr;
    }
    public function getNewPass()
    {
        return $this->NewPassword;
    }
    public function setNewPass($NewPassword)
    {
        $this->NewPassword = $NewPassword;
    }

    public function getNewPassErr()
    {
        return $this->NewPasswordErr;
    }
    public function setNewPassErr($NewPasswordErr)
    {
        $this->NewPasswordErr = $NewPasswordErr;
    }
    public function getNewCPass()
    {
        return $this->NewCPassword;
    }
    public function setNewCPass($NewCPassword)
    {
        $this->NewCPassword = $NewCPassword;
    }

    public function getNewCPassErr()
    {
        return $this->NewCPasswordErr;
    }
    public function setNewCPassErr($NewCPasswordErr)
    {
        $this->NewCPasswordErr = $NewCPasswordErr;
    }

    public function checkpass($id)
    {
        $this->dbh->query('SELECT * from users WHERE ID = :id');
        $this->dbh->bind(':id', $id);
        $record = $this->dbh->single();
        $hash_pass = $record->password;
        if (password_verify($this->oldPassword,  $hash_pass)) {
        $this->dbh->query("UPDATE users SET `password`= :pass WHERE `ID`=:id");
        $this->dbh->bind(':pass',$this->NewPassword);
        $this->dbh->bind(':id',$id);
        return $this->dbh->execute();
        } else {
            return false;
        }
        
    
}
}
