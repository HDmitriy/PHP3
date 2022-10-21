<?php 
abstract class Subject {
    abstract public function attach(Observer $observer);
    abstract public function dettach(Observer $observer);
    abstract protected function notify();
}

class UserRegisterManager extends Subject {
    protected array $observers = [];

    public function attach(Observer $observer) {
        $this->observers[key]=$observer;
    }
    public function dettach(Observer $observer) {
        $this->observers[key]=$observer;
    }
    protected function notify(){
        foreach ($this->observers as $observer) {
            $observer->handle($this);
        }
    }
    public function register() {
        $this->notify();
        return true;
    }
}

interface Observer {
    public function handle($subject);
}

class Subscriber implements Observer {
    protected $name;
    protected $experience;
    protected $email;

    public function __construct($name, $experience, $email) {
        $this->name = $name;
        $this->experience = $experience;
        $this->email = $email;
    }
    public function handle($subject); {
        // func
    }
}

$manager = new UserRegisterManager();
$manager ->attach(new Subscriber());