<?php

require('includes/configuration/prepend.inc.php');
require_once('dialog/DialogEditConfirmation.php');
require_once('dialog/DialogConfirm.php');
require('general.php');
require('utilities.php');

class ViewListConfirmationForm extends QForm {

    protected $user;
    protected $dtgConfirmations;
    protected $btnNewConfirmation;
    protected $dlgConfirm;
    protected $dlgDialogEditConfirmation;
    protected $dlgDialogPermit;
    protected $lblWallet;
    
    protected $txtNombre;
    protected $btnFilter;
    
    protected $alertTypes;
    
    protected function Form_Run() {

        $Datos1 = @unserialize($_SESSION['smsAdmin']);

        if ($Datos1) {
            $this->user = Administrator::LoadByEmail($Datos1->Email);
        } else {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/login');
        }
        $this->items_Found();
    }

    protected function Form_Create() {
        $this->objDefaultWaitIcon = new QWaitIcon($this);

        $this->dlgDialogEditConfirmation = new DialogEditConfirmation($this, 'close_edit');
        $this->dlgConfirm = new DialogConfirm($this, "close_confirm");

        $this->dtgConfirmations = new ConfirmationDataGrid($this);
        $this->dtgConfirmations->Paginator = new QPaginator($this->dtgConfirmations);
        $this->dtgConfirmations->Paginator->strLabelForPrevious = '<i class="icon wb-chevron-left-mini"></i>';
        $this->dtgConfirmations->Paginator->strLabelForNext = '<i class="icon wb-chevron-right-mini"></i>';
        $this->dtgConfirmations->ItemsPerPage = 20;
        $this->dtgConfirmations->CssClass = 'table table-bordered table-striped toggle-circle';
        $this->dtgConfirmations->UseAjax = true;
        $this->dtgConfirmations->WaitIcon = $this->objDefaultWaitIcon;
        $this->dtgConfirmations->ShowFilter = false;
        $this->dtgConfirmations->SortColumnIndex = 4;
        $this->dtgConfirmations->SortDirection = true;
        
        $this->dtgConfirmations->MetaAddColumn('CreateDateTime');
        $this->dtgConfirmations->MetaAddColumn('FromSms');
        $this->dtgConfirmations->MetaAddColumn('BodySms');
        $this->dtgConfirmations->MetaAddColumn('CodeSms');
        $this->dtgConfirmations->MetaAddColumn('PhoneSms');
        $this->dtgConfirmations->MetaAddColumn('EmailCreated');
        $this->dtgConfirmations->MetaAddColumn('PasswordCreated');
        $this->dtgConfirmations->MetaAddColumn('IpCreated');
        $this->dtgConfirmations->MetaAddColumn('Verified');
        $this->dtgConfirmations->MetaAddColumn('DomainCreated');
        
        $this->dtgConfirmations->AddColumn(new QDataGridColumn('Status', '<?= $_FORM->statusRender($_ITEM); ?>', 'HtmlEntities=false', 'Width=100',
              array('OrderByClause' => QQ::OrderBy(QQN::Confirmation()->Verified), 'ReverseOrderByClause' => QQ::OrderBy(QQN::Confirmation()->Verified, false))
                
                ));
        $this->dtgConfirmations->AddColumn(new QDataGridColumn('', '<?= $_FORM->actionsRender($_ITEM); ?>', 'HtmlEntities=false', 'Width=100'));
        
        $this->lblWallet = new QLabel($this);
        $this->lblWallet->HtmlEntities = false;
        
        
        $this->btnNewConfirmation = new QButton($this);
        $this->btnNewConfirmation->Text = '<i class="icon wb-plus" aria-hidden="true"></i>';
        $this->btnNewConfirmation->CssClass = "site-action-toggle btn-raised btn btn-primary btn-floating";
        $this->btnNewConfirmation->HtmlEntities = false;
        $this->btnNewConfirmation->AddAction(new QClickEvent(), new QAjaxAction('btnNewConfirmation_Click'));
        
        $this->txtNombre = new QTextBox($this);
        $this->txtNombre->Placeholder = "From value";

        $this->btnFilter = new QButton($this);
        $this->btnFilter->CssClass = "btn btn-success";
        $this->btnFilter->HtmlEntities = false;
        $this->btnFilter->Text = '<i class="icon fa-filter" aria-hidden="true"></i>';
        $this->btnFilter->AddAction(new QClickEvent(), new QAjaxAction('actionFilter_Click'));
        
        $this->alertTypes = getAlertTypes();
        
    }

    protected function items_Found() {
        $countProjects = Confirmation::CountAll();
        if ($countProjects == 0) {
            QApplication::ExecuteJavaScript("itemsFound(1);");
        } else {
            QApplication::ExecuteJavaScript("itemsFound(2);");
        }
    }
    
     public function actionFilter_Click($strFormId, $strControlId, $strParameter) {
        if (trim($this->txtNombre->Text != "")) {
            $searchTipo = QQ::OrCondition(
                    QQ::Like(QQN::Confirmation()->FromSms, "%".trim($this->txtNombre->Text)."%")
             );
        }
        else {
            $searchTipo = QQ::All();
        }

        $this->dtgConfirmations->AdditionalConditions = QQ::AndCondition(
            $searchTipo
        );

        $this->dtgConfirmations->Refresh();
        QApplication::ExecuteJavaScript("showAlert('".$this->alertTypes['success']."','Filter correctly!');");
        //QApplication::ExecuteJavaScript("showSuccess('Filter correctly!');");
    }

    public function btnNewConfirmation_Click($strFormId, $strControlId, $strParameter) {
        $this->dlgDialogEditConfirmation->Title = addslashes("<i class='icon wb-plus'></i> New Confirmation");
        $this->dlgDialogEditConfirmation->createNew();
        $this->dlgDialogEditConfirmation->ShowDialogBox();
    }

    public function planRenderLabel(User $obj) {

        if ($obj->MiningOption == 1) {
            return '<div class="label label-table label-primary">Light</div>';
        } else if ($obj->MiningOption == 2) {
            return '<div class="label label-table label-success">Standard</div>';
        } elseif ($obj->MiningOption == 3) {
            return '<div class="label label-table label-info">Power</div>';
        } elseif ($obj->MiningOption == 4) {
            return '<div class="label label-table label-warning">Super Power</div>';
        } elseif ($obj->MiningOption == 5) {
            return '<div class="label label-table label-dark">Pro Plus</div>';
        } else {
            return '<div class="label label-table label-default">None</div>';
        }
    }

    public function statusRender(Confirmation $obj) {

        if ($obj->Verified == 1) {
            return '<div class="label label-table label-success">Created</div>';
        } else if ($obj->Verified == 2) {
            return '<div class="label label-table label-info">Used</div>';
        } else {
            return '<div class="label label-table label-default">None</div>';
        }
    }

    protected function login_Click($strFormId, $strControlId, $strParameter) {
        $User = Confirmation::LoadByIdConfirmation($strParameter);

        if ($User) {
            $User->Password = 'NULL';
            $_SESSION['DatosUsuario'] = serialize($User);
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/profileuser');
            return;
        }
    }

    public function actionsRender(Confirmation $id) {
        $controlID = 'edit' . $id->IdConfirmation;
        $editCtrl = $this->dtgConfirmations->GetChildControl($controlID);
        if (!$editCtrl) {
            $editCtrl = new QLabel($this->dtgConfirmations, $controlID);
            $editCtrl->HtmlEntities = FALSE;
            $editCtrl->Cursor = QCursor::Pointer;
            $editCtrl->Text = '<div  class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                            <i class="icon wb-edit" aria-hidden="true"></i>
                          </div>';
            $editCtrl->ActionParameter = $id->IdConfirmation;
            $editCtrl->AddAction(new QClickEvent(), new QAjaxAction('edit_Click'));
        }

        $controlID2 = 'del' . $id->IdConfirmation;
        $deleteCtrl = $this->dtgConfirmations->GetChildControl($controlID2);
        if (!$deleteCtrl) {
            $deleteCtrl = new QLabel($this->dtgConfirmations, $controlID2);
            $deleteCtrl->HtmlEntities = FALSE;
            $deleteCtrl->Cursor = QCursor::Pointer;
            $deleteCtrl->Text = '<div  class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                            <i class="icon wb-trash" aria-hidden="true"></i>
                          </div>';
            $deleteCtrl->ActionParameter = $id->IdConfirmation;
            $deleteCtrl->AddAction(new QClickEvent(), new QAjaxAction('delete_Click'));
        }

        return "<center>" . $editCtrl->Render(false) . ' ' . $deleteCtrl->Render(false) . "</center>";
    }

    public function edit_Click($strFormId, $strControlId, $strParameter) {
        $this->dlgDialogEditConfirmation->Title = addslashes("<i class='icon wb-edit'></i> Edit Confirmation");
        $this->dlgDialogEditConfirmation->loadDefault($strParameter);
        $this->dlgDialogEditConfirmation->ShowDialogBox();
    }

    public function delete_Click($strFormId, $strControlId, $strParameter) {
        $this->dlgConfirm->Title = addslashes("<i class='icon wb-warning'></i> Confirm Delete");
        $this->dlgConfirm->txtMessage = "Are you sure you want to delete this confirmation?";
        $this->dlgConfirm->ID = intval($strParameter);
        $this->dlgConfirm->ShowDialogBox();
    }

    protected function delete($id) {
        try {
            $users = Confirmation::LoadByIdConfirmation(intval($id));
            $users->Delete();
            $this->items_Found();
            QApplication::ExecuteJavaScript("showAlert('".$this->alertTypes['success']."','Deleted successfully!');");
            //QApplication::ExecuteJavaScript("showSuccess('Deleted successfully!');");
        } catch (QMySqliDatabaseException $ex) {
            QApplication::ExecuteJavaScript("showAlert('".$this->alertTypes['warning']."','".str_replace("'", "\'", $ex->getMessage())."');");
            //QApplication::ExecuteJavaScript("showWarning('Error " . str_replace("'", "\'", $ex->getMessage()) . "');");
        }
    }

    public function close_edit($update) {
        if ($update) {
            $this->dtgConfirmations->Refresh();
            $this->items_Found();
            QApplication::ExecuteJavaScript("showAlert('".$this->alertTypes['success']."','Data updated correctly!');");
            //QApplication::ExecuteJavaScript("showSuccess('Data updated correctly');");
        }
    }

    public function close_confirm($answer, $id) {
        if ($answer) {
            $this->delete($id);
        }
        $this->dtgConfirmations->Refresh();
    }

}

ViewListConfirmationForm::Run('ViewListConfirmationForm');
?>