<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZfwJ2hi\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZfwJ2hi/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerZfwJ2hi.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerZfwJ2hi\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerZfwJ2hi\App_KernelTestDebugContainer([
    'container.build_hash' => 'ZfwJ2hi',
    'container.build_id' => 'ebde96eb',
    'container.build_time' => 1662548926,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZfwJ2hi');
