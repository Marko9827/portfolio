/* * PANORAMA - Fullscreen Photography HTML Template
*
* This is a premium product available exclusively at this address https://themeforest.net/user/madeon08/portfolio
*
* The demo files are minified/crypted for copyright reasons, you will find them, expanded, commented and coded accurately in your download pack.
*
* Thanks for your support!
*
*/

@import url(./css/ionicons.min.css);
@import url(?marko-nikolic-portfolio-source=stylesheet-in-8);
@import url(?marko-nikolic-portfolio-source=stylesheet-in-7);
@import url(?marko-nikolic-portfolio-source=stylesheet-in-6);
@import url(?marko-nikolic-portfolio-source=stylesheet-in-4);
@import url(?marko-nikolic-portfolio-source=stylesheet-in-5);
@import url("https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,400,600,700|Lora:400,400i,700,700i|Lato:400,300,700|Raleway:300,400,500,700");


:root {
--gold-color: #DAA520;
--box-shadow9938: 0 0px 8px 0 #daa520c7, 0 6px 3077px 0 #daa52000;
/*9938*/
--rgba_218_165_32_0_79: rgba(var(--rgb_code_218_165_32), 0.79);
--F_DAA520_solid: #DAA520 solid;
--F_daa520d4_f: #daa520d4;
--rgb_code_218_165_32: 218, 165, 32;
}

.red {
--gold-color: #da3220;
--box-shadow9938: 0 0px 8px 0 #da3220c7, 0 6px 3077px 0 #da322000;
/*9938*/
--rgba_218_165_32_0_79: rgba(var(--rgb_code_218_165_32), 0.79);
--F_DAA520_solid: #da3220 solid;
--F_daa520d4_f: #da3220d4;
--rgb_code_218_165_32: 218, 50, 32;
}

.green {
--gold-color: #0ca02c;
--box-shadow9938: 0 0px 8px 0 #0ca02cc7, 0 6px 3077px 0 #0ca02c00;
/*9938*/
--rgba_218_165_32_0_79: rgba(var(--rgb_code_218_165_32), 0.79);
--F_DAA520_solid: #0ca02c solid;
--F_daa520d4_f: #0ca02c;
--rgb_code_218_165_32: 12, 160, 44;
}

.blue {
--gold-color: #337ab7;
--box-shadow9938: 0 0px 8px 0 #337ab7c7, 0 6px 3077px 0 #337ab700;
/*9938*/
--rgba_218_165_32_0_79: rgba(var(--rgb_code_218_165_32), 0.79);
--F_DAA520_solid: #337ab7 solid;
--F_daa520d4_f: #337ab7d4;
--rgb_code_218_165_32: 51, 122, 183;
}



html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
font: inherit;
font-size: 100%;
margin: 0;
padding: 0;
vertical-align: baseline;
border: 0
}

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section, main {
display: block
}

body {
line-height: 1
}

ol, ul {
list-style: none
}

blockquote, q {
quotes: none
}

blockquote:before, blockquote:after, q:before, q:after {
content: '';
content: none
}

table {
border-spacing: 0;
border-collapse: collapse
}

.overload-left {
position: fixed;
top: 0;
left: -50%;
overflow: hidden;
width: 100%;
height: 100%;
opacity: 1;
background: transparent;
-webkit-backface-visibility: hidden;
-webkit-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
-moz-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
-webkit-transform: skew(-25deg, 0deg);
-moz-transform: skew(-25deg, 0deg);
-ms-transform: skew(-25deg, 0deg);
-o-transform: skew(-25deg, 0deg);
transform: skew(-25deg, 0deg)
}

.overload-left.loading-done {
-webkit-animation: fadeleft 1.5s normal forwards cubic-bezier(0.785, 0.135, 0.15, 0.86);
-moz-animation: fadeleft 1.5s normal forwards cubic-bezier(0.785, 0.135, 0.15, 0.86);
animation: fadeleft 1.5s normal forwards cubic-bezier(0.785, 0.135, 0.15, 0.86)
}

.overload-right {
position: fixed;
top: 0;
right: -50%;
overflow: hidden;
width: 100%;
height: 100%;
opacity: 1;
background: transparent;
-webkit-backface-visibility: hidden;
-webkit-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
-moz-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
-webkit-transform: skew(-25deg, 0deg);
-moz-transform: skew(-25deg, 0deg);
-ms-transform: skew(-25deg, 0deg);
-o-transform: skew(-25deg, 0deg);
transform: skew(-25deg, 0deg)
}

.overload-right.loading-done {
-webkit-animation: faderight 1.5s normal forwards cubic-bezier(0.785, 0.135, 0.15, 0.86);
-moz-animation: faderight 1.5s normal forwards cubic-bezier(0.785, 0.135, 0.15, 0.86);
animation: faderight 1.5s normal forwards cubic-bezier(0.785, 0.135, 0.15, 0.86)
}

#loading {
position: fixed;
z-index: 50;
width: 100vw;
height: 100vh;
background: rgba(0, 0, 0, 0.4)
}

#loading.loading-done {
background: transparent
}

#loading #preloader {
font-family: Montserrat, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
position: relative;
top: calc(50% - 1.5rem);
width: 100%;
height: 3rem;
margin: 0 auto;
text-align: center;
-webkit-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
-moz-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86)
}

#loading #preloader.loading-done {
opacity: 0
}

#loading #preloader:after {
font-size: 1.2rem;
font-weight: 700;
position: absolute;
top: 4rem;
right: 0;
left: 0;
width: 100%;
height: 1px;
content: 'Loading';
text-align: center;
letter-spacing: .2rem;
text-transform: uppercase;
color: #fff
}

#loading #preloader span {
position: absolute;
border: 2px solid var(--gold-color);
-webkit-backface-visibility: hidden;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
-ms-border-radius: 50%;
border-radius: 50%
}

#loading #preloader span:nth-child(1) {
z-index: 10;
left: calc(50% - 1.5rem);
width: 3rem;
height: 3rem;
border-top: 2px solid #fff;
border-bottom: 2px solid #fff;
-webkit-animation: spinning 1.2s infinite cubic-bezier(0.785, 0.135, 0.15, 0.86);
-moz-animation: spinning 1.2s infinite cubic-bezier(0.785, 0.135, 0.15, 0.86);
animation: spinning 1.2s infinite cubic-bezier(0.785, 0.135, 0.15, 0.86)
}

#loading #preloader span:nth-child(2) {
left: calc(50% - 1.5rem);
width: 3rem;
height: 3rem
}

@-webkit-keyframes fadeleft {
0% {
left: -50%;
background: rgba(32, 35, 45, 0.4)
}
100% {
left: -150%;
opacity: 0
}
}

@-moz-keyframes fadeleft {
0% {
left: -50%;
background: rgba(32, 35, 45, 0.4)
}
100% {
left: -150%;
opacity: 0
}
}

@keyframes fadeleft {
0% {
left: -50%;
background: rgba(32, 35, 45, 0.4)
}
100% {
left: -150%;
opacity: 0
}
}

@-webkit-keyframes faderight {
0% {
right: -50%;
background: rgba(32, 35, 45, 0.4)
}
100% {
right: -150%;
opacity: 0
}
}

@-moz-keyframes faderight {
0% {
right: -50%;
background: rgba(32, 35, 45, 0.4)
}
100% {
right: -150%;
opacity: 0
}
}

@keyframes faderight {
0% {
right: -50%;
background: rgba(32, 35, 45, 0.4)
}
100% {
right: -150%;
opacity: 0
}
}

@-webkit-keyframes spinning {
0% {
-webkit-transform: rotate(0deg)
}
100% {
-webkit-transform: rotate(360deg)
}
}

@-moz-keyframes spinning {
0% {
-moz-transform: rotate(0deg)
}
100% {
-moz-transform: rotate(360deg)
}
}

@keyframes spinning {
0% {
-webkit-transform: rotate(0deg);
-moz-transform: rotate(0deg);
-ms-transform: rotate(0deg);
-o-transform: rotate(0deg);
transform: rotate(0deg)
}
100% {
-webkit-transform: rotate(360deg);
-moz-transform: rotate(360deg);
-ms-transform: rotate(360deg);
-o-transform: rotate(360deg);
transform: rotate(360deg)
}
}

html {
font-size: 62.5%
}

body {
font-family: "Open Sans", "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.4rem;
font-weight: normal;
font-weight: 400;
font-style: normal;
line-height: 1.8;
position: absolute;
height: 100%;
letter-spacing: 0;
color: #fff;
background: #2B2D35;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale
}

body.mobile-device .section {
-webkit-transform: rotateX(0);
-moz-transform: rotateX(0);
-ms-transform: rotateX(0);
-o-transform: rotateX(0);
transform: rotateX(0)
}

body.mobile-device #menu {
transition: none
}

body.mobile-device #menu.menu-opened {
left: 0 !important;
-webkit-transform: translateX(0) !important;
-moz-transform: translateX(0) !important;
-ms-transform: translateX(0) !important;
-o-transform: translateX(0) !important;
transform: translateX(0) !important;
overflow-y: scroll;
}

body.mobile-device #pagepiling.menu-opened {
-webkit-transform: translateX(0);
-moz-transform: translateX(0);
-ms-transform: translateX(0);
-o-transform: translateX(0);
transform: translateX(0);
overflow-y: scroll;
}

.scroll-touch {
overflow-y: hidden;
/*auto*/
-webkit-overflow-scrolling: touch
}

body, html {
overflow: hidden;
width: 100%;
margin: 0;
padding: 0;
-webkit-tap-highlight-color: transparent
}

body, input, select, textarea {
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
transition: all .2s ease-in-out
}

a {
cursor: pointer;
text-decoration: none;
color: #fff;
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
transition: all .2s ease-in-out
}

a:hover {
text-decoration: none !important;
color: var(--rgba_218_165_32_0_79);
outline: none !important
}

a:active, a:focus {
text-decoration: none !important;
color: #fff;
outline: none !important
}

button {
cursor: pointer;
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
transition: all .2s ease-in-out
}

button:hover, button:active, button:focus {
text-decoration: none !important;
color: #2B2D35;
outline: none !important
}

strong, b {
font-weight: 700
}

em, i {
font-style: italic
}

p {
font-family: "Open Sans", "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.4rem;
font-weight: 400;
line-height: 1.8;
margin: 0;
color: #fff
}

p.subtitle {
font-family: Lato, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.5rem;
margin-bottom: 4rem;
letter-spacing: .5rem;
text-transform: uppercase
}

img {
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
transition: all .2s ease-in-out
}

p.text-intro {
font-size: 2rem;
font-weight: 300;
line-height: 1.5;
margin-bottom: 3rem;
color: #fff
}

.text-shadow1 {
font-family: d3;
/* text-shadow: 4px 4px silver;*/
color: var(--gold-color);
}

h1, h2, h3, h4, h5, h6 {
font-family: Raleway, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-weight: 400;
line-height: 1;
margin: 0 0 1.5rem 0;
color: #fff
}

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
text-decoration: none;
color: inherit
}

h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
color: inherit
}

h1 {
font-size: 10rem;
font-weight: 400;
text-transform: uppercase
}

h2 {
font-size: 3.3rem
}

h3 {
font-size: 2.3rem
}

h4 {
font-size: 1.8rem
}

h5 {
font-size: 1.6rem
}

h6 {
font-size: 1.2rem
}

sub {
font-size: .8em;
position: relative;
top: .5em
}

sup {
font-size: .8em;
position: relative;
top: -.5em
}

.clear {
clear: both
}

.display-none {
display: none !important
}

.align-left {
text-align: left
}

.align-center {
text-align: center
}

.align-right {
text-align: right
}

.no-margin-bottom {
margin-bottom: 0
}

.opacity-0 {
visibility: hidden !important;
opacity: 0 !important
}

.opacity-03 {
opacity: .3 !important
}

.opacity-1 {
visibility: visible !important;
opacity: 1 !important
}

.index-999 {
z-index: -999 !important
}

#pagepiling {
position: absolute;
bottom: 0;
left: 0;
width: 100vw;
height: 100vh;
opacity: 0;
-webkit-transition: all .4s ease;
-moz-transition: all .4s ease;
transition: all .4s ease
}

#pagepiling.content-opened {
opacity: .3 !important;
-webkit-transform: translate3d(-50%, 0, 0);
-moz-transform: translate3d(-50%, 0, 0);
-ms-transform: translate3d(-50%, 0, 0);
-o-transform: translate3d(-50%, 0, 0);
transform: translate3d(-50%, 0, 0)
}

#pagepiling.menu-opened {
opacity: .3 !important;
-webkit-transform: translate3d(50%, 0, 0);
-moz-transform: translate3d(50%, 0, 0);
-ms-transform: translate3d(50%, 0, 0);
-o-transform: translate3d(50%, 0, 0);
transform: translate3d(50%, 0, 0)
}

.pp-section {
position: absolute;
width: 100%;
height: 100%
}

.pp-section .intro {
z-index: 5;
opacity: 0;
-webkit-transition: all 1.2s cubic-bezier(0.165, 0.84, 0.44, 1);
-moz-transition: all 1.2s cubic-bezier(0.165, 0.84, 0.44, 1);
transition: all 1.2s cubic-bezier(0.165, 0.84, 0.44, 1);
-webkit-transform: translateY(50px);
-moz-transform: translateY(50px);
-ms-transform: translateY(50px);
-o-transform: translateY(50px);
transform: translateY(50px)
}

.pp-easing {
-webkit-transition: all 1000ms cubic-bezier(0.55, 0.085, 0, 0.99);
-moz-transition: all 1000ms cubic-bezier(0.55, 0.085, 0, 0.99);
-o-transition: all 1000ms cubic-bezier(0.55, 0.085, 0, 0.99);
transition: all 1000ms cubic-bezier(0.55, 0.085, 0, 0.99);
-webkit-transition-timing-function: cubic-bezier(0.55, 0.085, 0, 0.99);
-moz-transition-timing-function: cubic-bezier(0.55, 0.085, 0, 0.99);
-o-transition-timing-function: cubic-bezier(0.55, 0.085, 0, 0.99);
transition-timing-function: cubic-bezier(0.55, 0.085, 0, 0.99)
}

#pp-nav {
position: fixed;
z-index: 100;
top: 50%;
margin-top: -32px;
opacity: 1
}

#pp-nav.right {
right: 17px
}

#pp-nav.left {
left: 17px
}

.pp-section.pp-table {
display: table
}

.pp-tableCell {
display: table-cell;
width: 100%;
height: 100%;
vertical-align: middle
}

.pp-slidesNav {
position: absolute;
z-index: 4;
left: 50%;
opacity: 1
}

.pp-slidesNav.bottom {
bottom: 17px
}

.pp-slidesNav.top {
top: 17px
}

#pp-nav ul, .pp-slidesNav ul {
margin: 0;
padding: 0
}

#pp-nav li, .pp-slidesNav li {
position: relative;
display: block;
width: 14px;
height: 13px;
margin: 7px
}

.pp-slidesNav li {
display: inline-block
}

#pp-nav li a, .pp-slidesNav li a {
position: relative;
z-index: 1;
display: block;
width: 100%;
height: 100%;
cursor: pointer;
text-decoration: none
}

#pp-nav li .active span, .pp-slidesNav .active span {
background: #fff
}

#pp-nav span, .pp-slidesNav span {
position: absolute;
z-index: 1;
top: 2px;
left: 2px;
width: 8px;
height: 8px;
border: none;
border-radius: 50%;
background: rgba(255, 255, 255, 0.4)
}

.pp-tooltip {
font-family: arial, helvetica, sans-serif;
font-size: 14px;
position: absolute;
top: -2px;
max-width: 220px;
white-space: nowrap;
color: #fff
}

.pp-tooltip.right {
right: 20px
}

.pp-tooltip.left {
left: 20px
}

.pp-scrollable {
overflow-y: hidden;
/*scroll;*/
height: 100%
}

#pp-nav.right {
right: 6vw
}

#pp-nav.left {
left: 6vw
}

.section {
top: 100%;
left: 0;
width: 100%;
height: 100%;
text-align: center;
opacity: 1;
-webkit-transform-origin: center top;
-moz-transform-origin: center top;
-ms-transform-origin: center top;
-o-transform-origin: center top;
transform-origin: center top;
-webkit-transform: rotateX(-60deg);
-moz-transform: rotateX(-60deg);
-ms-transform: rotateX(-60deg);
-o-transform: rotateX(-60deg);
transform: rotateX(-60deg);
-webkit-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
-moz-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1)
}

.section:first-child {
top: 0
}

.section.horizontal-mod {
top: 0;
left: 100%;
-webkit-transform-origin: center left;
-moz-transform-origin: center left;
-ms-transform-origin: center left;
-o-transform-origin: center left;
transform-origin: center left;
-webkit-transform: rotateX(0deg) rotateY(-60deg);
-moz-transform: rotateX(0deg) rotateY(-60deg);
-ms-transform: rotateX(0deg) rotateY(-60deg);
-o-transform: rotateX(0deg) rotateY(-60deg);
transform: rotateX(0deg) rotateY(-60deg)
}

.section.horizontal-mod:first-child {
top: auto;
left: 0
}

.pp-section.active {
opacity: 1 !important;
-webkit-transform: rotateX(0) rotateY(0);
-moz-transform: rotateX(0) rotateY(0);
-ms-transform: rotateX(0) rotateY(0);
-o-transform: rotateX(0) rotateY(0);
transform: rotateX(0) rotateY(0)
}

.pp-section.active .intro {
opacity: 1;
-webkit-transform: translateY(0);
-moz-transform: translateY(0);
-ms-transform: translateY(0);
-o-transform: translateY(0);
transform: translateY(0)
}

#menu {
position: fixed;
z-index: 45;
top: 0;
left: 0;
width: 100%;
margin: 0;
padding: 0;
white-space: nowrap;
opacity: 0;
-webkit-transition: all .4s ease;
-moz-transition: all .4s ease;
transition: all .4s ease;
box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 700px 0 rgba(0, 0, 0, 0.10);
background: rgba(255, 255, 255, 0.55);
}

#menu.popup-opened {
top: -6rem
}

#menu.content-opened {
-webkit-transform: translate3d(-50vw, 0, 0);
-moz-transform: translate3d(-50vw, 0, 0);
-ms-transform: translate3d(-50vw, 0, 0);
-o-transform: translate3d(-50vw, 0, 0);
transform: translate3d(-50vw, 0, 0)
}

#menu li {
font-family: Lato, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
line-height: 5rem;
position: relative;
display: inline-block;
float: left;
min-width: 5rem;
height: 5rem;
margin: 0;
text-align: center;
color: #fff;
-webkit-transition: all .4s ease;
-moz-transition: all .4s ease;
transition: all .4s ease
}

#menu li.main-nav::before {
position: absolute;
z-index: -1;
top: 0;
right: 0;
bottom: 0;
left: 0;
content: '';
opacity: .2;
background: #fff;
-webkit-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
-moz-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1)
}

#menu li.main-nav::after {
position: absolute;
z-index: -2;
top: 0;
right: 0;
bottom: 0;
left: 0;
content: '';
opacity: ;
/* opacity: .2; */
-webkit-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
-moz-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1)
}

#menu li.active.main-nav::before {
opacity: 0
}

#menu li.active.main-nav::after {
opacity: 1
}

#menu li:hover span {
visibility: visible;
opacity: 1;
color: #fff;
-webkit-transform: translateY(0) rotateX(0);
-moz-transform: translateY(0) rotateX(0);
-ms-transform: translateY(0) rotateX(0);
-o-transform: translateY(0) rotateX(0);
transform: translateY(0) rotateX(0)
}

#menu li:hover::before {
opacity: 0
}

#menu li:hover::after {
opacity: 1
}

#menu li a {
font-weight: 400;
display: block;
overflow: hidden;
/*visible*/
padding: 0 2rem;
text-decoration: none;
text-transform: uppercase;
color: #fff
}

#menu li a span {
font-family: Raleway, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.1rem;
font-weight: 700;
position: absolute;
bottom: -5rem;
left: .5rem;
visibility: hidden;
text-align: left;
letter-spacing: .1rem;
opacity: 0;
color: #fff;
-webkit-transition: all .4s ease;
-moz-transition: all .4s ease;
transition: all .4s ease;
-webkit-transform: translateY(2rem) rotateX(90deg);
-moz-transform: translateY(2rem) rotateX(90deg);
-ms-transform: translateY(2rem) rotateX(90deg);
-o-transform: translateY(2rem) rotateX(90deg);
transform: translateY(2rem) rotateX(90deg)
}

#menu #menu-link {
position: absolute;
z-index: 80;
top: 0;
right: 0;
margin: 0;
padding: 0
}

#menu #menu-link li {
font-family: Raleway, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.1rem;
font-weight: 700;
display: inline-block;
letter-spacing: .1rem;
text-transform: uppercase
}



#menu #menu-link li a {
font-weight: 700;
display: block;
padding: 0 2rem;
color: var(--gold-color);
}

#menu #menu-link li a span {
font-size: 1.1rem;
position: absolute;
right: .5rem;
bottom: -5rem;
left: auto;
visibility: hidden;
text-align: right;
opacity: 0;
color: #fff;
-webkit-transition: all .4s ease;
-moz-transition: all .4s ease;
transition: all .4s ease;
-webkit-transform: translateY(2rem) rotateX(90deg);
-moz-transform: translateY(2rem) rotateX(90deg);
-ms-transform: translateY(2rem) rotateX(90deg);
-o-transform: translateY(2rem) rotateX(90deg);
transform: translateY(2rem) rotateX(90deg)
}

#menu #menu-link li a:hover {
color: var(--gold-color);
background: rgba(var(--rgb_code_218_165_32), 0.3);
}

#menu #menu-link li a:hover span {
visibility: visible;
opacity: 1;
color: #fff;
-webkit-transform: translateY(0) rotateX(0);
-moz-transform: translateY(0) rotateX(0);
-ms-transform: translateY(0) rotateX(0);
-o-transform: translateY(0) rotateX(0);
transform: translateY(0) rotateX(0)
}

#info {
overflow-y: scroll;
position: fixed;
z-index: 70;
top: 0;
width: 50%;
height: 100vh;
background: #fff;
-webkit-transform: translateX(200%);
-moz-transform: translateX(200%);
-ms-transform: translateX(200%);
-o-transform: translateX(200%);
transform: translateX(200%);
-webkit-transition: all .4s ease;
-moz-transition: all .4s ease;
transition: all .4s ease
}

#info h1, #info h2, #info h3, #info h4, #info h5, #info h6 {
margin-bottom: 2.5rem;
text-align: left;
color: #22264b
}

#info h1 small, #info h2 small, #info h3 small, #info h4 small, #info h5 small, #info h6 small {
font-family: Lora, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.6rem;
font-style: italic;
display: block;
margin-top: .8rem;
color: rgba(0, 0, 0, 0.5)
}

#info p {
color: #666
}

#info.content-opened {
-webkit-transform: translateX(100%);
-moz-transform: translateX(100%);
-ms-transform: translateX(100%);
-o-transform: translateX(100%);
transform: translateX(100%)
}

#info .carousel-fade {
margin-bottom: 3rem
}

#info .carousel-fade .carousel-inner .item {
transition-property: opacity;
-webkit-transition: all 0.8s cubic-bezier(0.455, 0.03, 0.515, 0.955);
-moz-transition: all 0.8s cubic-bezier(0.455, 0.03, 0.515, 0.955);
transition: all 0.8s cubic-bezier(0.455, 0.03, 0.515, 0.955)
}

#info .carousel-fade .carousel-inner .item, #info .carousel-fade .carousel-inner .active.left, #info .carousel-fade .carousel-inner .active.right {
opacity: 0
}

#info .carousel-fade .carousel-inner .active, #info .carousel-fade .carousel-inner .next.left, #info .carousel-fade .carousel-inner .prev.right {
opacity: 1
}

#info .carousel-fade .carousel-inner .next, #info .carousel-fade .carousel-inner .prev, #info .carousel-fade .carousel-inner .active.left, #info .carousel-fade .carousel-inner .active.right {
left: 0;
transform: translate3d(0, 0, 0)
}

#info .carousel-fade .carousel-control {
z-index: 2;
top: auto;
bottom: 0;
width: 40px;
opacity: 1
}

#info .carousel-fade .carousel-control:hover {
color: var(--gold-color);
}

#info .carousel-fade .carousel-control.left {
right: 50px;
left: auto;
background: transparent
}

#info .carousel-fade .carousel-control.right {
right: 10px;
background: transparent
}

#info span.separator {
display: block;
width: 100%;
height: 4px;
margin: 50px 0 60px;
background: var(--gold-color);
box-shadow: var(--box-shadow9938);
border-radius: 100px;
}

#info #carouselClients a {
position: relative;
display: block;
opacity: .3
}

#info #carouselClients a img {
max-height: 3rem;
margin: 5rem auto 0
}

#info #carouselClients a:hover {
opacity: 1
}

#info #carouselClients .carousel-control {
display: none
}

#info .info-contact {
margin-top: 2rem;
margin-bottom: 0;
text-align: left
}

#info .info-contact .item-contact .contact-item {
font-size: 14px;
padding: 15px 0
}

#info .info-contact .item-contact .contact-item i {
font-size: 2em;
color: var(--gold-color);
}

#info .info-contact .item-contact .contact-item a {
color: #8c8c8c;
}

#info .info-contact .item-contact .contact-item a:hover {
color: var(--gold-color);
}

#info #contact-form {
margin-top: 2rem
}

#info #contact-form .form-group:hover .icon-fields {
color: var(--gold-color);
}

#info #contact-form .icon-fields {
position: absolute;
top: 12px;
left: 25px;
color: rgba(0, 0, 0, 0.15);
-webkit-transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
-moz-transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86)
}

#info #contact-form .icon-fields.active {
color: var(--gold-color);
}

#info #contact-form .form-control {
font-weight: 700;
width: 100%;
height: 40px;
margin-bottom: 10px;
padding: 6px 8px 6px 35px;
text-align: left;
color: rgba(0, 0, 0, 0.8);
border: none;
border-bottom: 1px solid #F1F1F1;
outline: medium none;
background: #fff;
box-shadow: none;
-webkit-transition: all 0.3s cubic-bezier(0.77, 0, 0.175, 1);
-moz-transition: all 0.3s cubic-bezier(0.77, 0, 0.175, 1);
transition: all 0.3s cubic-bezier(0.77, 0, 0.175, 1);
-webkit-border-radius: 0;
-moz-border-radius: 0;
-ms-border-radius: 0;
border-radius: 0
}

#info #contact-form .form-control:hover {
border: 2px var(--F_DAA520_solid);
border-left: 4px solid var(--gold-color);
}

#info #contact-form .form-control {
border: 2px solid #777777a3;
}

#valid-form {
background: var(--gold-color);
color: white;
}

#valid-form:hover {
background: white;
color: var(--gold-color);
border: 1px solid var(--gold-color);
border-left: 4px solid var(--gold-color);
}

#info #contact-form .form-control::-webkit-input-placeholder {
font-family: Lora, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-weight: 400;
color: #a6a6a6 !important
}

#info #contact-form .form-control::-moz-placeholder {
font-family: Lora, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-weight: 400;
color: #a6a6a6 !important
}

#info #contact-form .form-control:-moz-placeholder {
font-family: Lora, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-weight: 400;
color: #a6a6a6 !important
}

#info #contact-form .form-control:-ms-input-placeholder {
font-family: Lora, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-weight: 400;
color: #a6a6a6 !important
}

#info #contact-form .form-control:hover, #info #contact-form .form-control:focus {
box-shadow: none
}

#info #contact-form textarea.form-control {
line-height: 2;
min-height: 150px
}

#info #contact-form span.sub-text {
font-size: 1rem;
position: absolute;
right: 1rem;
bottom: -1rem;
color: #b3b3b3
}

#info #contact-form #ios {
position: absolute;
visibility: hidden
}

#info #contact-form .button {
position: relative;
top: 0;
display: block;
float: left;
width: 70px;
height: 34px;
margin: 1rem 0 1rem;
cursor: pointer;
background: #fff;
will-change: background
}

#info #contact-form .button.ios {
position: relative;
-webkit-border-radius: 100px;
-moz-border-radius: 100px;
-ms-border-radius: 100px;
border-radius: 100px;
-webkit-transition: background, 0.25s cubic-bezier(0.77, 0, 0.175, 1);
-moz-transition: background, 0.25s cubic-bezier(0.77, 0, 0.175, 1);
transition: background, 0.25s cubic-bezier(0.77, 0, 0.175, 1)
}

#info #contact-form .button.ios:before {
position: absolute;
top: 0;
left: 0;
display: block;
width: 100%;
height: 100%;
content: '';
background-color: #fff;
box-shadow: inset 0 10px 30px rgba(0, 0, 0, 0.2);
-webkit-border-radius: 100px;
-moz-border-radius: 100px;
-ms-border-radius: 100px;
border-radius: 100px;
-webkit-transition: background, 0.25s cubic-bezier(0.77, 0, 0.175, 1);
-moz-transition: background, 0.25s cubic-bezier(0.77, 0, 0.175, 1);
transition: background, 0.25s cubic-bezier(0.77, 0, 0.175, 1);
will-change: transform;
will-change: background
}

#info #contact-form .button.ios:after {
position: absolute;
top: 2px;
left: 2px;
display: block;
width: 30px;
height: 30px;
content: '';
background-color: #fff;
box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
-webkit-border-radius: 100px;
-moz-border-radius: 100px;
-ms-border-radius: 100px;
border-radius: 100px;
-webkit-transition: background, 0.25s cubic-bezier(0.77, 0, 0.175, 1);
-moz-transition: background, 0.25s cubic-bezier(0.77, 0, 0.175, 1);
transition: background, 0.25s cubic-bezier(0.77, 0, 0.175, 1)
}

#info #contact-form input[type=checkbox]:checked+label.ios {
background-color: #40E699;
-webkit-transition: 0s background, 0s cubic-bezier(0.77, 0, 0.175, 1);
-moz-transition: 0s background, 0s cubic-bezier(0.77, 0, 0.175, 1);
transition: 0s background, 0s cubic-bezier(0.77, 0, 0.175, 1)
}

#info #contact-form input[type=checkbox]:checked+label.ios:after {
-webkit-transform: translateX(35px);
-moz-transform: translateX(35px);
-ms-transform: translateX(35px);
-o-transform: translateX(35px);
transform: translateX(35px)
}

#info #contact-form input[type=checkbox]:checked+label.ios:active:after {
-webkit-transform: translateX(10px);
-moz-transform: translateX(10px);
-ms-transform: translateX(10px);
-o-transform: translateX(10px);
transform: translateX(10px)
}

#info #contact-form input[type=checkbox]:checked+label.ios:before {
-webkit-transform: translateX(10px) scale(0.1);
-moz-transform: translateX(10px) scale(0.1);
-ms-transform: translateX(10px) scale(0.1);
-o-transform: translateX(10px) scale(0.1);
transform: translateX(10px) scale(0.1)
}

#info #contact-form label.check-news {
font-family: Lora, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.4rem;
font-style: italic;
display: block;
float: left;
margin-top: 1.3rem;
margin-left: .6rem;
color: rgba(0, 0, 0, 0.5)
}

#info #contact-form button#valid-form {
font-family: Raleway, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.1rem;
font-weight: 700;
display: inline-block;
margin-top: 2rem;
padding: 1.4rem 3rem;
letter-spacing: .1rem;
text-transform: uppercase;
color: #fff;
border: none;
background: var(--gold-color);
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
-ms-border-radius: 3px;
border-radius: 3px
}

#info #contact-form button#valid-form:hover {
color: #fff;
background: var(--gold-color);
}

#info #block-answer {
margin-top: 1em;
text-align: left;
color: #757A86
}

#info .success-message, #info .error-message {
color: #757A86
}

#info .success-message p, #info .error-message p {
color: #757A86 !important
}

#info .success-message .ion-checkmark-round, #info .error-message .ion-checkmark-round {
color: #27AE60
}

#info .error-message .ion-close-round {
color: #FF1D4D
}

#info .close-content {
font-size: 2em;
line-height: 0;
position: fixed;
top: 1.5rem;
right: 1.5rem;
width: 5rem;
height: 5rem;
opacity: 1;
color: #999;
border: none;
background: transparent
}

#info .close-content i {
display: inline-block;
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
transition: all .2s ease-in-out
}

#info .close-content:hover i {
color: #666
}

.section .global-overlay {
position: absolute;
z-index: -1;
top: 0;
left: 0;
overflow: hidden;
/*visible; */
width: 100vw;
height: 100vh;
background: -webkit-linear-gradient(rgba(34, 38, 75, 0.1), rgba(34, 38, 75, 0.5));
background: linear-gradient(rgba(34, 38, 75, 0.1), rgba(34, 38, 75, 0.5))
}

.section .img-info {
font-size: 12px;
font-weight: 400;
position: absolute;
z-index: 999;
bottom: 40px;
left: 50px;
text-align: left;
color: #fff
}

.section .img-info h5 {
font-size: 1.1rem;
font-weight: 700;
letter-spacing: .3rem;
text-transform: uppercase;
color: #f2f3f7
}

.section .img-info h2 {
font-family: Montserrat, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif
}

.section .img-info a {
font-weight: 700
}

.section .img-info a.action-btn {
font-family: Raleway, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-weight: 700;
display: block;
float: left;
margin-right: 1rem;
padding: .7em 2em;
color: #fff;
border: 1px solid rgba(255, 255, 255, 0.4);
background: rgba(45, 49, 56, 0.1);
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
-ms-border-radius: 3px;
border-radius: 3px
}

.section .img-info a.action-btn:hover {
color: var(--gold-color);
border-color: #fff;
background: #fff;
border-left: 3px solid var(--gold-color);
}

.section .img-info p.credit {
margin: 0 0 2rem;
color: #fff
}

.section .img-info p.credit i {
min-width: 2rem;
color: rgba(255, 255, 255, 0.6)
}

.section .carousel {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%
}

.section#section3 .carousel .carousel-inner {
height: 100%
}

.section#section3 .carousel .carousel-inner .global-overlay {
z-index: 10
}

.section#section3 .carousel .carousel-inner .item {
width: 100%;
height: 100%;
-webkit-transition: all 1.2s cubic-bezier(0.165, 0.84, 0.44, 1);
-moz-transition: all 1.2s cubic-bezier(0.165, 0.84, 0.44, 1);
transition: all 1.2s cubic-bezier(0.165, 0.84, 0.44, 1)
}

.section#section3 .carousel .carousel-inner .item:nth-child(2) {
background: url("./?marko-nikolic-portfolio-source=image-in-background-3") center;
background-size: cover;
image-rendering: crisp-edges;
}

.section#section3 .carousel .carousel-inner .item:nth-child(3) {
background: url("./?marko-nikolic-portfolio-source=image-in-background-2") center;
background-size: cover;
image-rendering: crisp-edges;
}

.section#section3 .carousel .carousel-inner .item:nth-child(4) {
background: url("./?marko-nikolic-portfolio-source=image-in-background-3-2") center;
background-size: cover;
image-rendering: crisp-edges;
}

.section#section3 .carousel .carousel-control {
z-index: 50
}

.section #vertical-parent-gallery {
margin: 0
}

.section .vertical-gallery {
overflow: hidden;
height: 100vh;
opacity: 1;
background-size: cover;
image-rendering: crisp-edges;
display: -webkit-box;
display: -moz-box;
display: box;
display: -webkit-flex;
display: -moz-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-moz-box-pack: center;
box-pack: center;
-webkit-justify-content: center;
-moz-justify-content: center;
-ms-justify-content: center;
-o-justify-content: center;
justify-content: center;
-ms-flex-pack: center;
-webkit-box-align: center;
-moz-box-align: center;
box-align: center;
-webkit-align-items: center;
-moz-align-items: center;
-ms-align-items: center;
-o-align-items: center;
align-items: center;
-ms-flex-align: center;
-webkit-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
-moz-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1)
}

.section .vertical-gallery:hover .vertical-photo {
opacity: 1
}

.section .vertical-gallery:hover:after {
opacity: 0
}

.section .vertical-gallery .text-gallery {
z-index: 100;
opacity: 1;
-webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
-moz-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1)
}

.section .vertical-gallery .text-gallery h4 {
font-family: Montserrat, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.1rem;
font-weight: 700;
letter-spacing: .3rem;
text-transform: uppercase;
color: #f2f3f7
}

.section .vertical-gallery a {
position: absolute;
z-index: 10;
top: 0;
left: 0;
width: 100%;
height: 100%
}

.section .vertical-gallery:after {
position: absolute;
z-index: 1;
top: 0;
left: 0;
overflow: hidden;
/*visible;*/
width: 100%;
height: 100%;
content: '';
background: -webkit-linear-gradient(rgba(34, 38, 75, 0.3), rgba(34, 38, 75, 0.7));
background: linear-gradient(rgba(34, 38, 75, 0.3), rgba(34, 38, 75, 0.7));
-webkit-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
-moz-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1)
}

.section .vertical-gallery.fullscreen-picture {
position: absolute;
z-index: 200;
top: 0;
left: 0;
width: 100vw;
height: 100vh
}

.section .vertical-gallery:nth-child(1) .vertical-photo {
background: url("./?marko-nikolic-portfolio-source=image-in-g-background-1") center;
background-size: cover;
image-rendering: crisp-edges;
}

.section .vertical-gallery:nth-child(2) .vertical-photo {
background: url("./?marko-nikolic-portfolio-source=image-in-g-background-2") center;
background-size: cover;
image-rendering: crisp-edges;
}

.section .vertical-gallery:nth-child(3) .vertical-photo {
background: url("./?marko-nikolic-portfolio-source=image-in-g-background-3") center;
background-size: cover;
image-rendering: crisp-edges;
}

.section .vertical-gallery:nth-child(4) .vertical-photo {
background: url("./?marko-nikolic-portfolio-source=image-in-g-background-4") center;
background-size: cover;
image-rendering: crisp-edges;
}

.section .vertical-gallery .vertical-photo {
position: absolute;
z-index: 0;
top: 0;
left: 0;
width: 100%;
height: 100%;
opacity: 1;
background-repeat: no-repeat;
background-position: center;
background-size: cover;
image-rendering: crisp-edges;
-webkit-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
-moz-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1)
}

.section .vertical-gallery:hover .text-gallery {
visibility: hidden;
opacity: 0;
-webkit-transform: translateY(50px);
-moz-transform: translateY(50px);
-ms-transform: translateY(50px);
-o-transform: translateY(50px);
transform: translateY(50px)
}

.section .vertical-gallery:hover .vertical-photo {
-webkit-transform: scale(1.1);
-moz-transform: scale(1.1);
-ms-transform: scale(1.1);
-o-transform: scale(1.1);
transform: scale(1.1)
}

#section1, #menu li.main-nav:nth-child(1)::after {
background: transparent;
background-size: cover;
image-rendering: crisp-edges;
}

.fa-home, .fa-industry, .fa-video-camera {
color: var(--gold-color);
}

#section2, #menu li.main-nav:nth-child(2)::after {
background: url("./?marko-nikolic-portfolio-source=image-in-background-2") center;
background-size: cover;
image-rendering: crisp-edges;
}

#menu li.main-nav:nth-child(3)::after {
background: url("./?marko-nikolic-portfolio-source=image-in-background-3") center;
background-size: cover;
image-rendering: crisp-edges;
}

#section4, #menu li.main-nav:nth-child(4)::after {
background: url("./?marko-nikolic-portfolio-source=image-in-background-4") center;
background-size: cover;
image-rendering: crisp-edges;
}

#menu li.main-nav:nth-child(5)::after {
background: url("./?marko-nikolic-portfolio-source=image-in-background-5") center;
background-size: cover;
image-rendering: crisp-edges;
}

#section6, #menu li.main-nav:nth-child(6)::after {
background: url("./?marko-nikolic-portfolio-source=image-in-background-6") center;
background-size: cover;
image-rendering: crisp-edges;
}

#menu li.main-nav:nth-child(7)::after {
background: url("./?marko-nikolic-portfolio-source=image-in-background-7") center;
background-size: cover;
image-rendering: crisp-edges;
}

#section7 {
background: #2B2D35
}

#section8, #menu li.main-nav:nth-child(8)::after {
background: url("./?marko-nikolic-portfolio-source=image-in-background-8") center;
background-size: cover;
image-rendering: crisp-edges;
}

#section9, #menu li.main-nav:nth-child(9)::after {
background: url("./?marko-nikolic-portfolio-source=image-in-background-9") center;
background-size: cover;
image-rendering: crisp-edges;
}

#menu li.main-nav:nth-child(10)::after {
background: transparent;
background-size: cover;
image-rendering: crisp-edges;
}

.map-wrapper {
position: absolute;
z-index: 5;
top: 0;
left: 0;
width: 100vw;
height: 100vh;
padding-top: 50px;
color: #666 !important;
background: #2b2b2b;
-webkit-border-radius: 0;
-moz-border-radius: 0;
-ms-border-radius: 0;
border-radius: 0
}

.map-wrapper #map {
position: relative;
width: 100%;
height: 100%
}

.map-wrapper #map h6 {
font-size: 1.4rem;
font-weight: 700;
margin: 1rem 1rem .2rem 0;
text-align: left;
color: #000
}

.map-wrapper #map h6 small {
font-weight: 700;
text-transform: uppercase;
color: rgba(0, 0, 0, 0.5)
}

.map-wrapper #map p {
font-size: 1.2rem;
font-weight: 400;
line-height: 1.5;
text-align: left;
color: #666
}

.map-wrapper #map .gm-style div div div .gmnoprint {
opacity: 1 !important;
background: #fff;
-webkit-border-radius: 10rem;
-moz-border-radius: 10rem;
-ms-border-radius: 10rem;
border-radius: 10rem;
-webkit-animation: pulse 2s infinite linear;
-moz-animation: pulse 2s infinite linear;
animation: pulse 2s infinite linear
}

@-webkit-keyframes pulse {
0% {
box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4)
}
70% {
box-shadow: 0 0 0 10px rgba(255, 255, 255, 0)
}
100% {
box-shadow: 0 0 0 0 rgba(255, 255, 255, 0)
}
}

@-moz-keyframes pulse {
0% {
box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4)
}
70% {
box-shadow: 0 0 0 10px rgba(255, 255, 255, 0)
}
100% {
box-shadow: 0 0 0 0 rgba(255, 255, 255, 0)
}
}

@keyframes pulse {
0% {
box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4)
}
70% {
box-shadow: 0 0 0 10px rgba(255, 255, 255, 0)
}
100% {
box-shadow: 0 0 0 0 rgba(255, 255, 255, 0)
}
}

.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar, .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar {
background: var(--gold-color);
}

.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
background: var(--gold-color);
}

.mCSB_scrollTools {
position: absolute;
z-index: 10;
top: 0;
right: 0;
bottom: 0;
left: auto;
width: .4rem;
-webkit-transition: all .6s ease-in-out;
-moz-transition: all .6s ease-in-out;
transition: all .6s ease-in-out
}

.mCSB_scrollTools .mCSB_draggerRail {
width: 10px;
height: 100%;
margin: 0;
background-color: #e4e4e4;
-webkit-border-radius: 0;
-moz-border-radius: 0;
-ms-border-radius: 0;
border-radius: 0;
filter: 'alpha(opacity=40)';
-ms-filter: 'alpha(opacity=40)'
}

.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
position: relative;
width: 10px;
height: 100%;
margin: 0 auto;
text-align: center
}

.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
background-color: var(--gold-color);
}

.mCSB_scrollTools-left {
right: 0 !important
}

.mCSB_container {
padding: 5rem 8rem 10rem
}

.dialog, .dialog__overlay {
top: 0;
left: 0;
width: 100%;
height: 100%
}

.dialog {
position: absolute;
z-index: 999;
pointer-events: none;
display: -webkit-box;
display: -moz-box;
display: box;
display: -webkit-flex;
display: -moz-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-moz-box-pack: center;
box-pack: center;
-webkit-justify-content: center;
-moz-justify-content: center;
-ms-justify-content: center;
-o-justify-content: center;
justify-content: center;
-ms-flex-pack: center;
-webkit-box-align: center;
-moz-box-align: center;
box-align: center;
-webkit-align-items: center;
-moz-align-items: center;
-ms-align-items: center;
-o-align-items: center;
align-items: center;
-ms-flex-align: center
}

.dialog__overlay {
position: absolute;
z-index: 1;
opacity: 0;
background: rgba(31, 34, 46, 0.9);
-webkit-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
-moz-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86)
}

.dialog--open .dialog__overlay {
pointer-events: auto;
opacity: 1
}

.dialog__content {
position: relative;
z-index: 5;
overflow: hidden;
/*scroll;*/
width: 100vw;
height: 100vh;
padding: 0;
text-align: center;
opacity: 0;
background: transparent;
background-size: cover;
image-rendering: crisp-edges;
-webkit-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
-moz-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86)
}

.dialog--open .dialog__content {
width: 100%;
pointer-events: auto
}

.dialog .close-content {
font-size: 2em;
line-height: 0;
position: absolute;
right: calc( 50% - 25px);
bottom: 0;
width: 50px;
height: 50px;
opacity: 1;
color: #fff;
border: none;
background: rgba(255, 255, 255, 0.1)
}

.dialog .close-content i {
display: inline-block;
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
transition: all .2s ease-in-out
}

.dialog .close-content:hover i {
font-size: 3.5rem;
color: var(--gold-color);
}

.dialog.dialog--open .dialog-inner {
opacity: 1;
-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);
-ms-transform: translateY(-50%);
-o-transform: translateY(-50%);
transform: translateY(-50%)
}

.dialog .dialog-inner {
position: relative;
top: 50vh;
float: none;
overflow: hidden;
margin: 0 auto;
padding: 90px 70px;
text-align: left;
opacity: 0;
-webkit-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
-moz-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
-webkit-transform: translateY(-70%);
-moz-transform: translateY(-70%);
-ms-transform: translateY(-70%);
-o-transform: translateY(-70%);
transform: translateY(-70%)
}

.dialog .dialog-inner::before {
position: absolute;
z-index: -1;
top: 0;
left: 0;
width: 100%;
height: 100%;
content: ' '
}

.dialog .dialog-inner h4 {
font-size: 4rem;
font-weight: 700;
color: #fff
}

.dialog .dialog-inner .details h5 {
font-size: 2.2rem;
font-weight: 700;
line-height: 4.5rem;
margin-bottom: 0;
padding-left: 4.5rem;
color: #fff
}

.dialog .dialog-inner .details h5 i {
font-size: 1.6rem;
line-height: 1;
position: absolute;
left: 1.5rem;
width: 3.5rem;
height: 3.5rem;
margin-right: .5rem;
padding: .8rem 1rem;
text-align: center;
color: var(--gold-color);
border: 1px solid var(--gold-color);
}

.dialog .dialog-inner .details h5 i:before {
position: absolute;
left: 50%;
-webkit-transform: translateX(-50%);
-moz-transform: translateX(-50%);
-ms-transform: translateX(-50%);
-o-transform: translateX(-50%);
transform: translateX(-50%)
}

.dialog .dialog-inner .details p {
font-size: 1.4rem;
font-weight: 400;
margin-bottom: 1.5rem
}

.dialog .dialog-inner .details p a {
font-weight: 700
}

.dialog .dialog-inner p {
font-size: 16px;
color: #f2f3f7
}

.dialog__overlay {
-webkit-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
-moz-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1)
}

.dialog.dialog--open .dialog__content, .dialog.dialog--close .dialog__content {
-webkit-animation-duration: 0.4s;
-moz-animation-duration: 0.4s;
animation-duration: 0.4s;
-webkit-animation-fill-mode: forwards;
-moz-animation-fill-mode: forwards;
animation-fill-mode: forwards
}

.dialog.dialog--open .dialog__content {
-webkit-animation-name: anim-open;
-moz-animation-name: anim-open;
animation-name: anim-open
}

.dialog.dialog--close .dialog__content {
-webkit-animation-name: anim-close;
-moz-animation-name: anim-close;
animation-name: anim-close
}

@-webkit-keyframes anim-open {
0% {
opacity: 0;
-webkit-transform: translate3d(0, 50px, 0);
-moz-transform: translate3d(0, 50px, 0);
-o-transform: translate3d(0, 50px, 0);
-ms-transform: translate3d(0, 50px, 0);
transform: translate3d(0, 50px, 0)
}
100% {
opacity: 1;
-webkit-transform: translate3d(0, 0, 0);
-moz-transform: translate3d(0, 0, 0);
-o-transform: translate3d(0, 0, 0);
-ms-transform: translate3d(0, 0, 0);
transform: translate3d(0, 0, 0)
}
}

@-moz-keyframes anim-open {
0% {
opacity: 0;
-webkit-transform: translate3d(0, 50px, 0);
-moz-transform: translate3d(0, 50px, 0);
-o-transform: translate3d(0, 50px, 0);
-ms-transform: translate3d(0, 50px, 0);
transform: translate3d(0, 50px, 0)
}
100% {
opacity: 1;
-webkit-transform: translate3d(0, 0, 0);
-moz-transform: translate3d(0, 0, 0);
-o-transform: translate3d(0, 0, 0);
-ms-transform: translate3d(0, 0, 0);
transform: translate3d(0, 0, 0)
}
}

@keyframes anim-open {
0% {
opacity: 0;
-webkit-transform: translate3d(0, 50px, 0);
-moz-transform: translate3d(0, 50px, 0);
-o-transform: translate3d(0, 50px, 0);
-ms-transform: translate3d(0, 50px, 0);
transform: translate3d(0, 50px, 0)
}
100% {
opacity: 1;
-webkit-transform: translate3d(0, 0, 0);
-moz-transform: translate3d(0, 0, 0);
-o-transform: translate3d(0, 0, 0);
-ms-transform: translate3d(0, 0, 0);
transform: translate3d(0, 0, 0)
}
}

@-webkit-keyframes anim-close {
0% {
opacity: 1;
-webkit-transform: translate3d(0, 0, 0);
-moz-transform: translate3d(0, 0, 0);
-o-transform: translate3d(0, 0, 0);
-ms-transform: translate3d(0, 0, 0);
transform: translate3d(0, 0, 0)
}
100% {
opacity: 0;
-webkit-transform: translate3d(0, 50px, 0);
-moz-transform: translate3d(0, 50px, 0);
-o-transform: translate3d(0, 50px, 0);
-ms-transform: translate3d(0, 50px, 0);
transform: translate3d(0, 50px, 0)
}
}

@-moz-keyframes anim-close {
0% {
opacity: 1;
-webkit-transform: translate3d(0, 0, 0);
-moz-transform: translate3d(0, 0, 0);
-o-transform: translate3d(0, 0, 0);
-ms-transform: translate3d(0, 0, 0);
transform: translate3d(0, 0, 0)
}
100% {
opacity: 0;
-webkit-transform: translate3d(0, 50px, 0);
-moz-transform: translate3d(0, 50px, 0);
-o-transform: translate3d(0, 50px, 0);
-ms-transform: translate3d(0, 50px, 0);
transform: translate3d(0, 50px, 0)
}
}

@keyframes anim-close {
0% {
opacity: 1;
-webkit-transform: translate3d(0, 0, 0);
-moz-transform: translate3d(0, 0, 0);
-o-transform: translate3d(0, 0, 0);
-ms-transform: translate3d(0, 0, 0);
transform: translate3d(0, 0, 0)
}
100% {
opacity: 0;
-webkit-transform: translate3d(0, 50px, 0);
-moz-transform: translate3d(0, 50px, 0);
-o-transform: translate3d(0, 50px, 0);
-ms-transform: translate3d(0, 50px, 0);
transform: translate3d(0, 50px, 0)
}
}

.copyright {
position: absolute;
z-index: 100;
right: 1.5rem;
bottom: 1rem;
background: #000000a3;
padding: 5px;
border-radius: 10px;
padding-left: 10px;
padding-right: 10px;
opacity: 0.6;
transition: 0.3s;
}

.copyright:active {
background: #000000d1;
/* border-right:10px solid var(--gold-color);
*/
opacity: 0.9;
transition: 0.3s;
}

.copyright:hover {
background: #000000d1;
box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 70px 0 rgba(0, 0, 0, 0.10);
/* border-right:10px solid var(--gold-color);
*/
opacity: 0.9;
transition: 0.3s;
}

.copyright p {
font-family: Montserrat, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.1rem;
color: rgba(255, 255, 255, 0.6);
cursor: default;
}

.mbYTP_wrapper {
left: 0 !important;
width: 100vw !important;
min-width: 0 !important;
opacity: 1 !important
}

.mbYTP_wrapper:after {
position: absolute;
z-index: 1;
top: 0;
left: 0;
overflow: hidden;
/*visible;*/
width: 100vw;
height: 100vh;
content: '';
background: -webkit-linear-gradient(rgba(34, 38, 75, 0.1), rgba(34, 38, 75, 0.5));
background: linear-gradient(rgba(34, 38, 75, 0.1), rgba(34, 38, 75, 0.5))
}

.youtube-background-mobile {
background: url("./?marko-nikolic-portfolio-source=image-in-background-7") center;
background-size: cover;
image-rendering: crisp-edges;
}

#swipebox-title {
font-family: Montserrat, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.1rem;
font-weight: 700;
line-height: 50px;
letter-spacing: .3rem;
text-transform: uppercase;
color: #f2f3f7
}

#swipebox-overlay {
background: rgba(0, 0, 0, 0.8)
}

#swipebox-bottom-bar {
background: -webkit-linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5));
background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5))
}

#swipebox-top-bar {
background: #000
}

#swipebox-prev {
position: absolute;
top: 0;
left: 0;
float: none
}

#swipebox-next {
position: absolute;
top: 0;
right: 0;
float: none
}

#swipebox-slider .slide {
opacity: 0;
-webkit-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
-moz-transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: all 0.8s cubic-bezier(0.785, 0.135, 0.15, 0.86)
}

#swipebox-slider .slide.current {
opacity: 1
}

span.holdscroll {
position: absolute;
z-index: 10;
left: 0;
display: none;
width: 100vw;
height: 100vh;
content: ''
}

span.holdscroll.content-opened {
display: block;
opacity: .3;
-webkit-transform: translate3d(-50%, 0, 0);
-moz-transform: translate3d(-50%, 0, 0);
-ms-transform: translate3d(-50%, 0, 0);
-o-transform: translate3d(-50%, 0, 0);
transform: translate3d(-50%, 0, 0)
}

span.holdscroll.menu-opened {
display: block;
opacity: .3;
-webkit-transform: translate3d(50%, 0, 0);
-moz-transform: translate3d(50%, 0, 0);
-ms-transform: translate3d(50%, 0, 0);
-o-transform: translate3d(50%, 0, 0);
transform: translate3d(50%, 0, 0)
}

.color-btn {
font-family: Raleway, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.1rem;
font-weight: 700;
display: inline-block;
padding: 1.4rem 3rem;
letter-spacing: .1rem;
text-transform: uppercase;
color: #fff;
border: none;
background: var(--gold-color);
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
-ms-border-radius: 3px;
border-radius: 3px;
box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 700px 0 rgba(0, 0, 0, 0.10);
}

.color-btn:hover {
color: #fff;
background: var(--rgba_218_165_32_0_79);
border: -2px solid #FF1D4D;
}

.open-close-menu {
font-size: 2.4em;
line-height: 0;
line-height: 5rem;
position: fixed;
z-index: 44;
top: 0;
left: 0;
visibility: hidden;
width: 5rem;
height: 5rem;
padding-left: 1.5rem;
text-align: left;
opacity: 0;
color: #fff;
border: none;
background: transparent;
}

.open-close-menu i {
display: inline-block;
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
overflow-x: scroll;
}

.open-close-menu:hover i {
color: var(--gold-color);
}

.scroll-indicator {
font-family: Raleway, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-size: 1.1rem;
font-weight: 400;
position: absolute;
z-index: 2;
bottom: 20px;
left: 50%;
display: inline-block;
padding-top: 70px;
letter-spacing: .1rem;
text-transform: uppercase;
weight: bold;
font-weight: 500;
color: var(--gold-color);
;
-webkit-transform: translateX(-50%);
-moz-transform: translateX(-50%);
-ms-transform: translateX(-50%);
-o-transform: translateX(-50%);
transform: translateX(-50%)
}

.scroll-indicator:hover {
bottom: 10px;
color: var(--gold-color);
;
}

.scroll-indicator span {
position: absolute;
top: 0;
left: 50%;
box-sizing: border-box;
width: 24px;
height: 24px;
margin-left: -12px;
border-bottom: 3px solid var(--gold-color);
border-left: 3px solid var(--gold-color);
text-shadow: 4px 4px silver;
-webkit-transform: rotate(-45deg);
-moz-transform: rotate(-45deg);
-ms-transform: rotate(-45deg);
-o-transform: rotate(-45deg);
transform: rotate(-45deg);
-webkit-animation: scrolling 1.5s infinite;
-moz-animation: scrolling 1.5s infinite;
animation: scrolling 1.5s infinite
}

@-webkit-keyframes scrolling {
0% {
opacity: 0;
-webkit-transform: rotate(-45deg) translate(0, 0)
}
50% {
opacity: 1
}
100% {
opacity: 0;
-webkit-transform: rotate(-45deg) translate(-20px, 20px)
}
}

@-moz-keyframes scrolling {
0% {
opacity: 0;
-moz-transform: rotate(-45deg) translate(0, 0)
}
50% {
opacity: 1
}
100% {
opacity: 0;
-moz-transform: rotate(-45deg) translate(-20px, 20px)
}
}

@keyframes scrolling {
0% {
opacity: 0;
-webkit-transform: rotate(-45deg) translate(0, 0);
-moz-transform: rotate(-45deg) translate(0, 0);
-ms-transform: rotate(-45deg) translate(0, 0);
-o-transform: rotate(-45deg) translate(0, 0);
transform: rotate(-45deg) translate(0, 0)
}
50% {
opacity: 1
}
100% {
opacity: 0;
-webkit-transform: rotate(-45deg) translate(-20px, 20px);
-moz-transform: rotate(-45deg) translate(-20px, 20px);
-ms-transform: rotate(-45deg) translate(-20px, 20px);
-o-transform: rotate(-45deg) translate(-20px, 20px);
transform: rotate(-45deg) translate(-20px, 20px)
}
}

.indicator {
position: absolute;
top: 50vh;
height: 50px;
width: 50px;
z-index: 40;
display: inline-block;
color: #fff;
opacity: 0;
-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);
-ms-transform: translateY(-50%);
-o-transform: translateY(-50%);
transform: translateY(-50%)
}

.indicator:hover {
color: #fff
}

.indicator span {
position: absolute;
top: 12px;
left: 10px;
box-sizing: border-box;
width: 24px;
height: 24px;
-webkit-transform: rotate(-45deg);
-moz-transform: rotate(-45deg);
-ms-transform: rotate(-45deg);
-o-transform: rotate(-45deg);
transform: rotate(-45deg)
}

.indicator.pagepil-left {
left: 20px
}

.indicator.pagepil-left:hover {
left: 10px
}

.indicator.pagepil-left span {
border-top: 2px solid #fff;
border-left: 2px solid #fff
}

.indicator.pagepil-left.popup-opened {
left: -50px
}

.indicator.pagepil-right {
right: 20px
}

.indicator.pagepil-right:hover {
right: 10px
}

.indicator.pagepil-right span {
border-right: 2px solid #fff;
border-bottom: 2px solid #fff
}

.indicator.pagepil-right.popup-opened {
right: -50px
}

@media only screen and (max-width: 1024px) {


#menu #menu-link .social-menu {
font-size: 30px;
}

#menu #menu-link .social-menu a {

}

#info {
width: 100%
}
#info.content-opened {
-webkit-transform: translateX(0);
-moz-transform: translateX(0);
-ms-transform: translateX(0);
-o-transform: translateX(0);
transform: translateX(0)
}
#info .content {
padding: 10rem 8rem
}
#info.hide-right {
right: 0
}
.mCSB_scrollTools {
width: 5px;
height: 100vh;
margin-top: 0
}
.mCSB_scrollTools .mCSB_draggerRail {
width: 5px
}
.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
width: 5px;
-webkit-border-radius: 0;
-moz-border-radius: 0;
-ms-border-radius: 0;
border-radius: 0
}
.mCSB_scrollTools {
right: 0
}
.mCSB_scrollTools-left {
right: 0 !important
}
#menu {
position: absolute;
left: -50%;
overflow: hidden;
/* scroll; */
width: 50vw;
height: 100vh;
background: #111
}
#menu.popup-opened {
top: 0
}
#menu.menu-opened {
left: 0;
-webkit-transform: translateX(0);
-moz-transform: translateX(0);
-ms-transform: translateX(0);
-o-transform: translateX(0);
transform: translateX(0);
}
#menu li {
width: 100%;
text-align: left;
height: auto
}
#menu li.social-menu {
width: auto
}
#menu li a span {
position: relative;
bottom: 0;
visibility: visible;
opacity: 1
}
#menu #menu-link {
position: relative;
float: left
}
#menu #menu-link li {
text-align: left
}
.open-close-menu.loading-done {
visibility: visible;
opacity: 1
}
.open-close-menu.popup-opened {
visibility: hidden;
opacity: 0
}
.dialog .dialog__content {
width: 100%;
max-width: none
}
.dialog .dialog-inner {
padding: 0
}
.map-wrapper {
padding-top: 0
}
}

@media only screen and (max-width: 768px) {
.info-contact .item-map:first-child {
padding-left: 0
}
.info-contact .item-map:last-child {
padding-right: 0
}
h1 {
font-size: 7rem
}
p.subtitle {
font-size: 1.2rem
}
.copyright {
display: none
}
.dialog__content {
width: 80%;
min-width: 75%;
max-width: 80%
}
.dialog .dialog__content {
width: 100%;
max-width: none
}
.dialog .dialog-inner {
top: 0;
padding: 100px 20px 50px !important;
-webkit-transform: translateY(0) !important;
-moz-transform: translateY(0) !important;
-ms-transform: translateY(0) !important;
-o-transform: translateY(0) !important;
transform: translateY(0) !important;
padding: 0
}
.dialog .dialog-inner .col-sm-6 {
width: 100%
}
.dialog .dialog-inner .details {
margin-top: 20px
}
.section .vertical-gallery {
overflow: hidden;
height: 25vh;
width: 100%;
opacity: 1;
background-size: cover;
image-rendering: crisp-edges;
display: -webkit-box;
display: -moz-box;
display: box;
display: -webkit-flex;
display: -moz-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-moz-box-pack: center;
box-pack: center;
-webkit-justify-content: center;
-moz-justify-content: center;
-ms-justify-content: center;
-o-justify-content: center;
justify-content: center;
-ms-flex-pack: center;
-webkit-box-align: center;
-moz-box-align: center;
box-align: center;
-webkit-align-items: center;
-moz-align-items: center;
-ms-align-items: center;
-o-align-items: center;
align-items: center;
-ms-flex-align: center;
-webkit-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
-moz-transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1)
}
}

@media only screen and (max-width: 480px) {
#menu {
left: -100%;
width: 100vw
}
#menu.menu-opened {
left: 0;
-webkit-transform: translateX(0);
-moz-transform: translateX(0);
-ms-transform: translateX(0);
-o-transform: translateX(0);
transform: translateX(0)
}
#menu #menu-link {
margin-bottom: 100px
}
#home {
padding: 5rem 0 0
}
#home .content {
padding: 0 2rem
}
#home.minimal-phone {
height: 100vh
}
h1 {
font-size: 4rem
}
h2 {
font-size: 2.2rem
}
p.subtitle {
margin-bottom: 2rem
}
.mCSB_container {
padding: 5rem 5rem 10rem
}
#contact-form {
margin-top: 2rem
}
#contact-form .ios {
float: none;
margin: 1rem auto
}
#contact-form label.check-news {
margin-top: 0
}
#contact-form button#valid-form {
width: 100%;
margin-top: 1.5rem
}
.copyright {
position: relative;
right: auto
}
.dialog .dialog-inner {
overflow: hidden;
padding: 40px 20px 90px
}
.dialog__content {
width: 95%;
min-width: 75%;
max-width: 95%
}
.dialog .close-content {
position: relative;
right: 0;
bottom: auto;
width: 100%;
text-align: center
}
.dialog .dialog-inner {
padding: 40px 20px 50px
}
.dialog .dialog-inner h4 {
font-size: 25px;
margin-bottom: 20px
}
.section .img-info {
font-size: 12px;
font-weight: 400;
position: absolute;
z-index: 999;
bottom: 0;
left: 0;
padding: 15px;
text-align: left;
color: #fff
}
.section .img-info h5 {
font-size: 1.1rem;
font-weight: 700;
letter-spacing: .3rem;
text-transform: uppercase;
color: #f2f3f7
}
.section .img-info h2 {
font-family: Montserrat, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif
}
.section .img-info a {
font-weight: 700
}
.section .img-info a.action-btn {
font-family: Raleway, "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;
font-weight: 700;
display: block;
float: left;
margin-top: 1rem;
margin-right: 1rem;
padding: .7em 2em;
color: #fff;
border: 1px solid rgba(255, 255, 255, 0.4);
background: rgba(45, 49, 56, 0.1);
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
-ms-border-radius: 3px;
border-radius: 3px
}
.section .img-info a.action-btn:hover {
color: #22264b;
border-color: #fff;
background: #fff
}
.section .img-info p.credit {
margin: 0 0 1rem;
color: #fff
}
.section .img-info p.credit i {
min-width: 2rem;
color: rgba(255, 255, 255, 0.6)
}
.indicator {
top: 5px;
-webkit-transform: translateY(0);
-moz-transform: translateY(0);
-ms-transform: translateY(0);
-o-transform: translateY(0);
transform: translateY(0)
}
.indicator span {
top: 12px;
left: 10px;
width: 20px;
height: 20px;
-webkit-transform: rotate(-45deg);
-moz-transform: rotate(-45deg);
-ms-transform: rotate(-45deg);
-o-transform: rotate(-45deg);
transform: rotate(-45deg)
}
.indicator.pagepil-left {
left: auto;
right: 50px
}
.indicator.pagepil-left:hover {
left: auto;
right: 50px
}
.indicator.pagepil-left.popup-opened {
left: auto;
top: -50px
}
.indicator.pagepil-right {
right: 5px
}
.indicator.pagepil-right:hover {
right: 5px
}
.indicator.pagepil-right.popup-opened {
right: 5px;
top: -50px
}
}

@media screen and (max-device-width: 667px) and (orientation: landscape) {
p.subtitle {
margin-bottom: 2rem
}
.scroll-indicator span {
top: 10px
}
#contact-form {
margin-top: 2rem
}
#contact-form .ios {
float: none;
margin: 1rem auto
}
#contact-form label.check-news {
margin-top: 0
}
#contact-form button#valid-form {
width: 100%;
margin-top: 1.5rem
}
.dialog__content {
width: 100%;
min-width: 75%;
max-width: 100%
}
.dialog .close-content {
position: relative;
right: 0;
bottom: auto;
width: 100%;
text-align: center
}
.dialog .dialog-inner {
padding: 40px 20px 50px
}
.dialog .dialog-inner h4 {
font-size: 25px;
margin-bottom: 5px
}
.indicator {
top: 5px;
-webkit-transform: translateY(0);
-moz-transform: translateY(0);
-ms-transform: translateY(0);
-o-transform: translateY(0);
transform: translateY(0)
}
.indicator span {
top: 12px;
left: 10px;
width: 20px;
height: 20px;
-webkit-transform: rotate(-45deg);
-moz-transform: rotate(-45deg);
-ms-transform: rotate(-45deg);
-o-transform: rotate(-45deg);
transform: rotate(-45deg)
}
.indicator.pagepil-left {
left: auto;
right: 50px
}
.indicator.pagepil-left:hover {
left: auto;
right: 50px
}
.indicator.pagepil-left.popup-opened {
left: auto;
top: -50px
}
.indicator.pagepil-right {
right: 5px
}
.indicator.pagepil-right:hover {
right: 5px
}
.indicator.pagepil-right.popup-opened {
right: 5px;
top: -50px
}
}

::-webkit-scrollbar {
width: 6px;
height: 5px;
/* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10); */
}

::-webkit-scrollbar-track-piece {
background-color: white;
}

::-webkit-scrollbar-thumb:vertical {
background-color: var(--F_daa520d4_f);
/* #f33; */
/* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10); */
}

::-webkit-scrollbar-thumb:vertical:hover {
background-color: var(--gold-color);
}

p::-moz-selection {
color: var(--rgba_218_165_32_0_79);
}

p::selection {
color: var(--rgba_218_165_32_0_79);
}

#dotty {
position: fixed;
top: 0;
left: 0
}

#dotty_ddd
{
position: fixed;
top: 0;
left: 0;
width: 100%;
}

#FV_F {
margin-top: 50px;
width: 100%;
height: 100%;
bottom: initial;
border: 0px;
-webkit-margin-top-collapse: collapse;
}

#menu .active {
border-bottom: 4px solid var(--gold-color);
}

.mb-0 {
border-left: 4px solid var(--gold-color);
box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 70px 0 rgba(0, 0, 0, 0.10);
}

.card-body span {
color: #666;
}

#accordionExample .card {
margin-bottom: -16px;
}

.card-body span .a_program {
font-family: arial;
color: var(--gold-color);
}

.btn-link {
font-family: arial;
font-weight: bold;
color: #777;
}

.btn-downlaod .mb-0:hover {
border-left: 4px solid #29b33f;
}

#menu_theme_blue {
position: relative;
background: #337ab7;
padding: 0px;
left: 0px;
width: 39px;
padding-right: 3px;
border-radius: 300px;
font-family: 'D3';
font-weight: normal;
cursor: pointer;
border-top-left-radius: 0px;
border-bottom-left-radius: 0px;
border-top-right-radius: 0px;
font-style: normal;
font-size: 30px;
border-left: 4px solid #337ab7;
}

#menu_theme_blue:hover {
box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 70px 0 rgba(0, 0, 0, 0.10);
border-left: 4px solid #337ab7;
background: white;
color: #337ab7
}

#menu_theme_gold {
position: relative;
background: #DAA520;
padding: 0px;
left: 0px;
width: 39px;
padding-right: 3px;
border-radius: 300px;
font-family: 'D3';
font-weight: normal;
cursor: pointer;
border-top-left-radius: 0px;
border-bottom-left-radius: 0px;
border-top-right-radius: 0px;
border-bottom-right-radius: 0px;
font-style: normal;
font-size: 30px;
border-left: 4px solid white;
}

#menu_theme_gold:hover {
box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 70px 0 rgba(0, 0, 0, 0.10);
border-left: 4px solid var(--gold-color);
background: white;
color: var(--gold-color);
}

#menu_theme_green {
position: relative;
background: #0ca02c;
padding: 0px;
left: 0px;
width: 39px;
padding-right: 3px;
border-radius: 300px;
font-family: 'D3';
font-weight: normal;
cursor: pointer;
border-top-left-radius: 0px;
border-bottom-left-radius: 0px;
border-top-right-radius: 0px;
border-bottom-right-radius: 0px;
font-style: normal;
font-size: 30px;
border-left: 4px solid #0ca02c;
}

#menu_theme_green:hover {
box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 70px 0 rgba(0, 0, 0, 0.10);
border-left: 4px solid #0ca02c;
background: white;
color: #0ca02c;
}

#menu_theme_red {
position: relative;
background: #da3220;
padding: 0px;
left: 0px;
width: 39px;
padding-right: 3px;
border-radius: 300px;
font-family: 'D3';
font-weight: normal;
cursor: pointer;
border-top-left-radius: 0px;
border-bottom-left-radius: 0px;
border-bottom-right-radius: 0px;
font-style: normal;
font-size: 30px;
border-left: 4px solid #da3220;
}

#menu_theme_red:hover {
box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 70px 0 rgba(0, 0, 0, 0.10);
border-left: 4px solid #da3220;
background: white;
color: #da3220;
}

#Slika {
padding-top: 0px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);
height: 100%;
background: white;
width: 100%;
}

#Slika #slika1 {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);
width: 100%;
height: 100%;
background: var(--gold-color);
border-radius: 10px;
}

#Slika #slika1 img {
margin-bottom: 4px;
width: 100%;
height: 100%;
border-bottom: 4px var(--F_DAA520_solid);
margin-top: 10px;
}

#Slika #slika1 img:hover {
border-bottom: 4px rgba(var(--rgb_code_218_165_32), 0.79) solid;
}

input, textarea {
color: var(--gold-color) !important;
}

input[type=submit] {
color: white !important;
}

* ::-moz-selection, * ::-moz-selection {
background: rgba(var(--rgb_code_218_165_32), 0.3) !important;
color: var(--gold-color);
}

* ::selection, * ::selection {
background: rgba(var(--rgb_code_218_165_32), 0.3) !important;
color: var(--gold-color);
}