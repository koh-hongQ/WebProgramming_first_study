//var and const
var hi = "HI~ my name is Hongkyu Kho, Department of mathmatics, HUFS.";
const information = {
    name: "SEOCHO",
    population: 400000,
    attractions: ["Banpo Hangang Park","Seoul Arts Center"],
    
};

//innerHTML
document.getElementById("seoul").innerHTML="SEOCHO-GU, SEOUL";
//document.write
function write2() {
    document.write(hi);
}
//first alert
window.alert("Welcome~^^ ");

//console.log
console.log("Hometown name:", information.name);
console.log("Attractions:", information.attractions);

//Data Types: String, Number, Boolean
const myname = "HongkyuKoh";
const growthRate = 0.03;
const isnicely = true;

//Arithmetic, Comparison, and Logical Operators
//first function
function p(growthRate){
    
    var newPopulation = information.population + information.population * growthRate;
    if(information.population >300000 && newPopulation < 800000 && information.population>0){
        return newPopulation; 
}
}
document.getElementById("popul").innerHTML=p(growthRate); 



//object
const originName={
    Seocho:"Seoripul",
    rice:"Seohwa",
    Banpo:"Seorikgae"
}

//arrays
const localfood= ["등심 국밥", "치즈닭갈비", "삼겹살", "수제버거", "퓨전음식"];

//second function
function getOrigin(name) {
    // 객체에서 해당 이름의 유래를 찾음
    if (originName[name]) {
        return `"${originName[name]}".`;
    } else {
        return `Sorry, the origin of "${name}" is not found in the data.`;
    }
}
document.getElementById("origin").innerHTML=getOrigin("Banpo"); 

//Set
const feedback = new Set(["nice","great","fantastic","perfect"]);

//Map
const attractionsMap = new Map([
    ["Banpo Hangang Park", "Park"],
    ["Seoul Arts Center", "arts complex"],
]);
console.log("feedback:", feedback);
console.log("Attractions details:", attractionsMap);

//Error, try, catch,throw
function ErrorFunction() {
    const message = document.getElementById("p111");
    message.innerHTML= ""; 
    let x = document.getElementById("demo").value; 
    try { 
    if(x.trim() == "") throw "empty";
    if(isNaN(x)) throw "not a number";
    x = Number(x);
    if(x > 5) throw "Please input a number between 1 and 5.";
    }
    catch(err) {
    message.innerHTML= err; 
    console.log(err);
   }
}
   