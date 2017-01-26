# see-base ImpressPages Theme

Dies ist das Theme des Webauftritts des Hackerspaces [see-base](https://see-base.de/).

##Installation:
[Installiere](https://www.impresspages.org/docs/installation) die [aktuelle Version](https://www.impresspages.org/download) von [Impress Pages](https://www.impresspages.org/) auf einem $Server mit [MySQL Datenbank](https://mariadb.com/).

Klone dieses Git in den Theme Ordner 
Zum Beispiel so:

```bash
cd /var/www/ImpressPages/Theme/
git clone https://github.com/see-base/ImpressTheme.git
chmod -R 777 ImpressTheme/

```

Im ``Admin`` bereich unter ``Design`` sollte nun das Theme erscheinen und kann ausgewählt werden.
Jetzt muss noch unter ``Menu``->``Pages`` das Menü für die Navigation *(zB. menu1)* in ``navigation`` umbenannt werden.

#Lizenz:
*nö*

$D1NGE die noch erledigt werden müssten: 
CSS für: image, lightbox, files, video, map, form.
