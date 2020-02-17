<?php
namespace Core;

class Controller {

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$viewName.'.php';
	}

	public function loadTemplate($templateName, $viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$templateName.'.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$viewName.'.php';
	}

}