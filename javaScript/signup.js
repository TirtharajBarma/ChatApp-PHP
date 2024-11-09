const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{

    // Ajax starting
    let xhr = new XMLHttpRequest();  // creating XML obj
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              console.log(data);
              
              if(data == "success"){
                location.href="users.php";
              }else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
            // console.log(data);
            
          }
      }
    }

    // we have to send the form data thr ajax to php
    let formData = new FormData(form);  // creating formData obj
    xhr.send(formData);  // sending data to php
}