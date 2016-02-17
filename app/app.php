<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/FindReplace.php";
        // If you hit the BSOD (blank screen of death) in a Silex app, add these lines to your app.php file right under your require_once statements.
        //Add symfony debug component and turn it on.
            //use Symfony\Component\Debug\Debug;
            //Debug::enable();

        // Set Silex debug mode in $app object
            //$app['debug'] = true;
    session_start();
    if (empty($_SESSION['list_of_places'])) {
        $_SESSION['list_of_places'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code -----------^

    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig'); //
    });

    $app->post("/userInput", function() use ($app) {
        $newFindReplace = new FindReplace;
        $result = $newFindReplace->find_and_replace($_POST['phrase'],$_POST['find'],$_POST['replace']);
        return $app['twig']->render('results.html.twig', array('result' => $result)); //
    });

    return $app;

?>
