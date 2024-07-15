<?php

namespace Dcode\DSG\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class SlideOver extends Component
{
    public string $component_name = '';

    public string $title = '';

    public mixed $data;

    public bool $show_buttons = false;

    public array $component_props = [];

    #[On('slide-over')]
    public function show(string $component, string $title, mixed $data, bool $showButtons = false)
    {
        $this->component_name = $component;
        $this->title = $title;
        $this->data = json_decode($data);
        $this->show_buttons = $showButtons;
    }

    public function render()
    {
        return view('dsg::components.slide-overs.slide-over');
    }
}
