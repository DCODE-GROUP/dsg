<?php

namespace Dcode\DSG\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Modal extends Component
{
    public $show = false;

    public string $component_name = '';

    public array $component_props = [];

    #[On('dsg.modal.open')]
    public function show(string $component, array $props = [])
    {
        $this->component_name = $component;
        $this->component_props = $props;

        $this->show = true;
    }

    public function close()
    {
        $this->show = false;

        $this->component_name = '';
        $this->component_props = [];
    }

    public function render()
    {
        return view('dsg::modal');
    }
}
