<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBSIY0WX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBSIY0WX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBSIY0WX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBSIY0WX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBSIY0WX\App_KernelDevDebugContainer([
    'container.build_hash' => 'BSIY0WX',
    'container.build_id' => 'f0a29642',
    'container.build_time' => 1678837356,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBSIY0WX');
