<?php

if (false) {
    class ego_stripwhitespaces_oxoutput_parent extends oxOutput
    {
    }
}

class ego_stripwhitespaces_oxoutput extends ego_stripwhitespaces_oxoutput_parent
{
    /**
     * output data
     *
     * @param string $sName  output name (used in json mode)
     * @param string $output output text/data
     *
     * @return null
     */
    public function output($sName, $output)
    {
        switch ($this->_sOutputFormat) {
            case self::OUTPUT_FORMAT_JSON:
                $this->_aBuffer[$sName] = $output;
                break;
            case self::OUTPUT_FORMAT_HTML:
            default:
                echo preg_replace('/(?:(?<=\>)|(?<=\/))(\s+)(?=\<\/?)/', '', $output);
                break;
        }
    }
}