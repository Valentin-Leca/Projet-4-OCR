<?php

namespace P4\Controller;

class OtherControllers {
    public function getAboutPage() {
        require_once('View/about.php');
    }

    public function getContactPage() {
        require_once('View/contact.php');
    }
}