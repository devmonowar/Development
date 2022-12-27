//const data = require('./friends_data.json');
const data = require('./students_data.json');
// console.log(data);
// console.log(data.friends[0]);
// console.log(data.friends[0].name);

// data.friends[0].name = "sakib";

//nodedelete data.friends[0].name;

// console.log(data.friends[0].name);
console.log(data);

// https://jsonplaceholder.typicode.com/
// https://codebeautify.org/jsonviewer
// https://jsonpathfinder.com/

// JSON path finder chrome extension

//terminal e likhte hobe node indexedDB.js

for (x in data ){
    console.log(x);
    console.log(data[x]);
}

// https://www.liquid-technologies.com/online-json-to-schema-converter
// https://www.jsonschemavalidator.net/