<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYx093Ov\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYx093Ov/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYx093Ov.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYx093Ov\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYx093Ov\App_KernelDevDebugContainer([
    'container.build_hash' => 'Yx093Ov',
    'container.build_id' => 'a0fdd1ab',
    'container.build_time' => 1735941110,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYx093Ov');