<?php
class Retro {
    static function html_entete() {
        $resultat = '';
        $resultat .= '<!--DEBUT HAUT-->';
        $resultat .= '<div id="top">';
        $resultat .= '<div class="topright">';
        $resultat .= self::html_titre();
        $resultat .= self::html_pub();
        $resultat .= '</div>';
        $resultat .= self::html_logo();
        $resultat .= '</div>';
        $resultat .= '<!--FIN HAUT-->';
        return $resultat;
    }
    static function html_logo() {
        $resultat = '';
        $resultat .= '<a href="index.php">';
        $resultat .= '<img src="images/retrologo2.png" alt="logo"/>';
        $resultat .= '</a>';
        return $resultat;
    }
    static function html_menu() {
        $resultat = '';
        $resultat .= '<!--DEBUT MENU-->';
        $resultat .= '<div class="menu">';
        $resultat .= '<a href="intro.php">Introduction</a>';
        $resultat .= '<a class="a2" href="lejeune.php">Andr&eacute; Lejeune</a>';
        $resultat .= '<a href="chansons.php">Chansons Rares</a>';
        $resultat .= '<a class="a2" href="michel.php">Dominique Michel</a>';
        $resultat .= '<a href="lautrec.php">Donald Lautrec</a>';
        $resultat .= '<a class="a2" href="williams.php">Gene Williams</a>';
        $resultat .= '<a href="farago.php" id="acurrent">Johnny Farago</a>';
        $resultat .= '<a class="a2" href="benoit.php">L&eacute;o Benoit</a>';
        $resultat .= '<a href="chevelles.php">Les Chevelles</a>';
        $resultat .= '<a class="a2" href="http://infos.retrojeunesse60.com/MicheleRichard.MaVie50chansons.htm" target="blank">Mich&egrave;lle Richard</a>';
        $resultat .= '<a href="http://infos.retrojeunesse60.com/XL60.remixjeunesse.htm" target="blank">Remix Jeunesse</a>';
        $resultat .= '<a class="a2" href="http://infos.retrojeunesse60.com/robertdemontigny.htm" target="blank">Robert Demontigny</a>';
        $resultat .= '<a href="http://infos.retrojeunesse60.com/album.rockntwist.quebec.htm" target="blank">Rock N Twist</a>';
        $resultat .= '<a class="a2" href="http://groupesquebecois.retrojeunesse60.com/rabble.htm" target="blank">The Rabble</a>';
        $resultat .= '</div>';
        $resultat .= '<!--FIN MENU-->';
        return $resultat;
    }
    static function html_pied() {
        $resultat = '';
        $resultat .= '<!--DEBUT BAS-->';
        $resultat .= '<div class="bottom">';
        $resultat .= '<p>&copy; 2009 fait par Mathieu Auclair, reproduction de <a href="http://www.retrojeunesse60.com" target="_blank">www.retrojeunesse60.com</a></p>';
        $resultat .= '<a id="arrow" href="#top"><img src="images/arrow.png" alt="top"/></a>';
        $resultat .= '</div>';
        $resultat .= '<!--FIN BAS-->';
        return $resultat;
    }
    static function html_pub() {
        $resultat = '';
        $resultat .= '<!--DEBUT PUB-->';
        $resultat .= '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="468" height="60">';
        $resultat .= '<param name="movie" value="images/ad.swf?target=_blank&amp;clickTag=http://www.ingdirect.fr/epargne-orange/index.jsp"/>';
        $resultat .= '<param name="quality" value="high"/>';
        $resultat .= '<param name="wmode" value="transparent"/>';
        $resultat .= '<param name="allowscriptaccess" value="sameDomain"/>';
        $resultat .= '<!--[if !IE]>-->';
        $resultat .= '<object type="application/x-shockwave-flash" data="images/ad.swf?target=_blank&amp;clickTag=http://www.ingdirect.fr/epargne-orange/index.jsp" width="468" height="60">';
        $resultat .= '<param name="quality" value="high"/>';
        $resultat .= '<param name="wmode" value="transparent"/>';
        $resultat .= '<param name="allowscriptaccess" value="sameDomain"/>';
        $resultat .= '<!--<![endif]-->';
        $resultat .= '<a href="http://www.ingdirect.fr/epargne-orange/index.jsp" target="_blank">';
        $resultat .= '<img src="images/ad.gif" alt="a gif is fine too"/>';
        $resultat .= '</a>';
        $resultat .= '<!--[if !IE]>-->';
        $resultat .= '</object>';
        $resultat .= '<!--<![endif]-->';
        $resultat .= '</object>';
        $resultat .= '<!--FIN PUB-->';
        return $resultat;
    }
    static function html_titre() {
        $resultat = '';
        $resultat .= '<img src="images/titre2.jpg" alt="r&eacute;tro jeunesse 60"/>';
        $resultat .= '<h2>La jeunesse d\'hier et d\'aujourd\'hui!</h2>';
        return $resultat;
    }
}