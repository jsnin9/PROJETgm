






function tableau(){

    var nbVariables = document.getElementById("nbVariables").value;
    var nbContraintes = document.getElementById("nbContraintes").value;


    var div2 = document.getElementById("formul2");


    var url = "debit.php?nbContraintes="+nbContraintes+"&nbVariables="+nbVariables;


    var xhr = new XMLHttpRequest();
      
        xhr.onreadystatechange = function(){

            if(this.readyState==4 && this.status==200){
                div2.innerHTML = this.response;
            }  
        }

            xhr.open("GET", url , true);
            xhr.responseType= "text";
            xhr.send();

    }




function versCalcul(){

    var nbVariables = document.getElementById("nbVariables").value;
    var nbContraintes = document.getElementById("nbContraintes").value;
    
    var coef = "";

    var cntr = "";

    var scnd = "";



    for (var j = 1; j <= nbContraintes; j++){

        for (var k = 1; k <= nbVariables; k++){

            cntr += "cntr"+j+k+"="+document.getElementById('cntr'+j+k).value+"&";
        }
    }



    for (var k = 1; k <= nbVariables; k++){

        coef += "coef"+k+"="+document.getElementById('coef'+k).value+"&";
    }



    for (var j = 1; j <= nbContraintes; j++){
        scnd += "scnd"+j+"="+document.getElementById('scnd'+j).value+"&"
    }

    var div3 = document.getElementById("formul3");



    var url = "direction.php?nbVariables="+nbVariables+"&nbContraintes="+nbContraintes+"&"+coef+cntr+scnd;


    var xhr = new XMLHttpRequest();
      
        xhr.onreadystatechange = function(){

            if(this.readyState==4 && this.status==200){
                div3.innerHTML = this.response;
            }  
        }

            xhr.open("GET", url , true);
            xhr.responseType= "text";
            xhr.send();

}

function resultat(){

    var nbVariables = document.getElementById("nbVariables").value;

    var url = "recupDonnee.php?nbVariables="+nbVariables;

    var div4 = document.getElementById("formul4");



    var xhr = new XMLHttpRequest();
      
        xhr.onreadystatechange = function(){

            if(this.readyState==4 && this.status==200){
                div4.innerHTML = this.response;
            }  
        }

            xhr.open("GET", url , true);
            xhr.responseType= "text";
            xhr.send();


}

