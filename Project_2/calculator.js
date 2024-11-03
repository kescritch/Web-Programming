/*
This file is the javascript code for part B of project 2. 
*/
document.getElementById("calculate").addEventListener("click",calc);

function calc()
{
    var op = document.getElementById("operations").value;
    var input1 = document.getElementById("int1").value;
    var input2 = document.getElementById("int2").value;
    var result = null;

    if(op == "+")
    {
        result = parseInt(input1) + parseInt(input2);
        document.getElementById("output").value = result;
    }
    if(op == "-")
    {
        result = input1 - input2;
        document.getElementById("output").value = result;
    }
    if(op == "*")
    {
        result = input1 * input2;
        document.getElementById("output").value = result;
    }
    if(op == "/")
    {
        result = input1 / input2;
        document.getElementById("output").value = result;
    }
    if(op == "^")
    {
        result = Math.pow(parseInt(input1),parseInt(input2))
        document.getElementById("output").value = result;
    }
    if(op == "√")
    {
        result = Math.sqrt(input1)
        document.getElementById("int2").value = null;
        document.getElementById("output").value = result;
    }

    addToList(input1,input2,op,result);
}

function addToList(one,two,op,result)
{
    var listElement = document.querySelector("ul");
    var newList = document.createElement("li");
    if (op == "√")
    {
        newList.textContent = op + one;
    }
    else
    {
        newList.textContent = one + " " + op + " " + two + " = " + result; 
    }
    listElement.appendChild(newList);
}

