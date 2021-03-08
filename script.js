

////Ожидаемая структура объекта
//parsed_link.protocol; // => "https:" 
//parsed_link.host; // => "google.com:3000" 
//parsed_link.hostname; // => "google.com" 
//parsed_link.port; // => "3000" 
//parsed_link.pathname; // => "/pathname/" 
//parsed_link.hash; // => "#hash" 
//parsed_link.search; // => "?arg=test" 
//parsed_link.origin; // => "http://google.com:3000"


/**
 * Вообще Вам надо наверное написать регилярку, но для парсинга урлов лично я использую split
 * Именно для уролов такой подход проще (универсальнее), быстрее и надежнее...
 * Ну опятьже смотря какая задача. Просто универсальную регулярку тяжело составлять...
 * По этому сделал 2 варианта.
 */

var link = "https://google.com:3000/pathname/?arg=test#hash";
var parsed_link = {};



// Вариант 1 с split:

parsed_link.protocol=link.split('://')[0];
parsed_link.host=link.split('/')[2];

let hostSplited=parsed_link.host.split(':');

parsed_link.hostname=hostSplited[0];
if(hostSplited.length==2){
    parsed_link.port=hostSplited[1];
}

console.log('Вариант с split',parsed_link);

// и т.д...



// Вариант 2 с exec (быстро накидал регулярку именно для этого урл):

let execRes=/^(https?):\/\/([^:]+):(\d+)\/([^\?]+)(\?[^#]+)(#.+)$/.exec(link);
console.log(execRes);

console.log('Вариант с exec',parsed_link);

// и т.д...