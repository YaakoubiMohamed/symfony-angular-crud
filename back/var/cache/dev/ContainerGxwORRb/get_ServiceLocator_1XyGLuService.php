<?php

namespace ContainerGxwORRb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1XyGLuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1_xyGLu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1_xyGLu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BookController::delete' => ['privates', '.service_locator.aoqKMF3', 'get_ServiceLocator_AoqKMF3Service', true],
            'App\\Controller\\BookController::edit' => ['privates', '.service_locator.aoqKMF3', 'get_ServiceLocator_AoqKMF3Service', true],
            'App\\Controller\\BookController::index' => ['privates', '.service_locator.rVUgAzK', 'get_ServiceLocator_RVUgAzKService', true],
            'App\\Controller\\BookController::show' => ['privates', '.service_locator.aoqKMF3', 'get_ServiceLocator_AoqKMF3Service', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\BookController:delete' => ['privates', '.service_locator.aoqKMF3', 'get_ServiceLocator_AoqKMF3Service', true],
            'App\\Controller\\BookController:edit' => ['privates', '.service_locator.aoqKMF3', 'get_ServiceLocator_AoqKMF3Service', true],
            'App\\Controller\\BookController:index' => ['privates', '.service_locator.rVUgAzK', 'get_ServiceLocator_RVUgAzKService', true],
            'App\\Controller\\BookController:show' => ['privates', '.service_locator.aoqKMF3', 'get_ServiceLocator_AoqKMF3Service', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\BookController::delete' => '?',
            'App\\Controller\\BookController::edit' => '?',
            'App\\Controller\\BookController::index' => '?',
            'App\\Controller\\BookController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\BookController:delete' => '?',
            'App\\Controller\\BookController:edit' => '?',
            'App\\Controller\\BookController:index' => '?',
            'App\\Controller\\BookController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
