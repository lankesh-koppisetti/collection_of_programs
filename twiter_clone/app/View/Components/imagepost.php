<?php

namespace App\View\Components;

use Illuminate\View\Component;

class imagepost extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
  
        
    public function __construct($userprofile,$info,$postimg)
    {
         $this->userprofile=$userprofile;
         $this->info=$info;
         $this->postimg=$postimg;
       
    } 
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.imagepost');
    }
}
