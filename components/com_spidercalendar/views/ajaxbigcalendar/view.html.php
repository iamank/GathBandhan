<?php
 
 /**


defined( '_JEXEC' ) or die( 'Restricted access' );



jimport( 'joomla.application.component.view');







class spidercalendarViewajaxbigcalendar extends JViewLegacy

{

    function display($tpl = null)

		{

			$model = $this->getModel();

			$result = $model->getDate();

			$this->assignRef( 'date',	$result[0] );
			
		

			parent::display($tpl);

		}

}

?>