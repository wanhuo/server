<?php
namespace MyQEE\Server;

abstract class WorkerTCP extends Worker
{
    /**
     * @param \Swoole\Server $server
     * @param $fd
     * @param $fromId
     * @param $data
     */
    abstract public function onReceive($server, $fd, $fromId, $data);
}