<?php

namespace App\Services\MediaLibrary;

use A17\Twill\Services\MediaLibrary\ImageServiceInterface;
use Barryvdh\Debugbar\Facade as Debugbar;
use Barryvdh\Debugbar\ServiceProvider as DebugbarServiceProvider;

class Croppa implements ImageServiceInterface
{
    public function getUrl($id, array $params = []) {
   
        Debugbar::addMessage( 'getUrl');
        Debugbar::info($params);
         return '/' . $id;
    }
    public function getUrlWithCrop($id, array $crop_params, array $params = []){
     
        Debugbar::addMessage( 'getUrlWithCrop');
        return $this->getUrl($id);
    }
    public function getUrlWithFocalCrop($id, array $cropParams, $width, $height, array $params = []){
        
       Debugbar::addMessage( 'getUrlWithFocalCrop');
       return $this->getUrl($id);
    }
    public function getLQIPUrl($id, array $params = []){
        Debugbar::addMessage( 'getLQIPUrl');
        return $this->getUrl($id);
    }
    public function getSocialUrl($id, array $params = []){
        Debugbar::addMessage( 'getSocialUrl');
        return $this->getUrl($id);
    }
    public function getCmsUrl($id, array $params = []){
        Debugbar::addMessage( 'getCmsUrl');
        return $this->getUrl($id);
    }
    public function getRawUrl($id) {
        Debugbar::addMessage( 'getRawUrl');
        return '/' . $id;
    }
    public function getDimensions($id){
        Debugbar::addMessage( 'getDimensions');
        return $this->getRawUrl($id);
    }
    public function getSocialFallbackUrl(){
        Debugbar::addMessage( 'getSocialFallbackUrl');
        return null;
    }
    public function getTransparentFallbackUrl(){
        Debugbar::addMessage( 'getTransparentFallbackUrl');
        return null;
    }
}
    // public function getUrl($id, array $params = [])
    // {
    //     return $this->getRawUrl($id);
    // }

    // public function getUrlWithCrop($id, array $crop_params, array $params = [])
    // {
    //     $raw_url = $this->getRawUrl($id);
    //     return $this->getRawUrl($id);
    // }

    // public function getUrlWithFocalCrop($id, array $cropParams, $width, $height, array $params = [])
    // {
    //     return $this->getRawUrl($id);
    // }

    // public function getLQIPUrl($id, array $params = [])
    // {
    //     return $this->getRawUrl($id);
    // }

    // public function getSocialUrl($id, array $params = [])
    // {
    //     return $this->getRawUrl($id);
    // }

    // public function getCmsUrl($id, array $params = [])
    // {
    //     return $this->getRawUrl($id);
    // }

    // public function getRawUrl($id)
    // {

    //     Barryvdh\Debugbar::addMessage('Error!');
    //             return '/' . $id;
    // }

    // public function getDimensions($id)
    // {
    //     return null;
    // }
