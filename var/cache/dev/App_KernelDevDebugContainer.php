<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSM8spaH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSM8spaH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSM8spaH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSM8spaH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSM8spaH\App_KernelDevDebugContainer([
    'container.build_hash' => 'SM8spaH',
    'container.build_id' => 'fb28e095',
    'container.build_time' => 1718356607,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSM8spaH');