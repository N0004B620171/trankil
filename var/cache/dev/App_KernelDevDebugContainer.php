<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXqBzNRW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXqBzNRW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXqBzNRW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXqBzNRW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXqBzNRW\App_KernelDevDebugContainer([
    'container.build_hash' => 'XqBzNRW',
    'container.build_id' => '3d869faa',
    'container.build_time' => 1613038265,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXqBzNRW');
