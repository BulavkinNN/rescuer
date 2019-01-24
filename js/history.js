
function init(){
$( ".machine").click(function() {
  findMc(this.innerHTML);
});

};



// Пробежаться по массиву baza, закинуть значения в коллекцию сет - "machine" и  распечатать в див значения
//Transform to array to Sort
function getMachine (){
let setM = new Set();
//Need to  make list with only не повторяющимися  значениями
Object.values(baza).forEach(value => {setM.add(value.machine)});
Array.from(setM).sort().forEach(value => {addToDivMs(value)});

  
};

function getResult (){
Object.values(baza).forEach(value => {
  addToResult(value);
})
};

// if select all repair --> add to result all
function findMc (Mashine){
	$( "#result-table").show();
	$( ".result-tr").remove(); //clear list repair 
Object.values(baza).forEach(value => {if (value.machine==Mashine ||"Весь ремонт"==Mashine){addToResult (value)}});
};

// Insert div > list 
function addToDivMs (Mashine){
$("#list").append("<span class='machine'>"+Mashine+"</span>")
};


function addToResult (Object){
$("#result-table").append("<tr class='result-tr'><td>"+Object.date+"</td><td>"+Object.machine+"</td><td> "+Object.problem+"</td><td> "+Object.cause+" </td><td>"+Object.decision+" </td></tr>")	
}

$( "#question").hide(); //Hide password 
$( "#result-table").hide(); //Hide information
getMachine();
init();