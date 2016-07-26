<?php

namespace CVUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CVUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
