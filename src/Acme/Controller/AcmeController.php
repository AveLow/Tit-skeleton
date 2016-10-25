<?php
namespace src\Acme\Controller;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Tit\lib\Components\Controller;

/**
 * Class AcmeController
 * @package src\Acme\Controller
 *
 * Exemple Controller to show how it works.
 */
class AcmeController extends Controller {

    /**
     * Method call by the url "/" and return a simple view.
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param array $args
     * @return ResponseInterface
     */
    public function index(RequestInterface $request, ResponseInterface $response, array $args){
    // For php7.1 public function index(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface{
            return $this->twig->render($response, '\Acme\View\index.html.twig', array());
    }
}
