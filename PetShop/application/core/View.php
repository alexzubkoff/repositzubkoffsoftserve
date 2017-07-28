<?php

class View {

    public function generate($contentView, $templateView, $data = null) 
    {

        if (is_array($data)) {
            extract($data);
        }

        include 'application/views/' . $templateView;
    }

}
