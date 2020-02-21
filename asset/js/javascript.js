let calculate = document.getElementById("calculatorValidate")
calculate.addEventListener("click", function(){
    let cal1 = document.getElementById("calculator1").value
    
    document.getElementById("displayCalculator").innerHTML = "a"
    
});
let tSize = document.getElementById("tableSize")
tSize.addEventListener("change", function ()
{
    console.log(tSize);
    alert("d");
});
let tItems = document.getElementById("tableItems")
tItems.addEventListener("change", function ()
{
    console.log(tItems); 
    document.getElementById("displayTable").innerHTML="Le tableau saisie est : "
});
let cal1 = document.getElementById("calculator1").value
let nombre1 = $calculatorNumber1
console.log(nombre1)