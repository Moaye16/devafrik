<?php

class Conf
{

     static $debug = 1;
     
      //Paramètre de la base de données
      static $databases = array(
        'default' => array(
             'host'      =>  'localhost',
             'database'  =>  'devafrik_local',
             'login'     =>  'root',
             'password'  =>  ''
        )
    );

     //Paramètre SMTP
     static $PARAM_SMTP = array(
          'SERVER_SMTP' =>  'web14.vename.ci',
          'PORT_SMTP'  =>  465,
          'USER_SMTP'     =>  'info@devafrik-invest.com',
          'PASSWORD_SMTP'  =>  '@dmindevafrik-invest2021'
     );

    //Paramètre SMTP
   /** 
    static $PARAM_SMTP = array(
           'SERVER_SMTP' =>  'mail51.lwspanel.com',
           'PORT_SMTP'  =>  465,
           'USER_SMTP'     =>  'serversmtp9@gmail.com',
           'PASSWORD_SMTP'  =>  '@dmindevafrik-invest2021'
   );*/

    /**  //Paramètre de la base de données
     static $databases = array(
         'default' => array(
            'host'      =>  'localhost',
            'database'  =>  'devafrik_Db07092021',
            'login'     =>  'devafrik',
            'password'  =>  'kX!@dq24G5St9R'
         )
     );*/
     

}

Router::prefix('cockpit', 'admin');		//rediriger vers la session base de données

Router::prefix('modal', 'modal');		//rediriger vers la session base de données

Router::connect('/', 'accueils');

Router::connect('cockpit', 'cockpit/dashboards');

Router::connect(':slug/', 'index.php/slug:([a-z0-9\-]+)');

Router::connect('blogs/view/:id/:slug/', 'index.php/blogs/view/id:([0-9]+)/slug:([a-z0-9\-]+)');

Router::connect('recrutements/view/:id/:slug/', 'index.php/recrutements/view/id:([0-9]+)/slug:([a-z0-9\-]+)');

//Router::connect('recrutements/candidat/:id/:slug/', 'index.php/recrutements/candidat/id:([0-9]+)/slug:([a-z0-9\-]+)');

//Router::connect('offre/:id/:slug.html', 'recrutements/view/id:([0-9]+)/slug:([a-z0-9\-]+)');

//Router::connect('blog/*', 'posts/*');