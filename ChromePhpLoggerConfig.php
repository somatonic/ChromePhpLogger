<?php

class ChromePhpLoggerConfig extends ModuleConfig {

    public function getDefaults() {
        return array(
            'enableDebugging' => 1,
        );
    }

    public function __construct() {
        $defaults = $this->getDefaults();
        $this->add(array(
            array(
                'name' => 'enableDebugging',
                'label' => 'Enable Debugging',
                'type' => 'Radios',
                'options' => array(
                    1 => 'Yes',
                    0 => 'No',
                ),
                'optionColumns' => 1,
                'value' => $defaults['enableDebugging'],
            ),
        ));
    }
}
