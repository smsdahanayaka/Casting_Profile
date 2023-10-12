{{-- link css --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
/* googlr fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

/* media quary */

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}



/* css variable */
:root{

--header-height:3rem;

    /* colors */

    /* favorit color (main color) */
    --main-color:250;

    /* HSL colr mode */
    --very-first-color:hsl(var(--main-color),77%,33%);
    --first-color:hsl(var(--main-color),69%,61%);
    --first-color-lighter:hsl(var(--main-color),92%,85);
    --title-color:hsl(var(--hue-color), 8%, 15%);
    --text-color:hsl(var(--hue-color), 8%, 45%);
    --text-color-light:hsl(var(--hue-color), 8%, 65%);
    --input-color:hsl(var(--hue-color), 70%, 96%);
    --boady-color:hsl(var(--hue-color), 60%, 99%);
    --scroll-bar-color:hsl(var(--hue-color), 12%, 90%);
    --scroll-thumb-color:hsl(var(--hue-color), 12%, 80%);
    --container-color:#FFF;
    --container-color--colour:#ffff;

    /* font and typography */
--body-font:'Poppins', sans-serif;

/* .5rem=8px , 1rem=16px , 1.5rem=24px  */
--big-big-font-size:3rem;
--big-font-size:2rem;
--h1-font-size:1.5rem;
--h2-font-size:1.25rem;
--h3-font-size:1.125rem;
--normal-font-size:.938rem;
--small-font-size:.813rem;
--smaller-font-size:.75rem;

/* font weight */

--font-medium:500;
--font-semi-bold:600;

/* margenes bottom */
/* .25rem=4px , .5rem=8px , .75rem=12px */
--mb-0-25:.25rem;
--mb-0-5:.5rem;
--mb-0-75:.75rem;
--mb-1:1rem;
--mb-1-5:1.5rem;
--mb-2:2rem;
--mb-2-5:2.5rem;
--mb-3:3rem;

/* Z-Index */
--z-tooltip:10;
--z-fixed:100;
--z-modal:1000;

}


*{
    padding: 0;
    margin: 0;
    font-family: var(--body-font);

}
body {
        font-family:var(--body-font);
        font-size: 16px;
        color: #120027;
        font-weight: normal;
        letter-spacing: 0.03em;
    }



/* boady css */
.container-inner{
    padding: 0px 50px 0px 50px;
}

.body-container{
    background-color:#fafafa;
    box-shadow: 0px 10px 50px #dfdfdf;
    border-radius: 20px;
    padding: 5px;
    margin-top:50px;
    margin-bottom:100px;

}

.reg-txt{
    margin-top: 100px;
    text-align: center;
    color:rgb(121, 13, 121);
    font-size:var(--h1-font-size);
    font-weight:600;
}

.form-label,label{
    margin: 10px;
    font-size:var(--smaller-font-size);
    color: var(--text-color);
    font-weight: 600;
}
.name-label {
    font-weight: 600;
    font-size:var(--normal-font-size);
    color: gray;
}

input{
    /* font-size:var(--smaller-font-size); */
}

.profile-img{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
}

.profile-img img{
    width: 300px;
}

.btn-btn{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
}

.btn-log-delete >a{
    color: #dfdfdf;
    text-decoration: none;
}

/* footer css */

/* .footer{
    width: 100%;
    height: 7vh;
    font-size: var(--smaller-font-size);
    background-color:#374357;
    color: #FFF;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    bottom: 0;

} */

/* Nav bar */
/* Add a black background color to the top navigation */
.topnav {
  background-color: #320958;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #19062b;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

</style>
