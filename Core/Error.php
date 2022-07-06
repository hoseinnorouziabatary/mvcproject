<?php namespace Core;

class Error
{
    /**
     * @throws \Exception
     */
    public static function errorHandler($level, $message, $file, $line){
        if (error_reporting() != 0){
            throw new \Exception($message,0,$level,$file,$line);
        }
    }

    public static function exceptionHandler($exception){
        $code = $exception->getcode();
        if ($code != 404)
            $code = 500;

        http_response_code($code);

        if (true){
            echo "<b>Fatal error</b></br>";
            echo "<p> Uncaught Exception : ".get_class($exception)."</p>";
            echo "<p>message : {$exception->getmessage()}</p>";
            echo "<p> Stack trace :<pre> {$exception->getTraceAsString()}</pre></p>";
            echo "<p>  Thrown in {$exception->getFile()}}  on line {$exception->getLine()}</p>";
        }else{
            $log =dirname(__DIR__).'/storage/logs/'.date('Y-m-d') . '.txt';
            ini_set('error_log',$log);

            $message = "\n<b>Fatal error</b></br>\n";
            $message .= "<p> Uncaught Exception : ".get_class($exception)."</p>\n";
            $message .= "<p>message : {$exception->getmessage()}</p>\n";
            $message .= "<p> Stack trace :<pre> {$exception->getTraceAsString()}</pre></p>\n";
            $message .= "<p>  Thrown in {$exception->getFile()}}  on line {$exception->getLine()}</p>\n";

            error_log($message);

            //view

        }


    }


}