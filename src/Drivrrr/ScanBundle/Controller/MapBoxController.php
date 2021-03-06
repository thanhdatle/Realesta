<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MONKEY D.LUFFY
 * Date: 8/19/13
 * Time: 10:24 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Drivrrr\ScanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MapBoxController extends Controller{
    public function mapboxHomeAction()
    {
        $request = $this->get('request');
        $location = '';
        if ($request->getMethod() == 'GET')
        {
            $location = $request->get('location');
        }
        return $this->render('ScanBundle:MapBox:mapboxhome.html.twig',['location'=>$location]);
    }

    public function mapboxWelcomeAction()
    {
        return $this->render('ScanBundle:MapBox:mapboxwelcome.html.twig');
    }

    public function mapboxDetailAction(){
        return $this->render('ScanBundle:MapBox:mapboxdetail.html.twig');
    }

    public function mapboxStreetViewAction(){
        return $this->render('ScanBundle:MapBox:mapboxstreetview.html.twig');
    }
}