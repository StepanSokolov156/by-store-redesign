<?php

class MsIeODSReader extends MsIeXLSXReader
{
    /** @var Box\Spout\Reader\ODS\Reader $reader */
    protected $reader;

    /**
     * @return string
     */
    public function getType()
    {
        return MsIeTools::FILE_TYPE_ODS;
    }

}