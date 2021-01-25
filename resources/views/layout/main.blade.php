<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/menubtn.css')}}">

    <!-- Fonts Links -->
    <link href="https://fonts.googleapis.com/css?family=Bellota:700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>

    <title></title>
  </head>
  <body id="body">
    <div class="menus">

      <div class="amenu">
        <a href="#" class="amenu">Home</a><br>
      </div>
      <div class="amenu">
        <a href="#" class="amenu">T&C's</a><br>
      </div>
      <div class="amenu">
        <a href="#" class="amenu">Contact</a><br>
      </div>
      <div class="amenu">
        <a href="#" class="amenu">Donate</a>
      </div>
    </div>
    <div class="followus" id="followus">
      <p>Follow us on</p>
      <div class="socmed">
        <img src="../img/instagram-icon.png" class="imgsocmed" style="margin-left:0;"width="20px" height="20px" alt="">
        <img src="../img/youtube-icon.png" class="imgsocmed" width="20px" height="20px" alt="">
        <img src="../img/github-icon.png" class="imgsocmed" width="20px" height="20px" alt="">
      </div>

    </div>


  <div id="asbody" class="asbody">



    <nav class="navbar navbar-expand-lg navbar-light">
        <button id="icon2" onclick="slidemenu()" class="navbar-toggler menubtn" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <div id="icon2">
            <span></span>
            <span style="background-color: rgba(0,0,0,0)"></span>
            <span></span>
            <span style="background-color: rgba(0,0,0,0)"></span>
            <span style="background-color: rgba(0,0,0,0)"></span>
            <span style="background-color: rgba(0,0,0,0)"></span>
            <span></span>
            <span style="background-color: rgba(0,0,0,0)"></span>
            <span></span>
        </div>
        </button>
        <a class="navbar-brand" href="/"><h1 class="judul">Instantly</h1></a>

    </nav>

    @yield('maincontent')

  </div>
    <footer id="footy">
      <svg viewBox="0 0 120 28">
       <defs>
         <mask id="xxx">
           <circle cx="7" cy="12" r="40" fill="#fff" />
         </mask>

         <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="
                 1 0 0 0 0
                 0 1 0 0 0
                 0 0 1 0 0
                 0 0 0 13 -9" result="goo" />
            <feBlend in="SourceGraphic" in2="goo" />
        	</filter>
           <path id="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
        </defs>

         <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2" ></use>
         <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0" ></use>



        <g class="gooeff">
        <circle class="drop drop1" cx="20" cy="2" r="1.8"  />
        <circle class="drop drop2" cx="25" cy="2.5" r="1.5"  />
        <circle class="drop drop3" cx="16" cy="2.8" r="1.2"  />
          <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />

          <!-- g mask="url(#xxx)">
          <path   id="wave1"  class="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
          </g>
        </g -->

      </svg>

    </footer>






















    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" crossorigin="anonymous"></script>
    <script>

    $(document).ready(function(){
        $('#icon2').on('click touchstart', function () {
            $(this).toggleClass('open');
        });
    });

    function slidemenu() {
      var body = document.getElementById('body');
      var asbody = document.getElementById('asbody');
      var footy = document.getElementById('footy');
      var followus = document.getElementById('followus');
      var wave = document.querySelectorAll('wave');

      if (asbody.style.transform == 'rotate(-5deg) translateX(54%) translateY(22%)') {
        asbody.style.transform = 'none';
        body.style.backgroundColor = 'white';
        followus.style.zIndex = '-2';
      }else {
        asbody.style.transform = 'rotate(-5deg) translateX(54%) translateY(22%)';
        body.style.backgroundColor = 'rgb(116, 49, 200)';
        followus.style.zIndex = '2';
      }


    }
    </script>
  </body>
</html>
