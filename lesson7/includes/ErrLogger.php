<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 09.03.15
 * Time: 15:17
 */

class ErrLogger
{
    private $fileName=null;
    private $fileDate=null;
    private $fileErrText=null;
    public function __construct($filename)
    {
         $currDate=new DateTime('now');
         $this->fileDate=$currDate->format('Y-m-d H:i');
         $this->fileName=$filename.'.txt';
    }
    public static function readLogFile($fileName)
    {
       if(!file_exists(__DIR__.'/../Logs/'.$fileName))
       {
           return null;
       }
       return file_get_contents(__DIR__.'/../Logs/'.$fileName);
    }
    public function assignError($ErrText)
    {
        $this->fileErrText=$ErrText;
    }
    public function writeLog()
    {
        $mode='a';
        if(!file_exists(__DIR__.'/../Logs/'.$this->fileName))
        {
            $mode='w';
        }
        $fileContent=$this->fileDate.':'.$this->fileErrText.'\r\n';
        $fi=fopen(__DIR__.'/../Logs/'.$this->fileName,$mode);
        fwrite($fi,$fileContent);
        fclose($fi);
    }
}