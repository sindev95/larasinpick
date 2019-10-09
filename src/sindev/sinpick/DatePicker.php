<?php

namespace sindev\sinpick;
use Illuminate\View\Factory;

class DatePicker
{
    /**
     * @var Factory
     */
    protected $view;

    /**
     * @param Factory         $view
     */
    public function __construct(Factory $view)
    {
        $this->view            = $view;
    }
    /**
     * Initilize Datepicker
     * @return $this
     */
    public function Init()
    {
        return $this;
    }

    /**
     * Create the <div> the calendar will be rendered into
     *
     * @return string
     */
    public function datepicker()
    {
        return '<div id="datepicker"></div>';
    }

    /**
     * Get the <script> block to render the calendar (as a View)
     *
     * @return \Illuminate\View\View
     */
    public function scripts()
    {
        return $this->view->make('datepicker::script');
    }
}
