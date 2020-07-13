<?php

namespace Moell\LayuiAdmin\ViewComposers;


use Illuminate\View\View;
use Moell\LayuiAdmin\Traits\NavigationTree;

class AdminComposer
{
    use NavigationTree;

    public function compose(View $view)
    {
        $view->with("navigation", $this->permissionNavigationTree(config('admin.guard_name'), config('admin.menu_type')));
    }
}
