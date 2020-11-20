<?php
// __NAMESPACE__: show current namespace.
// namespace: access current namespace.
namespace MyProject {
    function say()
    {
        echo 'hi', '<br/>';
    }

    echo '"', __NAMESPACE__, '"', '<br/>'; // 输出 "MyProject"
    namespace\say();
}

namespace {
    function say()
    {
        echo 'hoo', '<br/>';
    }

    echo '"', __NAMESPACE__, '"', '<br/>'; // 输出 ""
    namespace\say();
}
