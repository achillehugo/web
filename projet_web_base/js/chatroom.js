window.onload =function(){
  let button = document.createElement('button');
  button.value='Créer une ChatRoom'; 
  let article = document.querySelector('body article'); 
  article.appendChild(button); 
  let textarea=document.createElement('textarea'); 
  article.appendChild(textarea);
  button.onClick=function(){
    window.location.href="chatroom.php?name="+textarea.value;
    
    
  }
  



}
