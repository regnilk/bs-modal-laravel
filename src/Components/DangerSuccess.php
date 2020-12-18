<?php
    
    namespace Regnilk\BsModalLaravel\Components;
    
    use Illuminate\View\Component;
    
    class DangerSuccess extends Component
    {
        public $id;
        public $title;
        public $url;
        public $message;
        public $icon;
        public $iconModal;
        public $btnText;
        public $modalBtnText;
        public $outline;
        public $colorClassTrigger = 'danger';
        public $colorClassModal = 'success';
        public $name = 'danger-success';
        public $comment;
        public $method;
        public $csrfToken;
        public $mode;
    
        /**
         * Create a new component instance.
         *
         * @param        $type
         * @param        $title
         * @param        $url
         * @param        $message
         * @param string $btnText
         */
        public function __construct($title, $url, $message, $icon = NULL, $iconModal = NULL, $btnText = '', $modalBtnText='', $comment = FALSE, $outline = FALSE, $method='PATCH', $mode='button')
        {
            $this->id = str_random();
            $this->title = $title;
            $this->url = $url;
            $this->message = $message;
            $this->icon = $icon ?? 'ok';
            $this->iconModal = $iconModal;
            $this->btnText = $btnText;
            $this->comment = $comment;
            $this->outline = $outline ? 'outline-' : '';
            $this->method = mb_strtoupper($method);
            $this->csrfToken = null;
            $this->mode = $mode;
            $this->modalBtnText = $modalBtnText;
        }
        
        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\Contracts\View\View|string
         */
        public function render()
        {
            return view('bs-modal-laravel::bs-modal-double');
        }
    
        public function token()
        {
            $token = is_null($this->csrfToken) ? session()->token() : $this->csrfToken;
    
            return "<input type='hidden' name='_token' value='$token' />";
        }
        
        /**
         * @return string : the header background color
         */
        public function headerBgColor()
        {
            return ($this->outline) ? '' : "bg-{$this->colorClassModal}";
        }
        
        /**
         * @return string : the header text color
         */
        public function headerColor()
        {
            return ($this->outline) ? "text-{$this->colorClassModal}" : 'text-light';
        }
        
        /**
         * @return string : the color of the closing icon
         */
        public function closeColor()
        {
            return ($this->outline) ? "text-dark" : 'text-light';
        }
        
        /**
         * @return string : used to display a default text in the submit button
         */
        public function modalBtnText()
        {
            if(strlen($this->modalBtnText) > 0):
                return $this->modalBtnText;
            elseif(strlen($this->btnText) > 0):
                return $this->btnText;
            else:
                return 'OK';
            endif;
        }
    
        public function iconModal()
        {
            if (!is_null($this->iconModal) and strlen(trim($this->iconModal)) > 0):
                return $this->iconModal;
            elseif (!is_null($this->icon) and strlen(trim($this->icon)) > 0):
                return $this->icon;
            else:
                return '';
            endif;
        }
    }
