<?php

class BaseController extends Controller {

    public $layout;


    /**
     * Execute an action on the controller.
     *
     * @param  string  $method
     * @param  array   $parameters
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function callAction($method, $parameters) {
        $response = call_user_func_array(array($this, $method), $parameters);

        $this->setupLayout();

        // If no response is returned from the controller action and a layout is being
        // used we will assume we want to just return the layout view as any nested
        // views were probably bound on this view during this controller actions.
        if (is_null($response) && ! is_null($this->layout))
        {
            $response = $this->layout;
        }

        return $response;
    }


    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    // Illuminate\Routing\Contoller.php
    protected function setupLayout() {
        if(!is_null($this->layout)) {
            $this->layout = View::make($this->layout, $this->assignobj());
        }
    }


    // オブジェクト内の変数を全て割り当てる。
    protected function assignobj() {
        $data = get_object_vars($this);
        return $data;
    }

}
