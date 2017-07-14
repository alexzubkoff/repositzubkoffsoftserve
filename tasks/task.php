<?php

abstract class Task {

    protected $str_result = "";
    protected $is_valid = false;

    abstract protected function run();

    abstract protected function validate();

    public function resolveString() {
        $this->validate();
        if ($this->is_valid) {
            $this->run();
        }
        return $this->str_result;
    }

}
