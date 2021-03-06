<?php declare(strict_types = 1);

namespace App\Cms;

use Dms\Core\Package\Definition\PackageDefinition;
use Dms\Core\Package\Package;
use App\Cms\Modules\TodoItemModule;

/**
 * The TodoItem package.
 */
class TodoItemPackage extends Package
{
    /**
     * Defines the structure of this cms package.
     *
     * @param PackageDefinition $package
     *
     * @return void
     */
    protected function define(PackageDefinition $package)
    {
        $package->name('TodoItem');

        $package->metadata([
            'icon' => '',
        ]);

        $package->modules([
            'todo-item' => TodoItemModule::class,
        ]);
    }
}