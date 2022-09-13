<?php 
class Router{
    /**
     * Permet de parser une url
     * @param $url Url à parser
     * @return tableau contenant les parametres
     */
    static function parse($url, $request){
        $url = trim($url, "/");
        $params = explode('/', $url);
        $request->controller = $params[0];
        $request->controller = $s;
        array(
            'controller' => $params[0],
            'action'     => isset($params[1]) ? $params[1] : 'index'
        );
        $r['params'] = array_slice($params, 2);
        return $r;
    }
}