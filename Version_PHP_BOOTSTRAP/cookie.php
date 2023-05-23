

  <div class="wrapper fixed-bottom">
    <img src="img/galleta.png" alt="">
    <div class="h-content">
      <header>Alerta de Cookies</header>
      <p>Este sitio utiliza cookies, pera tener una mejor experiencia le recomendamos activarla en el sitio.</p>
      <div class="cbuttons">
        <button class="citem">Entendido</button>
        <a href="#" class="citem">Leer Mas</a>
      </div>
    </div>
  </div>

  <script>
    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");

    acceptBtn.onclick = ()=>{
      //setting cookie for 1 month, after one month it'll be expired automatically
      document.cookie = "CookieBy=EMA_LNG; max-age="+60*60*24*30;
      if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
      }else{ //if cookie not set then alert an error
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=EMA_LNG"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  </script>
