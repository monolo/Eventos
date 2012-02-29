<?php
namespace Jet\CoreBundle\Namer;
use Vich\UploaderBundle\Naming\NamerInterface;

class HashNamer implements NamerInterface
{

function name($obj,$name){
        $image = $obj->getImage();      
        $ext = $image->getExtension();
        if(empty($ext) == true){
                $extension = $image->guessExtension();
        }else{ 
                $extension = $image->getExtension();
        }
        
        $name = uniqid();
        return  $name . "." . $extension;
}

}
