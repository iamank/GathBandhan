<?php
 



defined( '_JEXEC' ) or die( 'Restricted access' );



jimport( 'joomla.application.component.view');




class spidercalendarViewspidercalendarbig_seemore extends JViewLegacy
{

    function display($tpl = null)
		{

			$model = $this->getModel();

			$result = $model->showevent();

			$this->assignRef( 'rows',	$result[0] );

			$this->assignRef( 'option',	$result[1] );
				$result1 = $model->showcategoryevent();			
		
			
			
		

			parent::display($tpl);

		}

}

?>