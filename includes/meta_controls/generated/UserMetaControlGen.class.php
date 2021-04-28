<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the User class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single User object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a UserMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read User $User the actual User data class being edited
	 * @property QLabel $IdUserControl
	 * @property-read QLabel $IdUserLabel
	 * @property QTextBox $EmailControl
	 * @property-read QLabel $EmailLabel
	 * @property QTextBox $PasswordControl
	 * @property-read QLabel $PasswordLabel
	 * @property QTextBox $FirstNameControl
	 * @property-read QLabel $FirstNameLabel
	 * @property QTextBox $MiddleNameControl
	 * @property-read QLabel $MiddleNameLabel
	 * @property QTextBox $LastNameControl
	 * @property-read QLabel $LastNameLabel
	 * @property QTextBox $CountryControl
	 * @property-read QLabel $CountryLabel
	 * @property QTextBox $CityControl
	 * @property-read QLabel $CityLabel
	 * @property QTextBox $PhoneControl
	 * @property-read QLabel $PhoneLabel
	 * @property QDateTimePicker $BirthdayControl
	 * @property-read QLabel $BirthdayLabel
	 * @property QTextBox $YearGraduationControl
	 * @property-read QLabel $YearGraduationLabel
	 * @property QTextBox $CohortControl
	 * @property-read QLabel $CohortLabel
	 * @property QTextBox $ImageDriverControl
	 * @property-read QLabel $ImageDriverLabel
	 * @property QTextBox $ImagePhotoControl
	 * @property-read QLabel $ImagePhotoLabel
	 * @property QIntegerTextBox $MiningOptionControl
	 * @property-read QLabel $MiningOptionLabel
	 * @property QIntegerTextBox $StatusUserControl
	 * @property-read QLabel $StatusUserLabel
	 * @property QTextBox $MacControl
	 * @property-read QLabel $MacLabel
	 * @property QTextBox $TokenMacControl
	 * @property-read QLabel $TokenMacLabel
	 * @property QIntegerTextBox $StatusTokenMacControl
	 * @property-read QLabel $StatusTokenMacLabel
	 * @property QTextBox $WalletAddressControl
	 * @property-read QLabel $WalletAddressLabel
	 * @property QIntegerTextBox $NumberMasterNodeControl
	 * @property-read QLabel $NumberMasterNodeLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class UserMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var User objUser
		 * @access protected
		 */
		protected $objUser;
		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;
		/**
		 * @var string strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that allow the editing of User's individual data fields
		/**
		 * @var QLabel lblIdUser
		 * @access protected
		 */
		protected $lblIdUser;
		/**
		 * @var QTextBox txtEmail
		 * @access protected
		 */
		protected $txtEmail;
		/**
		 * @var QTextBox txtPassword
		 * @access protected
		 */
		protected $txtPassword;
		/**
		 * @var QTextBox txtFirstName
		 * @access protected
		 */
		protected $txtFirstName;
		/**
		 * @var QTextBox txtMiddleName
		 * @access protected
		 */
		protected $txtMiddleName;
		/**
		 * @var QTextBox txtLastName
		 * @access protected
		 */
		protected $txtLastName;
		/**
		 * @var QTextBox txtCountry
		 * @access protected
		 */
		protected $txtCountry;
		/**
		 * @var QTextBox txtCity
		 * @access protected
		 */
		protected $txtCity;
		/**
		 * @var QTextBox txtPhone
		 * @access protected
		 */
		protected $txtPhone;
		/**
		 * @var QDateTimePicker calBirthday
		 * @access protected
		 */
		protected $calBirthday;
		/**
		 * @var QTextBox txtYearGraduation
		 * @access protected
		 */
		protected $txtYearGraduation;
		/**
		 * @var QTextBox txtCohort
		 * @access protected
		 */
		protected $txtCohort;
		/**
		 * @var QTextBox txtImageDriver
		 * @access protected
		 */
		protected $txtImageDriver;
		/**
		 * @var QTextBox txtImagePhoto
		 * @access protected
		 */
		protected $txtImagePhoto;
		/**
		 * @var QIntegerTextBox txtMiningOption
		 * @access protected
		 */
		protected $txtMiningOption;
		/**
		 * @var QIntegerTextBox txtStatusUser
		 * @access protected
		 */
		protected $txtStatusUser;
		/**
		 * @var QTextBox txtMac
		 * @access protected
		 */
		protected $txtMac;
		/**
		 * @var QTextBox txtTokenMac
		 * @access protected
		 */
		protected $txtTokenMac;
		/**
		 * @var QIntegerTextBox txtStatusTokenMac
		 * @access protected
		 */
		protected $txtStatusTokenMac;
		/**
		 * @var QTextBox txtWalletAddress
		 * @access protected
		 */
		protected $txtWalletAddress;
		/**
		 * @var QIntegerTextBox txtNumberMasterNode
		 * @access protected
		 */
		protected $txtNumberMasterNode;

		// Controls that allow the viewing of User's individual data fields
		/**
		 * @var QLabel lblEmail
		 * @access protected
		 */
		protected $lblEmail;
		/**
		 * @var QLabel lblPassword
		 * @access protected
		 */
		protected $lblPassword;
		/**
		 * @var QLabel lblFirstName
		 * @access protected
		 */
		protected $lblFirstName;
		/**
		 * @var QLabel lblMiddleName
		 * @access protected
		 */
		protected $lblMiddleName;
		/**
		 * @var QLabel lblLastName
		 * @access protected
		 */
		protected $lblLastName;
		/**
		 * @var QLabel lblCountry
		 * @access protected
		 */
		protected $lblCountry;
		/**
		 * @var QLabel lblCity
		 * @access protected
		 */
		protected $lblCity;
		/**
		 * @var QLabel lblPhone
		 * @access protected
		 */
		protected $lblPhone;
		/**
		 * @var QLabel lblBirthday
		 * @access protected
		 */
		protected $lblBirthday;
		/**
		 * @var QLabel lblYearGraduation
		 * @access protected
		 */
		protected $lblYearGraduation;
		/**
		 * @var QLabel lblCohort
		 * @access protected
		 */
		protected $lblCohort;
		/**
		 * @var QLabel lblImageDriver
		 * @access protected
		 */
		protected $lblImageDriver;
		/**
		 * @var QLabel lblImagePhoto
		 * @access protected
		 */
		protected $lblImagePhoto;
		/**
		 * @var QLabel lblMiningOption
		 * @access protected
		 */
		protected $lblMiningOption;
		/**
		 * @var QLabel lblStatusUser
		 * @access protected
		 */
		protected $lblStatusUser;
		/**
		 * @var QLabel lblMac
		 * @access protected
		 */
		protected $lblMac;
		/**
		 * @var QLabel lblTokenMac
		 * @access protected
		 */
		protected $lblTokenMac;
		/**
		 * @var QLabel lblStatusTokenMac
		 * @access protected
		 */
		protected $lblStatusTokenMac;
		/**
		 * @var QLabel lblWalletAddress
		 * @access protected
		 */
		protected $lblWalletAddress;
		/**
		 * @var QLabel lblNumberMasterNode
		 * @access protected
		 */
		protected $lblNumberMasterNode;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * UserMetaControl to edit a single User object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single User object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserMetaControl
		 * @param User $objUser new or existing User object
		 */
		 public function __construct($objParentObject, User $objUser) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this UserMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked User object
			$this->objUser = $objUser;

			// Figure out if we're Editing or Creating New
			if ($this->objUser->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to
		 * edit, or if we are also allowed to create a new one, etc.
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserMetaControl
		 * @param integer $intIdUser primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing User object creation - defaults to CreateOrEdit
 		 * @return UserMetaControl
		 */
		public static function Create($objParentObject, $intIdUser = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdUser)) {
				$objUser = User::Load($intIdUser);

				// User was found -- return it!
				if ($objUser)
					return new UserMetaControl($objParentObject, $objUser);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a User object with PK arguments: ' . $intIdUser);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new UserMetaControl($objParentObject, new User());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing User object creation - defaults to CreateOrEdit
		 * @return UserMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdUser = QApplication::PathInfo(0);
			return UserMetaControl::Create($objParentObject, $intIdUser, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this UserMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing User object creation - defaults to CreateOrEdit
		 * @return UserMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdUser = QApplication::QueryString('intIdUser');
			return UserMetaControl::Create($objParentObject, $intIdUser, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdUser
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdUser_Create($strControlId = null) {
			$this->lblIdUser = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdUser->Name = QApplication::Translate('Id User');
			if ($this->blnEditMode)
				$this->lblIdUser->Text = $this->objUser->IdUser;
			else
				$this->lblIdUser->Text = 'N/A';
			return $this->lblIdUser;
		}

		/**
		 * Create and setup QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->Text = $this->objUser->Email;
			$this->txtEmail->Required = true;
			$this->txtEmail->MaxLength = User::EmailMaxLength;
			return $this->txtEmail;
		}

		/**
		 * Create and setup QLabel lblEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmail_Create($strControlId = null) {
			$this->lblEmail = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmail->Name = QApplication::Translate('Email');
			$this->lblEmail->Text = $this->objUser->Email;
			$this->lblEmail->Required = true;
			return $this->lblEmail;
		}

		/**
		 * Create and setup QTextBox txtPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPassword_Create($strControlId = null) {
			$this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPassword->Name = QApplication::Translate('Password');
			$this->txtPassword->Text = $this->objUser->Password;
			$this->txtPassword->Required = true;
			$this->txtPassword->MaxLength = User::PasswordMaxLength;
			return $this->txtPassword;
		}

		/**
		 * Create and setup QLabel lblPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPassword_Create($strControlId = null) {
			$this->lblPassword = new QLabel($this->objParentObject, $strControlId);
			$this->lblPassword->Name = QApplication::Translate('Password');
			$this->lblPassword->Text = $this->objUser->Password;
			$this->lblPassword->Required = true;
			return $this->lblPassword;
		}

		/**
		 * Create and setup QTextBox txtFirstName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFirstName_Create($strControlId = null) {
			$this->txtFirstName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFirstName->Name = QApplication::Translate('First Name');
			$this->txtFirstName->Text = $this->objUser->FirstName;
			$this->txtFirstName->Required = true;
			$this->txtFirstName->MaxLength = User::FirstNameMaxLength;
			return $this->txtFirstName;
		}

		/**
		 * Create and setup QLabel lblFirstName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFirstName_Create($strControlId = null) {
			$this->lblFirstName = new QLabel($this->objParentObject, $strControlId);
			$this->lblFirstName->Name = QApplication::Translate('First Name');
			$this->lblFirstName->Text = $this->objUser->FirstName;
			$this->lblFirstName->Required = true;
			return $this->lblFirstName;
		}

		/**
		 * Create and setup QTextBox txtMiddleName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtMiddleName_Create($strControlId = null) {
			$this->txtMiddleName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtMiddleName->Name = QApplication::Translate('Middle Name');
			$this->txtMiddleName->Text = $this->objUser->MiddleName;
			$this->txtMiddleName->Required = true;
			$this->txtMiddleName->MaxLength = User::MiddleNameMaxLength;
			return $this->txtMiddleName;
		}

		/**
		 * Create and setup QLabel lblMiddleName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMiddleName_Create($strControlId = null) {
			$this->lblMiddleName = new QLabel($this->objParentObject, $strControlId);
			$this->lblMiddleName->Name = QApplication::Translate('Middle Name');
			$this->lblMiddleName->Text = $this->objUser->MiddleName;
			$this->lblMiddleName->Required = true;
			return $this->lblMiddleName;
		}

		/**
		 * Create and setup QTextBox txtLastName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLastName_Create($strControlId = null) {
			$this->txtLastName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLastName->Name = QApplication::Translate('Last Name');
			$this->txtLastName->Text = $this->objUser->LastName;
			$this->txtLastName->Required = true;
			$this->txtLastName->MaxLength = User::LastNameMaxLength;
			return $this->txtLastName;
		}

		/**
		 * Create and setup QLabel lblLastName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLastName_Create($strControlId = null) {
			$this->lblLastName = new QLabel($this->objParentObject, $strControlId);
			$this->lblLastName->Name = QApplication::Translate('Last Name');
			$this->lblLastName->Text = $this->objUser->LastName;
			$this->lblLastName->Required = true;
			return $this->lblLastName;
		}

		/**
		 * Create and setup QTextBox txtCountry
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCountry_Create($strControlId = null) {
			$this->txtCountry = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCountry->Name = QApplication::Translate('Country');
			$this->txtCountry->Text = $this->objUser->Country;
			$this->txtCountry->Required = true;
			$this->txtCountry->MaxLength = User::CountryMaxLength;
			return $this->txtCountry;
		}

		/**
		 * Create and setup QLabel lblCountry
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCountry_Create($strControlId = null) {
			$this->lblCountry = new QLabel($this->objParentObject, $strControlId);
			$this->lblCountry->Name = QApplication::Translate('Country');
			$this->lblCountry->Text = $this->objUser->Country;
			$this->lblCountry->Required = true;
			return $this->lblCountry;
		}

		/**
		 * Create and setup QTextBox txtCity
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCity_Create($strControlId = null) {
			$this->txtCity = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCity->Name = QApplication::Translate('City');
			$this->txtCity->Text = $this->objUser->City;
			$this->txtCity->Required = true;
			$this->txtCity->MaxLength = User::CityMaxLength;
			return $this->txtCity;
		}

		/**
		 * Create and setup QLabel lblCity
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCity_Create($strControlId = null) {
			$this->lblCity = new QLabel($this->objParentObject, $strControlId);
			$this->lblCity->Name = QApplication::Translate('City');
			$this->lblCity->Text = $this->objUser->City;
			$this->lblCity->Required = true;
			return $this->lblCity;
		}

		/**
		 * Create and setup QTextBox txtPhone
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPhone_Create($strControlId = null) {
			$this->txtPhone = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPhone->Name = QApplication::Translate('Phone');
			$this->txtPhone->Text = $this->objUser->Phone;
			$this->txtPhone->Required = true;
			$this->txtPhone->MaxLength = User::PhoneMaxLength;
			return $this->txtPhone;
		}

		/**
		 * Create and setup QLabel lblPhone
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPhone_Create($strControlId = null) {
			$this->lblPhone = new QLabel($this->objParentObject, $strControlId);
			$this->lblPhone->Name = QApplication::Translate('Phone');
			$this->lblPhone->Text = $this->objUser->Phone;
			$this->lblPhone->Required = true;
			return $this->lblPhone;
		}

		/**
		 * Create and setup QDateTimePicker calBirthday
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calBirthday_Create($strControlId = null) {
			$this->calBirthday = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calBirthday->Name = QApplication::Translate('Birthday');
			$this->calBirthday->DateTime = $this->objUser->Birthday;
			$this->calBirthday->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calBirthday;
		}

		/**
		 * Create and setup QLabel lblBirthday
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblBirthday_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblBirthday = new QLabel($this->objParentObject, $strControlId);
			$this->lblBirthday->Name = QApplication::Translate('Birthday');
			$this->strBirthdayDateTimeFormat = $strDateTimeFormat;
			$this->lblBirthday->Text = sprintf($this->objUser->Birthday) ? $this->objUser->Birthday->qFormat($this->strBirthdayDateTimeFormat) : null;
			return $this->lblBirthday;
		}

		protected $strBirthdayDateTimeFormat;


		/**
		 * Create and setup QTextBox txtYearGraduation
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtYearGraduation_Create($strControlId = null) {
			$this->txtYearGraduation = new QTextBox($this->objParentObject, $strControlId);
			$this->txtYearGraduation->Name = QApplication::Translate('Year Graduation');
			$this->txtYearGraduation->Text = $this->objUser->YearGraduation;
			$this->txtYearGraduation->Required = true;
			$this->txtYearGraduation->MaxLength = User::YearGraduationMaxLength;
			return $this->txtYearGraduation;
		}

		/**
		 * Create and setup QLabel lblYearGraduation
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblYearGraduation_Create($strControlId = null) {
			$this->lblYearGraduation = new QLabel($this->objParentObject, $strControlId);
			$this->lblYearGraduation->Name = QApplication::Translate('Year Graduation');
			$this->lblYearGraduation->Text = $this->objUser->YearGraduation;
			$this->lblYearGraduation->Required = true;
			return $this->lblYearGraduation;
		}

		/**
		 * Create and setup QTextBox txtCohort
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCohort_Create($strControlId = null) {
			$this->txtCohort = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCohort->Name = QApplication::Translate('Cohort');
			$this->txtCohort->Text = $this->objUser->Cohort;
			$this->txtCohort->Required = true;
			$this->txtCohort->MaxLength = User::CohortMaxLength;
			return $this->txtCohort;
		}

		/**
		 * Create and setup QLabel lblCohort
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCohort_Create($strControlId = null) {
			$this->lblCohort = new QLabel($this->objParentObject, $strControlId);
			$this->lblCohort->Name = QApplication::Translate('Cohort');
			$this->lblCohort->Text = $this->objUser->Cohort;
			$this->lblCohort->Required = true;
			return $this->lblCohort;
		}

		/**
		 * Create and setup QTextBox txtImageDriver
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtImageDriver_Create($strControlId = null) {
			$this->txtImageDriver = new QTextBox($this->objParentObject, $strControlId);
			$this->txtImageDriver->Name = QApplication::Translate('Image Driver');
			$this->txtImageDriver->Text = $this->objUser->ImageDriver;
			$this->txtImageDriver->Required = true;
			$this->txtImageDriver->MaxLength = User::ImageDriverMaxLength;
			return $this->txtImageDriver;
		}

		/**
		 * Create and setup QLabel lblImageDriver
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblImageDriver_Create($strControlId = null) {
			$this->lblImageDriver = new QLabel($this->objParentObject, $strControlId);
			$this->lblImageDriver->Name = QApplication::Translate('Image Driver');
			$this->lblImageDriver->Text = $this->objUser->ImageDriver;
			$this->lblImageDriver->Required = true;
			return $this->lblImageDriver;
		}

		/**
		 * Create and setup QTextBox txtImagePhoto
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtImagePhoto_Create($strControlId = null) {
			$this->txtImagePhoto = new QTextBox($this->objParentObject, $strControlId);
			$this->txtImagePhoto->Name = QApplication::Translate('Image Photo');
			$this->txtImagePhoto->Text = $this->objUser->ImagePhoto;
			$this->txtImagePhoto->Required = true;
			$this->txtImagePhoto->MaxLength = User::ImagePhotoMaxLength;
			return $this->txtImagePhoto;
		}

		/**
		 * Create and setup QLabel lblImagePhoto
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblImagePhoto_Create($strControlId = null) {
			$this->lblImagePhoto = new QLabel($this->objParentObject, $strControlId);
			$this->lblImagePhoto->Name = QApplication::Translate('Image Photo');
			$this->lblImagePhoto->Text = $this->objUser->ImagePhoto;
			$this->lblImagePhoto->Required = true;
			return $this->lblImagePhoto;
		}

		/**
		 * Create and setup QIntegerTextBox txtMiningOption
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtMiningOption_Create($strControlId = null) {
			$this->txtMiningOption = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtMiningOption->Name = QApplication::Translate('Mining Option');
			$this->txtMiningOption->Text = $this->objUser->MiningOption;
			$this->txtMiningOption->Required = true;
			return $this->txtMiningOption;
		}

		/**
		 * Create and setup QLabel lblMiningOption
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblMiningOption_Create($strControlId = null, $strFormat = null) {
			$this->lblMiningOption = new QLabel($this->objParentObject, $strControlId);
			$this->lblMiningOption->Name = QApplication::Translate('Mining Option');
			$this->lblMiningOption->Text = $this->objUser->MiningOption;
			$this->lblMiningOption->Required = true;
			$this->lblMiningOption->Format = $strFormat;
			return $this->lblMiningOption;
		}

		/**
		 * Create and setup QIntegerTextBox txtStatusUser
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtStatusUser_Create($strControlId = null) {
			$this->txtStatusUser = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtStatusUser->Name = QApplication::Translate('Status User');
			$this->txtStatusUser->Text = $this->objUser->StatusUser;
			$this->txtStatusUser->Required = true;
			return $this->txtStatusUser;
		}

		/**
		 * Create and setup QLabel lblStatusUser
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblStatusUser_Create($strControlId = null, $strFormat = null) {
			$this->lblStatusUser = new QLabel($this->objParentObject, $strControlId);
			$this->lblStatusUser->Name = QApplication::Translate('Status User');
			$this->lblStatusUser->Text = $this->objUser->StatusUser;
			$this->lblStatusUser->Required = true;
			$this->lblStatusUser->Format = $strFormat;
			return $this->lblStatusUser;
		}

		/**
		 * Create and setup QTextBox txtMac
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtMac_Create($strControlId = null) {
			$this->txtMac = new QTextBox($this->objParentObject, $strControlId);
			$this->txtMac->Name = QApplication::Translate('Mac');
			$this->txtMac->Text = $this->objUser->Mac;
			$this->txtMac->Required = true;
			$this->txtMac->MaxLength = User::MacMaxLength;
			return $this->txtMac;
		}

		/**
		 * Create and setup QLabel lblMac
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblMac_Create($strControlId = null) {
			$this->lblMac = new QLabel($this->objParentObject, $strControlId);
			$this->lblMac->Name = QApplication::Translate('Mac');
			$this->lblMac->Text = $this->objUser->Mac;
			$this->lblMac->Required = true;
			return $this->lblMac;
		}

		/**
		 * Create and setup QTextBox txtTokenMac
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTokenMac_Create($strControlId = null) {
			$this->txtTokenMac = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTokenMac->Name = QApplication::Translate('Token Mac');
			$this->txtTokenMac->Text = $this->objUser->TokenMac;
			$this->txtTokenMac->Required = true;
			$this->txtTokenMac->MaxLength = User::TokenMacMaxLength;
			return $this->txtTokenMac;
		}

		/**
		 * Create and setup QLabel lblTokenMac
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTokenMac_Create($strControlId = null) {
			$this->lblTokenMac = new QLabel($this->objParentObject, $strControlId);
			$this->lblTokenMac->Name = QApplication::Translate('Token Mac');
			$this->lblTokenMac->Text = $this->objUser->TokenMac;
			$this->lblTokenMac->Required = true;
			return $this->lblTokenMac;
		}

		/**
		 * Create and setup QIntegerTextBox txtStatusTokenMac
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtStatusTokenMac_Create($strControlId = null) {
			$this->txtStatusTokenMac = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtStatusTokenMac->Name = QApplication::Translate('Status Token Mac');
			$this->txtStatusTokenMac->Text = $this->objUser->StatusTokenMac;
			$this->txtStatusTokenMac->Required = true;
			return $this->txtStatusTokenMac;
		}

		/**
		 * Create and setup QLabel lblStatusTokenMac
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblStatusTokenMac_Create($strControlId = null, $strFormat = null) {
			$this->lblStatusTokenMac = new QLabel($this->objParentObject, $strControlId);
			$this->lblStatusTokenMac->Name = QApplication::Translate('Status Token Mac');
			$this->lblStatusTokenMac->Text = $this->objUser->StatusTokenMac;
			$this->lblStatusTokenMac->Required = true;
			$this->lblStatusTokenMac->Format = $strFormat;
			return $this->lblStatusTokenMac;
		}

		/**
		 * Create and setup QTextBox txtWalletAddress
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtWalletAddress_Create($strControlId = null) {
			$this->txtWalletAddress = new QTextBox($this->objParentObject, $strControlId);
			$this->txtWalletAddress->Name = QApplication::Translate('Wallet Address');
			$this->txtWalletAddress->Text = $this->objUser->WalletAddress;
			$this->txtWalletAddress->Required = true;
			$this->txtWalletAddress->MaxLength = User::WalletAddressMaxLength;
			return $this->txtWalletAddress;
		}

		/**
		 * Create and setup QLabel lblWalletAddress
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblWalletAddress_Create($strControlId = null) {
			$this->lblWalletAddress = new QLabel($this->objParentObject, $strControlId);
			$this->lblWalletAddress->Name = QApplication::Translate('Wallet Address');
			$this->lblWalletAddress->Text = $this->objUser->WalletAddress;
			$this->lblWalletAddress->Required = true;
			return $this->lblWalletAddress;
		}

		/**
		 * Create and setup QIntegerTextBox txtNumberMasterNode
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtNumberMasterNode_Create($strControlId = null) {
			$this->txtNumberMasterNode = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtNumberMasterNode->Name = QApplication::Translate('Number Master Node');
			$this->txtNumberMasterNode->Text = $this->objUser->NumberMasterNode;
			$this->txtNumberMasterNode->Required = true;
			return $this->txtNumberMasterNode;
		}

		/**
		 * Create and setup QLabel lblNumberMasterNode
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblNumberMasterNode_Create($strControlId = null, $strFormat = null) {
			$this->lblNumberMasterNode = new QLabel($this->objParentObject, $strControlId);
			$this->lblNumberMasterNode->Name = QApplication::Translate('Number Master Node');
			$this->lblNumberMasterNode->Text = $this->objUser->NumberMasterNode;
			$this->lblNumberMasterNode->Required = true;
			$this->lblNumberMasterNode->Format = $strFormat;
			return $this->lblNumberMasterNode;
		}



		/**
		 * Refresh this MetaControl with Data from the local User object.
		 * @param boolean $blnReload reload User from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objUser->Reload();

			if ($this->lblIdUser) if ($this->blnEditMode) $this->lblIdUser->Text = $this->objUser->IdUser;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objUser->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objUser->Email;

			if ($this->txtPassword) $this->txtPassword->Text = $this->objUser->Password;
			if ($this->lblPassword) $this->lblPassword->Text = $this->objUser->Password;

			if ($this->txtFirstName) $this->txtFirstName->Text = $this->objUser->FirstName;
			if ($this->lblFirstName) $this->lblFirstName->Text = $this->objUser->FirstName;

			if ($this->txtMiddleName) $this->txtMiddleName->Text = $this->objUser->MiddleName;
			if ($this->lblMiddleName) $this->lblMiddleName->Text = $this->objUser->MiddleName;

			if ($this->txtLastName) $this->txtLastName->Text = $this->objUser->LastName;
			if ($this->lblLastName) $this->lblLastName->Text = $this->objUser->LastName;

			if ($this->txtCountry) $this->txtCountry->Text = $this->objUser->Country;
			if ($this->lblCountry) $this->lblCountry->Text = $this->objUser->Country;

			if ($this->txtCity) $this->txtCity->Text = $this->objUser->City;
			if ($this->lblCity) $this->lblCity->Text = $this->objUser->City;

			if ($this->txtPhone) $this->txtPhone->Text = $this->objUser->Phone;
			if ($this->lblPhone) $this->lblPhone->Text = $this->objUser->Phone;

			if ($this->calBirthday) $this->calBirthday->DateTime = $this->objUser->Birthday;
			if ($this->lblBirthday) $this->lblBirthday->Text = sprintf($this->objUser->Birthday) ? $this->objUser->Birthday->qFormat($this->strBirthdayDateTimeFormat) : null;

			if ($this->txtYearGraduation) $this->txtYearGraduation->Text = $this->objUser->YearGraduation;
			if ($this->lblYearGraduation) $this->lblYearGraduation->Text = $this->objUser->YearGraduation;

			if ($this->txtCohort) $this->txtCohort->Text = $this->objUser->Cohort;
			if ($this->lblCohort) $this->lblCohort->Text = $this->objUser->Cohort;

			if ($this->txtImageDriver) $this->txtImageDriver->Text = $this->objUser->ImageDriver;
			if ($this->lblImageDriver) $this->lblImageDriver->Text = $this->objUser->ImageDriver;

			if ($this->txtImagePhoto) $this->txtImagePhoto->Text = $this->objUser->ImagePhoto;
			if ($this->lblImagePhoto) $this->lblImagePhoto->Text = $this->objUser->ImagePhoto;

			if ($this->txtMiningOption) $this->txtMiningOption->Text = $this->objUser->MiningOption;
			if ($this->lblMiningOption) $this->lblMiningOption->Text = $this->objUser->MiningOption;

			if ($this->txtStatusUser) $this->txtStatusUser->Text = $this->objUser->StatusUser;
			if ($this->lblStatusUser) $this->lblStatusUser->Text = $this->objUser->StatusUser;

			if ($this->txtMac) $this->txtMac->Text = $this->objUser->Mac;
			if ($this->lblMac) $this->lblMac->Text = $this->objUser->Mac;

			if ($this->txtTokenMac) $this->txtTokenMac->Text = $this->objUser->TokenMac;
			if ($this->lblTokenMac) $this->lblTokenMac->Text = $this->objUser->TokenMac;

			if ($this->txtStatusTokenMac) $this->txtStatusTokenMac->Text = $this->objUser->StatusTokenMac;
			if ($this->lblStatusTokenMac) $this->lblStatusTokenMac->Text = $this->objUser->StatusTokenMac;

			if ($this->txtWalletAddress) $this->txtWalletAddress->Text = $this->objUser->WalletAddress;
			if ($this->lblWalletAddress) $this->lblWalletAddress->Text = $this->objUser->WalletAddress;

			if ($this->txtNumberMasterNode) $this->txtNumberMasterNode->Text = $this->objUser->NumberMasterNode;
			if ($this->lblNumberMasterNode) $this->lblNumberMasterNode->Text = $this->objUser->NumberMasterNode;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC USER OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's User instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveUser() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtEmail) $this->objUser->Email = $this->txtEmail->Text;
				if ($this->txtPassword) $this->objUser->Password = $this->txtPassword->Text;
				if ($this->txtFirstName) $this->objUser->FirstName = $this->txtFirstName->Text;
				if ($this->txtMiddleName) $this->objUser->MiddleName = $this->txtMiddleName->Text;
				if ($this->txtLastName) $this->objUser->LastName = $this->txtLastName->Text;
				if ($this->txtCountry) $this->objUser->Country = $this->txtCountry->Text;
				if ($this->txtCity) $this->objUser->City = $this->txtCity->Text;
				if ($this->txtPhone) $this->objUser->Phone = $this->txtPhone->Text;
				if ($this->calBirthday) $this->objUser->Birthday = $this->calBirthday->DateTime;
				if ($this->txtYearGraduation) $this->objUser->YearGraduation = $this->txtYearGraduation->Text;
				if ($this->txtCohort) $this->objUser->Cohort = $this->txtCohort->Text;
				if ($this->txtImageDriver) $this->objUser->ImageDriver = $this->txtImageDriver->Text;
				if ($this->txtImagePhoto) $this->objUser->ImagePhoto = $this->txtImagePhoto->Text;
				if ($this->txtMiningOption) $this->objUser->MiningOption = $this->txtMiningOption->Text;
				if ($this->txtStatusUser) $this->objUser->StatusUser = $this->txtStatusUser->Text;
				if ($this->txtMac) $this->objUser->Mac = $this->txtMac->Text;
				if ($this->txtTokenMac) $this->objUser->TokenMac = $this->txtTokenMac->Text;
				if ($this->txtStatusTokenMac) $this->objUser->StatusTokenMac = $this->txtStatusTokenMac->Text;
				if ($this->txtWalletAddress) $this->objUser->WalletAddress = $this->txtWalletAddress->Text;
				if ($this->txtNumberMasterNode) $this->objUser->NumberMasterNode = $this->txtNumberMasterNode->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the User object
				$this->objUser->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's User instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteUser() {
			$this->objUser->Delete();
		}



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'User': return $this->objUser;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to User fields -- will be created dynamically if not yet created
				case 'IdUserControl':
					if (!$this->lblIdUser) return $this->lblIdUser_Create();
					return $this->lblIdUser;
				case 'IdUserLabel':
					if (!$this->lblIdUser) return $this->lblIdUser_Create();
					return $this->lblIdUser;
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
				case 'PasswordControl':
					if (!$this->txtPassword) return $this->txtPassword_Create();
					return $this->txtPassword;
				case 'PasswordLabel':
					if (!$this->lblPassword) return $this->lblPassword_Create();
					return $this->lblPassword;
				case 'FirstNameControl':
					if (!$this->txtFirstName) return $this->txtFirstName_Create();
					return $this->txtFirstName;
				case 'FirstNameLabel':
					if (!$this->lblFirstName) return $this->lblFirstName_Create();
					return $this->lblFirstName;
				case 'MiddleNameControl':
					if (!$this->txtMiddleName) return $this->txtMiddleName_Create();
					return $this->txtMiddleName;
				case 'MiddleNameLabel':
					if (!$this->lblMiddleName) return $this->lblMiddleName_Create();
					return $this->lblMiddleName;
				case 'LastNameControl':
					if (!$this->txtLastName) return $this->txtLastName_Create();
					return $this->txtLastName;
				case 'LastNameLabel':
					if (!$this->lblLastName) return $this->lblLastName_Create();
					return $this->lblLastName;
				case 'CountryControl':
					if (!$this->txtCountry) return $this->txtCountry_Create();
					return $this->txtCountry;
				case 'CountryLabel':
					if (!$this->lblCountry) return $this->lblCountry_Create();
					return $this->lblCountry;
				case 'CityControl':
					if (!$this->txtCity) return $this->txtCity_Create();
					return $this->txtCity;
				case 'CityLabel':
					if (!$this->lblCity) return $this->lblCity_Create();
					return $this->lblCity;
				case 'PhoneControl':
					if (!$this->txtPhone) return $this->txtPhone_Create();
					return $this->txtPhone;
				case 'PhoneLabel':
					if (!$this->lblPhone) return $this->lblPhone_Create();
					return $this->lblPhone;
				case 'BirthdayControl':
					if (!$this->calBirthday) return $this->calBirthday_Create();
					return $this->calBirthday;
				case 'BirthdayLabel':
					if (!$this->lblBirthday) return $this->lblBirthday_Create();
					return $this->lblBirthday;
				case 'YearGraduationControl':
					if (!$this->txtYearGraduation) return $this->txtYearGraduation_Create();
					return $this->txtYearGraduation;
				case 'YearGraduationLabel':
					if (!$this->lblYearGraduation) return $this->lblYearGraduation_Create();
					return $this->lblYearGraduation;
				case 'CohortControl':
					if (!$this->txtCohort) return $this->txtCohort_Create();
					return $this->txtCohort;
				case 'CohortLabel':
					if (!$this->lblCohort) return $this->lblCohort_Create();
					return $this->lblCohort;
				case 'ImageDriverControl':
					if (!$this->txtImageDriver) return $this->txtImageDriver_Create();
					return $this->txtImageDriver;
				case 'ImageDriverLabel':
					if (!$this->lblImageDriver) return $this->lblImageDriver_Create();
					return $this->lblImageDriver;
				case 'ImagePhotoControl':
					if (!$this->txtImagePhoto) return $this->txtImagePhoto_Create();
					return $this->txtImagePhoto;
				case 'ImagePhotoLabel':
					if (!$this->lblImagePhoto) return $this->lblImagePhoto_Create();
					return $this->lblImagePhoto;
				case 'MiningOptionControl':
					if (!$this->txtMiningOption) return $this->txtMiningOption_Create();
					return $this->txtMiningOption;
				case 'MiningOptionLabel':
					if (!$this->lblMiningOption) return $this->lblMiningOption_Create();
					return $this->lblMiningOption;
				case 'StatusUserControl':
					if (!$this->txtStatusUser) return $this->txtStatusUser_Create();
					return $this->txtStatusUser;
				case 'StatusUserLabel':
					if (!$this->lblStatusUser) return $this->lblStatusUser_Create();
					return $this->lblStatusUser;
				case 'MacControl':
					if (!$this->txtMac) return $this->txtMac_Create();
					return $this->txtMac;
				case 'MacLabel':
					if (!$this->lblMac) return $this->lblMac_Create();
					return $this->lblMac;
				case 'TokenMacControl':
					if (!$this->txtTokenMac) return $this->txtTokenMac_Create();
					return $this->txtTokenMac;
				case 'TokenMacLabel':
					if (!$this->lblTokenMac) return $this->lblTokenMac_Create();
					return $this->lblTokenMac;
				case 'StatusTokenMacControl':
					if (!$this->txtStatusTokenMac) return $this->txtStatusTokenMac_Create();
					return $this->txtStatusTokenMac;
				case 'StatusTokenMacLabel':
					if (!$this->lblStatusTokenMac) return $this->lblStatusTokenMac_Create();
					return $this->lblStatusTokenMac;
				case 'WalletAddressControl':
					if (!$this->txtWalletAddress) return $this->txtWalletAddress_Create();
					return $this->txtWalletAddress;
				case 'WalletAddressLabel':
					if (!$this->lblWalletAddress) return $this->lblWalletAddress_Create();
					return $this->lblWalletAddress;
				case 'NumberMasterNodeControl':
					if (!$this->txtNumberMasterNode) return $this->txtNumberMasterNode_Create();
					return $this->txtNumberMasterNode;
				case 'NumberMasterNodeLabel':
					if (!$this->lblNumberMasterNode) return $this->lblNumberMasterNode_Create();
					return $this->lblNumberMasterNode;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					// Controls that point to User fields
					case 'IdUserControl':
						return ($this->lblIdUser = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
					case 'PasswordControl':
						return ($this->txtPassword = QType::Cast($mixValue, 'QControl'));
					case 'FirstNameControl':
						return ($this->txtFirstName = QType::Cast($mixValue, 'QControl'));
					case 'MiddleNameControl':
						return ($this->txtMiddleName = QType::Cast($mixValue, 'QControl'));
					case 'LastNameControl':
						return ($this->txtLastName = QType::Cast($mixValue, 'QControl'));
					case 'CountryControl':
						return ($this->txtCountry = QType::Cast($mixValue, 'QControl'));
					case 'CityControl':
						return ($this->txtCity = QType::Cast($mixValue, 'QControl'));
					case 'PhoneControl':
						return ($this->txtPhone = QType::Cast($mixValue, 'QControl'));
					case 'BirthdayControl':
						return ($this->calBirthday = QType::Cast($mixValue, 'QControl'));
					case 'YearGraduationControl':
						return ($this->txtYearGraduation = QType::Cast($mixValue, 'QControl'));
					case 'CohortControl':
						return ($this->txtCohort = QType::Cast($mixValue, 'QControl'));
					case 'ImageDriverControl':
						return ($this->txtImageDriver = QType::Cast($mixValue, 'QControl'));
					case 'ImagePhotoControl':
						return ($this->txtImagePhoto = QType::Cast($mixValue, 'QControl'));
					case 'MiningOptionControl':
						return ($this->txtMiningOption = QType::Cast($mixValue, 'QControl'));
					case 'StatusUserControl':
						return ($this->txtStatusUser = QType::Cast($mixValue, 'QControl'));
					case 'MacControl':
						return ($this->txtMac = QType::Cast($mixValue, 'QControl'));
					case 'TokenMacControl':
						return ($this->txtTokenMac = QType::Cast($mixValue, 'QControl'));
					case 'StatusTokenMacControl':
						return ($this->txtStatusTokenMac = QType::Cast($mixValue, 'QControl'));
					case 'WalletAddressControl':
						return ($this->txtWalletAddress = QType::Cast($mixValue, 'QControl'));
					case 'NumberMasterNodeControl':
						return ($this->txtNumberMasterNode = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>