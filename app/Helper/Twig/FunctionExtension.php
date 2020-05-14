<?php

namespace App\Helper\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class FunctionExtension extends AbstractExtension
{

    /**
     * Extension for twig functions
     * Read Documentation at: https://twig.symfony.com/doc/2.x/advanced.html
     */
    public function getFunctions()
    {
        return [
            /**
             * List of registered functions. you can add your own to use
             * it the twig template.
             * new TwigFunction($function_name_to_be_called_in_template, [$callable, method_name])
             */
            new TwigFunction('phpinfo', [$this,'phpinfo']),        
            new TwigFunction('route',[$this, 'route']),
            new TwigFunction('json_decode',[$this, 'json_decode']),
        ];
    }
    

    /**
     * Methods for Twig Functions
     */
    public function phpinfo()
    {
        return phpinfo();
    }

    public function route($var)
    {
        $params = \Simple\Routing\Router::getParams();
        if($var=='full') {
            $r='/';
            foreach($params as $p){
                $r.=$p.'/';
            }
            return substr($r,0,-1);
        }
        return isset($params[$var]) ? $params[$var] : null ;
    }

    public function json_decode($var)
    {
        return json_decode($var, true);
    }

    public function dd($var)
    {
        return dd($var);
    }

}