<?php

namespace Dcode\DSG\Livewire\Traits;

trait HasModal
{
    public function openModal(string $component, array $props = [])
    {
        $this->dispatch('dsg.modal.open', $component, $props);
    }
}
