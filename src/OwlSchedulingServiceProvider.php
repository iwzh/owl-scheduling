<?php

namespace Iwzh\owlScheduling;

use Slowlyo\OwlAdmin\Renderers\TextControl;
use Slowlyo\OwlAdmin\Extend\ServiceProvider;

class OwlSchedulingServiceProvider extends ServiceProvider
{
    protected $menu = [
        [
            'parent_id'   => '',
            'title'    => '任务调度',
            'url'      => '/scheduling',
            'url_type' => '1',
            'icon'     => 'carbon:event-schedule',
        ]
    ];

	public function settingForm()
	{
	    return $this->baseSettingForm()->body([
            TextControl::make()->name('value')->label('Value')->required(true),
	    ]);
	}
}
