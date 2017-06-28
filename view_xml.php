<?php

namespace PMVC\PlugIn\view;

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\view_xml';

class view_xml extends ViewEngine
{
    public function init()
    {
        $this['headers']=[
            'Content-type: text/xml'
        ];
        \PMVC\dev(function(){
            $this['headers'] = null;
        }, 'noxml');
    }

    public function process()
    {
        $xml = \PMVC\plug('xml');
        $data = $this->get('data');
        echo $xml->array()->toXml($data);
    }

    /**
     * Set theme folder
     */
    public function setThemeFolder($val) { }
}
