<?php

require('./qcubed.inc.php');
require('general.php');

class LoginForm extends QForm {

    protected $txtEmail;
    protected $txtPassword;
    protected $btnLogin;
    

    protected function Form_Run() {
        $Datos1 = @unserialize($_SESSION['smsAdmin']);

        if ($Datos1) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/confirmations');
        }
        
        QApplication::ExecuteJavaScript("showWarning('" . htmlentities("One of the provided details is incorrect.") . "');");
    }

    protected function Form_Create() {
        $this->txtEmail = new QTextBox($this, 'idTextEmail2');
        $this->txtEmail->CssClass = "form-control";
        $this->txtEmail->Placeholder = "Email";

        $this->txtPassword = new QTextBox($this, 'idTextPass2');
        $this->txtPassword->TextMode = QTextMode::Password;
        $this->txtPassword->CssClass = "form-control";
        $this->txtPassword->Placeholder = htmlentities("Password");
        $this->txtPassword->AddAction(new QEnterKeyEvent(), new QAjaxAction("btnLogin_Click"));

        $this->btnLogin = new QButton($this, 'idlogintext');
        $this->btnLogin->Text = '<i class="icon fa-sign-in" aria-hidden="true"></i>' . htmlentities("log in");
        $this->btnLogin->HtmlEntities = false;
        $this->btnLogin->CssClass = "btn btn-raised btn-primary btn-block btn-lg margin-top-40";
        $this->btnLogin->AddAction(new QClickEvent(), new QAjaxAction('btnLogin_Click'));
        
    }

    protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {
        $this->loginUser();
    }

    protected function loginUser() {
        $User = Administrator::LoadByEmail(trim($this->txtEmail->Text));
        if ($User) {
            $_SESSION['smsAdmin'] = serialize($User);
            if ($User->Password == trim($this->txtPassword->Text)) {
                $User->Password = 'NULL';
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/confirmations'); 
                
                return;
                
            } else {
                QApplication::ExecuteJavaScript("showWarning('" . htmlentities("One of the provided details is incorrect.") . "');");
                return false;
            }
        } else {
            QApplication::ExecuteJavaScript("showWarning('" . htmlentities("One of the provided details is incorrect.") . "');");
            return false;
        }
    }
}

LoginForm::Run('LoginForm');
?>