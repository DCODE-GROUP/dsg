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

Add this code to the `app.js` file:
```js
import * as _ from "lodash";

const files = import.meta.glob("./vue/components/dsg/**/*.vue", { eager: true });

Object.entries(files).forEach(([path, mod]) => {
  const componentName = _.upperFirst(
    _.camelCase(
      path
        .split("/")
        .pop()
        .replace(/\.\w+$/, ""),
    ),
  );

  app.component(`Dsg${componentName}`, mod.default);
});
```
This will register the components globally.

To use the vue components you can add the dsg prefix. Like this:
```html
<dsg-alert type="success"
           heading="Test heading title"
           message="Test message text"
></dsg-alert>
```
Check the Dcode Design System page for the available components: http://design-system.dcodegroup.com