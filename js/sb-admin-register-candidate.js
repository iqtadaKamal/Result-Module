
  
  function isCNIC(evt)
      {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
        return false;
        return true;
      } 

  function onlyAlphabets(e, t) {
        try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }


function alphaOnlyWithSpace(evt) {
    var charCode = (evt.which) ? evt.which : window.event.keyCode;

    if (charCode <= 13) {
        return true;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        var re = /^[a-zA-Z ]+$/
        return re.test(keyChar);
    }
}

document.getElementById('btnRegister').disabled = true;
  function btnDisable(){  
    inputfname = document.getElementById('inputfname').value;
    inputlname = document.getElementById('inputlname').value;
    inputpname = document.getElementById('inputpname').value;
    inputSign = document.getElementById('inputSign').value;
    inputGender = document.getElementById('inputGender').value;
    inputCNIC = document.getElementById('inputCNIC').value;
    inputNA = document.getElementById('inputNA').value;


     if(inputfname && inputlname && inputpname && inputSign && inputGender && inputCNIC && inputNA){
      document.getElementById('btnRegister').disabled = false;
     }
     else{
      document.getElementById('btnRegister').disabled = true;
     }
  }


