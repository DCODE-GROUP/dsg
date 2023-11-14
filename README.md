# dsg
This is intended to be the package for the project starter to use that houses scss etc.

## Installation

The `composer require dcode/dsg` command won't work because it isn't published to packagist.
For now, you have to download from git and link it to your project.


To copy files to your project run:
```bash
php artisan vendor:publish --provider=Dcode\\Dsg\\DsgServiceProvider
```
It will copy the resource files to the `/resources` folder.
Use `--force` flag if you want to override the previously published files.

Before registering the components make sure these node packages are installed:
- lodash
- vue-cookies
- @heroicons/vue

Register the components in the `app.js` file:
```js
import { registerDsgComponents } from "./vue/components/dsg";

// Add it before you mount the vue applicaton
registerDsgComponents(app);
```

To use the vue components you can add the dsg prefix. Like this:
```html
<dsg-alert type="success"
           heading="Test heading title"
           message="Test message text"
></dsg-alert>
```
Check the Dcode Design System page for the available components: http://design-system.dcodegroup.com