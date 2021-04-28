<?php
	class QQN {
		/**
		 * @return QQNodeAdministrator
		 */
		static public function Administrator() {
			return new QQNodeAdministrator('administrator', null, null);
		}
		/**
		 * @return QQNodeQueueemail
		 */
		static public function Queueemail() {
			return new QQNodeQueueemail('queueemail', null, null);
		}
		/**
		 * @return QQNodeUser
		 */
		static public function User() {
			return new QQNodeUser('user', null, null);
		}
		/**
		 * @return QQNodeVersionkcoin
		 */
		static public function Versionkcoin() {
			return new QQNodeVersionkcoin('versionkcoin', null, null);
		}
	}
?>