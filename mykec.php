<?php

   /* 
    *  "MYKEC.PHP"
    *  (Version 2015.05.03)
    *  
    *  Copyright © 2000-2020 Myke Carter
    * 
    *  Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
    *  documentation files (the "Software"), to deal in the Software without restriction, including without limitation
    *  the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
    *  and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
    * 
    *  The above copyright notice and this permission notice shall be included in all copies or substantial portions
    *  of the Software.
    * 
    *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
    *  TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
    *  THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
    *  CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
    *  DEALINGS IN THE SOFTWARE.
    */

       ###################################
      # COPYRIGHT 2000-2015 MYKE CARTER #
     # July 7, 2000 thru May 3, 2015 ###
    #################################
    # DON'T PANIC! ... Uncomment the following line to disable the entire system:
    # die('This site is temporarily unavailable due to scheduled maintenance.<br />We apologize for any inconvenience this may cause.');
    #
    # ini_set('display_errors', TRUE);
    # ini_set('error_reporting', E_ALL);

      ################
     # CUSTOM CALLS #
    ################

    function  Canonical($href='')          { LinkRel( rel('canonical').href($href)); }
    function  Favicon($href='')            { LinkRel( rel('shortcut icon').href($href)); }
    function  LocalStylesheet($href)       { LinkRel( rel('stylesheet').type('text/css').href($href)); }
    function  LocalStylesheetScreen($href) { LinkRel( rel('stylesheet').type('text/css').href($href).media('screen')); }
    function  LocalStylesheetPrint($href)  { LinkRel( rel('stylesheet').type('text/css').href($href).media('print')); }

  # function  Canonical($href='')      { echo "\n    <link rel=\"canonical\" href=\"".$x."\" />"; }
  # function  Favicon($x='')           { echo "\n    <link rel=\"shortcut icon\" href=\"".$x."\" />"; }
  # function  LocalStylesheet($x)      { echo "\n    <link rel=\"stylesheet\" type=\"text/css\" href=\"".$x."\" />"; }

      #################
     # HTML WRAPPERS #
    #################

    function  Abbr($x="",$y='')        { echo "<abbr".$x.">$y</abbr>"; }
    function  Address($x,$y='')        { echo "<address".$x.">$y</address>"; }
    function  Anchor($x,$y='')         { echo "<a".$x.">$y</a>"; }
    function  Area($x)                 { echo "<area".$x." />"; }
    function  Article($x='',$y='')     { echo "\n\n  <article".$x.">$y</article>"; }
    function  Aside($x='',$y='')       { echo "\n\n  <aside".$x.">$y</aside>"; }
    function  Audio($x='',$y='')       { echo "\n  <audio".$x.">$y</audio>"; }
    function  B($x="",$y='')           { echo "<b".$x.">$y</b>"; }
    function  Bdi($x="",$y='')         { echo "<bdi".$x.">$y</bdi>"; }
    function  Bdo($x="",$y='')         { echo "<bdo".$x.">$y</bdo>"; }
    function  BR()                     { echo "<br />\n"; }
    function  BRBR()                   { echo "\n  <br /> <br />\n"; }
    function  Basefont($x)             { echo "\n<basefont".$x.">"; }
    function  Button($x='',$y='')      { echo "\n  <button".$x.">$y</button>"; }
    function  Canvas($x='',$y='')      { echo "\n  <canvas".$x.">$y</canvas>"; }
    function  Checkbox($x,$y)          { echo "\n      <input type=\"checkbox\"".$x." />".$y; }
    function  Cite($x)                 { echo "<cite>".$x."</cite>"; }
    function  Comment( $x='', $pre=0, $post=0 )
    {
        for ( $i = -2; $i < $pre;  ++$i ) N();
        echo "<!-- $x -->";
        for ( $i = -1; $i < $post; ++$i ) N();
    }
    function  Datalist($x='',$y='')    { echo "\n\n<datalist".$x.">$y</datalist>"; }
    function  Dfn($x="",$y='')         { echo "<dfn".$x.">$y</dfn>"; }
    function  DList($x='',$y='')       { echo "\n\n<dl".$x.">$y</dl>"; }
    function  DT($x='',$y='')          { echo "\n\n    <dt".$x.">$y</dt>"; }
    function  DD($x='',$y='')          { echo "\n\n        <dd".$x.">$y</dd>"; }
    function  Details($x='',$y='')     { echo "\n\n  <details".$x.">$y</details>"; }
    function  Dialog($x='',$y='')      { echo "\n\n  <dialog".$x.">$y</dialog>"; }
    function  Div($x='',$y='')         { echo "\n\n  <div".$x.">$y</div>"; }
    function  DocTypeHTML5()           { echo "<!DOCTYPE html>\n\n"; }
    function  DocTypeX11()             { echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n\n"; }
    function  DocTypeX10()             { echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n\n"; }
    function  DocTypeXFrameset()       { echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Frameset//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd\">\n\n"; }
    function  DropAnchor($x, $y='')    { echo "\n<div".css($y)."><a id=\"".$x."\"></a></div>\n"; }
    function  Embed($x='')             { echo "\n    <embed".$x." />"; }
    function  FB($x,$y='')             { echo "\n<fb:".$x." ".$y."></fb:".$x.">\n"; }  #  FACEBOOK
    function  fbLike($x='')            { echo "<fb:like".$x." />"; }  #  FACEBOOK
    function  Fieldset($x,$y)          { echo "\n  <fieldset".$x.">".$y."</fieldset>"; }
    function  Figcaption($x='',$y='')  { echo "\n<figcaption".$x.">$y</figcaption>"; }
    function  Figure($x='',$y='')      { echo "\n\n  <figure".$x.">$y</figure>"; }
    function  Form($x='',$y='')        { echo ($y > '') ? "\n  <form".$x.">".$y."</form>" : "\n  <form>$x</form>"; }
    function  Footer($x='',$y='')      { echo "\n\n  <footer".$x.">$y</footer>"; }
    function  H($x=2,$y='',$z='')      { echo "<h".$x.$y.">".$z."</h".$x.">"; }
    function  HeaderDiv($x='',$y='')   { echo "\n\n  <header".$x.">$y</header>"; }
    function  HR($x='')                { echo "\n<hr".$x.">\n"; }
    function  Hyperlink($x,$y)         { echo "<a".$x.">".$y."</a>"; }
    function  Iframe($x)               { echo "\n<iframe".$x."></iframe>"; }
    function  Image($x)                { echo "<img".$x." />"; }
    function  Input($x='',$y='')       { echo ($y > '') ? "\n    <input".$x." />$y" : "\n    <input".$x." />"; }
    function  JavaScriptFile($x)       { echo "\n    <script type=\"text/javascript\"".$x."></script>"; }
    function  Keygen($x,$y)            { echo "\n  <keygen".$x.">".$y."</keygen>"; }
    function  Legend($x,$y)            { echo "\n  <legend".$x.">".$y."</legend>"; }
    function  LI($x)                   { echo "\n    <li>".$x."</li>"; }
    function  LI2($x='',$y='')         { echo "\n  <li".$x.'>'.trim($y).'</li>'; }
    function  LinkRel($x)              { echo "\n    <link".$x." />"; }
    function  Main($x='',$y='')        { echo "\n\n  <main".$x.">$y</main>"; }
    function  Mark($x='',$y='')        { echo "\n\n  <mark".$x.">$y</mark>"; }
    function  Menuitem($x,$y)          { echo "\n  <menuitem".$x.">".$y."</menuitem>"; }
    function  Meta($x)                 { echo "\n    <meta".$x." />"; }
    function  Meter($x='',$y='')       { echo "\n\n  <meter".$x.">$y</meter>"; }
    function  N()                      { echo "\n"; }
    function  Nav($x='',$y='')         { echo "\n\n  <nav".$x.">$y</nav>"; }
    function  NBSP()                   { echo " &nbsp;"; }
    function  OL($x,$y)                { echo "\n  <ol".$x.">".$y."\n  </ol>"; }
    function  Optgroup($x,$y)          { echo "\n      <optgroup".$x.">" . $y . "</optgroup>"; }
    function  Option($x,$y)            { echo "\n        <option".$x.">" . $y . "</option>"; }
    function  Output($x='',$y='')      { echo "\n\n  <output".$x.">$y</output>"; }
    function  P($x='',$y='')           { echo "\n\n  <p".$x.">$y</p>"; }
    function  Pre(&$x)                 { echo "\n<pre>\n".$x."\n</pre>"; }
    function  Progress($x='',$y='')    { echo "\n\n  <progress".$x.">$y</progress>"; }
    function  Q($x="",$y='')           { echo "<q".$x.">$y</q>"; }
    function  Section($x='',$y='')     { echo "\n\n  <section".$x.">$y</section>"; }
    function  Span($x='',$y='')        { echo "\n\n  <span".$x.">$y</span>"; }
    function  Summary($x='',$y='')     { echo "\n\n  <summary".$x.">$y</summary>"; }
    function  Radio($x,$y)             { echo "\n      <input type=\"radio\"".$x." />".$y; }
    function  RP($x,$y='')             { echo "\n<rp".$x.">$y</rp>"; }
    function  RT($x,$y='')             { echo "\n<rt".$x.">$y</rt>"; }
    function  Ruby($x,$y='')           { echo "\n<ruby".$x.">$y</ruby>"; }
    function  Script($x,$y='',$z='')   { echo "\n".$z."<script".$x.">$y</script>"; }
    function  Select($x,$y)            { echo "\n<select".$x.">$y</select>"; }
    function  Source($x)               { echo "\n<source".$x." />"; }
    function  Stylesheet($x,$y='')     { echo "\n<style".$x.">$y</style>"; }
    function  Svg($x='',$y='')         { echo "\n  <svg".$x.">$y</svg>"; }
    function  Table($x='',$y='')       { echo "\n\n  <table".$x.">$y</table>"; }
    function  TextArea($x,$y)          { echo "\n  <textarea".$x.">".$y."</textarea>"; }
    function  TimeSpan($x='',$y='')    { echo "\n\n  <time".$x.">$y</time>"; }
    function  Title($x)                { echo "\n    <title>".$x."</title>"; }
    function  Track($x)                { echo "\n<track".$x." />"; }
    function  TR($x='',$y='')          { echo ($y > '') ? "\n  <tr".$x.">".$y."</tr>"   : "\n  <tr>$x</tr>"; }
    function  TH($x='',$y='')          { echo ($y > '') ? "\n    <th".$x.">".$y."</th>" : "\n    <th>$x</th>"; }
    function  TD($x='',$y='')          { echo ($y > '') ? "\n    <td".$x.">".$y."</td>" : "\n    <td>$x</td>"; }
    function  U()                      { echo "<u>"; }
    function  UL($x,$y)                { echo "\n  <ul".$x.">".$y."\n  </ul>"; }
    function  Video($x='',$y='')       { echo "\n  <video".$x.">$y</video>"; }
    function  Wbr()                    { echo "<wbr>"; }

      ################
     # HTML OPENERS #
    ################

    function  OpenAbbr($x)          { echo "<abbr".$x.">"; }
    function  OpenAddress($x)       { echo "<address".$x.">"; }
    function  OpenAnchor($x)        { echo "<a".$x.">"; }
    function  OpenArticle($x='')    { echo "\n  <article".$x.">"; }
    function  OpenAside($x='')      { echo "\n  <aside".$x.">"; }
    function  OpenAudio($x='')      { echo "\n  <audio".$x.">"; }
    function  OpenB()               { echo "<b>"; }
    function  OpenBdi()             { echo "<bdi>"; }
    function  OpenBdo()             { echo "<bdo>"; }
    function  OpenBody($x='')       { echo "\n  <body".$x.">"; }
    function  OpenBlink()           { echo "<blink>"; }
    function  OpenBlockquote()      { echo "\n  <blockquote>"; }
    function  OpenButton($x='')     { echo "\n  <button".$x.">"; }
    function  OpenCanvas($x='')     { echo "\n  <canvas".$x.">"; }
    function  OpenCenter()          { echo "\n  <center>"; }
    function  OpenCite()            { echo "<cite>"; }
    function  OpenComment()         { echo "\n<!--\n"; }
    function  OpenDetails($x='')    { echo "\n  <details".$x.">"; }
    function  OpenDfn($x)           { echo "<dfn".$x.">"; }
    function  OpenDialog($x='')     { echo "\n  <dialog".$x.">"; }
    function  OpenDiv($x='')        { echo "\n  <div".$x.">"; }
    function  OpenDatalist($x='')   { echo "\n<datalist".$x.">"; }
    function  OpenDL($x='')         { echo "\n<dl".$x.">"; }
    function  OpenDT($x='')         { echo "\n    <dt".$x.">"; }
    function  OpenDD($x='')         { echo "\n        <dd".$x.">"; }
    function  OpenFieldset($x)      { echo "\n  <fieldset".$x.">"; }
    function  OpenFigcaption($x='') { echo "\n  <figcaption".$x.">"; }
    function  OpenFigure($x='')     { echo "\n  <figure".$x.">"; }
    function  OpenFont($x)          { echo "<font".$x.">"; }
    function  OpenForm($x='')       { echo "\n    <form".$x.">"; }
    function  OpenFooter($x='')     { echo "\n  <footer".$x.">"; }
    function  OpenFrame($x)         { echo "\n    <frame".$x.">"; }
    function  OpenFrameset($x)      { echo "\n    <frameset".$x.">"; }
    function  OpenJavaScript()      { echo "\n<script type=\"text/javascript\">\n<!--\n"; }
    function  OpenKeygen($x='')     { echo "\n  <keygen".$x.">"; }
    function  OpenH($x)             { echo "\n<h".$x.">"; }
    function  OpenHTML($x='')       { echo "<html".$x.">"; }
    function  OpenHead()            { echo "\n  <head>"; }
    function  OpenHeader($x='')     { echo "\n  <header".$x.">"; }
    function  OpenInput($x)         { echo "\n    <input".$x.">"; }
    function  OpenLegend($x)        { echo "\n  <legend".$x.">"; }
    function  OpenLI($x)            { echo "<li".$x.">"; }
    function  OpenMain($x='')       { echo "\n  <main".$x.">"; }
    function  OpenMark($x='')       { echo "\n  <mark".$x.">"; }
    function  OpenMap($x='')        { echo "\n  <map".$x.">"; }
    function  OpenMenuitem($x='')   { echo "\n  <menuitem".$x.">"; }
    function  OpenMeter($x='')      { echo "\n  <meter".$x.">"; }
    function  OpenNav($x='')        { echo "\n  <nav".$x.">"; }
    function  OpenOL($x='')         { echo "\n\n  <ol".$x.">\n"; }
    function  OpenOptgroup($x='')   { echo "\n  <optgroup".$x.">"; }
    function  OpenOutput($x='')     { echo "\n  <output".$x.">"; }
    function  OpenP($x='')          { echo "\n\n  <p".$x.">\n"; }
    function  OpenPre($x='')        { echo "\n  <pre".$x.">\n"; }
    function  OpenProgress($x='')   { echo "\n  <progress".$x.">"; }
    function  OpenQ()               { echo "<q>"; }
    function  OpenRP($x)            { echo "\n<rp".$x.">\n<!--\n"; }
    function  OpenRT($x)            { echo "\n<rt".$x.">\n<!--\n"; }
    function  OpenRuby($x)          { echo "\n<ruby".$x.">\n<!--\n"; }
    function  OpenScript($x)        { echo "\n<script".$x.">\n<!--\n"; }
    function  OpenSection($x)       { echo "\n  <section".$x.">"; }
    function  OpenSelect($x)        { echo "\n      <select".$x.">"; }
    function  OpenSpan($x='')       { echo "\n\n  <span".$x.">"; }
    function  OpenStyle($x=" type=\"text/css\"") { echo "\n  <style".$x.">"; }
    function  OpenSummary($x='')    { echo "\n\n  <summary".$x.">"; }
    function  OpenSvg($x='')        { echo "\n  <svg".$x.">"; }
    function  OpenTable($x='')      { echo "\n\n  <table".$x.">"; }
    function  OpenTextarea($x)      { echo "\n    <textarea".$x.">"; }
    function  OpenTime($x='')       { echo "\n\n  <time".$x.">"; }
    function  OpenTR($x='')         { echo "\n    <tr".$x.">"; }
    function  OpenTH($x='')         { echo "\n      <th".$x.">"; }
    function  OpenTD($x='')         { echo "\n      <td".$x.">"; }
    function  OpenUL($x='')         { echo "\n\n  <ul".$x.">"; }
    function  OpenVideo($x='')      { echo "\n  <video".$x.">"; }

      ################
     # HTML CLOSERS #
    ################

    function  CloseAbbr()        { echo "</abbr>"; }
    function  CloseAddress()     { echo "</address>"; }
    function  CloseAnchor()      { echo "</a>"; }
    function  CloseArticle()     { echo "\n  </article>"; }
    function  CloseAside()       { echo "\n  </aside>"; }
    function  CloseAudio()       { echo "\n  </audio>"; }
    function  CloseB()           { echo "</b>"; }
    function  CloseBdi()         { echo "</bdi>"; }
    function  CloseBdo()         { echo "</bdo>"; }
    function  CloseBlink()       { echo "</blink>"; }
    function  CloseBlockquote()  { echo "\n  </blockquote>"; }
    function  CloseBody()        { echo "\n  </body>"; }
    function  CloseButton()      { echo "\n  </button>"; }
    function  CloseCanvas()      { echo "\n  </canvas>"; }
    function  CloseCenter()      { echo "\n  </center>"; }
    function  CloseCite()        { echo "</cite>"; }
    function  CloseComment()     { echo "\n-->"; }
    function  CloseDatalist()    { echo "</datalist>"; }
    function  CloseDetails()     { echo "\n  </details".$x.">"; }
    function  CloseDfn()         { echo "</dfn>"; }
    function  CloseDialog()      { echo "\n  </dialog".$x.">"; }
    function  CloseDiv()         { echo "</div>"; }
    function  CloseDL()          { echo "</dl>"; }
    function  CloseDT()          { echo "</dt>"; }
    function  CloseDD()          { echo "</dd>"; }
    function  CloseFieldset()    { echo "\n  </fieldset>"; }
    function  CloseFigcaption()  { echo "\n  </figcaption>"; }
    function  CloseFigure()      { echo "\n  </figure>"; }
    function  CloseFont()        { echo "</font>"; }
    function  CloseFooter()      { echo "\n  </footer>"; }
    function  CloseForm()        { echo "\n    </form>"; }
    function  CloseFrameset()    { echo "\n    </frameset>"; }
    function  CloseJavaScript()  { echo "\n// -->\n</script>\n"; }
    function  CloseKeygen()      { echo "\n  </keygen>"; }
    function  CloseH($x)         { echo "</h".$x.">"; }
    function  CloseHeader()      { echo "\n  </header>"; }
    function  CloseHTML()        { echo "\n</html>\n"; }
    function  CloseHead()        { echo "\n  </head>"; }
    function  CloseInput()       { echo "</input>"; }
    function  CloseLegend()      { echo "\n  </legend>"; }
    function  CloseLI()          { echo "</li>\n"; }
    function  CloseMain()        { echo "\n  </main>"; }
    function  CloseMark()        { echo "</mark>\n"; }
    function  CloseMap()         { echo "\n  </map>"; }
    function  CloseMenuitem()    { echo "\n  </menuitem>"; }
    function  CloseMeter()       { echo "\n  </meter>"; }
    function  CloseNav()         { echo "\n  </nav>"; }
    function  CloseOptgroup()    { echo "\n  </optgroup>"; }
    function  CloseOL()          { echo "\n  </ol>"; }
    function  CloseOutput()      { echo "\n  </output>"; }
    function  CloseP()           { echo "</p>\n"; }
    function  ClosePre()         { echo "\n  </pre>"; }
    function  CloseProgress()    { echo "\n  </progress>"; }
    function  CloseQ()           { echo "</q>"; }
    function  CloseRP()          { echo "\n// -->\n</rp>\n"; }
    function  CloseRT()          { echo "\n// -->\n</rt>\n"; }
    function  CloseRuby()        { echo "\n// -->\n</ruby>\n"; }
    function  CloseScript()      { echo "\n// -->\n</script>\n"; }
    function  CloseSelect()      { echo "\n    </select>"; }
    function  CloseSection()     { echo "\n  </section>"; }
    function  CloseSpan()        { echo "</span>\n"; }
    function  CloseStyle()       { echo "\n  </style>"; }
    function  CloseSummary()     { echo "</summary>\n"; }
    function  CloseSvg()         { echo "\n  </svg>"; }
    function  CloseTable()       { echo "\n  </table>\n\n"; }
    function  CloseTextarea()    { echo "</textarea>"; }
    function  CloseTime()        { echo "</time>\n"; }
    function  CloseTR()          { echo "\n    </tr>"; }
    function  CloseTH()          { echo "</th>"; }
    function  CloseTD()          { echo "</td>"; }
    function  CloseU()           { echo "</u>"; }
    function  CloseUL()          { echo "\n  </ul>"; }
    function  CloseVideo()       { echo "\n  </video>"; }

      #################################################
     # SPECIAL CASES : THESE RETURN RATHER THAN ECHO #
    #################################################

    function  alt($x='')         { return " alt=\"".trim($x)."\""             ; }
    function  nameid($x='')      { return name($x).id($x)                     ; }
    function  status($x=" ")     { return " window.status='$x'; return true;" ; }
    function  value($x='')       { return " value=\"".trim($x)."\""           ; }
    function  other($x='')       { return trim($x) > "" ? " $x" : ""; }
    function  rowspan($x='1')    { return trim($x) > "1" ? " rowspan=\"".trim($x)."\"" : "" ; }
    function  colspan($x='1')    { return trim($x) > "1" ? " colspan=\"".trim($x)."\"" : "" ; }
    function  sPos($x='')        { return sPosition($x); }
    function  sPosition($x='')   { switch ( substr($x,0,1) )
                                   {
                                       case 'a': return "position: absolute;"; break;
                                       case 'f': return "position: fixed;"   ; break;
                                       case 'r': return "position: relative;"; break;
                                       default: return "";
                                   }
                                 }

      ############################################################################
     # VAR PARAMETERS: THESE FUNCTIONS RETURN VALUES AS OPPOSED TO ECHOING THEM #
    ############################################################################

    function  abbrvar       ($x='', $y=''       ) { return "<abbr".$x.">$y</abbr>"; }
    function  addressvar    ($x='', $y=''       ) { return "<address".$x.">$y</address>"; }
    function  anchorvar     ($x='', $y=''       ) { return "<a".$x.">$y</a>"; }
    function  articlevar    ($x='', $y=''       ) { return "\n<article".$x.">$y\n</article>"; }
    function  asidevar      ($x='', $y=''       ) { return "\n<aside".$x.">$y\n</aside>"; }
    function  audiovar      ($x='', $y=''       ) { return "\n<audio".$x.">$y</audio>"; }
    function  bvar          ($x='', $y=''       ) { return "<b".$x.">$y</b>"; }
    function  bdivar        ($x='', $y=''       ) { return "<bdi".$x.">$y</bdi>"; }
    function  bdovar        ($x='', $y=''       ) { return "<bdo".$x.">$y</bdo>"; }
    function  blockquotevar ($x='', $y=''       ) { return "<blockquote".$x.">$y</blockquote>"; }
    function  bodyvar       ($x='', $y=''       ) { return "\n<body".$x.">$y\n</body>"; }
    function  buttonvar     ($x='', $y=''       ) { return "\n<button".$x.">$y</button>"; }
    function  canvasvar     ($x='', $y=''       ) { return "\n<canvas".$x.">$y</canvas>\n"; }
    function  checkboxvar   ($x,    $y          ) { return "\n      <input type=\"checkbox\"".$x." />".$y; }
    function  checkboxRvar  ($x,    $y          ) { return "\n      ".$y."<input type=\"checkbox\"".$x." />"; }
    function  citevar       ($x='', $y=''       ) { return "<cite".$x.">$y</cite>"; }
    function  dfnvar        ($x='', $y=''       ) { return "<dfn".$x.">$y</dfn>"; }
    function  jscommentvar  ($x=''              ) { return "\n<!--\n    $x\n// -->\n"; }
    function  commentvar    ($x=''              ) { return "\n<!--\n    $x\n-->\n"; }
    function  datalistvar   ($x='', $y=''       ) { return "\n<datalist".$x.">$y</datalist>\n"; }
    function  detailsvar    ($x='', $y=''       ) { return "<details".$x.">$y</details>"; }
    function  dialogvar     ($x='', $y=''       ) { return "<dialog".$x.">$y</dialog>"; }
    function  divvar        ($x='', $y=''       ) { return "<div".$x.">$y</div>"; }
    function  dlvar         ($x='', $y=''       ) { return "<dl".$x.">$y</dl>"; }
    function  dtvar         ($x='', $y=''       ) { return "    <dt".$x.">$y</dt>"; }
    function  ddvar         ($x='', $y=''       ) { return "        <dd".$x.">$y</dd>"; }
    function  echovar       ($x,    $y          ) { echo $x." = \"".$y."\"<p>\n"; }
    function  fbLikevar     ($x=''              ) { return "<fb:like".$x." />"; }  #  FACEBOOK
    function  fieldsetvar   ($x=''              ) { return "\n<fieldset".$x."></fieldset>"; }
    function  figcaptionvar ($x='', $y=''       ) { return "\n<figcaption".$x.">$y</figcaption>"; }
    function  figurevar     ($x='', $y=''       ) { return "\n<figure".$x.">$y\n</figure>"; }
    function  footervar     ($x='', $y=''       ) { return "\n<footer".$x.">$y\n</footer>"; }
    function  formvar       ($x='', $y=''       ) { return "<form".$x.">$y</form>"; }
    function  headvar       ($x='', $y=''       ) { return "\n<head".$x.">$y\n</head>"; }
    function  headervar     ($x='', $y=''       ) { return "\n<header".$x.">$y\n</header>"; }
    function  hvar          ($x=2,  $y='', $z='') { return "<h".$x.$y.">".$z."</h".$x.">"; }
    function  htmlvar       ($x='', $y=''       ) { return "<html".$x.">$y\n</html>"; }
    function  iframevar     ($x=''              ) { return "\n<iframe".$x."></iframe>"; }
    function  imagevar      ($x=''              ) { return "<img".$x." />"; }
    function  inputvar      ($x='', $y=''       ) { return "\n      <input".$x." />$y"; }
    function  keygenvar     ($x=''              ) { return "\n<keygen".$x."></keygen>"; }
    function  legendvar     ($x=''              ) { return "\n<legend".$x."></legend>"; }
    function  livar         ($x                 ) { return "\n<li>".$x."</li>"; }
    function  li2var        ($x='', $y=''       ) { return "\n<li".$x.">$y</li>"; }
    function  mainvar       ($x='', $y=''       ) { return "\n<main".$x.">$y\n</main>"; }
    function  menuitemvar   ($x='', $y=''       ) { return "\n<menuitem".$x.">$y\n</menuitem>"; }
    function  markvar       ($x='', $y=''       ) { return "<mark".$x.">$y</mark>"; }
    function  metervar      ($x='', $y=''       ) { return "\n<meter".$x.">$y\n</meter>"; }
    function  navvar        ($x='', $y=''       ) { return "\n<nav".$x.">$y\n</nav>"; }
    function  nvar          (                   ) { return "\n"; }
    function  optgroupvar   ($x,    $y          ) { return "\n      <optgroup".$x.">" . $y . "</optgroup>"; }
    function  optionvar     ($x,    $y          ) { return "\n        <option".$x.">" . $y . "</option>"; }
    function  olvar         ($x='', $y=''       ) { return "\n<ol".$x.">$y</ol>"; }
    function  outputvar     ($x='', $y=''       ) { return "\n<output".$x.">$y\n</output>"; }
    function  pvar          ($x='', $y=''       ) { return "<p".$x.">$y</p>"; }
    function  progressvar   ($x='', $y=''       ) { return "\n<progress".$x.">$y\n</progress>"; }
    function  qvar          ($x='', $y=''       ) { return "<q".$x.">$y</q>"; }
    function  radiovar      ($x,    $y          ) { return "\n      <input type=\"radio\"".$x." />".$y; }
    function  radioRvar     ($x,    $y          ) { return "\n      ".$y."<input type=\"radio\"".$x." />"; }
    function  rpvar         ($x='', $y=''       ) { return "\n<rp".$x.">$y</rp>\n"; }
    function  rtvar         ($x='', $y=''       ) { return "\n<rt".$x.">$y</rt>\n"; }
    function  rubyvar       ($x='', $y=''       ) { return "\n<ruby".$x.">$y</ruby>\n"; }
    function  scriptvar     ($x='', $y=''       ) { return "\n<script".$x.">$y</script>\n"; }
    function  sectionvar    ($x='', $y=''       ) { return "\n<section".$x.">$y\n</section>"; }
    function  selectvar     ($x,    $y          ) { return "\n<select".$x.">$y</select>"; }
    function  sourcevar     ($x=''              ) { return "\n<source".$x." />"; }
    function  spanvar       ($x='', $y=''       ) { return "<span".$x.">$y</span>"; }
    function  stylevar      ($x='', $y=''       ) { return "\n<style".$x.">\n<!--\n$y\n// -->\n</style>"; }
    function  summaryvar    ($x='', $y=''       ) { return "<summary".$x.">$y</summary>"; }
    function  svgvar        ($x='', $y=''       ) { return "\n<svg".$x.">$y</svg>\n"; }
    function  tablevar      ($x='', $y=''       ) { return "\n<table".$x.">$y</table>"; }
    function  textareavar   ($x='', $y=''       ) { return "\n      <textarea".$x.">$y</textarea>"; }
    function  timevar       ($x='', $y=''       ) { return "<time".$x.">$y</time>"; }
    function  trackvar      ($x=''              ) { return "\n<track".$x." />"; }
    function  trvar         ($x='', $y=''       ) { return "\n  <tr".$x.">$y</tr>"; }
    function  thvar         ($x='', $y=''       ) { return "\n    <th".$x.">$y</th>"; }
    function  tdvar         ($x='', $y=''       ) { return "\n    <td".$x.">$y</td>"; }
    function  ulvar         ($x='', $y=''       ) { return "\n<ul".$x.">$y</ul>"; }
    function  videovar      ($x='', $y=''       ) { return "\n<video".$x.">$y</video>"; }

      ###########################################################
     # HTML & CSS STANDARD, YES/NO, AND "px"-DEFAULT FUNCTIONS #
    ###########################################################

    function  XHTML_std ( $attribute, $value ) { return trim($value) > ''  ? " $attribute=\"".trim($value)."\"" : '' ; }
    function  XHTML_nz  ( $attribute, $value ) { return ( $value != "0" )  ?   XHTML_std( $attribute, $value )  : '' ; }
    function    CSS_std ( $attribute, $value ) { return trim($value) > ''  ? " $attribute: ".trim($value).";"   : '' ; }
    function  XHTML_yn  ( $attribute, $value ) { return preg_match("/^[Yy]/" , $value ) ? " $attribute=\"$attribute\""  : '' ; }
    function    CSS_px  ( $attribute, $value ) { switch ( trim($value) )
                                                 {
                                                    case "" : return '' ;               break;
                                                    case "0": return " $attribute: 0;"; break;
                                                    default : return preg_match("/[0-9]$/", $value )
                                                                            ? " $attribute: $value".'px;'
                                                                            : " $attribute: $value;";
                                                 }
                                               }

    function  acceptcharset($x='')             { return XHTML_std ( "accept-charset",        $x ) ; }
    function  action($x='')                    { return XHTML_std ( "action",                $x ) ; }
    function  align($x='left')                 { return XHTML_std ( "align",                 $x ) ; }
    function  alink($x='')                     { return XHTML_std ( "alink",                 $x ) ; }
    function  autocomplete($x="on")            { return XHTML_std ( "autocomplete",          $x ) ; }
    function  autoplay($x="no")                { return XHTML_std ( "autoplay",              $x ) ; }
    function  background($x='')                { return XHTML_std ( "background",            $x ) ; }
    function  bgcolor($x='')                   { return XHTML_std ( "bgcolor",               $x ) ; }
    function  border($x='0')                   { return XHTML_std ( "border",                $x ) ; }
    function  bordercolor($x='')               { return XHTML_std ( "bordercolor",           $x ) ; }
    function  bordercolorlight($x='')          { return XHTML_std ( "bordercolorlight",      $x ) ; }
    function  bordercolordark($x='')           { return XHTML_std ( "bordercolordark",       $x ) ; }
    function  cellpadding($x='0')              { return XHTML_std ( "cellpadding",           $x ) ; }
    function  cellspacing($x='0')              { return XHTML_std ( "cellspacing",           $x ) ; }
    function  charset($x='')                   { return XHTML_std ( "charset",               $x ) ; }
    function  cols($x='')                      { return XHTML_std ( "cols",                  $x ) ; }
    function  color($x='')                     { return XHTML_std ( "color",                 $x ) ; }
    function  coords($x='')                    { return XHTML_std ( "coords",                $x ) ; }
    function  content($x='')                   { return XHTML_std ( "content",               $x ) ; }
    function  css($x='')                       { return XHTML_std ( "class",                 $x ) ; }
    function  direction($x='')                 { return XHTML_std ( "dir",                   $x ) ; }
    function  enctype($x='url-encoded')        { return XHTML_std ( "enctype",               $x ) ; }
    function  face($x='')                      { return XHTML_std ( "face",                  $x ) ; }
    function  frameborder($x='')               { return XHTML_std ( "frameborder",           $x ) ; }
    function  framespacing($x='')              { return XHTML_std ( "framespacing",          $x ) ; }
    function  height($x='')                    { return XHTML_nz  ( "height",                $x ) ; }
    function  href($x='')                      { return XHTML_std ( "href",                  $x ) ; }
    function  hspace($x='')                    { return XHTML_std ( "hspace",                $x ) ; }
    function  http_equiv($x='')                { return XHTML_std ( "http-equiv",            $x ) ; }
    function  id($x='')                        { return XHTML_std ( "id",                    $x ) ; }
    function  kind($x='')                      { return XHTML_std ( "kind",                  $x ) ; }
    function  label($x='')                     { return XHTML_std ( "label",                 $x ) ; }
    function  lang($x='')                      { return XHTML_std ( "lang",                  $x ) ; }
    function  language($x='')                  { return XHTML_std ( "language",              $x ) ; }
    function  leftmargin($x='')                { return XHTML_std ( "leftmargin",            $x ) ; }
    function  links($x='')                     { return XHTML_std ( "links",                 $x ) ; }
    function  marginheight($x='')              { return XHTML_std ( "marginheight",          $x ) ; }
    function  marginwidth($x='')               { return XHTML_std ( "marginwidth",           $x ) ; }
    function  maxlength($x='')                 { return XHTML_std ( "maxlength",             $x ) ; }
    function  media($x='')                     { return XHTML_std ( "media",                 $x ) ; }
    function  method($x='GET')                 { return XHTML_std ( "method",                $x ) ; }
    function  name($x='')                      { return XHTML_std ( "name",                  $x ) ; }
    function  onBlur($x='')                    { return XHTML_std ( "onblur",                $x ) ; }
    function  onChange($x='')                  { return XHTML_std ( "onchange",              $x ) ; }
    function  onClick($x='')                   { return XHTML_std ( "onclick",               $x ) ; }
    function  onDblClick($x='')                { return XHTML_std ( "ondblclick",            $x ) ; }
    function  onDragover($x='')                { return XHTML_std ( "ondragover",            $x ) ; }
    function  onDragStart($x='')               { return XHTML_std ( "ondragstart",           $x ) ; }
    function  onDrop($x='')                    { return XHTML_std ( "ondrop",                $x ) ; }
    function  onKeypress($x='')                { return XHTML_std ( "onkeypress",            $x ) ; }
    function  onLoad($x='')                    { return XHTML_std ( "onload",                $x ) ; }
    function  onFocus($x='')                   { return XHTML_std ( "onfocus",               $x ) ; }
    function  onMouseOut($x='')                { return XHTML_std ( "onmouseout",            $x ) ; }
    function  onMouseOver($x='')               { return XHTML_std ( "onmouseover",           $x ) ; }
    function  onMouseUp($x='')                 { return XHTML_std ( "onmouseup",             $x ) ; }
    function  onReset($x='')                   { return XHTML_std ( "onreset",               $x ) ; }
    function  onSubmit($x='')                  { return XHTML_std ( "onsubmit",              $x ) ; }
    function  pluginspage($x='')               { return XHTML_std ( "pluginspage",           $x ) ; }
    function  property($x='')                  { return XHTML_std ( "property",              $x ) ; }
    function  rel($x='')                       { return XHTML_std ( "rel",                   $x ) ; }
    function  rows($x='')                      { return XHTML_std ( "rows",                  $x ) ; }
    function  scrolling($x='')                 { return XHTML_std ( "scrolling",             $x ) ; }
    function  shape($x='')                     { return XHTML_std ( "shape",                 $x ) ; }
    function  size($x='')                      { return XHTML_std ( "size",                  $x ) ; }
    function  src($x='')                       { return XHTML_std ( "src",                   $x ) ; }
    function  srclang($x='en')                 { return XHTML_std ( "srclang",               $x ) ; }
    function  start($x='')                     { return XHTML_std ( "start",                 $x ) ; }
    function  style($x='')                     { return XHTML_std ( "style",                 $x ) ; }
    function  tabindex($x='')                  { return XHTML_std ( "tabindex",              $x ) ; }
    function  target($x='_self')               { return XHTML_std ( "target",                $x ) ; }
    function  text($x='')                      { return XHTML_std ( "text",                  $x ) ; }
    function  topmargin($x='')                 { return XHTML_std ( "topmargin",             $x ) ; }
    function  type($x='')                      { return XHTML_std ( "type",                  $x ) ; }
    function  usemap($x='')                    { return XHTML_std ( "usemap",                $x ) ; }
    function  valign($x='top')                 { return XHTML_std ( "valign",                $x ) ; }
    function  vlink($x='')                     { return XHTML_std ( "vlink",                 $x ) ; }
    function  vspace($x='')                    { return XHTML_std ( "vspace",                $x ) ; }
    function  width($x='')                     { return XHTML_nz  ( "width",                 $x ) ; }
    function  wrap($x='')                      { return XHTML_std ( "wrap",                  $x ) ; }
    function  xmlns($x='',$y='')               { return XHTML_std ( "xmlns".$x,              $y ) ; }
    function  xmllang($x='')                   { return XHTML_std ( "xml:lang",              $x ) ; }

  # FOR FACEBOOK
    function  colorscheme($x='')               { return XHTML_std ( "colorscheme",           $x ) ; }
    function  send($x='')                      { return XHTML_std ( "send",                  $x ) ; }
    function  layout($x='')                    { return XHTML_std ( "layout",                $x ) ; }
    function  showFaces($x='')                 { return XHTML_std ( "show_faces",            $x ) ; }
    function  font($x='')                      { return XHTML_std ( "font",                  $x ) ; }

    function  checked($x='N')                  { return XHTML_yn  ( "checked",               $x ) ; }
    function  controls($x='Y')                 { return XHTML_yn  ( "controls",              $x ) ; }
    function  defaultTrack($x='Y')             { return XHTML_yn  ( "default",               $x ) ; }
    function  disabled($x='Y')                 { return XHTML_yn  ( "disabled",              $x ) ; }
    function  draggable($x='Y')                { return XHTML_yn  ( "draggable",             $x ) ; }
    function  multiple($x='Y')                 { return XHTML_yn  ( "multiple",              $x ) ; }
    function  noresize($x='Y')                 { return XHTML_yn  ( "noresize",              $x ) ; }
    function  novalidate($x='Y')               { return XHTML_yn  ( "novalidate",            $x ) ; }
    function  nowrap($x='Y')                   { return XHTML_yn  ( "nowrap",                $x ) ; }
    function  readonly($x='Y')                 { return XHTML_yn  ( "readonly",              $x ) ; }
    function  selected($x='N')                 { return XHTML_yn  ( "selected",              $x ) ; }

    function  sBG($x='')                       { return CSS_std   ( "background",            $x ) ; }
    function  sBackground($x='')               { return CSS_std   ( "background",            $x ) ; }
    function  sBGColor($x='transparent')       { return CSS_std   ( "background-color",      $x ) ; }
    function  sBGImage($x='none')              { return CSS_std   ( "background-image",      $x ) ; }
    function  sBGRepeat($x='repeat')           { return CSS_std   ( "background-repeat",     $x ) ; }
    function  sBGAttachment($x='scroll')       { return CSS_std   ( "background-attachment", $x ) ; }
    function  sBGPosition($x='0% 0%')          { return CSS_std   ( "background-position",   $x ) ; }
    function  sBorder($x='')                   { return CSS_std   ( "border",                $x ) ; }
    function  sBorderColor($x='')              { return CSS_std   ( "border-color",          $x ) ; }
    function  sBorderCollapse($x='')           { return CSS_std   ( "border-collapse",       $x ) ; }
    function  sBorderStyle($x='none')          { return CSS_std   ( "border-style",          $x ) ; }
    function  sBorderWidth($x='')              { return CSS_std   ( "border-width",          $x ) ; }
    function  sBorderTop($x='')                { return CSS_std   ( "border-top",            $x ) ; }
    function  sBorderTopWidth($x='medium')     { return CSS_std   ( "border-top-width",      $x ) ; }
    function  sBorderRight($x='')              { return CSS_std   ( "border-right",          $x ) ; }
    function  sBorderRightWidth($x='medium')   { return CSS_std   ( "border-right-width",    $x ) ; }
    function  sBorderBottom($x='')             { return CSS_std   ( "border-bottom",         $x ) ; }
    function  sBorderBottomWidth($x='medium')  { return CSS_std   ( "border-bottom-width",   $x ) ; }
    function  sBorderLeft($x='')               { return CSS_std   ( "border-left",           $x ) ; }
    function  sBorderLeftWidth($x='medium')    { return CSS_std   ( "border-left-width",     $x ) ; }
    function  sColor($x='')                    { return CSS_std   ( "color",                 $x ) ; }
    function  sClear($x='none')                { return CSS_std   ( "clear",                 $x ) ; }
    function  sDisplay($x='block')             { return CSS_std   ( "display",               $x ) ; }
    function  sFloat($x='none')                { return CSS_std   ( "float",                 $x ) ; }
    function  sFont($x='')                     { return CSS_std   ( "font",                  $x ) ; }
    function  sFontFamily($x='')               { return CSS_std   ( "font-family",           $x ) ; }
    function  sFontSize($x='medium')           { return CSS_std   ( "font-size",             $x ) ; }
    function  sFontStyle($x='normal')          { return CSS_std   ( "font-style",            $x ) ; }
    function  sFontVariant($x='normal')        { return CSS_std   ( "font-variant",          $x ) ; }
    function  sFontWeight($x='normal')         { return CSS_std   ( "font-weight",           $x ) ; }
    function  sLetterSpacing($x='normal')      { return CSS_std   ( "letter-spacing",        $x ) ; }
    function  sLineHeight($x='normal')         { return CSS_std   ( "line-height",           $x ) ; }
    function  sLineThrough($x='')              { return CSS_std   ( "line-through",          $x ) ; }
    function  sListStyle($x='')                { return CSS_std   ( "list-style",            $x ) ; }
    function  sListStyleImage($x='none')       { return CSS_std   ( "list-style-image",      $x ) ; }
    function  sListStylePosition($x='outside') { return CSS_std   ( "list-style-position",   $x ) ; }
    function  sListStyleType($x='disc')        { return CSS_std   ( "list-style-type",       $x ) ; }
    function  sOverflow($x='auto')             { return CSS_std   ( "overflow",              $x ) ; }
    function  sTextAlign($x='left')            { return CSS_std   ( "text-align",            $x ) ; }
    function  sTextDecoration($x='none')       { return CSS_std   ( "text-decoration",       $x ) ; }
    function  sTextIndent($x='0')              { return CSS_std   ( "text-indent",           $x ) ; }
    function  sTextTransform($x='none')        { return CSS_std   ( "text-transform",        $x ) ; }
    function  sVerticalAlign($x='baseline')    { return CSS_std   ( "vertical-align",        $x ) ; }
    function  sWhiteSpace($x='normal')         { return CSS_std   ( "white-space",           $x ) ; }
    function  sWordSpacing($x='normal')        { return CSS_std   ( "word-spacing",          $x ) ; }
    function  sZindex($x='')                   { return CSS_std   ( "z-index",               $x ) ; }

    function  sHeight($x='auto')               { return CSS_px    ( "height",                $x ) ; }
    function  sLeft($x='0')                    { return CSS_px    ( "left",                  $x ) ; }
    function  sRight($x='0')                   { return CSS_px    ( "right",                 $x ) ; }
    function  sMargin($x='')                   { return CSS_px    ( "margin",                $x ) ; }
    function  sMarginTop($x='0')               { return CSS_px    ( "margin-top",            $x ) ; }
    function  sMarginRight($x='0')             { return CSS_px    ( "margin-right",          $x ) ; }
    function  sMarginBottom($x='0')            { return CSS_px    ( "margin-bottom",         $x ) ; }
    function  sMarginLeft($x='0')              { return CSS_px    ( "margin-left",           $x ) ; }
    function  sMaxWidth($x='0')                { return CSS_px    ( "max-width",             $x ) ; }
    function  sMinWidth($x='0')                { return CSS_px    ( "min-width",             $x ) ; }
    function  sPadding($x='')                  { return CSS_px    ( "padding",               $x ) ; }
    function  sPaddingTop($x='0')              { return CSS_px    ( "padding-top",           $x ) ; }
    function  sPaddingRight($x='0')            { return CSS_px    ( "padding-right",         $x ) ; }
    function  sPaddingBottom($x='0')           { return CSS_px    ( "padding-bottom",        $x ) ; }
    function  sPaddingLeft($x='0')             { return CSS_px    ( "padding-left",          $x ) ; }
    function  sTop($x='0')                     { return CSS_px    ( "top",                   $x ) ; }
    function  sBottom($x='0')                  { return CSS_px    ( "bottom",                $x ) ; }
    function  sWidth($x='auto')                { return CSS_px    ( "width",                 $x ) ; }

    if( file_exists( __DIR__.'/loose-cannons.php'))
        include_once(__DIR__.'/loose-cannons.php');

