<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//use Zend\Log\Logger;

class IndexController extends AbstractActionController {

    public function indexAction() {
//         $logger = new Zend\Log\Logger;
//        $log->log(Zend\Log\Logger::INFO, 'Informational message');
//        var_dump($this->getServiceLocator());
//        $log = $this->getServiceLocator()->get('Zend\Log');
//        var_dump($log);
//        $log . debug('Informational message');
        return new ViewModel();
    }

}
