const fs = require('fs');

const sourcePath = __dirname + "/src/components";
// --path flag also can be used to define the end path for the copying components
const destinationPath = process.env.npm_config_path || process.cwd() + "/resources/js/vue/components/dsg";

if (!fs.existsSync(destinationPath)) {
    fs.mkdirSync(destinationPath, {recursive: true})
}

console.log("Publishing components to " + destinationPath + " ..." );
fs.cpSync(sourcePath, destinationPath, { recursive: true });

console.log("Components published successfully");