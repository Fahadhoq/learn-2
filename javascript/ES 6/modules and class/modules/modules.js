import {message , setMessage , txt} from './VaribaleModules.js';
import {poke as guta} from './VaribaleModules.js';

//print variable
console.log(message);

//call function
setMessage("message is change");
console.log(message);

//print varible chenge from export
console.log(txt);

//print variable chenge in import
console.log(guta);
