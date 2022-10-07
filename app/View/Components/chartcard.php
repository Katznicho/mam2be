<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ChartCard extends Component
{
    public $cardTitle;
    public $chartTitleOne;
    public $chartTitleTwo;
    public $numOfCols;
    public $chartTitleThree;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cardTitle, $chartTitleOne, $chartTitleTwo, $numOfCols)
    {
        //
        $this->cardTitle =  $cardTitle;
        $this->chartTitleOne = $chartTitleOne;
        $this->chartTitleTwo =  $chartTitleTwo;
        $this->numOfCols = $numOfCols;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.chart-card');
    }
}
