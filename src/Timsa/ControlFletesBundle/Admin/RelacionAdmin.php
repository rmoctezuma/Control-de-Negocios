<?php

namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RelacionAdmin extends Admin{
		/**
		 * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
		 *
		 * @return void
		 */
		protected function configureListFields(ListMapper $listMapper)
		    {
		        $listMapper
		            ->add('operador')
		            ->add('economico')
		            ->add('socio')
		            ->add('statusA')
		            ->add('prioridad')
		            ->add('_action', 'actions', array(
		                'actions' => array(
		                    'edit' => array(),
		                )))
		        ;
		    }

		    /**
		     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
		     *
		     * @return void
		     */

	    protected function configureFormFields(FormMapper $formMapper)
	        {

	            $formMapper
	            ->with('General')
	            	->add('operador')
		            ->add('economico')
		            ->add('socio')
		            ->add('statusA')
		            ->add('prioridad')
	            ->end()
	            ;
	        }

}