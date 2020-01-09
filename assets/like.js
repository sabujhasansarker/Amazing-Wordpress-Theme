let {postId,tamplet}=likeSystam;
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

// like start
let likeButton = false;
let $=(e)=> document.querySelector(e);
let like= $('#like');
let number = 0;
like.innerHTML = '<li class="heart" ><a></a></li>'

like.addEventListener("click", function(){
  likeButton = !likeButton
  if (likeButton) {
    like.innerHTML = `<img src="${tamplet}/image/unlike.png">`
}else if (!likeButton){
    like.innerHTML = '<li class="heart" ><a></a></li>'
    number -= 1;
}

setCookie(postId,likeButton,1)
});
function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
 if (getCookie(postId)=='true' ) {
   like.innerHTML = `<img src="${tamplet}/image/unlike.png">`
    number += 1;
 }else{
    like.innerHTML = '<li class="heart" ><a></a></li>'
 }

console.log(number)