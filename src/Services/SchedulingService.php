<?php

namespace Iwzh\owlScheduling\Services;

use Iwzh\owlScheduling\Support\Scheduling;
use Slowlyo\OwlAdmin\Services\AdminService;
use Slowlyo\OwlAdmin\Traits\ErrorTrait;

class SchedulingService extends AdminService
{

    use ErrorTrait;
    protected $modelName;

    public function list()
    {
        $scheduling=new Scheduling();
        $items=$scheduling->getTasks();
        $total = count($items);

        return compact('items', 'total');
    }


}
