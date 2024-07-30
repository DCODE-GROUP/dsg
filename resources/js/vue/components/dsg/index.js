import * as _ from "lodash";
import { aliases } from "./aliases";

export const registerDsg = (app) => {
  const files = import.meta.glob("./**/*.vue", { eager: true });

  Object.entries(files).forEach(([path, mod]) => {
    app.component(`Dsg${getComponentName(path)}`, mod.default);
  });

  app.provide("dsgClasses", (configPaths, extraClasses = {}) => {
    if (typeof configPaths === "string" || configPaths instanceof String) {
      configPaths = [configPaths];
    }

    let classes = "";
    configPaths.forEach((path, key) => {
      const extraClassKey = path.replaceAll(".", "_").replaceAll("-", "_");
      classes += key === 0 ? "" : " ";
      classes += config(path);
      classes += extraClasses[extraClassKey] !== undefined ? " " + extraClasses[extraClassKey] : "";
    });

    return classes;
  });
};

function getComponentName(path) {
  const name = _.upperFirst(_.camelCase(path.replace(/\.\w+$/, "").split("/")));

  return aliases[name] !== undefined ? aliases[name] : name;
}

function config(path) {
  const paths = path.split(".");
  let current = window.dsgConfig;

  for (let i = 0; i < paths.length; ++i) {
    if (current[paths[i]] === undefined) {
      return undefined;
    } else {
      current = current[paths[i]];
    }
  }
  return current;
}
