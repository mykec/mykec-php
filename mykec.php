<?php
/** @noinspection PhpUnused */
/** @noinspection SpellCheckingInspection */
/** @noinspection HtmlRequiredTitleElement */
/** @noinspection HtmlRequiredLangAttribute */
/** @noinspection PhpSuspiciousNameCombinationInspection */
/*
 *  "MYKEC.PHP"
 *  Version 2024.04.27
 *  July 7, 2000, thru April 27, 2024
 *
 *  Copyright © 2000-2024 Myke Carter
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

     #  DON'T PANIC! ... Uncomment the following line to disable the entire system:
     #  die('This site is temporarily unavailable due to scheduled maintenance.<br />We apologize for any inconvenience this may cause.');

     #  ini_set('display_errors', TRUE);
     #  ini_set('error_reporting', E_ALL);

    if( !defined( 'NL' ))  define( 'NL', "\n" );

      #################
     # HTML WRAPPERS #
    #################

    function  Abbr             ($x='', $y='')           { echo "<abbr".$x.">$y</abbr>"; }
    function  Address          ($x,    $y='')           { echo "<address".$x.">$y</address>"; }
    function  Anchor           ($x,    $y='')           { echo "<a".$x.">$y</a>"; }
    function  Area             ($x)                     { echo "<area".$x." />"; }
    function  Article          ($x='', $y='')           { echo NL.NL."  <article".$x.">$y</article>"; }
    function  Aside            ($x='', $y='')           { echo NL.NL."  <aside".$x.">$y</aside>"; }
    function  Audio            ($x='', $y='')           { echo NL."  <audio".$x.">$y</audio>"; }
    function  B                ($x='', $y='')           { echo "<b".$x.">$y</b>"; }
    function  Bdi              ($x='', $y='')           { echo "<bdi".$x.">$y</bdi>"; }
    function  Bdo              ($x='', $y='')           { echo "<bdo".$x.">$y</bdo>"; }
    function  BR               ()                       { echo "<br />".NL; }
    function  BRBR             ()                       { echo NL."  <br /> <br />".NL; }
    function  Basefont         ($x)                     { echo NL."<basefont".$x.">"; }
    function  Button           ($x='', $y='')           { echo NL."  <button".$x.">$y</button>"; }
    function  Canonical        ($href='')               { LinkRef(rel('canonical').href($href)); }
    function  Canvas           ($x='', $y='')           { echo NL."  <canvas".$x.">$y</canvas>"; }
    function  Checkbox         ($x,    $y)              { echo NL."      <input type=\"checkbox\"".$x." />".$y; }
    function  Cite             ($x)                     { echo "<cite>".$x."</cite>"; }
    function  Comment          ($x='', $pre=0, $post=0) {
        for ( $i = -2; $i < $pre;  ++$i ) { N(); }
        echo "<!-- $x -->";
        for ( $i = -1; $i < $post; ++$i ) { N(); }
    }
    function  Datalist         ($x='', $y='')           { echo NL.NL."<datalist".$x.">$y</datalist>"; }
    function  Dfn              ($x='', $y='')           { echo "<dfn".$x.">$y</dfn>"; }
    function  DList            ($x='', $y='')           { echo NL.NL."<dl".$x.">$y</dl>"; }
    function  DT               ($x='', $y='')           { echo NL.NL."    <dt".$x.">$y</dt>"; }
    function  DD               ($x='', $y='')           { echo NL.NL."        <dd".$x.">$y</dd>"; }
    function  Details          ($x='', $y='')           { echo NL.NL."  <details".$x.">$y</details>"; }
    function  Dialog           ($x='', $y='')           { echo NL.NL."  <dialog".$x.">$y</dialog>"; }
    function  Div              ($x='', $y='')           { echo NL.NL."  <div".$x.">$y</div>"; }
    function  DocTypeHTML5     ($x='')                  { echo "<!DOCTYPE html".$x.">".NL; }
    function  DocTypeXFrameset ()                       { echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Frameset//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd\">".NL.NL; }
    function  DropAnchor       ($x,    $y='')           { echo NL."<div".css($y)."><a id=\"".$x."\"></a></div>".NL; }
    function  Embed            ($x='')                  { echo NL."    <embed".$x." />"; }
    function  Favicon          ($href='')               { LinkRef(rel('shortcut icon').href($href)); }
    function  FB               ($x,    $y='')           { echo NL."<fb:".$x." ".$y."></fb:".$x.">".NL; }  #  FACEBOOK
    function  fbLike           ($x='')                  { echo "<fb:like".$x." />"; }                     #  FACEBOOK
    function  Fieldset         ($x,    $y)              { echo NL."  <fieldset".$x.">".$y."</fieldset>"; }
    function  Figcaption       ($x='', $y='')           { echo NL."<figcaption".$x.">$y</figcaption>"; }
    function  Figure           ($x='', $y='')           { echo NL.NL."  <figure".$x.">$y</figure>"; }
    function  Form             ($x='', $y='')           { echo ($y > '') ? NL."  <form".$x.">".$y."</form>" : NL."  <form>$x</form>"; }
    function  Footer           ($x='', $y='')           { echo NL.NL."  <footer".$x.">$y</footer>"; }
    function  H                ($x='2', $y='', $z='')   { echo "<h".$x.$y.">".$z."</h".$x.">"; }
    function  HeaderDiv        ($x='', $y='')           { echo NL.NL."  <header".$x.">$y</header>"; }
    function  HR               ($x='')                  { echo NL."<hr".$x.">".NL; }
    function  Hyperlink        ($x,    $y)              { echo "<a".$x.">".$y."</a>"; }
    function  Iframe           ($x)                     { echo NL."<iframe".$x."></iframe>"; }
    function  Image            ($x)                     { echo "<img".$x." />"; }
    function  Input            ($x='', $y='')           { echo ($y > '') ? NL."    <input".$x." />$y" : NL."    <input".$x." />"; }
    function  Legend           ($x,    $y)              { echo NL."  <legend".$x.">".$y."</legend>"; }
    function  LI               ($x)                     { echo NL."    <li>".$x."</li>"; }
    function  LI2              ($x='', $y='')           { echo NL."  <li".$x.'>'.trim($y).'</li>'; }
    function  LinkRef          ($x)                     { echo NL."    <link".$x." />"; }
    function  LinkCSS          ($href, $media='')       { LinkRef(rel('stylesheet').type('text/css').href($href).media($media)); }
    function  LinkJS           ($src)                   { Script(type('text/javascript').src($src)); }
    function  Main             ($x='', $y='')           { echo NL.NL."  <main".$x.">$y</main>"; }
    function  Mark             ($x='', $y='')           { echo NL.NL."  <mark".$x.">$y</mark>"; }
    function  Menuitem         ($x,    $y)              { echo NL."  <menuitem".$x.">".$y."</menuitem>"; }
    function  Meta             ($x)                     { echo NL."    <meta".$x." />"; }
    function  Meter            ($x='', $y='')           { echo NL.NL."  <meter".$x.">$y</meter>"; }
    function  N                ()                       { echo NL; }
    function  Nav              ($x='', $y='')           { echo NL.NL."  <nav".$x.">$y</nav>"; }
    function  NBSP             ()                       { echo " &nbsp;"; }
    function  OL               ($x,    $y)              { echo NL."  <ol".$x.">".$y.NL."  </ol>"; }
    function  Optgroup         ($x,    $y)              { echo NL."      <optgroup".$x.">" . $y . "</optgroup>"; }
    function  Option           ($x,    $y)              { echo NL."        <option".$x.">" . $y . "</option>"; }
    function  Output           ($x='', $y='')           { echo NL.NL."  <output".$x.">$y</output>"; }
    function  P                ($x='', $y='')           { echo NL.NL."  <p".$x.">$y</p>"; }
    function  Pre              ($x)                     { echo NL."<pre>".NL.$x.NL."</pre>"; }
    function  Progress         ($x='', $y='')           { echo NL.NL."  <progress".$x.">$y</progress>"; }
    function  Q                ($x='', $y='')           { echo "<q".$x.">$y</q>"; }
    function  Section          ($x='', $y='')           { echo NL.NL."  <section".$x.">$y</section>"; }
    function  Span             ($x='', $y='')           { echo NL.NL."  <span".$x.">$y</span>"; }
    function  Summary          ($x='', $y='')           { echo NL.NL."  <summary".$x.">$y</summary>"; }
    function  Radio            ($x,    $y)              { echo NL."      <input type=\"radio\"".$x." />".$y; }
    function  RP               ($x,    $y='')           { echo NL."<rp".$x.">$y</rp>"; }
    function  RT               ($x,    $y='')           { echo NL."<rt".$x.">$y</rt>"; }
    function  Ruby             ($x,    $y='')           { echo NL."<ruby".$x.">$y</ruby>"; }
    function  Script           ($x,    $y='', $z='')    { echo NL.$z."<script".$x.">$y</script>"; }
    function  Select           ($x,    $y)              { echo NL."<select".$x.">$y</select>"; }
    function  Source           ($x)                     { echo NL."<source".$x." />"; }
    function  Stylesheet       ($x,    $y='')           { echo NL."<style".type('text/css').$x.">$y</style>"; }
    function  Svg              ($x='', $y='')           { echo NL."  <svg".$x.">$y</svg>"; }
    function  Table            ($x='', $y='')           { echo NL.NL."  <table".$x.">$y</table>"; }
    function  TextArea         ($x,    $y)              { echo NL."  <textarea".$x.">".$y."</textarea>"; }
    function  TimeSpan         ($x='', $y='')           { echo NL.NL."  <time".$x.">$y</time>"; }
    function  Title            ($x)                     { echo NL."    <title>".$x."</title>"; }
    function  Track            ($x)                     { echo NL."<track".$x." />"; }
    function  TR               ($x='', $y='')           { echo ($y > '') ? NL."  <tr".$x.">".$y."</tr>"   : NL."  <tr>$x</tr>"; }
    function  TH               ($x='', $y='')           { echo ($y > '') ? NL."    <th".$x.">".$y."</th>" : NL."    <th>$x</th>"; }
    function  TD               ($x='', $y='')           { echo ($y > '') ? NL."    <td".$x.">".$y."</td>" : NL."    <td>$x</td>"; }
    function  U                ()                       { echo "<u>"; }
    function  UL               ($x,    $y)              { echo NL."  <ul".$x.">".$y.NL."  </ul>"; }
    function  Video            ($x='', $y='')           { echo NL."  <video".$x.">$y</video>"; }
    function  Wbr              ()                       { echo "<wbr>"; }

      ################
     # HTML OPENERS #
    ################

    function  OpenAbbr       ($x)     { echo "<abbr".$x.">"; }
    function  OpenAddress    ($x)     { echo "<address".$x.">"; }
    function  OpenAnchor     ($x)     { echo "<a".$x.">"; }
    function  OpenArticle    ($x='')  { echo NL."  <article".$x.">"; }
    function  OpenAside      ($x='')  { echo NL."  <aside".$x.">"; }
    function  OpenAudio      ($x='')  { echo NL."  <audio".$x.">"; }
    function  OpenB          ()       { echo "<b>"; }
    function  OpenBdi        ()       { echo "<bdi>"; }
    function  OpenBdo        ()       { echo "<bdo>"; }
    function  OpenBody       ($x='')  { echo NL."  <body".$x.">"; }
    function  OpenBlockquote ()       { echo NL."  <blockquote>"; }
    function  OpenButton     ($x='')  { echo NL."  <button".$x.">"; }
    function  OpenCanvas     ($x='')  { echo NL."  <canvas".$x.">"; }
    function  OpenCite       ()       { echo "<cite>"; }
    function  OpenComment    ()       { echo NL."<!--".NL; }
    function  OpenDetails    ($x='')  { echo NL."  <details".$x.">"; }
    function  OpenDfn        ($x)     { echo "<dfn".$x.">"; }
    function  OpenDialog     ($x='')  { echo NL."  <dialog".$x.">"; }
    function  OpenDiv        ($x='')  { echo NL."  <div".$x.">"; }
    function  OpenDatalist   ($x='')  { echo NL."<datalist".$x.">"; }
    function  OpenDL         ($x='')  { echo NL."<dl".$x.">"; }
    function  OpenDT         ($x='')  { echo NL."    <dt".$x.">"; }
    function  OpenDD         ($x='')  { echo NL."        <dd".$x.">"; }
    function  OpenFieldset   ($x)     { echo NL."  <fieldset".$x.">"; }
    function  OpenFigcaption ($x='')  { echo NL."  <figcaption".$x.">"; }
    function  OpenFigure     ($x='')  { echo NL."  <figure".$x.">"; }
    function  OpenFont       ($x)     { echo "<font".$x.">"; }
    function  OpenForm       ($x='')  { echo NL."    <form".$x.">"; }
    function  OpenFooter     ($x='')  { echo NL."  <footer".$x.">"; }
    function  OpenFrame      ($x)     { echo NL."    <frame".$x.">"; }
    function  OpenFrameset   ($x)     { echo NL."    <frameset".$x.">"; }
    function  OpenJavaScript ()       { echo NL."    <script".type('text/javascript').">".NL; }
    function  OpenKeygen     ($x='')  { echo NL."  <keygen".$x.">"; }
    function  OpenH          ($x)     { echo NL."<h".$x.">"; }
    function  OpenHTML       ($x='')  { echo "<html".$x.">".NL; }
    function  OpenHead       ()       { echo NL."  <head>"; }
    function  OpenHeader     ($x='')  { echo NL."  <header".$x.">"; }
    function  OpenInput      ($x)     { echo NL."    <input".$x.">"; }
    function  OpenLegend     ($x)     { echo NL."  <legend".$x.">"; }
    function  OpenLI         ($x)     { echo "<li".$x.">"; }
    function  OpenMain       ($x='')  { echo NL."  <main".$x.">"; }
    function  OpenMark       ($x='')  { echo NL."  <mark".$x.">"; }
    function  OpenMap        ($x='')  { echo NL."  <map".$x.">"; }
    function  OpenMenuitem   ($x='')  { echo NL."  <menuitem".$x.">"; }
    function  OpenMeter      ($x='')  { echo NL."  <meter".$x.">"; }
    function  OpenNav        ($x='')  { echo NL."  <nav".$x.">"; }
    function  OpenOL         ($x='')  { echo NL.NL."  <ol".$x.">".NL; }
    function  OpenOptgroup   ($x='')  { echo NL."  <optgroup".$x.">"; }
    function  OpenOutput     ($x='')  { echo NL."  <output".$x.">"; }
    function  OpenP          ($x='')  { echo NL.NL."  <p".$x.">".NL; }
    function  OpenPre        ($x='')  { echo NL."  <pre".$x.">".NL; }
    function  OpenProgress   ($x='')  { echo NL."  <progress".$x.">"; }
    function  OpenQ          ()       { echo "<q>"; }
    function  OpenRP         ($x)     { echo NL."<rp".$x.">\n<!--".NL; }
    function  OpenRT         ($x)     { echo NL."<rt".$x.">\n<!--".NL; }
    function  OpenRuby       ($x)     { echo NL."<ruby".$x.">\n<!--".NL; }
    function  OpenScript     ($x)     { echo NL."<script".$x.">".NL; }
    function  OpenSection    ($x)     { echo NL."  <section".$x.">"; }
    function  OpenSelect     ($x)     { echo NL."      <select".$x.">"; }
    function  OpenSpan       ($x='')  { echo NL.NL."  <span".$x.">"; }
    function  OpenStyle      ($x='')  { echo NL."  <style".type('text/css').$x.">"; }
    function  OpenSummary    ($x='')  { echo NL.NL."  <summary".$x.">"; }
    function  OpenSvg        ($x='')  { echo NL."  <svg".$x.">"; }
    function  OpenTable      ($x='')  { echo NL.NL."  <table".$x.">"; }
    function  OpenTextarea   ($x)     { echo NL."    <textarea".$x.">"; }
    function  OpenTime       ($x='')  { echo NL.NL."  <time".$x.">"; }
    function  OpenTR         ($x='')  { echo NL."    <tr".$x.">"; }
    function  OpenTH         ($x='')  { echo NL."      <th".$x.">"; }
    function  OpenTD         ($x='')  { echo NL."      <td".$x.">"; }
    function  OpenUL         ($x='')  { echo NL.NL."  <ul".$x.">"; }
    function  OpenVideo      ($x='')  { echo NL."  <video".$x.">"; }

      ################
     # HTML CLOSERS #
    ################

    function  CloseAbbr()        { echo "</abbr>"; }
    function  CloseAddress()     { echo "</address>"; }
    function  CloseAnchor()      { echo "</a>"; }
    function  CloseArticle()     { echo NL."  </article>"; }
    function  CloseAside()       { echo NL."  </aside>"; }
    function  CloseAudio()       { echo NL."  </audio>"; }
    function  CloseB()           { echo "</b>"; }
    function  CloseBdi()         { echo "</bdi>"; }
    function  CloseBdo()         { echo "</bdo>"; }
    function  CloseBlockquote()  { echo NL."  </blockquote>"; }
    function  CloseBody()        { echo NL."  </body>".NL; }
    function  CloseButton()      { echo NL."  </button>"; }
    function  CloseCanvas()      { echo NL."  </canvas>"; }
    function  CloseCite()        { echo "</cite>"; }
    function  CloseComment()     { echo NL."-->"; }
    function  CloseDatalist()    { echo "</datalist>"; }
    function  CloseDetails()     { echo NL."  </details>"; }
    function  CloseDfn()         { echo "</dfn>"; }
    function  CloseDialog()      { echo NL."  </dialog>"; }
    function  CloseDiv()         { echo "</div>"; }
    function  CloseDL()          { echo "</dl>"; }
    function  CloseDT()          { echo "</dt>"; }
    function  CloseDD()          { echo "</dd>"; }
    function  CloseFieldset()    { echo NL."  </fieldset>"; }
    function  CloseFigcaption()  { echo NL."  </figcaption>"; }
    function  CloseFigure()      { echo NL."  </figure>"; }
    function  CloseFont()        { echo "</font>"; }
    function  CloseFooter()      { echo NL."  </footer>"; }
    function  CloseForm()        { echo NL."    </form>"; }
    function  CloseFrameset()    { echo NL."    </frameset>"; }
    function  CloseJavaScript()  { echo NL."// -->\n    </script>".NL; }
    function  CloseKeygen()      { echo NL."  </keygen>"; }
    function  CloseH($x)         { echo "</h".$x.">"; }
    function  CloseHeader()      { echo NL."  </header>"; }
    function  CloseHTML()        { echo NL."</html>".NL; }
    function  CloseHead()        { echo NL."  </head>".NL; }
    function  CloseInput()       { echo "</input>"; }
    function  CloseLegend()      { echo NL."  </legend>"; }
    function  CloseLI()          { echo "</li>".NL; }
    function  CloseMain()        { echo NL."  </main>"; }
    function  CloseMark()        { echo "</mark>".NL; }
    function  CloseMap()         { echo NL."  </map>"; }
    function  CloseMenuitem()    { echo NL."  </menuitem>"; }
    function  CloseMeter()       { echo NL."  </meter>"; }
    function  CloseNav()         { echo NL."  </nav>"; }
    function  CloseOptgroup()    { echo NL."  </optgroup>"; }
    function  CloseOL()          { echo NL."  </ol>"; }
    function  CloseOutput()      { echo NL."  </output>"; }
    function  CloseP()           { echo "</p>".NL; }
    function  ClosePre()         { echo NL."  </pre>"; }
    function  CloseProgress()    { echo NL."  </progress>"; }
    function  CloseQ()           { echo "</q>"; }
    function  CloseRP()          { echo NL."// -->\n</rp>".NL; }
    function  CloseRT()          { echo NL."// -->\n</rt>".NL; }
    function  CloseRuby()        { echo NL."// -->\n</ruby>".NL; }
    function  CloseScript()      { echo NL."// -->\n</script>".NL; }
    function  CloseSelect()      { echo NL."    </select>"; }
    function  CloseSection()     { echo NL."  </section>"; }
    function  CloseSpan()        { echo "</span>".NL; }
    function  CloseStyle()       { echo NL."  </style>"; }
    function  CloseSummary()     { echo "</summary>".NL; }
    function  CloseSvg()         { echo NL."  </svg>"; }
    function  CloseTable()       { echo NL."  </table>"; }
    function  CloseTextarea()    { echo "</textarea>"; }
    function  CloseTime()        { echo "</time>".NL; }
    function  CloseTR()          { echo NL."    </tr>"; }
    function  CloseTH()          { echo "</th>"; }
    function  CloseTD()          { echo "</td>"; }
    function  CloseU()           { echo "</u>"; }
    function  CloseUL()          { echo NL."  </ul>"; }
    function  CloseVideo()       { echo NL."  </video>"; }

      #################################################
     # SPECIAL CASES : THESE RETURN RATHER THAN ECHO #
    #################################################

    function  alt       ($x=''):  string  { return " alt=\"".trim($x)."\""             ; }
    function  nameid    ($x=''):  string  { return name($x).id($x)                     ; }
    function  status    ($x=" "): string  { return " window.status='$x'; return true;" ; }
    function  value     ($x=''):  string  { return " value=\"".trim($x)."\""           ; }
    function  other     ($x=''):  string  { return trim($x) > ""  ? " $x" : ""         ; }
    function  rowspan   ($x='1'): string  { return trim($x) > "1" ? " rowspan=\"".trim($x)."\"" : "" ; }
    function  colspan   ($x='1'): string  { return trim($x) > "1" ? " colspan=\"".trim($x)."\"" : "" ; }
    function  sPos      ($x=''):  string  { return sPosition($x); }
    function  sPosition ($x=''):  string  {
        switch ( substr ($x,0,1)) {
            case 'a': return "position: absolute;";
            case 'f': return "position: fixed;"   ;
            case 'r': return "position: relative;";
            default: return "";
        }
    }
    function  mailto(string $address='', string $name=''): string  {
        return anchorvar( href( 'mailto:'.(!empty($name) ? $name.' ' : '').'&lt;'.$address.'&gt;' ), $address );
    }

      ############################################################################
     # VAR PARAMETERS: THESE FUNCTIONS RETURN VALUES AS OPPOSED TO ECHOING THEM #
    ############################################################################

    function  abbrvar       ($x='', $y=''       ): string  { return "<abbr".$x.">$y</abbr>"; }
    function  addressvar    ($x='', $y=''       ): string  { return "<address".$x.">$y</address>"; }
    function  anchorvar     ($x='', $y=''       ): string  { return "<a".$x.">$y</a>"; }
    function  articlevar    ($x='', $y=''       ): string  { return NL."<article".$x.">$y\n</article>"; }
    function  asidevar      ($x='', $y=''       ): string  { return NL."<aside".$x.">$y\n</aside>"; }
    function  audiovar      ($x='', $y=''       ): string  { return NL."<audio".$x.">$y</audio>"; }
    function  bvar          ($x='', $y=''       ): string  { return "<b".$x.">$y</b>"; }
    function  bdivar        ($x='', $y=''       ): string  { return "<bdi".$x.">$y</bdi>"; }
    function  bdovar        ($x='', $y=''       ): string  { return "<bdo".$x.">$y</bdo>"; }
    function  blockquotevar ($x='', $y=''       ): string  { return "<blockquote".$x.">$y</blockquote>"; }
    function  bodyvar       ($x='', $y=''       ): string  { return NL."<body".$x.">$y\n</body>"; }
    function  buttonvar     ($x='', $y=''       ): string  { return NL."<button".$x.">$y</button>"; }
    function  canvasvar     ($x='', $y=''       ): string  { return NL."<canvas".$x.">$y</canvas>".NL; }
    function  checkboxvar   ($x,    $y          ): string  { return NL."      <input".type('checkbox').$x." />".$y; }
    function  checkboxRvar  ($x,    $y          ): string  { return NL."      ".$y."<input".type('checkbox').$x." />"; }
    function  citevar       ($x='', $y=''       ): string  { return "<cite".$x.">$y</cite>"; }
    function  dfnvar        ($x='', $y=''       ): string  { return "<dfn".$x.">$y</dfn>"; }
    function  jscommentvar  ($x=''              ): string  { return NL."<!--\n    $x\n// -->".NL; }
    function  commentvar    ($x=''              ): string  { return NL."<!--\n    $x\n-->".NL; }
    function  datalistvar   ($x='', $y=''       ): string  { return NL."<datalist".$x.">$y</datalist>".NL; }
    function  detailsvar    ($x='', $y=''       ): string  { return "<details".$x.">$y</details>"; }
    function  dialogvar     ($x='', $y=''       ): string  { return "<dialog".$x.">$y</dialog>"; }
    function  divvar        ($x='', $y=''       ): string  { return NL."<div".$x.">$y</div>"; }
    function  dlvar         ($x='', $y=''       ): string  { return "<dl".$x.">$y</dl>"; }
    function  dtvar         ($x='', $y=''       ): string  { return "    <dt".$x.">$y</dt>"; }
    function  ddvar         ($x='', $y=''       ): string  { return "        <dd".$x.">$y</dd>"; }
    function  echovar       ($x,    $y          )          { echo $x." = \"".$y."\"<p>".NL; }
    function  fbLikevar     ($x=''              ): string  { return "<fb:like".$x." />"; }  #  FACEBOOK
    function  fieldsetvar   ($x=''              ): string  { return NL."<fieldset".$x."></fieldset>"; }
    function  figcaptionvar ($x='', $y=''       ): string  { return NL."<figcaption".$x.">$y</figcaption>"; }
    function  figurevar     ($x='', $y=''       ): string  { return NL."<figure".$x.">$y\n</figure>"; }
    function  footervar     ($x='', $y=''       ): string  { return NL."<footer".$x.">$y\n</footer>"; }
    function  formvar       ($x='', $y=''       ): string  { return "<form".$x.">$y</form>"; }
    function  headvar       ($x='', $y=''       ): string  { return NL."<head".$x.">$y\n</head>"; }
    function  headervar     ($x='', $y=''       ): string  { return NL."<header".$x.">$y\n</header>"; }
    function  hvar          ($x='2',$y='', $z=''): string  { return "<h".$x.$y.">".$z."</h".$x.">"; }
    function  htmlvar       ($x='', $y=''       ): string  { return "<html".$x.">$y\n</html>"; }
    function  iframevar     ($x=''              ): string  { return NL."<iframe".$x."></iframe>"; }
    function  imagevar      ($x=''              ): string  { return "<img".$x." />"; }
    function  inputvar      ($x='', $y=''       ): string  { return NL."      <input".$x." />$y"; }
    function  javascriptvar ($x='', $y=''       ): string  { return NL."    <script".type('text/javascript')."$x>$y    </script>"; }
    function  labelvar      ($x='', $y=''       ): string  { return "<label".$x.">$y</label>"; }
    function  legendvar     ($x=''              ): string  { return NL."<legend".$x."></legend>"; }
    function  livar         ($x                 ): string  { return NL."<li>".$x."</li>"; }
    function  li2var        ($x='', $y=''       ): string  { return NL."<li".$x.">$y</li>"; }
    function  linkrefvar    ($x                 ): string  { return NL."    <link".$x." />"; }
    function  linkcssvar    ($href, $xtra='', $media=''): string  {
        return NL."    <link".rel('stylesheet').type('text/css').$xtra.href($href).media($media)." />";
    }
    function  linkjsvar     ($src,  $xtra=''    ): string  {
        return NL."    <script".type('text/javascript').$xtra.src($src)."></script>";
    }
    function  mainvar       ($x='', $y=''       ): string  { return NL."<main".$x.">$y\n</main>"; }
    function  menuitemvar   ($x='', $y=''       ): string  { return NL."<menuitem".$x.">$y\n</menuitem>"; }
    function  markvar       ($x='', $y=''       ): string  { return "<mark".$x.">$y</mark>"; }
    function  metervar      ($x='', $y=''       ): string  { return NL."<meter".$x.">$y\n</meter>"; }
    function  navvar        ($x='', $y=''       ): string  { return NL."<nav".$x.">$y\n</nav>"; }
    function  nvar          (                   ): string  { return NL; }
    function  optgroupvar   ($x,    $y          ): string  { return NL."      <optgroup".$x.">" . $y . "</optgroup>"; }
    function  optionvar     ($x,    $y          ): string  { return NL."        <option".$x.">" . $y . "</option>"; }
    function  olvar         ($x='', $y=''       ): string  { return NL."<ol".$x.">$y</ol>"; }
    function  outputvar     ($x='', $y=''       ): string  { return NL."<output".$x.">$y\n</output>"; }
    function  pvar          ($x='', $y=''       ): string  { return "<p".$x.">$y</p>"; }
    function  progressvar   ($x='', $y=''       ): string  { return NL."<progress".$x.">$y\n</progress>"; }
    function  qvar          ($x='', $y=''       ): string  { return "<q".$x.">$y</q>"; }
    function  radiovar      ($x,    $y          ): string  { return NL."      <input".type('radio').$x." />".$y; }
    function  radioRvar     ($x,    $y          ): string  { return NL."      ".$y."<input".type('radio').$x." />"; }
    function  rpvar         ($x='', $y=''       ): string  { return NL."<rp".$x.">$y</rp>".NL; }
    function  rtvar         ($x='', $y=''       ): string  { return NL."<rt".$x.">$y</rt>".NL; }
    function  rubyvar       ($x='', $y=''       ): string  { return NL."<ruby".$x.">$y</ruby>".NL; }
    function  scriptvar     ($x='', $y=''       ): string  { return NL."<script".$x.">$y</script>".NL; }
    function  sectionvar    ($x='', $y=''       ): string  { return NL."<section".$x.">$y\n</section>"; }
    function  selectvar     ($x,    $y          ): string  { return NL."<select".$x.">$y</select>"; }
    function  sourcevar     ($x=''              ): string  { return NL."<source".$x." />"; }
    function  spanvar       ($x='', $y=''       ): string  { return "<span".$x.">$y</span>"; }
    function  stylevar      ($x='', $y=''       ): string  { return NL."<style".$x.">\n<!--\n$y\n// -->\n</style>"; }
    function  stylesheetvar ($x='', $y=''       ): string  { return NL."    <style".type('text/css')."$x>$y    </style>"; }
    function  summaryvar    ($x='', $y=''       ): string  { return "<summary".$x.">$y</summary>"; }
    function  svgvar        ($x='', $y=''       ): string  { return NL."<svg".$x.">$y</svg>".NL; }
    function  tablevar      ($x='', $y=''       ): string  { return NL."<table".$x.">$y</table>"; }
    function  textareavar   ($x='', $y=''       ): string  { return NL."      <textarea".$x.">$y</textarea>"; }
    function  timevar       ($x='', $y=''       ): string  { return "<time".$x.">$y</time>"; }
    function  titlevar      ($x                 ): string  { return NL."    <title>".$x."</title>"; }
    function  trackvar      ($x=''              ): string  { return NL."<track".$x." />"; }
    function  trvar         ($x='', $y=''       ): string  { return NL."  <tr".$x.">$y</tr>"; }
    function  thvar         ($x='', $y=''       ): string  { return NL."    <th".$x.">$y</th>"; }
    function  tdvar         ($x='', $y=''       ): string  { return NL."    <td".$x.">$y</td>"; }
    function  ulvar         ($x='', $y=''       ): string  { return NL."<ul".$x.">$y</ul>"; }
    function  videovar      ($x='', $y=''       ): string  { return NL."<video".$x.">$y</video>"; }

      ###########################################################
     # HTML & CSS STANDARD, YES/NO, AND "px"-DEFAULT FUNCTIONS #
    ###########################################################

    function  XHTML_std ( $attribute, $value ): string  { return trim($value) > '' ? " $attribute=\"".trim($value)."\"" : '' ; }
    function  XHTML_nz  ( $attribute, $value ): string  { return ( $value != "0" ) ?   XHTML_std( $attribute, $value )  : '' ; }
    function    CSS_std ( $attribute, $value ): string  { return trim($value) > '' ? " $attribute: ".trim($value).";"   : '' ; }
    function  XHTML_yn  ( $attribute, $value ): string  { return preg_match("/^[Yy]/" , $value ) ? " $attribute=\"$attribute\""  : '' ; }
    function    CSS_px  ( $attribute, $value ): string  {
        switch (trim($value)) {
            case "" : return '' ;
            case "0": return " $attribute: 0;";
            default : return preg_match("/[0-9]$/", $value )
                                ? " $attribute: $value".'px;'
                                : " $attribute: $value;";
        }
    }
    function  acceptcharset     ($x='')               : string  { return XHTML_std ( "accept-charset",        $x ) ; }
    function  action            ($x='')               : string  { return XHTML_std ( "action",                $x ) ; }
    function  align             ($x='left')           : string  { return XHTML_std ( "align",                 $x ) ; }
    function  alink             ($x='')               : string  { return XHTML_std ( "alink",                 $x ) ; }
    function  data              ($name='', $value='') : string  { return XHTML_std ( "data-$name",        $value ) ; }
    function  autocomplete      ($x='on')             : string  { return XHTML_std ( "autocomplete",          $x ) ; }
    function  autoplay          ($x='Y')              : string  { return XHTML_yn  ( "autoplay",              $x ) ; }
    function  background        ($x='')               : string  { return XHTML_std ( "background",            $x ) ; }
    function  bgcolor           ($x='')               : string  { return XHTML_std ( "bgcolor",               $x ) ; }
    function  border            ($x='0')              : string  { return XHTML_std ( "border",                $x ) ; }
    function  bordercolor       ($x='')               : string  { return XHTML_std ( "bordercolor",           $x ) ; }
    function  bordercolorlight  ($x='')               : string  { return XHTML_std ( "bordercolorlight",      $x ) ; }
    function  bordercolordark   ($x='')               : string  { return XHTML_std ( "bordercolordark",       $x ) ; }
    function  cellpadding       ($x='0')              : string  { return XHTML_std ( "cellpadding",           $x ) ; }
    function  cellspacing       ($x='0')              : string  { return XHTML_std ( "cellspacing",           $x ) ; }
    function  charset           ($x='')               : string  { return XHTML_std ( "charset",               $x ) ; }
    function  cols              ($x='')               : string  { return XHTML_std ( "cols",                  $x ) ; }
    function  color             ($x='')               : string  { return XHTML_std ( "color",                 $x ) ; }
    function  coords            ($x='')               : string  { return XHTML_std ( "coords",                $x ) ; }
    function  content           ($x='')               : string  { return XHTML_std ( "content",               $x ) ; }
    function  css               ($x='')               : string  { return XHTML_std ( "class",                 $x ) ; }
    function  direction         ($x='')               : string  { return XHTML_std ( "dir",                   $x ) ; }
    function  enctype           ($x='url-encoded')    : string  { return XHTML_std ( "enctype",               $x ) ; }
    function  face              ($x='')               : string  { return XHTML_std ( "face",                  $x ) ; }
    function  frameborder       ($x='')               : string  { return XHTML_std ( "frameborder",           $x ) ; }
    function  framespacing      ($x='')               : string  { return XHTML_std ( "framespacing",          $x ) ; }
    function  height            ($x='')               : string  { return XHTML_nz  ( "height",                $x ) ; }
    function  href              ($x='')               : string  { return XHTML_std ( "href",                  $x ) ; }
    function  hspace            ($x='')               : string  { return XHTML_std ( "hspace",                $x ) ; }
    function  http_equiv        ($x='')               : string  { return XHTML_std ( "http-equiv",            $x ) ; }
    function  id                ($x='')               : string  { return XHTML_std ( "id",                    $x ) ; }
    function  kind              ($x='')               : string  { return XHTML_std ( "kind",                  $x ) ; }
    function  label             ($x='')               : string  { return XHTML_std ( "label",                 $x ) ; }
    function  labelfor          ($x='')               : string  { return XHTML_std ( "for",                   $x ) ; }
    function  labelform         ($x='')               : string  { return XHTML_std ( "form",                  $x ) ; }
    function  lang              ($x='')               : string  { return XHTML_std ( "lang",                  $x ) ; }
    function  language          ($x='')               : string  { return XHTML_std ( "language",              $x ) ; }
    function  leftmargin        ($x='')               : string  { return XHTML_std ( "leftmargin",            $x ) ; }
    function  links             ($x='')               : string  { return XHTML_std ( "links",                 $x ) ; }
    function  marginheight      ($x='')               : string  { return XHTML_std ( "marginheight",          $x ) ; }
    function  marginwidth       ($x='')               : string  { return XHTML_std ( "marginwidth",           $x ) ; }
    function  maxlength         ($x='')               : string  { return XHTML_std ( "maxlength",             $x ) ; }
    function  media             ($x='')               : string  { return XHTML_std ( "media",                 $x ) ; }
    function  method            ($x='GET')            : string  { return XHTML_std ( "method",                $x ) ; }
    function  name              ($x='')               : string  { return XHTML_std ( "name",                  $x ) ; }
    function  onBlur            ($x='')               : string  { return XHTML_std ( "onblur",                $x ) ; }
    function  onChange          ($x='')               : string  { return XHTML_std ( "onchange",              $x ) ; }
    function  onClick           ($x='')               : string  { return XHTML_std ( "onclick",               $x ) ; }
    function  onDblClick        ($x='')               : string  { return XHTML_std ( "ondblclick",            $x ) ; }
    function  onDragover        ($x='')               : string  { return XHTML_std ( "ondragover",            $x ) ; }
    function  onDragStart       ($x='')               : string  { return XHTML_std ( "ondragstart",           $x ) ; }
    function  onDrop            ($x='')               : string  { return XHTML_std ( "ondrop",                $x ) ; }
    function  onKeypress        ($x='')               : string  { return XHTML_std ( "onkeypress",            $x ) ; }
    function  onLoad            ($x='')               : string  { return XHTML_std ( "onload",                $x ) ; }
    function  onFocus           ($x='')               : string  { return XHTML_std ( "onfocus",               $x ) ; }
    function  onMouseOut        ($x='')               : string  { return XHTML_std ( "onmouseout",            $x ) ; }
    function  onMouseOver       ($x='')               : string  { return XHTML_std ( "onmouseover",           $x ) ; }
    function  onMouseUp         ($x='')               : string  { return XHTML_std ( "onmouseup",             $x ) ; }
    function  onReset           ($x='')               : string  { return XHTML_std ( "onreset",               $x ) ; }
    function  onSubmit          ($x='')               : string  { return XHTML_std ( "onsubmit",              $x ) ; }
    function  outputfor         ($x='')               : string  { return XHTML_std ( "for",                   $x ) ; }
    function  placeholder       ($x='')               : string  { return XHTML_std ( "placeholder",           $x ) ; }
    function  pluginspage       ($x='')               : string  { return XHTML_std ( "pluginspage",           $x ) ; }
    function  property          ($x='')               : string  { return XHTML_std ( "property",              $x ) ; }
    function  rel               ($x='')               : string  { return XHTML_std ( "rel",                   $x ) ; }
    function  rows              ($x='')               : string  { return XHTML_std ( "rows",                  $x ) ; }
    function  scrolling         ($x='')               : string  { return XHTML_std ( "scrolling",             $x ) ; }
    function  shape             ($x='')               : string  { return XHTML_std ( "shape",                 $x ) ; }
    function  size              ($x='')               : string  { return XHTML_std ( "size",                  $x ) ; }
    function  src               ($x='')               : string  { return XHTML_std ( "src",                   $x ) ; }
    function  srclang           ($x='en')             : string  { return XHTML_std ( "srclang",               $x ) ; }
    function  start             ($x='')               : string  { return XHTML_std ( "start",                 $x ) ; }
    function  style             ($x='')               : string  { return XHTML_std ( "style",                 $x ) ; }
    function  tabindex          ($x='')               : string  { return XHTML_std ( "tabindex",              $x ) ; }
    function  target            ($x='_self')          : string  { return XHTML_std ( "target",                $x ) ; }
    function  text              ($x='')               : string  { return XHTML_std ( "text",                  $x ) ; }
    function  topmargin         ($x='')               : string  { return XHTML_std ( "topmargin",             $x ) ; }
    function  type              ($x='')               : string  { return XHTML_std ( "type",                  $x ) ; }
    function  usemap            ($x='')               : string  { return XHTML_std ( "usemap",                $x ) ; }
    function  valign            ($x='top')            : string  { return XHTML_std ( "valign",                $x ) ; }
    function  vlink             ($x='')               : string  { return XHTML_std ( "vlink",                 $x ) ; }
    function  vspace            ($x='')               : string  { return XHTML_std ( "vspace",                $x ) ; }
    function  width             ($x='')               : string  { return XHTML_nz  ( "width",                 $x ) ; }
    function  wrap              ($x='')               : string  { return XHTML_std ( "wrap",                  $x ) ; }
    function  xmlns             ($x='', $y='')        : string  { return XHTML_std ( "xmlns".$x,              $y ) ; }
    function  xmllang           ($x='')               : string  { return XHTML_std ( "xml:lang",              $x ) ; }

  # FOR FACEBOOK
    function  colorscheme       ($x='')               : string  { return XHTML_std ( "colorscheme",           $x ) ; }
    function  send              ($x='')               : string  { return XHTML_std ( "send",                  $x ) ; }
    function  layout            ($x='')               : string  { return XHTML_std ( "layout",                $x ) ; }
    function  showFaces         ($x='')               : string  { return XHTML_std ( "show_faces",            $x ) ; }
    function  font              ($x='')               : string  { return XHTML_std ( "font",                  $x ) ; }

    function  checked           ($x='N')              : string  { return XHTML_yn  ( "checked",               $x ) ; }
    function  controls          ($x='Y')              : string  { return XHTML_yn  ( "controls",              $x ) ; }
    function  defaultTrack      ($x='Y')              : string  { return XHTML_yn  ( "default",               $x ) ; }
    function  disabled          ($x='Y')              : string  { return XHTML_yn  ( "disabled",              $x ) ; }
    function  draggable         ($x='Y')              : string  { return XHTML_yn  ( "draggable",             $x ) ; }
    function  multiple          ($x='Y')              : string  { return XHTML_yn  ( "multiple",              $x ) ; }
    function  noresize          ($x='Y')              : string  { return XHTML_yn  ( "noresize",              $x ) ; }
    function  novalidate        ($x='Y')              : string  { return XHTML_yn  ( "novalidate",            $x ) ; }
    function  nowrap            ($x='Y')              : string  { return XHTML_yn  ( "nowrap",                $x ) ; }
    function  readonly          ($x='Y')              : string  { return XHTML_yn  ( "readonly",              $x ) ; }
    function  selected          ($x='N')              : string  { return XHTML_yn  ( "selected",              $x ) ; }

    function  sBG               ($x='')               : string  { return CSS_std   ( "background",            $x ) ; }
    function  sBackground       ($x='')               : string  { return CSS_std   ( "background",            $x ) ; }
    function  sBGColor          ($x='transparent')    : string  { return CSS_std   ( "background-color",      $x ) ; }
    function  sBGImage          ($x='none')           : string  { return CSS_std   ( "background-image",      $x ) ; }
    function  sBGRepeat         ($x='repeat')         : string  { return CSS_std   ( "background-repeat",     $x ) ; }
    function  sBGAttachment     ($x='scroll')         : string  { return CSS_std   ( "background-attachment", $x ) ; }
    function  sBGPosition       ($x='0% 0%')          : string  { return CSS_std   ( "background-position",   $x ) ; }
    function  sBorder           ($x='')               : string  { return CSS_std   ( "border",                $x ) ; }
    function  sBorderColor      ($x='')               : string  { return CSS_std   ( "border-color",          $x ) ; }
    function  sBorderCollapse   ($x='')               : string  { return CSS_std   ( "border-collapse",       $x ) ; }
    function  sBorderStyle      ($x='none')           : string  { return CSS_std   ( "border-style",          $x ) ; }
    function  sBorderWidth      ($x='')               : string  { return CSS_std   ( "border-width",          $x ) ; }
    function  sBorderTop        ($x='')               : string  { return CSS_std   ( "border-top",            $x ) ; }
    function  sBorderTopWidth   ($x='medium')         : string  { return CSS_std   ( "border-top-width",      $x ) ; }
    function  sBorderRight      ($x='')               : string  { return CSS_std   ( "border-right",          $x ) ; }
    function  sBorderRightWidth ($x='medium')         : string  { return CSS_std   ( "border-right-width",    $x ) ; }
    function  sBorderBottom     ($x='')               : string  { return CSS_std   ( "border-bottom",         $x ) ; }
    function  sBorderBottomWidth($x='medium')         : string  { return CSS_std   ( "border-bottom-width",   $x ) ; }
    function  sBorderLeft       ($x='')               : string  { return CSS_std   ( "border-left",           $x ) ; }
    function  sBorderLeftWidth  ($x='medium')         : string  { return CSS_std   ( "border-left-width",     $x ) ; }
    function  sColor            ($x='')               : string  { return CSS_std   ( "color",                 $x ) ; }
    function  sClear            ($x='none')           : string  { return CSS_std   ( "clear",                 $x ) ; }
    function  sDisplay          ($x='block')          : string  { return CSS_std   ( "display",               $x ) ; }
    function  sFloat            ($x='none')           : string  { return CSS_std   ( "float",                 $x ) ; }
    function  sFont             ($x='')               : string  { return CSS_std   ( "font",                  $x ) ; }
    function  sFontFamily       ($x='')               : string  { return CSS_std   ( "font-family",           $x ) ; }
    function  sFontSize         ($x='medium')         : string  { return CSS_std   ( "font-size",             $x ) ; }
    function  sFontStyle        ($x='normal')         : string  { return CSS_std   ( "font-style",            $x ) ; }
    function  sFontVariant      ($x='normal')         : string  { return CSS_std   ( "font-variant",          $x ) ; }
    function  sFontWeight       ($x='normal')         : string  { return CSS_std   ( "font-weight",           $x ) ; }
    function  sLetterSpacing    ($x='normal')         : string  { return CSS_std   ( "letter-spacing",        $x ) ; }
    function  sLineHeight       ($x='normal')         : string  { return CSS_std   ( "line-height",           $x ) ; }
    function  sLineThrough      ($x='')               : string  { return CSS_std   ( "line-through",          $x ) ; }
    function  sListStyle        ($x='')               : string  { return CSS_std   ( "list-style",            $x ) ; }
    function  sListStyleImage   ($x='none')           : string  { return CSS_std   ( "list-style-image",      $x ) ; }
    function  sListStylePosition($x='outside')        : string  { return CSS_std   ( "list-style-position",   $x ) ; }
    function  sListStyleType    ($x='disc')           : string  { return CSS_std   ( "list-style-type",       $x ) ; }
    function  sOverflow         ($x='auto')           : string  { return CSS_std   ( "overflow",              $x ) ; }
    function  sTextAlign        ($x='left')           : string  { return CSS_std   ( "text-align",            $x ) ; }
    function  sTextDecoration   ($x='none')           : string  { return CSS_std   ( "text-decoration",       $x ) ; }
    function  sTextIndent       ($x='0')              : string  { return CSS_std   ( "text-indent",           $x ) ; }
    function  sTextTransform    ($x='none')           : string  { return CSS_std   ( "text-transform",        $x ) ; }
    function  sVerticalAlign    ($x='baseline')       : string  { return CSS_std   ( "vertical-align",        $x ) ; }
    function  sWhiteSpace       ($x='normal')         : string  { return CSS_std   ( "white-space",           $x ) ; }
    function  sWordSpacing      ($x='normal')         : string  { return CSS_std   ( "word-spacing",          $x ) ; }
    function  sZindex           ($x='')               : string  { return CSS_std   ( "z-index",               $x ) ; }

    function  sHeight           ($x='auto')           : string  { return CSS_px    ( "height",                $x ) ; }
    function  sLeft             ($x='0')              : string  { return CSS_px    ( "left",                  $x ) ; }
    function  sRight            ($x='0')              : string  { return CSS_px    ( "right",                 $x ) ; }
    function  sMargin           ($x='')               : string  { return CSS_px    ( "margin",                $x ) ; }
    function  sMarginTop        ($x='0')              : string  { return CSS_px    ( "margin-top",            $x ) ; }
    function  sMarginRight      ($x='0')              : string  { return CSS_px    ( "margin-right",          $x ) ; }
    function  sMarginBottom     ($x='0')              : string  { return CSS_px    ( "margin-bottom",         $x ) ; }
    function  sMarginLeft       ($x='0')              : string  { return CSS_px    ( "margin-left",           $x ) ; }
    function  sMaxWidth         ($x='0')              : string  { return CSS_px    ( "max-width",             $x ) ; }
    function  sMinWidth         ($x='0')              : string  { return CSS_px    ( "min-width",             $x ) ; }
    function  sPadding          ($x='')               : string  { return CSS_px    ( "padding",               $x ) ; }
    function  sPaddingTop       ($x='0')              : string  { return CSS_px    ( "padding-top",           $x ) ; }
    function  sPaddingRight     ($x='0')              : string  { return CSS_px    ( "padding-right",         $x ) ; }
    function  sPaddingBottom    ($x='0')              : string  { return CSS_px    ( "padding-bottom",        $x ) ; }
    function  sPaddingLeft      ($x='0')              : string  { return CSS_px    ( "padding-left",          $x ) ; }
    function  sTop              ($x='0')              : string  { return CSS_px    ( "top",                   $x ) ; }
    function  sBottom           ($x='0')              : string  { return CSS_px    ( "bottom",                $x ) ; }
    function  sWidth            ($x='auto')           : string  { return CSS_px    ( "width",                 $x ) ; }

    if (file_exists( $filePath = __DIR__.'/looseCannons.php')) {
        include_once( $filePath );
    }
