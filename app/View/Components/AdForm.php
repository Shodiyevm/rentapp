<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdForm extends Component
{
public $action;
public $ad;
public $branches;

/**
* Create a new component instance.
*
* @param string $action
* @param mixed $ad
* @param array $branches
*/
public function __construct($action = '', $ad = null, $branches = [])
{
$this->action = $action;
$this->ad = $ad;
$this->branches = $branches;
}

/**
* Get the view / contents that represent the component.
*/
public function render(): View|Closure|string
{
return view('components.ad-form');
}
}
