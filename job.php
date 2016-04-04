<?php

class Job {
    public function perform() {
        echo $this->args['name'];
    }
}

?>
