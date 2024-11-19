const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) => {
    e.preventDefault();
}

inputField.addEventListener('keydown', (e) => {
    
    if (e.key === 'Enter') {
        e.preventDefault();  // Prevent form submission
        sendMessage();
    }
});

function sendMessage() {
    // console.log('sending message....');
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
             inputField.value = '';                    // leave blank the input field msg after send
             scrollToBottom();
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

chatBox.onmouseenter = () => {
    chatBox.classList.add('active');
}
chatBox.onmouseleave = () => {
    chatBox.classList.remove('active');
}

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;

            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){              // if active class not conatins in chatbox
                scrollToBottom();
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);

}, 500);

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}