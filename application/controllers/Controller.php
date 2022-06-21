<?php
namespace application\controllers;

abstract class Controller
{
    public function __construct($action)
    {
        // php는 생성자 함수에서 문자열로 호출가능
        $view = $this->$action();
        require_once $this->getView($view);
    }

    protected function addAttribute($key, $val)
    {
        $this->$key = $val;
    }

    protected function getView($view)
    {
        if (strpos($view, 'redirect:') === 0) {
            header('Location: ' . substr($view, 9));
        }
        return _VIEW . $view;
    }
}
