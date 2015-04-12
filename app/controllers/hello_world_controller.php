<?php
require 'app/models/viini.php';

class HelloWorldController extends BaseController
{

    public static function index()
    {
        // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
        View::make('home.html');

    }

    public static function sandbox()
    {
        // Testaa koodiasi täällä

        $rypale = new Rypale(array(
            'nimi' => 's',
            'vari' => 1,
            'kuvaus' => 'rusina'
        ));

        $errors = $rypale->errors();


        Kint::dump($rypale);
        Kint::dump($errors);
    }

    public static function etusivu()
    {

        View::make('suunnitelmat/etusivu.html');
    }

    public static function viinit()
    {
        View::make('suunnitelmat/wines_show.html');
    }

    public static function wine_show()
    {
        View::make('suunnitelmat/wine_show.html');
    }

    public static function login()
    {
        View::make('suunnitelmat/login.html');
    }

    public static function wine_edit()
    {
        View::make('suunnitelmat/wine_edit.html');
    }
}
