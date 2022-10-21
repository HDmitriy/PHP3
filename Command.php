<?php

interface CommandInterface {
    public function execute();
    public function undo();
    public function redo();
}

class DeleteCommand implements CommandInterface {
    
    public function execute() {
        // delete Func
    }
    public function undo() {
        // diff someFunc
    }
    public function redo() {
        // another someFunc
    }
    protected function log() {
        // someFunc
    }
}

class CopyCommand implements CommandInterface {
    
    public function execute() {
        // copy Func
    }
    protected function log() {
        // someFunc
    }
}

class PasteCommand implements CommandInterface {
    
    public function execute() {
        // paste Func
    }
    public function undo() {
        // diff someFunc
    }
    public function redo() {
        // another someFunc
    }
    protected function log() {
        // someFunc
    }
}




class ApplyManager {
    public function submit(CommandInterface $command) {
        $command ->execute();
    }
}

$invoker = new ApplyManager();
$invoker->submit(new DeleteCommand());