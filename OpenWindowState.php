<?php
class OpenWindowState extends AbstractWindowState
{
    /**
     * @return ClosedWindowState
     */
    public function close()
    {
        return new ClosedWindowState;
    }
}