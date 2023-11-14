import * as _ from 'lodash'

export const registerDsgComponents = (app) => {
  const files = import.meta.glob('./**/*.vue', { eager: true })

  Object.entries(files).forEach(([path, mod]) => {
    const componentName = _.upperFirst(
      _.camelCase(
        path.split('/').pop().replace(/\.\w+$/, ''),
      ),
    )

    app.component(`Dsg${componentName}`, mod.default)
  })
}
