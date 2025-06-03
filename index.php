<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> Ar_Tour | Get Started </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>
  <link href="assetss/img/a.ico" rel="icon">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
</head>
<body>
<!-- partial:index.partial.html -->
<section id="top">

<!-- Check the SRC if the images were moved -->
      <img src="assetss/getStartedimg/mountain.png" id="bg" />
      <h2 id="text">TIAONG</h2>
      <img src="assetss/getStartedimg/man.png" id="man" />
      <img src="assetss/getStartedimg/clouds_1.png" id="clouds_1" />
      <img src="assetss/getStartedimg/clouds_2.png" id="clouds_2" />
      <img src="assetss/getStartedimg/left.png" id="mountain_left" />
      <img src="assetss/getStartedimg/right.png" id="mountain_right" />
      
    </section>
    <section id="sec">
      <h2>Welcome to Tiaong, Quezon</h2>
      <p>
        Tiaong was once part of San Pablo City in Laguna, Philippines over 300 years ago. Its neighboring towns are San Antonio, Quezon to the south, San Pablo City to the north, Dolores, Quezon to the northeast, Lipa City to the west, and Candelaria, Quezon to the east. In 1961, Tiaong became an independent municipality thanks to a philanthropic, nationalistic, religious woman named "Donya Tating" who was well-loved and respected by the people for her sympathetic attitude towards the poor. She was often seen riding a cart drawn by a large black bull to church, and the loud mooing of the bull signaled the start of mass.
    </section>
<footer>
  <!-- Put the link here -->
  <a href="user_index.php"><span>Get Started </span> <i class="fa fa-chevron-right" aria-hidden="true"></i></a> 
</footer>
<!-- partial -->

<!-- Javascript -->
<script>
  const mountainLeft = document.querySelector('#mountain_left');
  const mountainRight = document.querySelector('#mountain_right');
  const cloud1 = document.querySelector('#clouds_1');
  const cloud2 = document.querySelector('#clouds_2');
  const text = document.querySelector('#text');
  const man = document.querySelector('#man');

  window.addEventListener('scroll',()=>{
      let value = scrollY;
      mountainLeft.style.left = `-${value/0.7}px`
      cloud2.style.left = `-${value*2}px`
      mountainRight.style.left = `${value/0.7}px`
      cloud1.style.left = `${value*2}px`
      text.style.bottom = `-${value}px`;
      man.style.height = `${window.innerHeight - value}px`
  })
</script>

<!-- CSS -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', serif;
}

::selection {
    background: #87b1ac;
    color: #19184d;
}

body {
    height: 100vh;
    width: 100vw;
    overflow-y: scroll; /* Always show scrollbar */
    scrollbar-width: none; /* Hide scrollbar */
}

body::-webkit-scrollbar {
    display: none;
  }
#top{
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}
#top::before{
    content:'';
    position: absolute;
    bottom: 0;
    left: 0;
    height:200px;
    width: 100%;
    background:linear-gradient(to top,#fff,transparent);
    z-index: 1000;
}
#man{
    top: inherit;
    bottom: 0;
}
section img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
}
#text{
    position: relative;
    color:white;
    font-size: 10rem;
}
#sec{
    padding:100px;
  padding-bottom:20px;
}
#sec h2{
    font-size: 4rem;
    margin-bottom: 30px;
    color:#20496a;
}

#sec p{
    font-size: 1.2rem;
  line-height:2rem;
  font-weight:300;
    color:#20496a;
}
footer{
  margin-top:30px;
  display:flex;
  padding:20px;
  justify-content:space-evenly;
  align-items:center;
  background-color:#B0DFEA;
}

footer a{
  color:#20496a;
  text-decoration: none;
}
footer span{
  font-weight: 600;
}
footer span:hover{
  color:#20496a;
  text-shadow: 0 0 10px #20496a; /* set text shadow with a color that matches text color */
}

footer a i{
    transition:0.2s;
}
footer a i:hover{
  transform:translateY(-10px);
}


@media (max-width: 768px) {
    #text {
    font-size: 6rem;
   }

    #sec {
        padding: 40px;
    }
    
    #sec h2 {
        padding-top: 50px;
        font-size: 30px;
    }
#sec p {
        font-size: 9px;
        line-height: 2.5;
    }
}

/* Tablet and desktop styles */

@media (min-width: 768px) {
  #top::before {
    height: 25vh;
  }

  #text {
    font-size: 8rem;
  }

  #sec {
    padding: 100px;
  }

  #sec h2 {
    font-size: 4rem;
    margin-bottom: 30px;
    text-align: left;
  }

}

@media (min-width: 1024px) {
  #top::before {
    height: 30vh;
  }

  #text {
    font-size: 10rem;
  }

  #sec {
    padding: 100px 100px 50px 100px;
  }

  #sec h2 {
    font-size: 6rem;
  }

}

</style>
</body>
</html>
