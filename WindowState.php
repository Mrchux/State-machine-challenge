<?php
interface WindowState
{
    public function open();
    public function close();
    public function lock();
    public function unlock();
}