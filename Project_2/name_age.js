/*
This file is the javascript code for part A of project 2. 
*/
document.getElementById("enter").addEventListener("click",myname);

function myname()
{
    var name = document.getElementById("input1").value; 

    document.getElementById("output").textContent = "Enter a name and age";

    if(name.trim() == "")
    {
        document.getElementById("output").textContent = "Enter a real name";
    }
    else
    {
        var age = document.getElementById("input2").value;

        if(age == 0 ||age >= 150)
        {
            document.getElementById("output").textContent = "Enter a real age";
        }
        else 
        {
            alert("Hello " + name + ". You are " + age + " years old");
        }
    }
}

