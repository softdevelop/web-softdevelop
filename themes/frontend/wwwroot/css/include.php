

/*==================================================================================================
    CSS RESET
==================================================================================================*/

html,
body,
div,
span,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
abbr,
address,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
samp,
small,
strong,
sub,
sup,
var,
b,
i,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section,
summary,
time,
mark,
audio,
video {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-weight: inherit;
    font-style: inherit;
    font-size: 100%;
    font-family: inherit;
    vertical-align: baseline;
    background:transparent;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
    display:block;
}

body {
    line-height: 1;
    color: black;
    background: white;
}

:focus {
    outline: 0;
}

ol,
ul {
    list-style: none;
}

blockquote,
q {
    quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
     content: none;
}

a {
    text-decoration: none;
}

a img {
    border: 0;
}

ins {
    background-color: #ff9;
    color: #000;
    text-decoration: none;
}

mark {
    background-color: #ff9;
    color: #000;
    font-style: italic;
    font-weight: bold;
}

del {
    text-decoration: line-through;
}

abbr[title],
dfn[title] {
    border-bottom: 1px dotted;
    cursor: help;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

caption,
th,
td {
    text-align: left;
    font-weight: normal;
}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #cccccc;
    margin: 1em 0;
    padding: 0;
}

input,
select {
    vertical-align: middle;
}

sup,
sub {
    font-size: xx-small;
    height: 0;
    line-height: 1;
}

sup {
    vertical-align: baseline;
    position: relative;
    bottom: 1ex;
}

sub {
    vertical-align: text-bottom;
}/*==================================================================================================
    GRID
==================================================================================================*/
/*--------------------------------------------------------------------------------------------------
    COLUMNS
--------------------------------------------------------------------------------------------------*/
.col-16-16 {
  width: 100%;
}
.col-15-16 {
  width: 93.75%;
}
.col-14-16 {
  width: 87.5%;
}
.col-13-16 {
  width: 81.25%;
}
.col-12-16 {
  width: 75%;
}
.col-11-16 {
  width: 68.75%;
}
.col-10-16 {
  width: 62.5%;
}
.col-9-16 {
  width: 56.25%;
}
.col-8-16 {
  width: 50%;
}
.col-7-16 {
  width: 43.75%;
}
.col-6-16 {
  width: 37.5%;
}
.col-5-16 {
  width: 31.25%;
}
.col-4-16 {
  width: 25%;
}
.col-3-16 {
  width: 18.75%;
}
.col-2-16 {
  width: 12.5%;
}
.col-1-16 {
  width: 6.25%;
}
.col-15-15 {
  width: 100%;
}
.col-14-15 {
  width: 93.33333333333333%;
}
.col-13-15 {
  width: 86.66666666666667%;
}
.col-12-15 {
  width: 80%;
}
.col-11-15 {
  width: 73.33333333333333%;
}
.col-10-15 {
  width: 66.66666666666666%;
}
.col-9-15 {
  width: 60%;
}
.col-8-15 {
  width: 53.333333333333336%;
}
.col-7-15 {
  width: 46.666666666666664%;
}
.col-6-15 {
  width: 40%;
}
.col-5-15 {
  width: 33.33333333333333%;
}
.col-4-15 {
  width: 26.666666666666668%;
}
.col-3-15 {
  width: 20%;
}
.col-2-15 {
  width: 13.333333333333334%;
}
.col-1-15 {
  width: 6.666666666666667%;
}
.col-14-14 {
  width: 100%;
}
.col-13-14 {
  width: 92.85714285714286%;
}
.col-12-14 {
  width: 85.71428571428571%;
}
.col-11-14 {
  width: 78.57142857142857%;
}
.col-10-14 {
  width: 71.42857142857143%;
}
.col-9-14 {
  width: 64.28571428571429%;
}
.col-8-14 {
  width: 57.14285714285714%;
}
.col-7-14 {
  width: 50%;
}
.col-6-14 {
  width: 42.857142857142854%;
}
.col-5-14 {
  width: 35.714285714285715%;
}
.col-4-14 {
  width: 28.57142857142857%;
}
.col-3-14 {
  width: 21.428571428571427%;
}
.col-2-14 {
  width: 14.285714285714285%;
}
.col-1-14 {
  width: 7.142857142857142%;
}
.col-13-13 {
  width: 100%;
}
.col-12-13 {
  width: 92.3076923076923%;
}
.col-11-13 {
  width: 84.61538461538461%;
}
.col-10-13 {
  width: 76.92307692307693%;
}
.col-9-13 {
  width: 69.23076923076923%;
}
.col-8-13 {
  width: 61.53846153846154%;
}
.col-7-13 {
  width: 53.84615384615385%;
}
.col-6-13 {
  width: 46.15384615384615%;
}
.col-5-13 {
  width: 38.46153846153847%;
}
.col-4-13 {
  width: 30.76923076923077%;
}
.col-3-13 {
  width: 23.076923076923077%;
}
.col-2-13 {
  width: 15.384615384615385%;
}
.col-1-13 {
  width: 7.6923076923076925%;
}
.col-12-12 {
  width: 100%;
}
.col-11-12 {
  width: 91.66666666666666%;
}
.col-10-12 {
  width: 83.33333333333334%;
}
.col-9-12 {
  width: 75%;
}
.col-8-12 {
  width: 66.66666666666666%;
}
.col-7-12 {
  width: 58.333333333333336%;
}
.col-6-12 {
  width: 50%;
}
.col-5-12 {
  width: 41.66666666666667%;
}
.col-4-12 {
  width: 33.33333333333333%;
}
.col-3-12 {
  width: 25%;
}
.col-2-12 {
  width: 16.666666666666664%;
}
.col-1-12 {
  width: 8.333333333333332%;
}
.col-11-11 {
  width: 100%;
}
.col-10-11 {
  width: 90.9090909090909%;
}
.col-9-11 {
  width: 81.81818181818183%;
}
.col-8-11 {
  width: 72.72727272727273%;
}
.col-7-11 {
  width: 63.63636363636363%;
}
.col-6-11 {
  width: 54.54545454545454%;
}
.col-5-11 {
  width: 45.45454545454545%;
}
.col-4-11 {
  width: 36.36363636363637%;
}
.col-3-11 {
  width: 27.27272727272727%;
}
.col-2-11 {
  width: 18.181818181818183%;
}
.col-1-11 {
  width: 9.090909090909092%;
}
.col-10-10 {
  width: 100%;
}
.col-9-10 {
  width: 90%;
}
.col-8-10 {
  width: 80%;
}
.col-7-10 {
  width: 70%;
}
.col-6-10 {
  width: 60%;
}
.col-5-10 {
  width: 50%;
}
.col-4-10 {
  width: 40%;
}
.col-3-10 {
  width: 30%;
}
.col-2-10 {
  width: 20%;
}
.col-1-10 {
  width: 10%;
}
.col-9-9 {
  width: 100%;
}
.col-8-9 {
  width: 88.88888888888889%;
}
.col-7-9 {
  width: 77.77777777777779%;
}
.col-6-9 {
  width: 66.66666666666666%;
}
.col-5-9 {
  width: 55.55555555555556%;
}
.col-4-9 {
  width: 44.44444444444444%;
}
.col-3-9 {
  width: 33.33333333333333%;
}
.col-2-9 {
  width: 22.22222222222222%;
}
.col-1-9 {
  width: 11.11111111111111%;
}
.col-8-8 {
  width: 100%;
}
.col-7-8 {
  width: 87.5%;
}
.col-6-8 {
  width: 75%;
}
.col-5-8 {
  width: 62.5%;
}
.col-4-8 {
  width: 50%;
}
.col-3-8 {
  width: 37.5%;
}
.col-2-8 {
  width: 25%;
}
.col-1-8 {
  width: 12.5%;
}
.col-7-7 {
  width: 100%;
}
.col-6-7 {
  width: 85.71428571428571%;
}
.col-5-7 {
  width: 71.42857142857143%;
}
.col-4-7 {
  width: 57.14285714285714%;
}
.col-3-7 {
  width: 42.857142857142854%;
}
.col-2-7 {
  width: 28.57142857142857%;
}
.col-1-7 {
  width: 14.285714285714285%;
}
.col-6-6 {
  width: 100%;
}
.col-5-6 {
  width: 83.33333333333334%;
}
.col-4-6 {
  width: 66.66666666666666%;
}
.col-3-6 {
  width: 50%;
}
.col-2-6 {
  width: 33.33333333333333%;
}
.col-1-6 {
  width: 16.666666666666664%;
}
.col-5-5 {
  width: 100%;
}
.col-4-5 {
  width: 80%;
}
.col-3-5 {
  width: 60%;
}
.col-2-5 {
  width: 40%;
}
.col-1-5 {
  width: 20%;
}
.col-4-4 {
  width: 100%;
}
.col-3-4 {
  width: 75%;
}
.col-2-4 {
  width: 50%;
}
.col-1-4 {
  width: 25%;
}
.col-3-3 {
  width: 100%;
}
.col-2-3 {
  width: 66.66666666666666%;
}
.col-1-3 {
  width: 33.33333333333333%;
}
.col-2-2 {
  width: 100%;
}
.col-1-2 {
  width: 50%;
}
.col-1-1 {
  width: 100%;
}
/*--------------------------------------------------------------------------------------------------
    GRID
--------------------------------------------------------------------------------------------------*/
body {
  margin: 0px;
}
.grid {
  margin: 0 auto;
}
.grid:before,
.grid:after,
.grid .row:before,
.grid .row:after {
  content: "";
  display: table;
  clear: both;
}
.grid .row {
  margin-right: -20px;
}
.grid.seamless .row {
  margin-right: 0;
}
.grid,
.grid [class*="col-"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  box-sizing: border-box;
}
.grid [class*="col-"] {
  float: left;
}
.grid [class*="col-"].gap:before {
  content: "\0000a0";
}
.grid [class*="col-"],
.grid [class*="col-"].padding {
  padding-right: 20px;
}
.grid [class*="col-"].nopadding,
.grid.seamless [class*="col-"] {
  padding-right: 0;
}
/*--------------------------------------------------------------------------------------------------
    MOBILE
--------------------------------------------------------------------------------------------------*/
@media only screen and (max-width: 767px) {
  .grid [class*="col-"],
  .grid [class*="col-"].padding {
    width: auto;
    float: none;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-right: 0;
  }
  .grid .row {
    margin-right: 0;
  }
}
/*!
 *  Font Awesome 3.2.0
 *  the iconic font designed for Bootstrap
 *  ------------------------------------------------------------------------------
 *  The full suite of pictographic icons, examples, and documentation can be
 *  found at http://fontawesome.io.  Stay up to date on Twitter at
 *  http://twitter.com/fontawesome.
 *
 *  License
 *  ------------------------------------------------------------------------------
 *  - The Font Awesome font is licensed under SIL OFL 1.1 -
 *    http://scripts.sil.org/OFL
 *  - Font Awesome CSS, LESS, and SASS files are licensed under MIT License -
 *    http://opensource.org/licenses/mit-license.html
 *  - Font Awesome documentation licensed under CC BY 3.0 -
 *    http://creativecommons.org/licenses/by/3.0/
 *  - Attribution is no longer required in Font Awesome 3.0, but much appreciated:
 *    "Font Awesome by Dave Gandy - http://fontawesome.io"
 *
 *  Author - Dave Gandy
 *  ------------------------------------------------------------------------------
 *  Email: dave@fontawesome.io
 *  Twitter: http://twitter.com/byscuits
 *  Work: Lead Product Designer @ Kyruus - http://kyruus.com
 */

@font-face{font-family:awesome;src:url('../fonts/awesome/awesome.eot?v=3.2.0');src:url('../fonts/awesome/awesome.eot?#iefix&v=3.2.0') format('embedded-opentype'),url('../fonts/awesome/awesome.woff?v=3.2.0') format('woff'),url('../fonts/awesome/awesome.ttf?v=3.2.0') format('truetype'),url('../fonts/awesome/awesome.svg#fontawesomeregular?v=3.2.0') format('svg');font-weight:normal;font-style:normal}[class^="icon-"],[class*=" icon-"]{font-family:awesome;font-weight:normal;font-style:normal;text-decoration:inherit;-webkit-font-smoothing:antialiased;*margin-right:.3em}[class^="icon-"]:before,[class*=" icon-"]:before{text-decoration:inherit;display:inline-block;cursor:inherit;speak:none}.icon-large:before{vertical-align:-10%;font-size:1.3333333333333333em}a [class^="icon-"],a [class*=" icon-"]{display:inline}[class^="icon-"].icon-fixed-width,[class*=" icon-"].icon-fixed-width{display:inline-block;width:1.1428571428571428em;text-align:right;padding-right:.2857142857142857em}[class^="icon-"].icon-fixed-width.icon-large,[class*=" icon-"].icon-fixed-width.icon-large{width:1.4285714285714286em}.icons-ul{margin-left:2.142857142857143em;list-style-type:none}.icons-ul>li{position:relative}.icons-ul .icon-li{position:absolute;left:-2.142857142857143em;width:2.142857142857143em;text-align:center;line-height:inherit}[class^="icon-"].hide,[class*=" icon-"].hide{display:none}.icon-muted{color:#eee}.icon-light{color:#fff}.icon-dark{color:#333}.icon-border{border:solid 1px #eee;padding:.2em .25em .15em;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.icon-2x{font-size:2em}.icon-2x.icon-border{border-width:2px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.icon-3x{font-size:3em}.icon-3x.icon-border{border-width:3px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.icon-4x{font-size:4em}.icon-4x.icon-border{border-width:4px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px}.icon-5x{font-size:5em}.icon-5x.icon-border{border-width:5px;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.pull-right{float:right}.pull-left{float:left}[class^="icon-"].pull-left,[class*=" icon-"].pull-left{margin-right:.3em}[class^="icon-"].pull-right,[class*=" icon-"].pull-right{margin-left:.3em}[class^="icon-"],[class*=" icon-"]{display:inline;width:auto;height:auto;line-height:normal;vertical-align:baseline;background-image:none;background-position:0 0;background-repeat:repeat;margin-top:0}.icon-white,.nav-pills>.active>a>[class^="icon-"],.nav-pills>.active>a>[class*=" icon-"],.nav-list>.active>a>[class^="icon-"],.nav-list>.active>a>[class*=" icon-"],.navbar-inverse .nav>.active>a>[class^="icon-"],.navbar-inverse .nav>.active>a>[class*=" icon-"],.dropdown-menu>li>a:hover>[class^="icon-"],.dropdown-menu>li>a:hover>[class*=" icon-"],.dropdown-menu>.active>a>[class^="icon-"],.dropdown-menu>.active>a>[class*=" icon-"],.dropdown-submenu:hover>a>[class^="icon-"],.dropdown-submenu:hover>a>[class*=" icon-"]{background-image:none}.btn [class^="icon-"].icon-large,.nav [class^="icon-"].icon-large,.btn [class*=" icon-"].icon-large,.nav [class*=" icon-"].icon-large{line-height:.9em}.btn [class^="icon-"].icon-spin,.nav [class^="icon-"].icon-spin,.btn [class*=" icon-"].icon-spin,.nav [class*=" icon-"].icon-spin{display:inline-block}.nav-tabs [class^="icon-"],.nav-pills [class^="icon-"],.nav-tabs [class*=" icon-"],.nav-pills [class*=" icon-"],.nav-tabs [class^="icon-"].icon-large,.nav-pills [class^="icon-"].icon-large,.nav-tabs [class*=" icon-"].icon-large,.nav-pills [class*=" icon-"].icon-large{line-height:.9em}.btn [class^="icon-"].pull-left.icon-2x,.btn [class*=" icon-"].pull-left.icon-2x,.btn [class^="icon-"].pull-right.icon-2x,.btn [class*=" icon-"].pull-right.icon-2x{margin-top:.18em}.btn [class^="icon-"].icon-spin.icon-large,.btn [class*=" icon-"].icon-spin.icon-large{line-height:.8em}.btn.btn-small [class^="icon-"].pull-left.icon-2x,.btn.btn-small [class*=" icon-"].pull-left.icon-2x,.btn.btn-small [class^="icon-"].pull-right.icon-2x,.btn.btn-small [class*=" icon-"].pull-right.icon-2x{margin-top:.25em}.btn.btn-large [class^="icon-"],.btn.btn-large [class*=" icon-"]{margin-top:0}.btn.btn-large [class^="icon-"].pull-left.icon-2x,.btn.btn-large [class*=" icon-"].pull-left.icon-2x,.btn.btn-large [class^="icon-"].pull-right.icon-2x,.btn.btn-large [class*=" icon-"].pull-right.icon-2x{margin-top:.05em}.btn.btn-large [class^="icon-"].pull-left.icon-2x,.btn.btn-large [class*=" icon-"].pull-left.icon-2x{margin-right:.2em}.btn.btn-large [class^="icon-"].pull-right.icon-2x,.btn.btn-large [class*=" icon-"].pull-right.icon-2x{margin-left:.2em}.icon-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:-35%}.icon-stack [class^="icon-"],.icon-stack [class*=" icon-"]{display:block;text-align:center;position:absolute;width:100%;height:100%;font-size:1em;line-height:inherit;*line-height:2em}.icon-stack .icon-stack-base{font-size:2em;*line-height:1em}.icon-spin{display:inline-block;-moz-animation:spin 2s infinite linear;-o-animation:spin 2s infinite linear;-webkit-animation:spin 2s infinite linear;animation:spin 2s infinite linear}a .icon-spin{display:inline-block;text-decoration:none}@-moz-keyframes spin{0{-moz-transform:rotate(0)}100%{-moz-transform:rotate(359deg)}}@-webkit-keyframes spin{0{-webkit-transform:rotate(0)}100%{-webkit-transform:rotate(359deg)}}@-o-keyframes spin{0{-o-transform:rotate(0)}100%{-o-transform:rotate(359deg)}}@-ms-keyframes spin{0{-ms-transform:rotate(0)}100%{-ms-transform:rotate(359deg)}}@keyframes spin{0{transform:rotate(0)}100%{transform:rotate(359deg)}}.icon-rotate-90:before{-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);-o-transform:rotate(90deg);transform:rotate(90deg);filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1)}.icon-rotate-180:before{-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg);-o-transform:rotate(180deg);transform:rotate(180deg);filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2)}.icon-rotate-270:before{-webkit-transform:rotate(270deg);-moz-transform:rotate(270deg);-ms-transform:rotate(270deg);-o-transform:rotate(270deg);transform:rotate(270deg);filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3)}.icon-flip-horizontal:before{-webkit-transform:scale(-1,1);-moz-transform:scale(-1,1);-ms-transform:scale(-1,1);-o-transform:scale(-1,1);transform:scale(-1,1)}.icon-flip-vertical:before{-webkit-transform:scale(1,-1);-moz-transform:scale(1,-1);-ms-transform:scale(1,-1);-o-transform:scale(1,-1);transform:scale(1,-1)}a .icon-rotate-90:before,a .icon-rotate-180:before,a .icon-rotate-270:before,a .icon-flip-horizontal:before,a .icon-flip-vertical:before{display:inline-block}.icon-glass:before{content:"\f000"}.icon-music:before{content:"\f001"}.icon-search:before{content:"\f002"}.icon-envelope-alt:before{content:"\f003"}.icon-heart:before{content:"\f004"}.icon-star:before{content:"\f005"}.icon-star-empty:before{content:"\f006"}.icon-user:before{content:"\f007"}.icon-film:before{content:"\f008"}.icon-th-large:before{content:"\f009"}.icon-th:before{content:"\f00a"}.icon-th-list:before{content:"\f00b"}.icon-ok:before{content:"\f00c"}.icon-remove:before{content:"\f00d"}.icon-zoom-in:before{content:"\f00e"}.icon-zoom-out:before{content:"\f010"}.icon-power-off:before,.icon-off:before{content:"\f011"}.icon-signal:before{content:"\f012"}.icon-cog:before{content:"\f013"}.icon-trash:before{content:"\f014"}.icon-home:before{content:"\f015"}.icon-file-alt:before{content:"\f016"}.icon-time:before{content:"\f017"}.icon-road:before{content:"\f018"}.icon-download-alt:before{content:"\f019"}.icon-download:before{content:"\f01a"}.icon-upload:before{content:"\f01b"}.icon-inbox:before{content:"\f01c"}.icon-play-circle:before{content:"\f01d"}.icon-rotate-right:before,.icon-repeat:before{content:"\f01e"}.icon-refresh:before{content:"\f021"}.icon-list-alt:before{content:"\f022"}.icon-lock:before{content:"\f023"}.icon-flag:before{content:"\f024"}.icon-headphones:before{content:"\f025"}.icon-volume-off:before{content:"\f026"}.icon-volume-down:before{content:"\f027"}.icon-volume-up:before{content:"\f028"}.icon-qrcode:before{content:"\f029"}.icon-barcode:before{content:"\f02a"}.icon-tag:before{content:"\f02b"}.icon-tags:before{content:"\f02c"}.icon-book:before{content:"\f02d"}.icon-bookmark:before{content:"\f02e"}.icon-print:before{content:"\f02f"}.icon-camera:before{content:"\f030"}.icon-font:before{content:"\f031"}.icon-bold:before{content:"\f032"}.icon-italic:before{content:"\f033"}.icon-text-height:before{content:"\f034"}.icon-text-width:before{content:"\f035"}.icon-align-left:before{content:"\f036"}.icon-align-center:before{content:"\f037"}.icon-align-right:before{content:"\f038"}.icon-align-justify:before{content:"\f039"}.icon-list:before{content:"\f03a"}.icon-indent-left:before{content:"\f03b"}.icon-indent-right:before{content:"\f03c"}.icon-facetime-video:before{content:"\f03d"}.icon-picture:before{content:"\f03e"}.icon-pencil:before{content:"\f040"}.icon-map-marker:before{content:"\f041"}.icon-adjust:before{content:"\f042"}.icon-tint:before{content:"\f043"}.icon-edit:before{content:"\f044"}.icon-share:before{content:"\f045"}.icon-check:before{content:"\f046"}.icon-move:before{content:"\f047"}.icon-step-backward:before{content:"\f048"}.icon-fast-backward:before{content:"\f049"}.icon-backward:before{content:"\f04a"}.icon-play:before{content:"\f04b"}.icon-pause:before{content:"\f04c"}.icon-stop:before{content:"\f04d"}.icon-forward:before{content:"\f04e"}.icon-fast-forward:before{content:"\f050"}.icon-step-forward:before{content:"\f051"}.icon-eject:before{content:"\f052"}.icon-chevron-left:before{content:"\f053"}.icon-chevron-right:before{content:"\f054"}.icon-plus-sign:before{content:"\f055"}.icon-minus-sign:before{content:"\f056"}.icon-remove-sign:before{content:"\f057"}.icon-ok-sign:before{content:"\f058"}.icon-question-sign:before{content:"\f059"}.icon-info-sign:before{content:"\f05a"}.icon-screenshot:before{content:"\f05b"}.icon-remove-circle:before{content:"\f05c"}.icon-ok-circle:before{content:"\f05d"}.icon-ban-circle:before{content:"\f05e"}.icon-arrow-left:before{content:"\f060"}.icon-arrow-right:before{content:"\f061"}.icon-arrow-up:before{content:"\f062"}.icon-arrow-down:before{content:"\f063"}.icon-mail-forward:before,.icon-share-alt:before{content:"\f064"}.icon-resize-full:before{content:"\f065"}.icon-resize-small:before{content:"\f066"}.icon-plus:before{content:"\f067"}.icon-minus:before{content:"\f068"}.icon-asterisk:before{content:"\f069"}.icon-exclamation-sign:before{content:"\f06a"}.icon-gift:before{content:"\f06b"}.icon-leaf:before{content:"\f06c"}.icon-fire:before{content:"\f06d"}.icon-eye-open:before{content:"\f06e"}.icon-eye-close:before{content:"\f070"}.icon-warning-sign:before{content:"\f071"}.icon-plane:before{content:"\f072"}.icon-calendar:before{content:"\f073"}.icon-random:before{content:"\f074"}.icon-comment:before{content:"\f075"}.icon-magnet:before{content:"\f076"}.icon-chevron-up:before{content:"\f077"}.icon-chevron-down:before{content:"\f078"}.icon-retweet:before{content:"\f079"}.icon-shopping-cart:before{content:"\f07a"}.icon-folder-close:before{content:"\f07b"}.icon-folder-open:before{content:"\f07c"}.icon-resize-vertical:before{content:"\f07d"}.icon-resize-horizontal:before{content:"\f07e"}.icon-bar-chart:before{content:"\f080"}.icon-twitter-sign:before{content:"\f081"}.icon-facebook-sign:before{content:"\f082"}.icon-camera-retro:before{content:"\f083"}.icon-key:before{content:"\f084"}.icon-cogs:before{content:"\f085"}.icon-comments:before{content:"\f086"}.icon-thumbs-up-alt:before{content:"\f087"}.icon-thumbs-down-alt:before{content:"\f088"}.icon-star-half:before{content:"\f089"}.icon-heart-empty:before{content:"\f08a"}.icon-signout:before{content:"\f08b"}.icon-linkedin-sign:before{content:"\f08c"}.icon-pushpin:before{content:"\f08d"}.icon-external-link:before{content:"\f08e"}.icon-signin:before{content:"\f090"}.icon-trophy:before{content:"\f091"}.icon-github-sign:before{content:"\f092"}.icon-upload-alt:before{content:"\f093"}.icon-lemon:before{content:"\f094"}.icon-phone:before{content:"\f095"}.icon-unchecked:before,.icon-check-empty:before{content:"\f096"}.icon-bookmark-empty:before{content:"\f097"}.icon-phone-sign:before{content:"\f098"}.icon-twitter:before{content:"\f099"}.icon-facebook:before{content:"\f09a"}.icon-github:before{content:"\f09b"}.icon-unlock:before{content:"\f09c"}.icon-credit-card:before{content:"\f09d"}.icon-rss:before{content:"\f09e"}.icon-hdd:before{content:"\f0a0"}.icon-bullhorn:before{content:"\f0a1"}.icon-bell:before{content:"\f0a2"}.icon-certificate:before{content:"\f0a3"}.icon-hand-right:before{content:"\f0a4"}.icon-hand-left:before{content:"\f0a5"}.icon-hand-up:before{content:"\f0a6"}.icon-hand-down:before{content:"\f0a7"}.icon-circle-arrow-left:before{content:"\f0a8"}.icon-circle-arrow-right:before{content:"\f0a9"}.icon-circle-arrow-up:before{content:"\f0aa"}.icon-circle-arrow-down:before{content:"\f0ab"}.icon-globe:before{content:"\f0ac"}.icon-wrench:before{content:"\f0ad"}.icon-tasks:before{content:"\f0ae"}.icon-filter:before{content:"\f0b0"}.icon-briefcase:before{content:"\f0b1"}.icon-fullscreen:before{content:"\f0b2"}.icon-group:before{content:"\f0c0"}.icon-link:before{content:"\f0c1"}.icon-cloud:before{content:"\f0c2"}.icon-beaker:before{content:"\f0c3"}.icon-cut:before{content:"\f0c4"}.icon-copy:before{content:"\f0c5"}.icon-paperclip:before,.icon-paper-clip:before{content:"\f0c6"}.icon-save:before{content:"\f0c7"}.icon-sign-blank:before{content:"\f0c8"}.icon-reorder:before{content:"\f0c9"}.icon-list-ul:before{content:"\f0ca"}.icon-list-ol:before{content:"\f0cb"}.icon-strikethrough:before{content:"\f0cc"}.icon-underline:before{content:"\f0cd"}.icon-table:before{content:"\f0ce"}.icon-magic:before{content:"\f0d0"}.icon-truck:before{content:"\f0d1"}.icon-pinterest:before{content:"\f0d2"}.icon-pinterest-sign:before{content:"\f0d3"}.icon-google-plus-sign:before{content:"\f0d4"}.icon-google-plus:before{content:"\f0d5"}.icon-money:before{content:"\f0d6"}.icon-caret-down:before{content:"\f0d7"}.icon-caret-up:before{content:"\f0d8"}.icon-caret-left:before{content:"\f0d9"}.icon-caret-right:before{content:"\f0da"}.icon-columns:before{content:"\f0db"}.icon-sort:before{content:"\f0dc"}.icon-sort-down:before{content:"\f0dd"}.icon-sort-up:before{content:"\f0de"}.icon-envelope:before{content:"\f0e0"}.icon-linkedin:before{content:"\f0e1"}.icon-rotate-left:before,.icon-undo:before{content:"\f0e2"}.icon-legal:before{content:"\f0e3"}.icon-dashboard:before{content:"\f0e4"}.icon-comment-alt:before{content:"\f0e5"}.icon-comments-alt:before{content:"\f0e6"}.icon-bolt:before{content:"\f0e7"}.icon-sitemap:before{content:"\f0e8"}.icon-umbrella:before{content:"\f0e9"}.icon-paste:before{content:"\f0ea"}.icon-lightbulb:before{content:"\f0eb"}.icon-exchange:before{content:"\f0ec"}.icon-cloud-download:before{content:"\f0ed"}.icon-cloud-upload:before{content:"\f0ee"}.icon-user-md:before{content:"\f0f0"}.icon-stethoscope:before{content:"\f0f1"}.icon-suitcase:before{content:"\f0f2"}.icon-bell-alt:before{content:"\f0f3"}.icon-coffee:before{content:"\f0f4"}.icon-food:before{content:"\f0f5"}.icon-file-text-alt:before{content:"\f0f6"}.icon-building:before{content:"\f0f7"}.icon-hospital:before{content:"\f0f8"}.icon-ambulance:before{content:"\f0f9"}.icon-medkit:before{content:"\f0fa"}.icon-fighter-jet:before{content:"\f0fb"}.icon-beer:before{content:"\f0fc"}.icon-h-sign:before{content:"\f0fd"}.icon-plus-sign-alt:before{content:"\f0fe"}.icon-double-angle-left:before{content:"\f100"}.icon-double-angle-right:before{content:"\f101"}.icon-double-angle-up:before{content:"\f102"}.icon-double-angle-down:before{content:"\f103"}.icon-angle-left:before{content:"\f104"}.icon-angle-right:before{content:"\f105"}.icon-angle-up:before{content:"\f106"}.icon-angle-down:before{content:"\f107"}.icon-desktop:before{content:"\f108"}.icon-laptop:before{content:"\f109"}.icon-tablet:before{content:"\f10a"}.icon-mobile-phone:before{content:"\f10b"}.icon-circle-blank:before{content:"\f10c"}.icon-quote-left:before{content:"\f10d"}.icon-quote-right:before{content:"\f10e"}.icon-spinner:before{content:"\f110"}.icon-circle:before{content:"\f111"}.icon-mail-reply:before,.icon-reply:before{content:"\f112"}.icon-github-alt:before{content:"\f113"}.icon-folder-close-alt:before{content:"\f114"}.icon-folder-open-alt:before{content:"\f115"}.icon-expand-alt:before{content:"\f116"}.icon-collapse-alt:before{content:"\f117"}.icon-smile:before{content:"\f118"}.icon-frown:before{content:"\f119"}.icon-meh:before{content:"\f11a"}.icon-gamepad:before{content:"\f11b"}.icon-keyboard:before{content:"\f11c"}.icon-flag-alt:before{content:"\f11d"}.icon-flag-checkered:before{content:"\f11e"}.icon-terminal:before{content:"\f120"}.icon-code:before{content:"\f121"}.icon-reply-all:before{content:"\f122"}.icon-mail-reply-all:before{content:"\f122"}.icon-star-half-full:before,.icon-star-half-empty:before{content:"\f123"}.icon-location-arrow:before{content:"\f124"}.icon-crop:before{content:"\f125"}.icon-code-fork:before{content:"\f126"}.icon-unlink:before{content:"\f127"}.icon-question:before{content:"\f128"}.icon-info:before{content:"\f129"}.icon-exclamation:before{content:"\f12a"}.icon-superscript:before{content:"\f12b"}.icon-subscript:before{content:"\f12c"}.icon-eraser:before{content:"\f12d"}.icon-puzzle-piece:before{content:"\f12e"}.icon-microphone:before{content:"\f130"}.icon-microphone-off:before{content:"\f131"}.icon-shield:before{content:"\f132"}.icon-calendar-empty:before{content:"\f133"}.icon-fire-extinguisher:before{content:"\f134"}.icon-rocket:before{content:"\f135"}.icon-maxcdn:before{content:"\f136"}.icon-chevron-sign-left:before{content:"\f137"}.icon-chevron-sign-right:before{content:"\f138"}.icon-chevron-sign-up:before{content:"\f139"}.icon-chevron-sign-down:before{content:"\f13a"}.icon-html5:before{content:"\f13b"}.icon-css3:before{content:"\f13c"}.icon-anchor:before{content:"\f13d"}.icon-unlock-alt:before{content:"\f13e"}.icon-bullseye:before{content:"\f140"}.icon-ellipsis-horizontal:before{content:"\f141"}.icon-ellipsis-vertical:before{content:"\f142"}.icon-rss-sign:before{content:"\f143"}.icon-play-sign:before{content:"\f144"}.icon-ticket:before{content:"\f145"}.icon-minus-sign-alt:before{content:"\f146"}.icon-check-minus:before{content:"\f147"}.icon-level-up:before{content:"\f148"}.icon-level-down:before{content:"\f149"}.icon-check-sign:before{content:"\f14a"}.icon-edit-sign:before{content:"\f14b"}.icon-external-link-sign:before{content:"\f14c"}.icon-share-sign:before{content:"\f14d"}.icon-compass:before{content:"\f14e"}.icon-collapse:before{content:"\f150"}.icon-collapse-top:before{content:"\f151"}.icon-expand:before{content:"\f152"}.icon-euro:before,.icon-eur:before{content:"\f153"}.icon-gbp:before{content:"\f154"}.icon-dollar:before,.icon-usd:before{content:"\f155"}.icon-rupee:before,.icon-inr:before{content:"\f156"}.icon-yen:before,.icon-jpy:before{content:"\f157"}.icon-renminbi:before,.icon-cny:before{content:"\f158"}.icon-won:before,.icon-krw:before{content:"\f159"}.icon-bitcoin:before,.icon-btc:before{content:"\f15a"}.icon-file:before{content:"\f15b"}.icon-file-text:before{content:"\f15c"}.icon-sort-by-alphabet:before{content:"\f15d"}.icon-sort-by-alphabet-alt:before{content:"\f15e"}.icon-sort-by-attributes:before{content:"\f160"}.icon-sort-by-attributes-alt:before{content:"\f161"}.icon-sort-by-order:before{content:"\f162"}.icon-sort-by-order-alt:before{content:"\f163"}.icon-thumbs-up:before{content:"\f164"}.icon-thumbs-down:before{content:"\f165"}.icon-youtube-sign:before{content:"\f166"}.icon-youtube:before{content:"\f167"}.icon-xing:before{content:"\f168"}.icon-xing-sign:before{content:"\f169"}.icon-youtube-play:before{content:"\f16a"}.icon-dropbox:before{content:"\f16b"}.icon-stackexchange:before{content:"\f16c"}.icon-instagram:before{content:"\f16d"}.icon-flickr:before{content:"\f16e"}.icon-adn:before{content:"\f170"}.icon-bitbucket:before{content:"\f171"}.icon-bitbucket-sign:before{content:"\f172"}.icon-tumblr:before{content:"\f173"}.icon-tumblr-sign:before{content:"\f174"}.icon-long-arrow-down:before{content:"\f175"}.icon-long-arrow-up:before{content:"\f176"}.icon-long-arrow-left:before{content:"\f177"}.icon-long-arrow-right:before{content:"\f178"}.icon-apple:before{content:"\f179"}.icon-windows:before{content:"\f17a"}.icon-android:before{content:"\f17b"}.icon-linux:before{content:"\f17c"}.icon-dribble:before{content:"\f17d"}.icon-skype:before{content:"\f17e"}.icon-foursquare:before{content:"\f180"}.icon-trello:before{content:"\f181"}.icon-female:before{content:"\f182"}.icon-male:before{content:"\f183"}.icon-gittip:before{content:"\f184"}.icon-sun:before{content:"\f185"}.icon-moon:before{content:"\f186"}.icon-archive:before{content:"\f187"}.icon-bug:before{content:"\f188"}.icon-vk:before{content:"\f189"}.icon-weibo:before{content:"\f18a"}.icon-renren:before{content:"\f18b"}

/*==================================================================================================
    ANIMATIONS
==================================================================================================*/


/*--------------------------------------------------------------------------------------------------
    ROTATE LEFT
--------------------------------------------------------------------------------------------------*/

@keyframes rotate_left {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(-360deg);
    }
}

@-webkit-keyframes rotate_left {
    from {
        -webkit-transform: rotate(0deg);
    }

    to {
        -webkit-transform: rotate(-360deg);
    }
}

@-moz-keyframes rotate_left {
    from {
        -moz-transform: rotate(0deg);
    }

    to {
        -moz-transform: rotate(-360deg);
    }
}

@-o-keyframes rotate_left {
    from {
        -o-transform: rotate(0deg);
    }

    to {
        -o-transform: rotate(-360deg);
    }
}


/*--------------------------------------------------------------------------------------------------
    ROTATE RIGHT
--------------------------------------------------------------------------------------------------*/

@keyframes rotate_right {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}

@-webkit-keyframes rotate_right {
    from {
        -webkit-transform: rotate(0deg);
    }

    to {
        -webkit-transform: rotate(360deg);
    }
}

@-moz-keyframes rotate_right {
    from {
        -moz-transform: rotate(0deg);
    }

    to {
        -moz-transform: rotate(360deg);
    }
}

@-o-keyframes rotate_right {
    from {
        -o-transform: rotate(0deg);
    }

    to {
        -o-transform: rotate(360deg);
    }
}


/*--------------------------------------------------------------------------------------------------
    SHAKE VERTICALLY
--------------------------------------------------------------------------------------------------*/

@keyframes shake_vertically {
    0% {
        transform: translate(0, 0);
    }

    25% {
        transform: translate(0, -5px);
    }

    75% {
        transform: translate(0, 5px);
    }

    100% {
        transform: translate(0, 0);
    }
}

@-webkit-keyframes shake_vertically {
    0% {
        -webkit-transform: translate(0, 0);
    }

    25% {
        -webkit-transform: translate(0, -5px);
    }

    75% {
        -webkit-transform: translate(0, 5px);
    }

    100% {
        -webkit-transform: translate(0, 0);
    }
}

@-moz-keyframes shake_vertically {
    0% {
        -moz-transform: translate(0, 0);
    }

    25% {
        -moz-transform: translate(0, -5px);
    }

    75% {
        -moz-transform: translate(0, 5px);
    }

    100% {
        -moz-transform: translate(0, 0);
    }
}

@-o-keyframes shake_vertically {
    0% {
        -o-transform: translate(0, 0);
    }

    25% {
        -o-transform: translate(0, -5px);
    }

    75% {
        -o-transform: translate(0, 5px);
    }

    100% {
        -o-transform: translate(0, 0);
    }
}


/*--------------------------------------------------------------------------------------------------
    SHAKE HORIZONTALLY
--------------------------------------------------------------------------------------------------*/

@keyframes shake_horizontally {
    0% {
        transform: translate(0, 0);
    }

    25% {
        transform: translate(-5px, 0);
    }

    75% {
        transform: translate(5px, 0);
    }

    100% {
        transform: translate(0, 0);
    }
}

@-webkit-keyframes shake_horizontally {
    0% {
        -webkit-transform: translate(0, 0);
    }

    25% {
        -webkit-transform: translate(-5px, 0);
    }

    75% {
        -webkit-transform: translate(5px, 0);
    }

    100% {
        -webkit-transform: translate(0, 0);
    }
}

@-moz-keyframes shake_horizontally {
    0% {
        -moz-transform: translate(0, 0);
    }

    25% {
        -moz-transform: translate(-5px, 0);
    }

    75% {
        -moz-transform: translate(5px, 0);
    }

    100% {
        -moz-transform: translate(0, 0);
    }
}

@-o-keyframes shake_horizontally {
    0% {
        -o-transform: translate(0, 0);
    }

    25% {
        -o-transform: translate(-5px, 0);
    }

    75% {
        -o-transform: translate(5px, 0);
    }

    100% {
        -o-transform: translate(0, 0);
    }
}


/*--------------------------------------------------------------------------------------------------
    PULSATE
--------------------------------------------------------------------------------------------------*/

@keyframes pulsate {
    0% {
        transform: scale(1);
    }

    25% {
        transform: scale(1.05);
    }

    75% {
        transform: scale(0.95);
    }

    100% {
        transform: scale(1);
    }
}

@-webkit-keyframes pulsate {
    0% {
        -webkit-transform: scale(1);
    }

    25% {
        -webkit-transform: scale(1.05);
    }

    75% {
        -webkit-transform: scale(0.95);
    }

    100% {
        -webkit-transform: scale(1);
    }
}

@-moz-keyframes pulsate {
    0% {
        -moz-transform: scale(1);
    }

    25% {
        -moz-transform: scale(1.05);
    }

    75% {
        -moz-transform: scale(0.95);
    }

    100% {
        -moz-transform: scale(1);
    }
}

@-o-keyframes pulsate {
    0% {
        -o-transform: scale(1);
    }

    25% {
        -o-transform: scale(1.05);
    }

    75% {
        -o-transform: scale(0.95);
    }

    100% {
        -o-transform: scale(1);
    }
}/*-----------------------------------------------------------------------------

	-	Revolution Slider 1.5.3 -

		Screen Stylesheet

version:   	2.1
date:      	09/18/11
last update: 06.12.2012
author:		themepunch
email:     	info@themepunch.com
website:   	http://www.themepunch.com
-----------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------

	-	Revolution Slider 2.0 Captions -

		Screen Stylesheet

version:   	1.4.5
date:      	09/18/11
last update: 06.12.2012
author:		themepunch
email:     	info@themepunch.com
website:   	http://www.themepunch.com
-----------------------------------------------------------------------------*/



/*************************
	-	CAPTIONS	-
**************************/

.tp-hide-revslider,.tp-caption.tp-hidden-caption	{	visibility:hidden !important; display:none !important;}

.tp-caption { z-index:1;}
.tp-caption.big_white{
			position: absolute;
			color: #fff;
			text-shadow: none;
			font-weight: 800;
			font-size: 20px;
			line-height: 20px;
			font-family: 'Open Sans', sans;
			padding: 3px 4px;
			padding-top: 1px;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			background-color:#000;
			letter-spacing: 0px;
		}

.tp-caption.big_orange{
			position: absolute;
			color: #fff;
			text-shadow: none;
			font-weight: 700;
			font-size: 36px;
			line-height: 36px;
			font-family: Arial;
			padding: 0px 4px;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			background-color:#fb7354;
			letter-spacing: -1.5px;
		}

.tp-caption.big_black{
			position: absolute;
			color: #000;
			text-shadow: none;
			font-weight: 800;
			font-size: 36px;
			line-height: 36px;
			font-family: 'Open Sans', sans;
			padding: 0px 4px;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			background-color:#fff;
			letter-spacing: -1.5px;
		}

.tp-caption.medium_grey{
			position: absolute;
			color: #fff;
			text-shadow: none;
			font-weight: 700;
			font-size: 20px;
			line-height: 20px;
			font-family: Arial;
			padding: 2px 4px;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			background-color:#888;
			white-space:nowrap;
			text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
		}

.tp-caption.small_text{
			position: absolute;
			color: #fff;
			text-shadow: none;
			font-weight: 700;
			font-size: 14px;
			line-height: 20px;
			font-family: Arial;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			white-space:nowrap;
			text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
		}

.tp-caption.medium_text{
			position: absolute;
			color: #fff;
			text-shadow: none;
			font-weight: 300;
			font-size: 20px;
			line-height: 20px;
			font-family: 'Open Sans', sans;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			white-space:nowrap;
			text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
		}

.tp-caption.large_text{
			position: absolute;
			color: #fff;
			text-shadow: none;
			font-weight: 800;
			font-size: 36px;
			line-height: 36px;
			font-family: 'Open Sans', sans;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			white-space:nowrap;
			text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
		}
.tp-caption.large_black_text{
			position: absolute;
			color: #000;
			text-shadow: none;
			font-weight: 300;
			font-size: 42px;
			line-height: 42px;
			font-family: 'Open Sans', sans;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			white-space:nowrap;
		}

.tp-caption.very_large_text{
			position: absolute;
			color: #fff;
			text-shadow: none;
			font-weight: 800;
			font-size: 60px;
			line-height: 60px;
			font-family: 'Open Sans', sans;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			white-space:nowrap;
			text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
			letter-spacing: 0px;
		}
.tp-caption.very_large_black_text{
			position: absolute;
			color: #000;
			text-shadow: none;
			font-weight: 800;
			font-size: 72px;
			line-height: 72px;
			font-family: 'Open Sans', sans;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			white-space:nowrap;
		}
.tp-caption.bold_red_text{
			position: absolute;
			color: #d31e00;
			text-shadow: none;
			font-weight: 800;
			font-size: 20px;
			line-height: 20px;
			font-family: 'Open Sans', sans;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			white-space:nowrap;
		}
.tp-caption.bold_brown_text{
			position: absolute;
			color: #a04606;
			text-shadow: none;
			font-weight: 800;
			font-size: 20px;
			line-height: 20px;
			font-family: 'Open Sans', sans;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			white-space:nowrap;
		}
    .tp-caption.bold_green_text{
			position: absolute;
			color: #5b9830;
			text-shadow: none;
			font-weight: 800;
			font-size: 20px;
			line-height: 20px;
			font-family: 'Open Sans', sans;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			white-space:nowrap;
		}

.tp-caption.very_big_white{
			position: absolute;
			color: #fff;
			text-shadow: none;
			font-weight: 800;
			font-size: 36px;
			line-height: 36px;
			font-family: 'Open Sans', sans;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			white-space:nowrap;
			padding: 3px 4px;
			padding-top: 1px;
			background-color:#7e8e96;
					}

.tp-caption.very_big_black{
			position: absolute;
			color: #000;
			text-shadow: none;
			font-weight: 700;
			font-size: 60px;
			line-height: 60px;
			font-family: Arial;
			margin: 0px;
			border-width: 0px;
			border-style: none;
			white-space:nowrap;
			padding: 0px 4px;
			padding-top: 1px;
			background-color:#fff;
					}

.tp-caption.boxshadow{
		-moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
		-webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
		box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
	}

.tp-caption.black{
		color: #000;
		text-shadow: none;
  font-weight: 300;
			font-size: 19px;
			line-height: 19px;
			font-family: 'Open Sans', sans;
	}

.tp-caption.noshadow {
		text-shadow: none;
	}

.tp-caption a {
	color: #ff7302; text-shadow: none;	-webkit-transition: all 0.2s ease-out; -moz-transition: all 0.2s ease-out; -o-transition: all 0.2s ease-out; -ms-transition: all 0.2s ease-out;
}

.tp-caption a:hover {
	color: #ffa902;
}


.tp_inner_padding	{	box-sizing:border-box;
						-webkit-box-sizing:border-box;
						-moz-box-sizing:border-box;
						max-height:none !important;	}

/******************************
	-	BUTTONS	-
*******************************/

.button				{	padding:6px 13px 5px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; height:30px;
						cursor:pointer;
						color:#fff !important; text-shadow:0px 1px 1px rgba(0, 0, 0, 0.6) !important; font-size:15px; line-height:45px !important;
						background:url(../lib/revolution/images/gradient/g30.png) repeat-x top; font-family: arial, sans-serif; font-weight: bold; letter-spacing: -1px;
					}

.button.big			{	color:#fff; text-shadow:0px 1px 1px rgba(0, 0, 0, 0.6); font-weight:bold; padding:9px 20px; font-size:19px;  line-height:57px !important; background:url(../lib/revolution/images/gradient/g40.png) repeat-x top;}


.purchase:hover,
.button:hover,
.button.big:hover		{	background-position:bottom, 15px 11px;}



	@media only screen and (min-width: 768px) and (max-width: 959px) {

	 }



	@media only screen and (min-width: 480px) and (max-width: 767px) {
		.button	{	padding:4px 8px 3px; line-height:25px !important; font-size:11px !important;font-weight:normal;	}
		a.button { -webkit-transition: none; -moz-transition: none; -o-transition: none; -ms-transition: none;	 }


	}

    @media only screen and (min-width: 0px) and (max-width: 479px) {
		.button	{	padding:2px 5px 2px; line-height:20px !important; font-size:10px !important;}
		a.button { -webkit-transition: none; -moz-transition: none; -o-transition: none; -ms-transition: none;	 }
	}





/*	BUTTON COLORS	*/



.button.green, .button:hover.green,
.purchase.green, .purchase:hover.green			{ background-color:#21a117; -webkit-box-shadow:  0px 3px 0px 0px #104d0b;        -moz-box-shadow:   0px 3px 0px 0px #104d0b;        box-shadow:   0px 3px 0px 0px #104d0b;  }


.button.blue, .button:hover.blue,
.purchase.blue, .purchase:hover.blue			{ background-color:#1d78cb; -webkit-box-shadow:  0px 3px 0px 0px #0f3e68;        -moz-box-shadow:   0px 3px 0px 0px #0f3e68;        box-shadow:   0px 3px 0px 0px #0f3e68;}


.button.red, .button:hover.red,
.purchase.red, .purchase:hover.red				{ background-color:#cb1d1d; -webkit-box-shadow:  0px 3px 0px 0px #7c1212;        -moz-box-shadow:   0px 3px 0px 0px #7c1212;        box-shadow:   0px 3px 0px 0px #7c1212;}

.button.orange, .button:hover.orange,
.purchase.orange, .purchase:hover.orange		{ background-color:#ff7700; -webkit-box-shadow:  0px 3px 0px 0px #a34c00;        -moz-box-shadow:   0px 3px 0px 0px #a34c00;        box-shadow:   0px 3px 0px 0px #a34c00;}

.button.darkgrey,.button.grey,
.button:hover.darkgrey,.button:hover.grey,
.purchase.darkgrey, .purchase:hover.darkgrey	{ background-color:#555; -webkit-box-shadow:  0px 3px 0px 0px #222;        -moz-box-shadow:   0px 3px 0px 0px #222;        box-shadow:   0px 3px 0px 0px #222;}

.button.lightgrey, .button:hover.lightgrey,
.purchase.lightgrey, .purchase:hover.lightgrey	{ background-color:#888; -webkit-box-shadow:  0px 3px 0px 0px #555;        -moz-box-shadow:   0px 3px 0px 0px #555;        box-shadow:   0px 3px 0px 0px #555;}



/****************************************************************

	-	SET THE ANIMATION EVEN MORE SMOOTHER ON ANDROID   -

******************************************************************/

.tp-simpleresponsive .slotholder *,
.tp-simpleresponsive img			{ -webkit-transform: translateZ(0);
										  -webkit-backface-visibility: hidden;
										  -webkit-perspective: 1000;
									}


/************************************************
	  - SOME CAPTION MODIFICATION AT START  -
*************************************************/
.tp-simpleresponsive .caption,
.tp-simpleresponsive .tp-caption {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";	-moz-opacity: 0;	-khtml-opacity: 0;	opacity: 0; position:absolute; visibility: hidden;

}

.tp-simpleresponsive img	{	max-width:none;}



/******************************
	-	IE8 HACKS	-
*******************************/
.noFilterClass {
	filter:none !important;
}


/******************************
	-	SHADOWS		-
******************************/
.tp-bannershadow  {
		position:absolute;

		margin-left:auto;
		margin-right:auto;
		-moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
	}

.tp-bannershadow.tp-shadow1 {	background:url(../lib/revolution/assets/shadow1.png) no-repeat; background-size:100%; width:890px; height:30px; bottom:-30px;}
.tp-bannershadow.tp-shadow2 {	background:url(../lib/revolution/assets/shadow2.png) no-repeat; background-size:100%; width:890px; height:60px;bottom:-60px;}
.tp-bannershadow.tp-shadow3 {	background:url(../lib/revolution/assets/shadow3.png) no-repeat; background-size:100%; width:890px; height:60px;bottom:-60px;}


/********************************
	-	FULLSCREEN VIDEO	-
*********************************/
.caption.fullscreenvideo {	left:0px; top:0px; position:absolute;width:100%;height:100%;}
.caption.fullscreenvideo iframe	{ width:100% !important; height:100% !important;}

.tp-caption.fullscreenvideo {	left:0px; top:0px; position:absolute;width:100%;height:100%;}
.tp-caption.fullscreenvideo iframe	{ width:100% !important; height:100% !important;}

/************************
	-	NAVIGATION	-
*************************/

/** BULLETS **/

.tpclear		{	clear:both;}


.tp-bullets								{	z-index:1000; position:absolute;
												-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
												-moz-opacity: 1;
												-khtml-opacity: 1;
												opacity: 1;
												-webkit-transition: opacity 0.2s ease-out; -moz-transition: opacity 0.2s ease-out; -o-transition: opacity 0.2s ease-out; -ms-transition: opacity 0.2s ease-out;
											}
.tp-bullets.hidebullets					{
												-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
												-moz-opacity: 0;
												-khtml-opacity: 0;
												opacity: 0;
											}


.tp-bullets.simplebullets.navbar						{ 	border:1px solid #666; border-bottom:1px solid #444; background:url(../lib/revolution/assets/boxed_bgtile.png); height:40px; padding:0px 10px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px ;}

.tp-bullets.simplebullets.navbar-old					{ 	 background:url(../lib/revolution/assets/navigdots_bgtile.png); height:35px; padding:0px 10px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px ;}


.tp-bullets.simplebullets.round .bullet					{	cursor:pointer; position:relative;	background:url(../lib/revolution/assets/bullet.png) no-Repeat top left;	width:20px;	height:20px;  margin-right:0px; float:left; margin-top:-10px; margin-left:3px;}
.tp-bullets.simplebullets.round .bullet.last			{	margin-right:3px;}

.tp-bullets.simplebullets.round-old .bullet				{	cursor:pointer; position:relative;	background:url(../lib/revolution/assets/bullets.png) no-Repeat bottom left;	width:23px;	height:23px;  margin-right:0px; float:left; margin-top:-12px;}
.tp-bullets.simplebullets.round-old .bullet.last		{	margin-right:0px;}


/**	SQUARE BULLETS **/
.tp-bullets.simplebullets.square .bullet				{	cursor:pointer; position:relative;	background:url(../lib/revolution/assets/bullets2.png) no-Repeat bottom left;	width:19px;	height:19px;  margin-right:0px; float:left; margin-top:-10px;}
.tp-bullets.simplebullets.square .bullet.last			{	margin-right:0px;}


/**	SQUARE BULLETS **/
.tp-bullets.simplebullets.square-old .bullet			{	cursor:pointer; position:relative;	background:url(../lib/revolution/assets/bullets2.png) no-Repeat bottom left;	width:19px;	height:19px;  margin-right:0px; float:left; margin-top:-10px;}
.tp-bullets.simplebullets.square-old .bullet.last		{	margin-right:0px;}


/** navbar NAVIGATION VERSION **/
.tp-bullets.simplebullets.navbar .bullet			{	cursor:pointer; position:relative;	background:url(../lib/revolution/assets/bullet_boxed.png) no-Repeat top left;	width:18px;	height:19px;   margin-right:5px; float:left; margin-top:10px;}

.tp-bullets.simplebullets.navbar .bullet.first		{	margin-left:0px !important;}
.tp-bullets.simplebullets.navbar .bullet.last		{	margin-right:0px !important;}



/** navbar NAVIGATION VERSION **/
.tp-bullets.simplebullets.navbar-old .bullet			{	cursor:pointer; position:relative;	background:url(../lib/revolution/assets/navigdots.png) no-Repeat bottom left;	width:15px;	height:15px;  margin-left:5px !important; margin-right:5px !important;float:left; margin-top:10px;}
.tp-bullets.simplebullets.navbar-old .bullet.first		{	margin-left:0px !important;}
.tp-bullets.simplebullets.navbar-old .bullet.last		{	margin-right:0px !important;}


.tp-bullets.simplebullets .bullet:hover,
.tp-bullets.simplebullets .bullet.selected				{	background-position:top left; }

.tp-bullets.simplebullets.round .bullet:hover,
.tp-bullets.simplebullets.round .bullet.selected,
.tp-bullets.simplebullets.navbar .bullet:hover,
.tp-bullets.simplebullets.navbar .bullet.selected		{	background-position:bottom left; }



/*************************************
	-	TP ARROWS 	-
**************************************/
.tparrows												{	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
															-moz-opacity: 1;
															-khtml-opacity: 1;
															opacity: 1;
															-webkit-transition: opacity 0.2s ease-out; -moz-transition: opacity 0.2s ease-out; -o-transition: opacity 0.2s ease-out; -ms-transition: opacity 0.2s ease-out;

														}
.tparrows.hidearrows									{
															-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
															-moz-opacity: 0;
															-khtml-opacity: 0;
															opacity: 0;
														}
.tp-leftarrow											{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/large_left.png) no-Repeat top left;	width:40px;	height:40px;   }
.tp-rightarrow											{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/large_right.png) no-Repeat top left;	width:40px;	height:40px;   }


.tp-leftarrow.round										{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/small_left.png) no-Repeat top left;	width:19px;	height:14px;  margin-right:0px; float:left; margin-top:-7px;	}
.tp-rightarrow.round									{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/small_right.png) no-Repeat top left;	width:19px;	height:14px;  margin-right:0px; float:left;	margin-top:-7px;}


.tp-leftarrow.round-old									{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/arrow_left.png) no-Repeat top left;	width:26px;	height:26px;  margin-right:0px; float:left; margin-top:-13px;	}
.tp-rightarrow.round-old								{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/arrow_right.png) no-Repeat top left;	width:26px;	height:26px;  margin-right:0px; float:left;	margin-top:-13px;}


.tp-leftarrow.navbar									{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/small_left_boxed.png) no-Repeat top left;	width:20px;	height:15px;   float:left;	margin-right:6px; margin-top:12px;}
.tp-rightarrow.navbar									{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/small_right_boxed.png) no-Repeat top left;	width:20px;	height:15px;   float:left;	margin-left:6px; margin-top:12px;}


.tp-leftarrow.navbar-old								{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/arrowleft.png) no-Repeat top left;		width:9px;	height:16px;   float:left;	margin-right:6px; margin-top:10px;}
.tp-rightarrow.navbar-old								{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/arrowright.png) no-Repeat top left;	width:9px;	height:16px;   float:left;	margin-left:6px; margin-top:10px;}

.tp-leftarrow.navbar-old.thumbswitharrow				{	margin-right:10px; }
.tp-rightarrow.navbar-old.thumbswitharrow				{	margin-left:0px; }

.tp-leftarrow.square									{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/arrow_left2.png) no-Repeat top left;	width:12px;	height:17px;   float:left;	margin-right:0px; margin-top:-9px;}
.tp-rightarrow.square									{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/arrow_right2.png) no-Repeat top left;	width:12px;	height:17px;   float:left;	margin-left:0px; margin-top:-9px;}


.tp-leftarrow.square-old								{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/arrow_left2.png) no-Repeat top left;	width:12px;	height:17px;   float:left;	margin-right:0px; margin-top:-9px;}
.tp-rightarrow.square-old								{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/arrow_right2.png) no-Repeat top left;	width:12px;	height:17px;   float:left;	margin-left:0px; margin-top:-9px;}


.tp-leftarrow.default									{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/large_left.png) no-Repeat 0 0;	width:40px;	height:40px;

														}
.tp-rightarrow.default									{	z-index:100;cursor:pointer; position:relative;	background:url(../lib/revolution/assets/large_right.png) no-Repeat 0 0;	width:40px;	height:40px;

														}




.tp-leftarrow:hover,
.tp-rightarrow:hover 									{	background-position:bottom left; }






/****************************************************************************************************
	-	TP THUMBS 	-
*****************************************************************************************************

 - tp-thumbs & tp-mask Width is the width of the basic Thumb Container (500px basic settings)

 - .bullet width & height is the dimension of a simple Thumbnail (basic 100px x 50px)

 *****************************************************************************************************/


.tp-bullets.tp-thumbs						{	z-index:1000; position:absolute; padding:3px;background-color:#fff;
												width:500px;height:50px; 			/* THE DIMENSIONS OF THE THUMB CONTAINER */
												margin-top:-50px;
											}


.fullwidthbanner-container .tp-thumbs		{  padding:3px;}

.tp-bullets.tp-thumbs .tp-mask				{	width:500px; height:50px;  			/* THE DIMENSIONS OF THE THUMB CONTAINER */
												overflow:hidden; position:relative;}


.tp-bullets.tp-thumbs .tp-mask .tp-thumbcontainer	{	width:5000px; position:absolute;}

.tp-bullets.tp-thumbs .bullet				{   width:100px; height:50px; 			/* THE DIMENSION OF A SINGLE THUMB */
												cursor:pointer; overflow:hidden;background:none;margin:0;float:left;
												-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
												/*filter: alpha(opacity=50);	*/
												-moz-opacity: 0.5;
												-khtml-opacity: 0.5;
												opacity: 0.5;

												-webkit-transition: all 0.2s ease-out; -moz-transition: all 0.2s ease-out; -o-transition: all 0.2s ease-out; -ms-transition: all 0.2s ease-out;
											}


.tp-bullets.tp-thumbs .bullet:hover,
.tp-bullets.tp-thumbs .bullet.selected		{ 	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";

												-moz-opacity: 1;
												-khtml-opacity: 1;
												opacity: 1;
											}
.tp-thumbs img								{	width:100%; }


/************************************
		-	TP BANNER TIMER		-
*************************************/
.tp-bannertimer								{	width:100%; height:10px; background:url(../lib/revolution/assets/timer.png);position:absolute; z-index:200;}
.tp-bannertimer.tp-bottom					{	bottom:0px !important;height:5px;}




/***************************************
	-	RESPONSIVE SETTINGS 	-
****************************************/


	@media only screen and (min-width: 768px) and (max-width: 959px) {

	 }



	@media only screen and (min-width: 480px) and (max-width: 767px) {
			.responsive .tp-bullets.tp-thumbs				{	width:300px !important; height:30px !important;}
			.responsive .tp-bullets.tp-thumbs .tp-mask		{	width:300px !important; height:30px !important;}
			.responsive .tp-bullets.tp-thumbs .bullet		{	width:60px !important;height:30px !important;}

	}

    @media only screen and (min-width: 0px) and (max-width: 479px) {
				.responsive .tp-bullets	{	display:none}
				.responsive .tparrows	{	display:none;}
	}





/*********************************************

	-	BASIC SETTINGS FOR THE BANNER	-

***********************************************/

 .tp-simpleresponsive img {
		-moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
}



.tp-simpleresponsive a{	text-decoration:none;}

.tp-simpleresponsive ul {
	list-style:none;
	padding:0;
	margin:0;
}

.tp-simpleresponsive >ul >li{
	list-stye:none;
	position:absolute;
	visibility:hidden;
}
/*  CAPTION SLIDELINK   **/
.caption.slidelink a div,
.tp-caption.slidelink a div {	width:10000px; height:10000px;  background:url(../lib/revolution/assets/coloredbg.png) repeat;}

.tp-loader 	{	background:url(../lib/revolution/assets/loader.gif) no-repeat 10px 10px; background-color:#fff;  margin:-22px -22px; top:50%; left:50%; z-index:10000; position:absolute;width:44px;height:44px;
				border-radius: 3px;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
			}


.tp-transparentimg {	content:"url(../lib/revolution/assets/transparent.png)"}
.tp-3d				{	-webkit-transform-style: preserve-3d;
						 -webkit-transform-origin: 50% 50%;
					}

/**
 * BxSlider v4.0 - Fully loaded, responsive content slider
 * http://bxslider.com
 *
 * Written by: Steven Wanderski, 2012
 * http://stevenwanderski.com
 * (while drinking Belgian ales and listening to jazz)
 *
 * CEO and founder of bxCreative, LTD
 * http://bxcreative.com
 */


/** RESET AND LAYOUT
===================================*/

.bx-wrapper {
	position: relative;
	margin: 0 auto 60px;
	padding: 0;
	*zoom: 1;
}

.bx-wrapper img {
	max-width: 100%;
	display: block;
}

/** THEME
===================================*/

.bx-wrapper .bx-viewport {
	-moz-box-shadow: 0 0 5px #ccc;
	-webkit-box-shadow: 0 0 5px #ccc;
	box-shadow: 0 0 5px #ccc;
	border: solid #fff 5px;
	left: -5px;
	background: #fff;
}

.bx-wrapper .bx-pager,
.bx-wrapper .bx-controls-auto {
	position: absolute;
	bottom: -30px;
	width: 100%;
}

/* LOADER */

.bx-wrapper .bx-loading {
	min-height: 50px;
	background: url(../lib/bxslider/images/bx_loader.gif) center center no-repeat #fff;
	height: 100%;
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 2000;
}

/* PAGER */

.bx-wrapper .bx-pager {
	text-align: center;
	font-size: .85em;
	font-family: Arial;
	font-weight: bold;
	color: #666;
	padding-top: 20px;
}

.bx-wrapper .bx-pager .bx-pager-item,
.bx-wrapper .bx-controls-auto .bx-controls-auto-item {
	display: inline-block;
	*zoom: 1;
	*display: inline;
}

.bx-wrapper .bx-pager.bx-default-pager a {
	background: #666;
	text-indent: -9999px;
	display: block;
	width: 10px;
	height: 10px;
	margin: 0 5px;
	outline: 0;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

.bx-wrapper .bx-pager.bx-default-pager a:hover,
.bx-wrapper .bx-pager.bx-default-pager a.active {
	background: #000;
}

/* DIRECTION CONTROLS (NEXT / PREV) */

.bx-wrapper .bx-prev {
	left: 10px;
	background: url(../lib/bxslider/images/controls.png) no-repeat 0 -32px;
}

.bx-wrapper .bx-next {
	right: 10px;
	background: url(../lib/bxslider/images/controls.png) no-repeat -43px -32px;
}

.bx-wrapper .bx-prev:hover {
	background-position: 0 0;
}

.bx-wrapper .bx-next:hover {
	background-position: -43px 0;
}

.bx-wrapper .bx-controls-direction a {
	position: absolute;
	top: 50%;
	margin-top: -16px;
	outline: 0;
	width: 32px;
	height: 32px;
	text-indent: -9999px;
	z-index: 9999;
}

.bx-wrapper .bx-controls-direction a.disabled {
	display: none;
}

/* AUTO CONTROLS (START / STOP) */

.bx-wrapper .bx-controls-auto {
	text-align: center;
}

.bx-wrapper .bx-controls-auto .bx-start {
	display: block;
	text-indent: -9999px;
	width: 10px;
	height: 11px;
	outline: 0;
	background: url(../lib/bxslider/images/controls.png) -86px -11px no-repeat;
	margin: 0 3px;
}

.bx-wrapper .bx-controls-auto .bx-start:hover,
.bx-wrapper .bx-controls-auto .bx-start.active {
	background-position: -86px 0;
}

.bx-wrapper .bx-controls-auto .bx-stop {
	display: block;
	text-indent: -9999px;
	width: 9px;
	height: 11px;
	outline: 0;
	background: url(../lib/bxslider/images/controls.png) -86px -44px no-repeat;
	margin: 0 3px;
}

.bx-wrapper .bx-controls-auto .bx-stop:hover,
.bx-wrapper .bx-controls-auto .bx-stop.active {
	background-position: -86px -33px;
}

/* PAGER WITH AUTO-CONTROLS HYBRID LAYOUT */

.bx-wrapper .bx-controls.bx-has-controls-auto.bx-has-pager .bx-pager {
	text-align: left;
	width: 80%;
}

.bx-wrapper .bx-controls.bx-has-controls-auto.bx-has-pager .bx-controls-auto {
	right: 0;
	width: 35px;
}

/* IMAGE CAPTIONS */

.bx-wrapper .bx-caption {
	position: absolute;
	bottom: 0;
	left: 0;
	background: #666\9;
	background: rgba(80, 80, 80, 0.75);
	width: 100%;
}

.bx-wrapper .bx-caption span {
	color: #fff;
	font-family: Arial;
	display: block;
	font-size: .85em;
	padding: 10px;
}/*! fancyBox v2.1.4 fancyapps.com | fancyapps.com/fancybox/#license */
.fancybox-wrap,
.fancybox-skin,
.fancybox-outer,
.fancybox-inner,
.fancybox-image,
.fancybox-wrap iframe,
.fancybox-wrap object,
.fancybox-nav,
.fancybox-nav span,
.fancybox-tmp
{
	padding: 0;
	margin: 0;
	border: 0;
	outline: none;
	vertical-align: top;
}

.fancybox-wrap {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 8020;
}

.fancybox-skin {
	position: relative;
	background: #f9f9f9;
	color: #444;
	text-shadow: none;
	-webkit-border-radius: 4px;
	   -moz-border-radius: 4px;
	        border-radius: 4px;
}

.fancybox-opened {
	z-index: 8030;
}

.fancybox-opened .fancybox-skin {
	-webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	   -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
}

.fancybox-outer, .fancybox-inner {
	position: relative;
}

.fancybox-inner {
	overflow: hidden;
}

.fancybox-type-iframe .fancybox-inner {
	-webkit-overflow-scrolling: touch;
}

.fancybox-error {
	color: #444;
	font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
	margin: 0;
	padding: 15px;
	white-space: nowrap;
}

.fancybox-image, .fancybox-iframe {
	display: block;
	width: 100%;
	height: 100%;
}

.fancybox-image {
	max-width: 100%;
	max-height: 100%;
}

#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
	background-image: url('../lib/fancybox/fancybox_sprite.png');
}

#fancybox-loading {
	position: fixed;
	top: 50%;
	left: 50%;
	margin-top: -22px;
	margin-left: -22px;
	background-position: 0 -108px;
	opacity: 0.8;
	cursor: pointer;
	z-index: 8060;
}

#fancybox-loading div {
	width: 44px;
	height: 44px;
	background: url('../lib/fancybox/fancybox_loading.gif') center center no-repeat;
}

.fancybox-close {
	position: absolute;
	top: -18px;
	right: -18px;
	width: 36px;
	height: 36px;
	cursor: pointer;
	z-index: 8040;
}

.fancybox-nav {
	position: absolute;
	top: 0;
	width: 40%;
	height: 100%;
	cursor: pointer;
	text-decoration: none;
	background: transparent url('../lib/fancybox/blank.gif'); /* helps IE */
	-webkit-tap-highlight-color: rgba(0,0,0,0);
	z-index: 8040;
}

.fancybox-prev {
	left: 0;
}

.fancybox-next {
	right: 0;
}

.fancybox-nav span {
	position: absolute;
	top: 50%;
	width: 36px;
	height: 34px;
	margin-top: -18px;
	cursor: pointer;
	z-index: 8040;
	visibility: hidden;
}

.fancybox-prev span {
	left: 10px;
	background-position: 0 -36px;
}

.fancybox-next span {
	right: 10px;
	background-position: 0 -72px;
}

.fancybox-nav:hover span {
	visibility: visible;
}

.fancybox-tmp {
	position: absolute;
	top: -99999px;
	left: -99999px;
	visibility: hidden;
	max-width: 99999px;
	max-height: 99999px;
	overflow: visible !important;
}

/* Overlay helper */

.fancybox-lock {
	overflow: hidden;
}

.fancybox-overlay {
	position: absolute;
	top: 0;
	left: 0;
	overflow: hidden;
	display: none;
	z-index: 8010;
	background: url('../lib/fancybox/fancybox_overlay.png');
}

.fancybox-overlay-fixed {
	position: fixed;
	bottom: 0;
	right: 0;
}

.fancybox-lock .fancybox-overlay {
	overflow: auto;
	overflow-y: scroll;
}

/* Title helper */

.fancybox-title {
	visibility: hidden;
	font: normal 13px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
	position: relative;
	text-shadow: none;
	z-index: 8050;
}

.fancybox-opened .fancybox-title {
	visibility: visible;
}

.fancybox-title-float-wrap {
	position: absolute;
	bottom: 0;
	right: 50%;
	margin-bottom: -35px;
	z-index: 8050;
	text-align: center;
}

.fancybox-title-float-wrap .child {
	display: inline-block;
	margin-right: -100%;
	padding: 2px 20px;
	background: transparent; /* Fallback for web browsers that doesn't support RGBa */
	background: rgba(0, 0, 0, 0.8);
	-webkit-border-radius: 15px;
	   -moz-border-radius: 15px;
	        border-radius: 15px;
	text-shadow: 0 1px 2px #222;
	color: #FFF;
	font-weight: bold;
	line-height: 24px;
	white-space: nowrap;
}

.fancybox-title-outside-wrap {
	position: relative;
	margin-top: 10px;
	color: #fff;
}

.fancybox-title-inside-wrap {
	padding-top: 10px;
}

.fancybox-title-over-wrap {
	position: absolute;
	bottom: 0;
	left: 0;
	color: #fff;
	padding: 10px;
	background: #000;
	background: rgba(0, 0, 0, .8);
}#layout {
  max-width: 100%;
}
#layout.animate {
  -webkit-transition: max-width 0.35s;
  -moz-transition: max-width 0.35s;
  -o-transition: max-width 0.35s;
  -ms-transition: max-width 0.35s;
  transition: max-width 0.35s;
}
#switcher {
  visibility: hidden;
  position: fixed;
  top: 141px;
  left: -273px;
  width: 331px;
  z-index: 10000;
  -webkit-transition: left 0.35s;
  -moz-transition: left 0.35s;
  -o-transition: left 0.35s;
  -ms-transition: left 0.35s;
  transition: left 0.35s;
}
@media only screen and (max-width: 480px) {
  #switcher {
    top: 90px;
  }
}
#switcher.open {
  left: 0;
}
#switcher h2 {
  position: relative;
  margin: 0 0 0 -5px;
  border: solid 1px #00ab7f;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  padding: 16px 59px 16px 28px;
  font-size: 18px;
  line-height: 22px;
  font-weight: bold;
  color: #fff;
  text-shadow: 0 2px rgba(2,3,3,0.1);
  background-color: #00c492;
  z-index: 1;
  -webkit-box-shadow: 1px 2px 2px rgba(2, 3, 3, 0.11), 1px 1px rgba(255, 255, 255, 0.3) inset;
  -moz-box-shadow: 1px 2px 2px rgba(2, 3, 3, 0.11), 1px 1px rgba(255, 255, 255, 0.3) inset;
  box-shadow: 1px 2px 2px rgba(2, 3, 3, 0.11), 1px 1px rgba(255, 255, 255, 0.3) inset;
  background-image: -webkit-linear-gradient(to top, #00ab7f 30%, #00dea5);
  background-image: -moz-linear-gradient(to top, #00ab7f 30%, #00dea5);
  background-image: -o-linear-gradient(to top, #00ab7f 30%, #00dea5);
  background-image: -ms-linear-gradient(to top, #00ab7f 30%, #00dea5);
  background-image: linear-gradient(to top, #00ab7f 30%, #00dea5);
  -webkit-transition: background 0.35s;
  -moz-transition: background 0.35s;
  -o-transition: background 0.35s;
  -ms-transition: background 0.35s;
  transition: background 0.35s;
}
#switcher h2 .open {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  width: 57px;
  cursor: pointer;
}
#switcher h2 .open i {
  position: relative;
  top: 6px;
  left: 10px;
  display: inline-block;
  font-size: 43px;
  line-height: 43px;
  color: #fff;
}
#switcher.loading h2 .open i {
  -webkit-animation: rotate_left 1.5s linear infinite;
  -moz-animation: rotate_left 1.5s linear infinite;
  -ms-animation: rotate_left 1.5s linear infinite;
  -o-animation: rotate_left 1.5s linear infinite;
  animation: rotate_left 1.5s linear infinite;
}
#switcher ul {
  display: none;
  margin-right: 59px;
  border: solid 1px #acacac;
  border-top: none;
  border-left: none;
  font-size: 13px;
  line-height: 15px;
  color: #42454e;
  background: #fff;
}
#switcher.open ul {
  -webkit-box-shadow: 0 0 6px rgba(0, 33, 70, 0.1), 0 7px 25px rgba(17, 38, 84, 0.4);
  -moz-box-shadow: 0 0 6px rgba(0, 33, 70, 0.1), 0 7px 25px rgba(17, 38, 84, 0.4);
  box-shadow: 0 0 6px rgba(0, 33, 70, 0.1), 0 7px 25px rgba(17, 38, 84, 0.4);
}
#switcher li {
  padding: 8px 27px 8px 25px;
}
#switcher .header {
  border-bottom: 1px solid #d8ddee;
  font-weight: bold;
  background: #f8fbff;
}
#switcher .palette {
  overflow: hidden;
  padding: 11px 21px 4px 25px;
}
#switcher .palette a {
  display: block;
  float: left;
  position: relative;
  margin: 0 6px 7px 0;
  border: 1px solid #c2c7d7;
  padding: 1px;
  width: 15px;
  height: 15px;
  cursor: pointer;
  -webkit-transition: border 0.25s;
  -moz-transition: border 0.25s;
  -o-transition: border 0.25s;
  -ms-transition: border 0.25s;
  transition: border 0.25s;
}
#switcher .palette a:hover,
#switcher .palette a.active {
  border-color: #ff7e7e;
}
#switcher .palette .pattern {
  position: relative;
  display: block;
  height: 100%;
}
#switcher .palette .shade {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 50%;
  background: rgba(255,255,255,0.2);
}
#switcher .list,
#switcher .switch {
  overflow: hidden;
  padding: 13px 20px 11px 25px;
}
#switcher .list a,
#switcher .switch a {
  display: block;
  float: left;
  border: 1px solid #d8ddee;
  padding: 0 5px;
  margin: 0 2px 2px 0;
  font-weight: bold;
  text-align: center;
  line-height: 27px;
  color: #63737f;
  min-width: 99px;
  cursor: pointer;
  -webkit-transition: border 0.35s, background 0.35s;
  -moz-transition: border 0.35s, background 0.35s;
  -o-transition: border 0.35s, background 0.35s;
  -ms-transition: border 0.35s, background 0.35s;
  transition: border 0.35s, background 0.35s;
}
#switcher .list a {
  float: none;
  margin: 0;
}
#switcher .list a:hover,
#switcher .switch a:hover,
#switcher .switch a.active {
  border-color: #00c492;
  background: #00c492;
  color: #fff;
}
#switcher .switch a.active {
  cursor: default;
}
#switcher .boxed {
  display: none;
}
