<?php
/*******************************************************************************************
*                                                                                          *                                                           
*   Le script permet d'afficher un compteur graphique lorsqu'un internaute se connecte.    *
*                                                                                          *
*   L'incr�mentation du compteur ne se fait pas si une m�me adresse IP se reconnecte dans  *
*   une m�me journ�e                                                                       *
*                                                                                          *
*******************************************************************************************/  
  
  
  class Compteur
{
 
 var $CheminFichier;
 var $user_agent;
 var $file_os,$file_nav,$file_cpt,$file_ip;
 

/********************************
*         Constructeur          *
********************************/
function Compteur($CheminFichier)
{
	$this->CheminFichier=$CheminFichier;
	$this->user_agent = getenv("HTTP_USER_AGENT");
	if (!file_exists($this->CheminFichier."ip.txt")){
	die("ERROR FICHIER MANQUANT");
	}else{
	$this->file_ip="ip.txt";
	}
	$this->file_os="cpt_os.php";
	$this->file_nav="cpt_nav.php";
	$this->file_cpt="cpt_compteur.php";
	$this->init();

}

/********************************
*              INIT             *
********************************/
function init()
{
if (! file_exists($this->CheminFichier.$this->file_cpt))
{  $fichierIP = @fopen($this->CheminFichier.$this->file_cpt, "w");
   fputs($fichierIP,"<?php exit(); ?>\r\n");
   fclose($fichierIP);
}

// Si le fichier "nav.dat" n'existe pas, on le cr�e et on l'initialise
if (! file_exists($this->CheminFichier.$this->file_nav))
{  $fichierNav = @fopen($this->CheminFichier.$this->file_nav, "w");
   fwrite($fichierNav,"<?php exit(); ?>\r\n");
   fwrite($fichierNav,"Netscape~0\r\n");
   fwrite($fichierNav,"MSIE~0\r\n");
   fwrite($fichierNav,"Lynx~0\r\n");
   fwrite($fichierNav,"Opera~0\r\n");
   fwrite($fichierNav,"WebTV~0\r\n");
   fwrite($fichierNav,"Konqueror~0\r\n");
   fwrite($fichierNav,"Bot~0\r\n");
   fwrite($fichierNav,"Other~0\r\n");
   fclose($fichierNav);
}

// Si le fichier "os.dat" n'existe pas, on le cr�e et on l'initialise
if (! file_exists($this->CheminFichier.$this->file_os))
{  $fichierOS = @fopen($this->CheminFichier.$this->file_os, "w");
   fwrite($fichierOS,"<?php exit(); ?>\r\n");
   fwrite($fichierOS,"Windows~0\r\n");
   fwrite($fichierOS,"Linux~0\r\n");
   fwrite($fichierOS,"Mac~0\r\n");
   fwrite($fichierOS,"FreeBSD~0\r\n");
   fwrite($fichierOS,"SunOS~0\r\n");
   fwrite($fichierOS,"IRIX~0\r\n");
   fwrite($fichierOS,"BeOS~0\r\n");
   fwrite($fichierOS,"OS/2~0\r\n");
   fwrite($fichierOS,"AIX~0\r\n");
   fwrite($fichierOS,"Other~0\r\n");
   fclose($fichierOS);
}
}

/********************************
*          Mise a zero          *
********************************/
function miseA_zero()
{
	//reinitialise les fichiers 
   $fichierIP = @fopen($this->CheminFichier.$this->file_cpt, "w");
   fputs($fichierIP,"<?php exit(); ?>\r\n");
   fclose($fichierIP);



   $fichierNav = @fopen($this->CheminFichier.$this->file_nav, "w");
   fwrite($fichierNav,"<?php exit(); ?>\r\n");
   fwrite($fichierNav,"Netscape~0\r\n");
   fwrite($fichierNav,"MSIE~0\r\n");
   fwrite($fichierNav,"Lynx~0\r\n");
   fwrite($fichierNav,"Opera~0\r\n");
   fwrite($fichierNav,"WebTV~0\r\n");
   fwrite($fichierNav,"Konqueror~0\r\n");
   fwrite($fichierNav,"Bot~0\r\n");
   fwrite($fichierNav,"Other~0\r\n");
   fclose($fichierNav);


   $fichierOS = @fopen($this->CheminFichier.$this->file_os, "w");
   fwrite($fichierOS,"<?php exit(); ?>\r\n");
   fwrite($fichierOS,"Windows~0\r\n");
   fwrite($fichierOS,"Linux~0\r\n");
   fwrite($fichierOS,"Mac~0\r\n");
   fwrite($fichierOS,"FreeBSD~0\r\n");
   fwrite($fichierOS,"SunOS~0\r\n");
   fwrite($fichierOS,"IRIX~0\r\n");
   fwrite($fichierOS,"BeOS~0\r\n");
   fwrite($fichierOS,"OS/2~0\r\n");
   fwrite($fichierOS,"AIX~0\r\n");
   fwrite($fichierOS,"Other~0\r\n");
   fclose($fichierOS);

}

/********************************
*       make_chaine_nav         *
********************************/
function make_chaine_nav()
{
   $chaine = "<?php exit(); ?>\r\n";


   $tabNav = file($this->CheminFichier.$this->file_nav);

   // On d�marre a 1 pour �viter la ligne <?php exit();
   $nbligne=count($tabNav);
   for ($i=1; $i<$nbligne; $i++)
   {   $ligne = explode("~", $tabNav[$i]);
       $nav[$ligne[0]][0] = $ligne[0];
       $nav[$ligne[0]][1] = $ligne[1];
   }
   
	$browser=$this->nav();
	
   // Incr�mentation du compteur
   $nav[$browser][1] = $nav[$browser][1] + 1;

   // Construction de la chaine qui sera �crite dans le fichier
   foreach($nav as $element)
   {
       $chaine = $chaine.trim($element[0]."~".$element[1])."\n";
   }
   return $chaine;
}

/********************************
*        make_chaine_os         *
********************************/
function make_chaine_os()
{
   $chaine = "<?php exit(), ?>\r\n";


   $tabOS = file($this->CheminFichier.$this->file_os);
   // On d�marre a 1 pour �viter la ligne <?php exit();
   $nbligne = count($tabOS);
   for ($i=1; $i<$nbligne; $i++)
   {   $ligne = explode("~", $tabOS[$i]);
       $se[$ligne[0]][0] = $ligne[0];
       $se[$ligne[0]][1] = $ligne[1];
   }
	$os=$this->os();
   
   // Incr�mentation du compteur
   $se[$os][1]++;

   // Construction de la chaine qui sera �crite dans le fichier
   foreach($se as $element)
   {
       $chaine = $chaine.trim($element[0]."~".$element[1])."\n";
   }
   return $chaine;
}

/********************************
*         ip_to_number          *
********************************/
function ip_to_number($adr_ip)
{  // Retourne un entier qui repr�sente l'expression num�rique de l'adresse r�seau.
   // Les adresses peuvent �tre des entiers de 4 ou 8 octets.
   // ip_to_number("209.207.224.40") -> 3520061480
   $elements = explode(".",$adr_ip);
   return    $elements[0] * pow(256,3) + $elements[1] * pow(256,2) + $elements[2] * 256 + $elements[3];
}

/********************************
*        ip_to_country          *
********************************/
function ip_to_country($adrip)
{
   $IP_TO_COUNTRY = file($this->CheminFichier.$this->file_ip);
   $ip_number = $this->ip_to_number($adrip);
   $trouve = false;
   $fin = false;
   $i=0;
   while ((!$trouve) && (!$fin))
   {
      $element = explode("~",$IP_TO_COUNTRY[$i]);
      if (($ip_number >= $element[0]) && ($ip_number <= $element[1]))
      {  $val = trim($element[2]);
         $trouve = true;
      }
      if ($i == count($IP_TO_COUNTRY)-1)
         $fin = true;
         else
            $i++;
   }
   if ($trouve)
      return $val;
      else
         return "XX";
}



/********************************
*              nav              *
********************************/
function nav()
{


   if ((strstr($this->user_agent,"Nav")) || (strstr($this->user_agent,"Gold")) || (strstr($this->user_agent,"X11")) || (strstr($this->user_agent,"Mozilla")) || (strstr($this->user_agent,"Netscape")) AND (!strstr($this->user_agent,"MSIE")))
      $browser = "Netscape";
      elseif (strstr($this->user_agent,"MSIE"))
        $browser = "MSIE";
          elseif (strstr($this->user_agent,"Lynx"))
            $browser = "Lynx";
              elseif (strstr($this->user_agent,"Opera"))
                $browser = "Opera";
                  elseif (strstr($this->user_agent,"WebTV"))
                    $browser = "WebTV";
                      elseif (strstr($this->user_agent,"Konqueror"))
                        $browser = "Konqueror";
                          elseif ((strstr($this->user_agent,"bot")) || (strstr($this->user_agent,"Google")) || (strstr($this->user_agent,"Slurp")) || (strstr($this->user_agent,"Scooter")) || (strstr($this->user_agent,"Spider")) || (strstr($this->user_agent,"Infoseek")))
                            $browser = "Bot";
                              else
                                $browser = "Other";

   return $browser;
}

/********************************
*              os               *
********************************/
function os()
{


   if (strstr($this->user_agent,"Win"))
      $os="Windows";
      elseif ((strstr($this->user_agent,"Mac")) || (strstr($this->user_agent,"PPC")))
        $os = "Mac";
        elseif(strstr($this->user_agent,"Linux"))
          $os = "Linux";
          elseif(strstr($this->user_agent,"FreeBSD"))
            $os = "FreeBSD";
            elseif(strstr($this->user_agent,"SunOS"))
              $os = "SunOS";
              elseif(strstr($this->user_agent,"IRIX"))
                $os = "IRIX";
                elseif(strstr($this->user_agent,"BeOS"))
                  $os = "BeOS";
                  elseif(strstr($this->user_agent,"OS/2"))
                    $os = "OS/2";
                    elseif(strstr($this->user_agent,"AIX"))
                      $os = "AIX";
                      else
                        $os = "Other";

 
   return $os;
}

/********************************
*         traduction            *
********************************/
function traduction($valeur_numerique,$nombre_chiffres)
{ $resultat="";
  $quotient=$valeur_numerique;
  for($i=1;$i<=$nombre_chiffres;$i++)
  { $reste=$quotient % 10;
    $resultat=$reste.$resultat;
    $quotient/=10;
  }
  return $resultat;
}

/********************************
*        	miseAJour           *
********************************/
function mise_ajour(){
$adr_ip = $_SERVER['REMOTE_ADDR'];
$dns_ip = gethostbyaddr($adr_ip);
$trouve = false;

  $fichierIP = fopen($this->CheminFichier.$this->file_cpt,"r");
  $ligne = fgets($fichierIP);
  while ((!feof($fichierIP)) && (! $trouve))
    {  $ligne = fgets($fichierIP);
       $Champs = explode("~",trim($ligne));      // Format de la ligne : Date~Heure~AdrIP~HostName~Pays
       //  Si a la m�me date  ET  Si une m�me adresse IP se connecte  ALORS  On n'incr�mente pas le compteur
       if ((date("d/m/Y") == $Champs[0]) && ($adr_ip == $Champs[2]))
         $trouve = true;
    }
  fclose($fichierIP);

  if ($trouve == false)
  {   // On ajoute une ligne dans le fichier cpt_compteur.php
      $fichierIP = fopen($this->CheminFichier.$this->file_cpt,"a");
      $pays = $this->ip_to_country($adr_ip);
      fputs($fichierIP, date("d/m/Y")."~".date("H:i")."~".$adr_ip."~".$dns_ip."~".$pays."\r\n");
      fclose($fichierIP);
      // Ajout du navigateur du client
      $chaineNav = $this->make_chaine_nav();
      $fichierNav = fopen($this->CheminFichier.$this->file_nav,"w");
      fputs($fichierNav, $chaineNav);
      fclose($fichierNav);
      // Ajout du syst�me d'exploitation du client
      $chaineOS = $this->make_chaine_os();
      $fichierOS = fopen($this->CheminFichier.$this->file_os,"w");
      fputs($fichierOS, $chaineOS);
      fclose($fichierOS);
  }
  $nb = -2;
  $fichierIP=fopen($this->CheminFichier.$this->file_cpt,"r");
  while (!feof($fichierIP))
  {  $ligne = fgets($fichierIP);
     $nb++;
  }
  fclose($fichierIP);
}
/********************************
*   	datemiseenservice       *
********************************/
function datemiseenservice(){

  // R�cup�ration de la date de mise en service.
  // La date de mise en service est la date de la deuxieme ligne du fichier
  /* La premi�re contient "<?php exit();"  que l'on exploite pas*/
  
  $fichierIP = fopen($this->CheminFichier.$this->file_cpt,"r");
  $ligne1 = fgets($fichierIP);
  $ligne1 = fgets($fichierIP);
  $champs = explode('~',$ligne1);
  $DateMiseEnService = $champs[0];
  fclose($fichierIP);

return $DateMiseEnService;
}


/********************************
*   	   nbVisiteur           *
********************************/
function nbVisiteur(){
  // R�cup�ration du nombre de visiteurs
  $nb = -2;
  $fichierIP=fopen($this->CheminFichier.$this->file_cpt,"r");
  while (!feof($fichierIP))
    {  $ligne = fgets($fichierIP);
       $nb++;
    }
  fclose($fichierIP);
return $nb;

}
}


?>