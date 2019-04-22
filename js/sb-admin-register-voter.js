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
    inputfaname = document.getElementById('inputfaname').value;
    inputAddress = document.getElementById('inputAddress').value;
    inputAddress2 = document.getElementById('inputAddress2').value;
    inputDOB = document.getElementById('inputDOB').value;
    inputAge = document.getElementById('inputAge').value;
    inputGender = document.getElementById('inputGender').value;
    inputNationality = document.getElementById('inputNationality').value;
    inputNA = document.getElementById('inputNA').value;
    inputPS = document.getElementById('inputPS').value;
    inputCNIC = document.getElementById('inputCNIC').value;
    inputCity = document.getElementById('inputCity').value;


     if(inputfname && inputlname && inputfaname && inputAddress && inputAddress2 && inputDOB && inputAge && inputGender && inputNationality && inputCNIC && inputNA && inputPS && inputCity){
      document.getElementById('btnRegister').disabled = false;
     }
     else{
      document.getElementById('btnRegister').disabled = true;
     }
  }