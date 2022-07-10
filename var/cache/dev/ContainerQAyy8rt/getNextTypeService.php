<?php

namespace ContainerQAyy8rt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNextTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\NextType' shared autowired service.
     *
     * @return \App\Form\NextType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/NextType.php';

        return $container->privates['App\\Form\\NextType'] = new \App\Form\NextType();
    }
}
