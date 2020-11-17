<?php
    
    namespace Regnilk\BsModalLaravel\Components;
    
    use Illuminate\View\Component;
    
    class Warning extends Component
    {
        public $id;
        public $title;
        public $url;
        public $message;
        public $icon;
        public $btnText;
        public $outline;
        public $colorClass = 'warning';
        public $name = 'warning';
        public $comment;
        public $method;
    
        /**
         * Create a new component instance.
         *
         * @param        $type
         * @param        $title
         * @param        $url
         * @param        $message
         * @param string $btnText
         */
        public function __construct($title, $url, $message, $icon = NULL, $btnText = '', $comment = FALSE, $outline = FALSE, $method='PATCH')
        {
            $this->id = str_random();
            $this->title = $title;
            $this->url = $url;
            $this->message = $message;
            $this->icon = $icon ?? 'ok';
            $this->btnText = $btnText;
            $this->comment = $comment;
            $this->outline = $outline ? 'outline-' : '';
            $this->method = mb_strtoupper($method);
        }
        
        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\Contracts\View\View|string
         */
        public function render()
        {
            return view('bs-modal-laravel::bs-modal');
        }
        
        /**
         * @return string : the header background color
         */
        public function headerBgColor()
        {
            return ($this->outline) ? '' : "bg-{$this->colorClass}";
        }
        
        /**
         * @return string : the header text color
         */
        public function headerColor()
        {
            return ($this->outline) ? "text-{$this->colorClass}" : 'text-dark';
        }
        
        /**
         * @return string : the color of the closing icon
         */
        public function closeColor()
        {
            //return ($this->outline) ? "text-dark" : 'text-light';
            return 'text-dark';
        }
        
        /**
         * @return string : used to display a default text in the submit button
         */
        public function modalBtnText()
        {
            return (strlen($this->btnText) > 0) ? $this->btnText : 'OK';
        }
    }
