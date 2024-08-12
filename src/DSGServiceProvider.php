<?php

namespace Dcodegroup\Dsg;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class DSGServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom($this->pathToResources(), 'dsg');

        $this->configureComponents();

        $this->publishes([
            $this->getConfigFile() => config_path('dsg.php'),
            $this->pathToResources() => resource_path(),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->getConfigFile(), 'dsg');
        require_once $this->pathToHelper();
    }

    /**
     * Configure Dcode UI components.
     *
     * @return void
     */
    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            // Badges
            $this->registerComponent('badges.badge', 'badge');

            // Buttons
            $this->registerComponent('buttons.button', 'button');
            $this->registerComponent('buttons.destructive', 'button-destructive');

            // Empty states
            //            $this->registerComponent('empty-states.simple', 'empty-state');

            // Forms elements = these are elements by themselves.
            $this->registerComponent('forms.elements.datepicker', 'datepicker');
            $this->registerComponent('forms.elements.errors', 'form-error');
            $this->registerComponent('forms.elements.field', 'field');
            $this->registerComponent('forms.elements.help-text', 'help-text');
            $this->registerComponent('forms.elements.input', 'input');
            $this->registerComponent('forms.elements.label', 'label');
            $this->registerComponent('forms.elements.select', 'select');
            $this->registerComponent('forms.elements.checkbox', 'checkbox');
            $this->registerComponent('forms.elements.textarea', 'textarea');
            $this->registerComponent('forms.elements.radio', 'radio');
            //            $this->registerComponent('forms.elements.radio-card', 'radio-card');
            $this->registerComponent('forms.elements.search', 'search');
            $this->registerComponent('forms.elements.hint', 'hint');
            $this->registerComponent('forms.elements.iconpicker', 'iconpicker');
            $this->registerComponent('forms.elements.uploader', 'uploader');
            $this->registerComponent('forms.elements.upload-item', 'upload-item');
            $this->registerComponent('forms.elements.range-slider', 'range-slider');

            // Form fields - these components should be wrapped in a field to handle label, input, error messages...
            $this->registerComponent('forms.fields.datepicker', 'date-field');
            $this->registerComponent('forms.fields.input', 'input-field');
            //            $this->registerComponent('forms.fields.price', 'price-field');
            $this->registerComponent('forms.fields.select', 'select-field');
            $this->registerComponent('forms.fields.checkbox', 'checkbox-field');
            $this->registerComponent('forms.fields.radio', 'radio-field');
            $this->registerComponent('forms.fields.textarea', 'textarea-field');
            $this->registerComponent('forms.fields.file', 'file-field');
            $this->registerComponent('forms.fields.colorpicker', 'colorpicker-field');
            $this->registerComponent('forms.fields.search', 'search-field');

            // Messages
            //            $this->registerComponent('messages.flash-message', 'flash-message');

            // Modals
            $this->registerComponent('modals.frame', 'modal');

            // Notifications
            $this->registerComponent('notifications.default', 'notification');
            $this->registerComponent('notifications.bubble', 'notification-bubble');

            // Slide overs
            //            $this->registerComponent('slide-overs.slide-over', 'slide-over');

            // Breadcrumbs
            $this->registerComponent('breadcrumbs.default', 'breadcrumb');

            // Menus components
            $this->registerComponent('menus.sidebars.default', 'sidebar');
            $this->registerComponent('menus.drop-down.frame', 'drop-down');
            $this->registerComponent('menus.drop-down.item', 'drop-down-item');
            $this->registerComponent('menus.drop-down.profile', 'profile-menu');

            // Tabs
            $this->registerComponent('menus.tabs.horizontal', 'tabs-horizontal');

            // Cards
            $this->registerComponent('cards.profile', 'card-profile');
            $this->registerComponent('cards.list-item', 'card-list-item');
            $this->registerComponent('cards.narrow', 'card-narrow');

            // Tags
            $this->registerComponent('tags.default', 'tag');

            // Gallery
            $this->registerComponent('gallery.slideshow', 'slideshow');
        });
    }

    /**
     * @return string
     */
    protected function pathToHelper()
    {
        return __DIR__.'/../app/Helpers/DsgHelper.php';
    }

    /**
     * @return string
     */
    protected function pathToResources()
    {
        return __DIR__.'/../resources';
    }

    /**
     * @return string
     */
    protected function getConfigFile()
    {
        return __DIR__.'/../config/dsg.php';
    }

    /**
     * Register the given component.
     *
     * @return void
     */
    protected function registerComponent(string $component, string $alias)
    {
        Blade::component('dsg::components.blade.'.$component, 'dsg-'.$alias);
    }
}
