# dsg
This is intended to be the package for the project starter to use that houses scss etc.

## Installation

The `npm install dsg` command won't work because it isn't published to npm.
For now, you have to download from git and link it to your project.


To copy files to your project run:
```bash
node ./node_modules/dsg/publish-components.js
```
It will copy the component files to the `resources/js/vue/components/dsg` folder.

Add this code to the `app.js` file before `app.mount("#vueApp")`:
```js
const files = import.meta.glob(
    './vue/components/dsg/**/*.vue',
    { eager: true }
);

Object.entries(files).forEach(([path, mod]) => {
    const componentName = _.upperFirst(
        _.camelCase(path.split('/').pop().replace(/\.\w+$/, ''))
    );

    app.component(
        `Dsg${componentName}`, mod.default
    );
});
```
This will register the components globally.