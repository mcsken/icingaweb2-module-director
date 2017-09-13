<?php

namespace Icinga\Module\Director;

use ipl\Translation\TranslationHelper;

class TranslationDummy
{
    use TranslationHelper;

    protected function dummyForTranslation()
    {
        $this->translate('Host');
        $this->translate('Service');
        $this->translate('Zone');
        $this->translate('Command');
        $this->translate('User');
        $this->translate('Notification');
    }
}