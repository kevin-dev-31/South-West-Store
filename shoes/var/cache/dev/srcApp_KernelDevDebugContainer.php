<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYDOYkBn\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYDOYkBn/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYDOYkBn.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYDOYkBn\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYDOYkBn\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'YDOYkBn',
    'container.build_id' => '4faa9890',
    'container.build_time' => 1572605413,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYDOYkBn');