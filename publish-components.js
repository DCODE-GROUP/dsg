const fs = require('fs');

const sourcePath = __dirname + "/src/components";
const destinationPath = process.cwd() + "/resources/js/vue/components/dsg";

if (!fs.existsSync(destinationPath)) {
    fs.mkdirSync(destinationPath, {recursive: true})
}

console.log("Publishing components to " + destinationPath + " ..." );
fs.cpSync(sourcePath, destinationPath, { recursive: true });

console.log("Components published successfully");