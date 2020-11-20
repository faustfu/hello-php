<?php
// Use function:set_exception_handler to register an exception handler.
function myException($exception)
{
    echo "<b>Exception:</b> ", $exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Uncaught Exception occurred');
