<style>

/*
Import the desired font from Google fonts.
*/
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400&display=swap');

/*
Define all colors used in this template
*/
:root{
  --main-highlight-color:#60D0E4;
  --secondary-highlight-color:#B8E6F1;
  --list-point-color:#C2C6CA;
  --text-color:#303E48;
}

@page{
  /*
  This CSS highlights how page sizes, margins, and margin boxes are set.
  https://docraptor.com/documentation/article/1067959-size-dimensions-orientation

  Within the page margin boxes content from running elements is used instead of a
  standard content string. The name which is passed in the element() function can
  be found in the CSS code below in a position property and is defined there by
  the running() function.
  */
  size:A4;
  margin:5cm 1.2cm 1.2cm 8cm;

  @top-left-corner{
    content:"";
    background-color:var(--main-highlight-color);
  }

  @top-left{
    content:element(header);
    margin-left:-8cm;
    width:210mm;
    background-color:var(--main-highlight-color);
  }

  @top-right-corner{
    content:"";
    background-color:var(--main-highlight-color);
  }

  @left-top{
    content:element(aside);
    background-color:var(--secondary-highlight-color);
  }

  @bottom-left-corner{
    content:"";
    background-color:var(--secondary-highlight-color);
  }
}

/*
The body itself is used to set the default font family, size and color for the document.
*/
*{
    font-family: 'Montserrat', sans-serif;
    margin: 5px;
    padding: 5px;
}
body{
  font-family: 'Montserrat', sans-serif;
  font-size:10pt;
  color:var(--text-color);

}

/*
We remove the margin from headings level 3 and 4 and also set the font size to 10pt.
*/
h3,
h4{
  font-size:10pt;
  margin:0;
}

/*
The links in the document should not be highlighted by an different color and underline
instead we use the color value inherit to get the current texts color.
*/
a{
  color:inherit;
  text-decoration:none;
}

/*
The aside element uses the position running to move the element in the page margin boxes
on the left side of each page.

The content itself gets a padding of 1.5cm on all sides.
*/
aside{
  position:running(aside);
  padding:0 1.5cm 0 1.5cm;
  text-align:left;
}

/*
The image of Joe McFadden is placed in a circle with an black border.
To do so we set a fixed size, the image as background image, position the image
and apply the border and border radius.

Additionally we want the image to be partly in the header section so we move it
up by half of the circle's height with the help of position absolute.
*/


/*
The sections in the aside element are separated by hr elements. We use a margin
of 2cm on the top, 0 left and right and half a centimeter on the bottom.

The height of the hr element gets set to 0, we use a border instead with the same
color as the text.
*/
aside hr{
  margin:2cm 0 .5cm 0;
  border:0;
  border-top:.5mm solid var(--text-color);
  height:0;
}

/*
If a header level 3 is followed by a header of level 4 we give it a margin of 2.5mm.
*/
aside h3 + h4{
  margin-top:2.5mm;
}

/*
H4 headers get a margin top of 5mm.
*/
aside h4{
  margin-top:5mm;
}

/*
The link to the website is shown all uppercase and far below the skills section.
For this we just set a margin top.
*/
aside a{
  display:block;
  margin-top:6cm;
  font-weight:bold;
  text-transform:uppercase;
}

/*
Looking closely we see that the TLD .com is in lowercase so we but this in a separate span
and use the text transform to none.
*/
aside a span{
  text-transform:none;
}

/*
All paragraphs in the aside element should have no margin.
*/
aside p{
  margin:0;
}

/*
The main content on the right side gets a margin top of 1.2cm and a margin left of
the same 1.2cm. This is done to keep some space from the blue header and sidebar.
*/
main{
  margin:1.2cm 0 0 1.2cm;
}

/*
All headers level 3 in the main content get a margin top of 1cm.
*/
main h3{
  margin-top:1cm;
  margin-bottom:1em;
}

/*
The professional experience is done via an ordered list, as we want nicely styled list points
so instead of using decimal or decimal with leading zero as list style type, we set it to none.

We actually use a counter for the list points and to do so we first need to reset it.
*/
main ol{
  list-style-type:none;
  counter-reset:listitems;
  margin-left:1cm;
}

/*
For each list element we increment the counter.
*/
main ol > li{
  counter-increment:listitems;
}

/*
Before each list element we add the counter on the left side and give it some different style
like a larger font size.
*/
main ol > li:before{
  content:"0" counter(listitems);
  float:left;
  margin-left:-1cm;
  font-size:18pt;
  color:var(--list-point-color);
}

/*
The unordered lists in the "Outcomes" part get a margin left of half a cm.
*/
main ul{
  margin-left:.5cm;
}

/*
Headers level 4 followed by an paragraph get no margin so there is no space between them.
*/
main h4 + p{
  margin:0;
}

/*
The company names in the experience section should always be displayed uppercase.
*/
main .company{
  text-transform:uppercase;
}

/*
Finally all headers level 3 get a special font color and get displayed uppercase.
*/
h3{
  color:blue;
  text-transform:uppercase;
}

.pic-form {
    margin-top: 20px;
    text-align: center;
    /* Center the image horizontally */
}

.pic-form img {
    width: auto;
    height: 150px;
    /*border-radius: 50%;*/
    /* Make the image circular */
}


.pdf-header {
    text-align: center;

}

.pdf-header h1 {
    font-size: 24px;
    color: #320958;
}

</style>
