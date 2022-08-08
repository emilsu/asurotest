<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CalcAsuroController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): JsonResponse
    {
        $error = false;
        $message = 'You can use this endpoints to make basic arithmetic operations: /add -> addition, /sub -> substraction, /mul -> multiplication and /div -> division';
        return $this->json(
            \compact('error', 'message')
        );
    }

    /**
     * @Route("/add", name="addnone")
     */
    public function addNone(): JsonResponse
    {
        $error = false;
        $message = 'Please add two arguments to addition endpoint e.g. /add/3/2';
        return $this->json(\compact('error', 'message'));
    }

    /**
     * @Route("/add/{num1}", name="addone")
     */
    public function addOne(int $num1): JsonResponse
    {
        $error = false;
        $message = 'Please add second argument to addition endpoint e.g. /add/3/2';
        return $this->json(\compact('error', 'message'));
    }

    /**
     * @Route("/add/{num1}/{num2}", name="add")
     */
    public function add(int $num1, int $num2): JsonResponse
    {
        $error = false;
        $message = $num1 + $num2;
        return $this->json(\compact('error', 'message'));
    }

    /**
     * @Route("/sub", name="subnone")
     */
    public function subNone(): JsonResponse
    {
        $error = false;
        $message = 'Please add two arguments to substraction endpoint e.g. /sub/3/2';
        return $this->json(\compact('error', 'message'));
    }

    /**
     * @Route("/sub/{num1}", name="subone")
     */
    public function subOne(int $num1): JsonResponse
    {
        $error = false;
        $message = 'Please add second argument to substraction endpoint e.g. /sub/3/2';
        return $this->json(\compact('error', 'message'));
    }

    /**
     * @Route("/sub/{num1}/{num2}", name="sub")
     */
    public function sub(int $num1, int $num2): JsonResponse
    {
        $error = false;
        $message = $num1 - $num2;
        return $this->json(\compact('error', 'message'));
    }

    /**
     * @Route("/mul", name="mulnone")
     */
    public function mulNone(): JsonResponse
    {
        $error = false;
        $message = 'Please add two arguments to multiplication endpoint e.g. /mul/3/2';
        return $this->json(\compact('error', 'message'));
    }

    /**
     * @Route("/mul/{num1}", name="mulone")
     */
    public function mulOne(int $num1): JsonResponse
    {
        $error = false;
        $message = 'Please add second argument to multiplication endpoint e.g. /mul/3/2';
        return $this->json(\compact('error', 'message'));
    }

    /**
     * @Route("/mul/{num1}/{num2}", name="mul")
     */
    public function mul(int $num1, int $num2): JsonResponse
    {
        $error = false;
        $message = $num1 * $num2;
        return $this->json(\compact('error', 'message'));
    }

    /**
     * @Route("/div", name="divnone")
     */
    public function divNone(): JsonResponse
    {
        $error = false;
        $message = 'Please add two arguments to division endpoint e.g. /div/3/2';
        return $this->json(\compact('error', 'message'));
    }

    /**
     * @Route("/div/{num1}", name="divone")
     */
    public function divOne(int $num1): JsonResponse
    {
        $error = false;
        $message = 'Please add second argument to division endpoint e.g. /div/3/2';
        return $this->json(\compact('error', 'message'));
    }

    /**
     * @Route("/div/{num1}/{num2}", name="div")
     */
    public function div(int $num1, int $num2): JsonResponse
    {
        if ($num2 == 0) {
            $error = true;
            $message = 'Do not divide by 0!';
        } else {
            $error = false;
            $message = $num1 / $num2;
        }
        return $this->json(\compact('error', 'message'));
    }
}