<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>presentation</title>
</head>
<body>
  <fieldset id="date">
     <SCRIPT LANGUAGE="JavaScript1.2">
     var mois=new Array(13);
     mois[1]="Janvier";
     mois[2]="Février";
     mois[3]="Mars";
     mois[4]="Avril";
     mois[5]="Mai";
     mois[6]="Juin";
     mois[7]="Juillet";
     mois[8]="Août";
     mois[9]="Septembre";
     mois[10]="Octobre";
     mois[11]="Novembre";
     mois[12]="Décembre";
     var time=new Date();
     var month=mois[time.getMonth() + 1];
     var date=time.getDate();
     var year=time.getYear();
     if (year < 2000)
     year = year + 1900;
     document.write("Aujourd'hui " +date + " ");
     document.write(month + " " + year);
     </SCRIPT>
   </fieldset>
   <div id = "presentation_bloc1">
   <table width="0%" border="0" align="center">
     </table>
   </div>
  <div id="presentation_contents">
    <table width="0%" border="0" align="center">
      <tr>
        <td><h1>Mission et services</h1>
          <h2>ALUMNI E2N, le réseau des nouveaux développeur de sites web
            et d’applications mobiles, intégrateur, référent numérique,
            datartisan, e-commerçant…</h2>
            <p>l’E2N (pour École du Numérique du Noyonnais) est un projet initié par la
              communauté de communes du pays Noyonnais, qui est aujourd’hui porté par
              Novei formation et simplon,co.</p>

            <p>E2N est une formation qui forme aux métiers du numérique et du développement Web,
            basée sur le Campus Inovia à Noyon. Entièrement gratuite pour ses apprenant(e)s,
            la formation est soutenue et immersive (35 heures par semaine) sur une durée de six mois.</p>

          <p>Après deux semaines de test intensives, les élèves décident si ils veulent
          poursuive ou non la formation une fois leur décision prise  ils ont six mois
          pour atteindre leur but : faire de la création et l’animation de sites Internet.</p></td>
        </tr>
      </table>
    </div>
  </body>
  </html>
