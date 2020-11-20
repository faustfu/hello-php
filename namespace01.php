<?php
// Use namespace to organize codes.
// Default/Relative namespace:
//   function/constant: 1)current namespace, 2)global namespace.
//   class: 1)current namespace
namespace MyProject {
    const CONNECT_OK = 1;
    class Connection
    {
        public static function start()
        {
            echo 'started', '<br/>';
        }
    }
    function connect()
    {
        echo 'connected', '<br/>';
    }
}

namespace SecondProject {
    const CONNECT_OK = 1;
    class Connection
    {
        public static function start()
        {
            echo 'second started', '<br/>';
        }
    }
    function connect()
    {
        echo 'second connected', '<br/>';
    }
}

namespace ThirdProject\Sub {
    const CONNECT_OK = 1;
    class Connection
    {
        public static function start()
        {
            echo 'third sub started', '<br/>';
        }
    }
    function connect()
    {
        echo 'third sub connected', '<br/>';
    }
}

namespace { // 全局代码
    $a = MyProject\connect();
    echo MyProject\Connection::start();
    $b = SecondProject\connect();
    echo SecondProject\Connection::start();
    $cs = ThirdProject\Sub\connect();
    echo ThirdProject\Sub\Connection::start();
}
