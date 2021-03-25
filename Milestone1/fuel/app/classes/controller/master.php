<?php

class Controller_Master extends Controller_Template {
	public $template = 'm1Template';
	public function action_index() {
		$this->template->content=View::forge('m1/home');
		$this->template->cssFile="default.css";
		$this->template->logo="logo_small2.png";
	}

	public function action_team() {
                $this->template->content=View::forge('m1/team');
		$this->template->cssFile="default.css";
                $this->template->logo="logo_small2.png";
        }

	public function action_color() {
                $this->template->content=View::forge('welcome/color');
                $this->template->cssFile="default.css";
                $this->template->logo="logo_small2.png";
        }

	public function action_grid() {
                $this->template->content=Presenter::forge('welcome/grid');
                $this->template->cssFile="default.css";
                $this->template->logo="logo_small2.png";
                //return Response::forge(Presenter::forge('grid'));
        }

	public function action_gridview() {
                return Response::forge(Presenter::forge('welcome/gridview'));
        }
}
